<?php
$lang['error_search'] = 'Ошибка при поиске';
$lang['prompt_disable_caching'] = 'Отключить кеширование запросов от сервера';
$lang['info_disable_caching'] = '<strong>Не рекомендуется</strong>.  С целью повышения производительности, Менеджер модулей будет кешировать в течение (по умолчанию одного часа) значительную долю информации, полученной от удалённого сервера';
$lang['operation_results'] = 'Результаты операции';
$lang['error_noresults'] = 'Операции, добавленные в очередь, должны были дать хоть какой-то результат, однако, результата нет. Пожалуйста, постарайтесь воспроизвести данную ситуацию и предоставить службе поддержки сведения, необходимые для диагностирования.';
$lang['versionsformodule'] = 'Доступные версии модуля %s';
$lang['yourversion'] = 'Ваша версия';
$lang['latestdepends'] = 'Всегда устанавливать самые новые модули';
$lang['info_latestdepends'] = 'При установке модуля с зависимостями данная опция гарантирует, что будет установлена последняя версия зависимости';
$lang['error_internal'] = 'Внутренняя ошибка... Пожалуйста, сообщите о ней своему системному администратору';
$lang['error_downloadxml'] = 'Проблема при загрузке XML файла: %s';
$lang['error_request_problem'] = 'Проблема при соединении с сервером модулей';
$lang['error_searchterm'] = 'Пожалуйста, укажите слова для поиска';
$lang['search_noresults'] = 'Не найдено ни одного модуля, соотвествующего поисковому запросу.';
$lang['advancedsearch_help'] = 'Укажите слова, которые Вы хотите включить или исключить из поиска с помощью + или -. Точные совпадения фразы берите в кавычки, например "красное яблоко"';
$lang['search_results'] = 'Результаты поиска';
$lang['prompt_advancedsearch'] = 'Расширенный поиск';
$lang['search_input'] = 'Параметры поиска';
$lang['searchterm'] = 'Поиск по слову';
$lang['search'] = 'Поиск';
$lang['available_updates'] = 'Доступны обновления для модулей';
$lang['all_modules_up_to_date'] = 'В этой репозитории нет новых модулей';
$lang['error_module_object'] = 'Ошибка: не удалось создать инстанцию модуля %s';
$lang['error_nomatchingmodules'] = 'Ошибка: не удалось найти соотвествующего модуля в репозитории';
$lang['error_nomodules'] = 'Ошибка: не удалось получить список установленных модулей';
$lang['upgrade_available'] = 'Доступна новая версия (%s), установленая версия (%s)';
$lang['newversions'] = 'Установленные модули';
$lang['notice_depends'] = 'Модуль %s требует следущих действий. Нажмите на  "Установить", чтобы продолжить.';
$lang['install_submit'] = 'Установить';
$lang['depend_upgrade'] = 'Требуется обновление модуля %s до версии %s.';
$lang['depend_install'] = 'Модуль %s (версия %s или новее) должен быть установлен.';
$lang['depend_activate'] = 'Требуется активация модуля %s.';
$lang['action_activated'] = 'Модуль %s активирован.';
$lang['action_installed'] = 'Модуль %s был установлен со следующими замечаниями: %s';
$lang['action_upgraded'] = 'Модуль %s обновлен';
$lang['title_installation_complete'] = 'Установка завершена!';
$lang['install_with_deps'] = 'Проверит все зависимости и установить';
$lang['msg_nodependencies'] = 'В этом файле не перечислены какие-либо зависимости';
$lang['error_upgrade'] = 'Не удалось обновить модуль %s!';
$lang['error_skipping'] = 'Пропуск установки / обновления %s из-за ошибок в зависимых модулях. Смотрите сообщение выше и повторите попытку.';
$lang['dependstxt'] = 'Зависимые модули';
$lang['use_at_your_own_risk'] = 'Используйте на свой страх и риск';
$lang['compatibility_disclaimer'] = 'Отображаемые здесь модули сделаны как разработчиками CMS, так и независимыми пользователями системы.  Мы не даем никаких гарантий, что доступные здесь модули являются функциональными, протестированы или совместимы с Вашей системой. Для установки модулей Вам рекомендуется прочитать справку и информацию доступную по ссылке, напротив каждого модуля.';
$lang['notice'] = 'Уведомление';
$lang['general_notice'] = 'Версии, представленных здесь модулей, соответствуют последним версиям XML файлов, выложенным на выбранном Вами сервере (по умолчанию CMS %s).  Они могут не являться последними анонсированными версиями.  Возможно Вы захотите посмотреть все версии файлов, выложенные на сервере.  Если Вы используете сервер по умолчанию, то можете сделать это задав название модуля в поисковой форме на  %s и нажав на кнопку "Files".';
$lang['incompatible'] = 'Несовместимость';
$lang['prompt_settings'] = 'Настройки';
$lang['prompt_otheroptions'] = 'Другие опции';
$lang['reset'] = 'Сбросить';
$lang['error_permissions'] = '<strong><em>ВНИМАНИЕ:</em></strong>Недостаточно прав для установки модулей в каталог. Вы можете также испытывать проблемы с режимом PHP Safe. Пожалуйста проверьте что безопасный режим выключен, и что права файловой системы являются достаточными.';
$lang['error_minimumrepository'] = 'Версия репозитория не совместима с этим менеджером модулей';
$lang['prompt_reseturl'] = 'Сбросить URL в значение по умолчанию';
$lang['prompt_resetcache'] = 'Сбросить локальный кеш данных репозитория';
$lang['prompt_dl_chunksize'] = 'Размер скачиваемых пакетов (Kb)';
$lang['text_dl_chunksize'] = 'Максимальное количество данных, загружаемых с сервера одним пакетом (при установке модуля)';
$lang['error_nofilesize'] = 'Не задан размер файла';
$lang['error_nofilename'] = 'Не задано имя файла';
$lang['error_unsatisfiable_dependency'] = 'Не удается найти необходимый модуль "%s" (версия %s или более поздняя) в хранилище. Он требуется для %s; это может указывать на проблемы этой версии модуля в хранилище. Свяжитесь с разработчиком модуля.';
$lang['error_checksum'] = 'Ошибка при вычислении контрольной суммы. Это скорее всего значит, что файл побился либо когда он был загружен в репозиторий, либо при закачке на ваш сервер.';
$lang['cantdownload'] = 'Невозможно загрузить';
$lang['download'] = 'Загрузить и установить';
$lang['error_moduleinstallfailed'] = 'Установка модуля не произведена';
$lang['error_connectnomodules'] = 'Несмотря на то, что подключение к репозиторию модулей было успешным, похоже в нем ещё нет никаких модулей';
$lang['submit'] = 'Отправить';
$lang['text_repository_url'] = 'URL вида http://www.mycmssite.com/path/soap.php?module=ModuleRepository';
$lang['prompt_repository_url'] = 'URL репозитория модулей:';
$lang['title_installation'] = 'Установка';
$lang['availmodules'] = 'Доступные модули';
$lang['preferences'] = 'Настройки';
$lang['preferencessaved'] = 'Настройки сохранены';
$lang['repositorycount'] = 'Модули, найденные в репозитарии';
$lang['instcount'] = 'Модули, установленные на данный момент';
$lang['availablemodules'] = 'Текущий статус модулей на данный момент доступных из репозитария';
$lang['time_warning'] = 'Список установки содержит два или более модулей. Приготовьтесь к тому, что установка может занять несколько минут. Терпение!';
$lang['helptxt'] = 'Справка';
$lang['abouttxt'] = 'О модуле';
$lang['xmltext'] = 'XML файл';
$lang['nametext'] = 'Название модуля';
$lang['mod_name_ver'] = '%s версия %s';
$lang['unknown'] = 'Неизвестно';
$lang['vertext'] = 'Версия';
$lang['sizetext'] = 'Размер (килобайт)';
$lang['statustext'] = 'Статус/Действие';
$lang['uptodate'] = 'Установлен';
$lang['install'] = 'установить';
$lang['newerversion'] = 'Более новая версия установлена';
$lang['onlynewesttext'] = 'Показывать только новейшие версии';
$lang['upgrade'] = 'Обновить';
$lang['error_norepositoryurl'] = 'URL репозитория модулей не задан';
$lang['friendlyname'] = 'Менеджер модулей';
$lang['postinstall'] = 'Сообщение после установки, (например, о необходимости установки правильных разрешений)';
$lang['postuninstall'] = 'Менеджер модулей удалён. Теперь установка модулей с удалённых серверов более невозможна, однако локальная установка продолжит функционировать.';
$lang['really_uninstall'] = 'Вы уверены, что хотите удалить этот модуль?';
$lang['uninstalled'] = 'Модуль удалён.';
$lang['installed'] = 'Модуль версии %s установлен.';
$lang['upgraded'] = 'Модуль обновлён до версии %s.';
$lang['moddescription'] = 'Этот модуль, являясь клиентом для ModuleRepository, позволяет предварительно просматривать и устанавливать модули с удаленных серверов, избавляя вас от необходимости вручную закачивать файлы на сервер. XML файлы модулей закачиваются при помощи SOAP, проверяются на правильность и после этого устанавливаются автоматически.';
$lang['back_to_module_manager'] = '« Возврат к менеджеру модулей';
$lang['error'] = 'Ошибка!';
$lang['admindescription'] = 'Инструмент для загрузки и установки модулей с удалённых серверов.';
$lang['accessdenied'] = 'Отказано в доступе. Пожалуйста, проверьте свои права.';
$lang['changelog'] = '<ul>
<li>Version 1.0. 10 January 2006. Initial Release.</li>
<li>Version 1.1. July, 2006. Released with the 1.0- beta</li>
<li>Version 1.1.1 August, 2006.  Require 1.0.1 of nuSOAP</li>
<li>Version 1.1.2 September, 2006.  Fixed a mistake that resulted in upgrade not not working at all</li>
<li>Version 1.1.3 September, 2006.
  <ul>
  <li>Bumped minimum CMS Version to 1.0</li>
  <li>Now use 1 request to get the complete list of modules from the repository</li>
  <li>Added some missing lang strings</li>
  <li>Added the ability to reset the local cache of repository information</li>
  <li>Added the ability to restore the repository url to factory defaults</li>
  </ul>
</li>
<li>Version 1.1.4 February, 2007.  Now handles the safe mode check, and disables upgrading or installing modules if the permissions are wrong.</li>
<li>Version 1.1.5 September, 2007. New preference to make only latest module version show. Added nice message after saving preferences</li>
</li>
<li>Version 1.1.6 May, 2008. Now show if available modules are incompatible with the current CMS_VERSION.</li>
</li>
<li>Version 1.2 June, 2008.<br/>
This version should reduce the memory requirements of this module, and trade it off for performance on the server, and mroe requests to the server.
   <ul>
    <li>Bumped Minimum CMS Version to 1.3</li>
    <li>Bumped Minimum repository version to 1.1</li>
    <li>Get rid of all of the session stuff</li>
    <li>Add support for requesting modules beginning with a prefix (usually a single letter)</li>
    <li>Add support for requestion only the newest versions of the modules</li>
   </ul>
</li>
<li>Version 1.2.1 August, 2008.<br/>
Added a warning message to the top of the admin display.
</li>
</ul>';
$lang['help'] = '<h3>What Does This Do?</h3>
<p>A client for the ModuleRepository, this module allows previewing, and installing modules from remote sites without the need for ftping, or unzipping archives.  Module XML files are downloaded using SOAP, integrity verified, and then expanded automatically.</p>
<h3>How Do I Use It</h3>
<p>In order to use this module, you will need the \'Modify Modules\' permission, and you will also need the complete, and full URL to a \'Module Repository\' installation.  You can specify this url in the \'Site Admin\' --> \'Global Settings\' page.</p><br/>
<p>You can find the interface for this module under the \'Extensions\' menu.  When you select this module, the \'Module Repository\' installation will automatically be queried for a list of it\'s available xml modules.  This list will be cross referenced with the list of currently installed modules, and a summary page displayed.  From here, you can view the descriptive information, the help, and the about information for a module without physically installing it.  You can also choose to upgrade or install modules.</p>
<h3>Support</h3>
<p>As per the GPL, this software is provided as-is. Please read the text of the license for the full disclaimer.</p>
<h3>Copyright and License</h3>
<p>Copyright © 2006, calguy1000 <a href="mailto:calguy1000@hotmail.com"><calguy1000@hotmail.com></a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. You must agree to this license before using the module.</p>';
$lang['qca'] = 'P0-1681225218-1317202089531';
$lang['utma'] = '156861353.1286857246.1330415088.1330415088.1330415088.1';
$lang['utmz'] = '156861353.1330415088.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['utmb'] = '156861353';
$lang['utmc'] = '156861353';
?>