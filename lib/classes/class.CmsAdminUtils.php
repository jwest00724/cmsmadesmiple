<?php
#CMS - CMS Made Simple
#(c)2004-2011 by Ted Kulp (ted@cmsmadesimple.org)
#This project's homepage is: http://cmsmadesimple.org
#
#This program is free software; you can redistribute it and/or modify
#it under the terms of the GNU General Public License as published by
#the Free Software Foundation; either version 2 of the License, or
#(at your option) any later version.
#
#This program is distributed in the hope that it will be useful,
#BUT withOUT ANY WARRANTY; without even the implied warranty of
#MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#GNU General Public License for more details.
#You should have received a copy of the GNU General Public License
#along with this program; if not, write to the Free Software
#Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
#
#$Id: class.admintheme.inc.php 7596 2011-12-24 22:50:52Z calguy1000 $

/**
 * @package CMS
 */

/**
 * A set of static utilities for assisting with admin requests
 *
 * @package CMS
 * @version $Revision$
 * @license GPL
 * @since   1.12
 * @author  Robert Campbell
 */
final class CmsAdminUtils
{
    private function __construct() {}

    /**
     * Convert an admin request URL to a generic form that is suitable for saving to a database.
     * This is useful for things like bookmarks and homepages.
     *
     * @param string $in_url The input URL that has the session key in it.
     * @return string A URL that is converted to a generic form.
     */
    public static function get_generic_url($in_url)
    {
        if( !defined('CMS_USER_KEY') ) throw new \LogicException('This method can only be called for admin requests');
        IF( !isset($_SESSION[CMS_USER_KEY]) || !$_SESSION[CMS_USER_KEY] ) throw new \LogicException('This method can only be called for admin requests');

        $len = strlen($_SESSION[CMS_USER_KEY]);
        $in_p = '+'.CMS_SECURE_PARAM_NAME.'\=[A-Za-z0-9]{'.$len.'}+';
        $out_p = '_CMSKEY_='.str_repeat('X',$len);
        $out = preg_replace($in_p,$out_p,$in_url);
        return $out;
    }

    /**
     * Convert a generic URL into something that is suitable for this users session.
     *
     * @param string $in_url The generic url.  usually retrieved from a preference or from the database
     * @return string A URL that has a session key in it.
     */
    public static function get_session_url($in_url)
    {
        if( !defined('CMS_USER_KEY') ) throw new \LogicException('This method can only be called for admin requests');
        IF( !isset($_SESSION[CMS_USER_KEY]) || !$_SESSION[CMS_USER_KEY] ) throw new \LogicException('This method can only be called for admin requests');

        $len = strlen($_SESSION[CMS_USER_KEY]);
        $in_p = '+_CMSKEY_=[X]{'.$len.'}+';
        $out_p = CMS_SECURE_PARAM_NAME.'='.$_SESSION[CMS_USER_KEY];
        return preg_replace($in_p,$out_p,$in_url);
    }
}
?>