<?php
#CMS - CMS Made Simple
#(c)2004 by Ted Kulp (wishy@users.sf.net)
#This project's homepage is: http://www.cmsmadesimple.org
#
#This program is free software; you can redistribute it and/or modify
#it under the terms of the GNU General Public License as published by
#the Free Software Foundation; either version 2 of the License, or
#(at your option) any later version.
#
#This program is distributed in the hope that it will be useful,
#but WITHOUT ANY WARRANTY; without even the implied warranty of
#MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#GNU General Public License for more details.
#You should have received a copy of the GNU General Public License
#along with this program; if not, write to the Free Software
#Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

function search_StemPhrase(&$module,$phrase)
{
  // strip out html and php stuff
  $phrase = strip_tags($phrase);

  // strip out smarty tags
  $phrase = preg_replace('/{.*}/', '', $phrase);

  // add spaces between tags
  $phrase = str_replace("<"," <",$phrase);
  $phrase = str_replace(">","> ",$phrase);

  // escape meta characters
  $phrase = preg_quote($phrase);

  // strtolower isn't friendly to other charsets
  $phrase = preg_replace_callback("/([A-Z]+)/",
				  function($matches) {
				    return strtolower($matches[1]);
				  },
				  $phrase);

  // split into words
  //$words = preg_split('/[\s,!.()+-\/\\\\]+/', $phrase);
  $words = preg_split('/[\s,!.;:\?()+-\/\\\\]+/', $phrase);

  // strip off anything 3 chars or less
  if( !function_exists('__search_stemphrase_filter') ) {
    function __search_stemphrase_filter($a) {
      return (strlen($a) >= 3);
    }
  }
  $words = array_filter($words, '__search_stemphrase_filter');

  // ignore stop words
  $words = $module->RemoveStopWordsFromArray($words);

  // stem words
  $stemmed_words = array();
  $stemmer = null;
  if( $module->GetPreference('usestemming', 'false') != 'false' ) $stemmer = new PorterStemmer();

  foreach ($words as $word) {
    $word = trim($word);
    $word = trim($word, ' \'"');
    $word = trim($word);
    if (strlen($word) < 3) continue;

    //trim words get rid of wrapping quotes
    if (is_object($stemmer)) {
      $stemmed_words[] = $stemmer->stem($word, true);
    }
    else {
      $stemmed_words[] = $word;
    }
  }
  return $stemmed_words;
}


function search_AddWords(&$obj, $module = 'Search', $id = -1, $attr = '', $content = '', $expires = NULL)
{
  $obj->DeleteWords($module, $id, $attr);
  $db = $obj->GetDb();

  $non_indexable = strpos($content, NON_INDEXABLE_CONTENT);
  if( $non_indexable !== FALSE ) return;

  @$obj->SendEvent('SearchItemAdded', array($module, $id, $attr, &$content, $expires));

  if ($content != "")
    {
      //Clean up the content
      $stemmed_words = $obj->StemPhrase($content);
      $words = array_count_values($stemmed_words);

      $q = "SELECT id FROM ".cms_db_prefix().'module_search_items WHERE module_name=?';
      $parms = array($module);

      if( $id != -1 )
	{
	  $q .= " AND content_id=?";
	  $parms[] = $id;
	}
      if( $attr != '' )
	{
	  $q .= " AND extra_attr=?";
	  $parms[] = $attr;
	}
      $dbresult = $db->Execute($q, $parms);

      if ($dbresult && $dbresult->RecordCount() > 0 && $row = $dbresult->FetchRow())
	{
	  $itemid = $row['id'];
	}
      else
	{
	  $itemid = $db->GenID(cms_db_prefix()."module_search_items_seq");
	  $db->Execute('INSERT INTO '.cms_db_prefix().'module_search_items (id, module_name, content_id, extra_attr, expires) VALUES (?,?,?,?,?)', array($itemid, $module, $id, $attr, ($expires != NULL ? trim($db->DBTimeStamp($expires), "'") : NULL) ));
	}

      foreach ($words as $word=>$count)
	{
	  $db->Execute('INSERT INTO '.cms_db_prefix().'module_search_index (item_id, word, count) VALUES (?,?,?)', array($itemid, $word, $count));
	}
    }
}

function search_DeleteWords(&$obj, $module = 'Search', $id = -1, $attr = '')
{
  $db = $obj->GetDb();
  $parms = array( $module );
  $q = "DELETE FROM ".cms_db_prefix().'module_search_items WHERE module_name=?';
  if( $id != -1 )
    {
      $q .= " AND content_id=?";
      $parms[] = $id;
    }
  if( $attr != '' )
    {
      $q .= " AND extra_attr=?";
      $parms[] = $attr;
    }
  $db->Execute($q, $parms);
  $db->Execute('DELETE FROM '.cms_db_prefix().'module_search_index WHERE item_id NOT IN (SELECT id FROM '.cms_db_prefix().'module_search_items)');
  @$obj->SendEvent('SearchItemDeleted', array($module, $id, $attr));
}


function search_Reindex(&$module)
{
  audit('',$module->GetName(),'Reindex Operation Started');
  @set_time_limit(999);
  $module->DeleteAllWords();

  // this could run out of memory...
  cmsms()->GetContentOperations()->LoadAllContent(TRUE,FALSE,TRUE);
  $full_list = cmsms()->GetHierarchyManager()->getFlatList();

  foreach( $full_list as $node ) {
    $cid = $node->get_tag('id');
    $content = cmsms()->GetContentOperations()->LoadContentFromId($cid);
    if( !is_object($content) ) continue;

    $parms = array('content'=>$content);
    search_DoEvent($module,'Core','ContentEditPost',$parms,TRUE);
  }

  // this could run out of memory very quickly.
  $modules = ModuleOperations::get_instance()->GetInstalledModules();
  foreach( $modules as $name ) {
    if( !$name || $name == 'Search' ) continue;
    $object = ModuleOperations::get_instance()->get_module_instance($name);
    if( !is_object($object) ) continue;

    if (method_exists($object, 'SearchReindex')) $object->SearchReindex($module);
  }
  audit('',$module->GetName(),'Reindex Operation Completed');
}


function search_DoEvent(&$module, $originator, $eventname, &$params, $in_reindex = FALSE )
{
  if ($originator != 'Core') return;

  switch ($eventname) {
  case 'ContentEditPost':
    $content = $params['content'];
    if (!isset($content)) return;
    if (!is_object($content)) return;

    $searchable = $content->Active();
    $searchable = $searchable && $content->IsViewable();
    $searchable = $searchable && $content->HasUsableLink();
    $searchable = $searchable && !$content->IsSystemPage();
    $tmp = $content->GetPropertyValue('searchable');
    if( $tmp == '' ) $tmp = 1;
    $searchable = $searchable && $tmp;

    if( $searchable ) {
      //Weight the title and menu text higher
      $text = str_repeat(' '.$content->Name(), 2) . ' ';
      $text .= str_repeat(' '.$content->MenuText(), 2) . ' ';

      $props = $content->Properties();
      foreach( $props as $k => $v ) {
	$pos = strpos($text, NON_INDEXABLE_CONTENT);
	if( $pos === FALSE ) $text .= $v.' ';
      }

      $module->AddWords($module->GetName(), $content->Id(), 'content', $text);
    }
    else if( !$in_reindex ) {
      $module->DeleteWords($module->GetName(), $content->Id(), 'content');
    }
    break;

  case 'ContentDeletePost':
    $content = $params['content'];
    if (!isset($content)) return;
    $module->DeleteWords($module->GetName(), $content->Id(), 'content');
    break;

  case 'ModuleUninstalled':
    $module_name = $params['name'];
    $module->DeleteWords($module_name);
    break;
  }
}


#
#
?>
