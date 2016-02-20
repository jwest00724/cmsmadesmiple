<?php
$lang['error_timedifference'] = 'O filesystem aonde CMSMS est&aacute; instalado tem um tempo significativamente diferente do tempo real do servidor';
$lang['test_timedifference'] = 'A testar se o tempo do filesystem &eacute; diferente do tempo do servidor';
$lang['detected'] = 'Detectado';
$lang['docroot_leaveblank'] = 'Deixar em branco para usar a predefini&ccedil;&atilde;o do sistema';
$lang['test_xmlreader_class'] = 'A verificar se a classe XMLReader existe';
$lang['test_xmlreader_failed'] = 'A classe XmlReader n&atilde;o est&aacute; habilitada na sua instala&ccedil;&atilde;o de php. Pode continuar a usar o sistema, mas n&atilde;o lhe ser&aacute; poss&iacute;vel usar nenhuma das fun&ccedil;&otilde;es de instala&ccedil;&atilde;o remota de m&oacute;dulos.';
$lang['test_check_xml_failed'] = 'O suporte para XML n&atilde;o est&aacute; compilado na sua instala&ccedil;&atilde;o de php. Pode continuar a usar o sistema, mas n&atilde;o lhe ser&aacute; poss&iacute;vel usar nenhuma das fun&ccedil;&otilde;es de instala&ccedil;&atilde;o remota de m&oacute;dulos.';
$lang['installed_module'] = 'M&oacute;dulo Instalado';
$lang['automatedtask_success'] = 'Tarefa Autom&aacute;tica Bem Sucedida';
$lang['ip_addr'] = 'Endere&ccedil;o IP';
$lang['install_admin_pwsalt_note'] = 'Se optar por activar Salgar Senhas, n&atilde;o h&aacute; absolutamente nenhuma maneira de reinicializar senhas de administra&ccedil;&atilde;o perdidas, a n&atilde;o ser atrav&eacute;s da funcionalidade de senha perdida. &Eacute; cr&iacute;tico associar um endere&ccedil;o de e-mail a cada conta de administrador';
$lang['admin_salt'] = 'Salgar Senhas de Admin';
$lang['setup_flat_urls'] = 'Flat URLs configuradas';
$lang['install_timezone2'] = 'Seleccione o fuso hor&aacute;rio para a sua instala&ccedil;&atilde;o. Este valor de fuso hor&aacute;rio ser&aacute; usado para para c&aacute;lculos de data e hora. <br/> O CMSMS tentou escolher uma predefini&ccedil;&atilde;o inteligente, baseado na localiza&ccedil;&atilde;o actual dos seus servidores, no entanto esta pode estar incorrecta. <br/> <strong style=&quot;color: red;&quot;> Nota: </ strong> Esta &eacute; uma mudan&ccedil;a no comportamento em rela&ccedil;&atilde;o a vers&otilde;es anteriores do CMSMS. Adicionalmente, pode ser necess&aacute;rio habilitar o valor do config set_db_timezone no caso de o servidor se encontrar num fuso hor&aacute;rio diferente do usado pela sua base de utilizadores prim&aacute;rios.';
$lang['timezone'] = 'Fuso Hor&aacute;rio (Timezone)';
$lang['none'] = 'Nenhum';
$lang['test_error_estrict'] = 'A testar o error_reporting para garantir que E_STRICT est&aacute; desactivado';
$lang['test_estrict_failed'] = 'E_STRICT est&aacute; habilitado';
$lang['info_estrict_failed'] = 'Algumas livrarias que o CMSMS usa n&atilde;o funcionam bem com E_STRICT activo. Por favor, desactive-o antes de continuar';
$lang['test_error_edeprecated'] = 'A testar o error_reporting para garantir que E_DEPRECATED est&aacute; desactivado';
$lang['test_edeprecated_failed'] = 'E_DEPRECATED est&aacute; habilitado';
$lang['info_edeprecated_failed'] = 'Se E_DEPRECATED estiver activo nos relat&oacute;rios de erro, os seus visitantes ir&atilde;o ver uma quantidade de mensagens de aviso que podem afectar a visualiza&ccedil;&atilde;o e funcionalidade';
$lang['invalidemail'] = 'O endere&ccedil;o de e-mail digitado n&atilde;o &eacute; v&aacute;lido';
$lang['empty_query'] = 'Inqu&eacute;rito vazio?? %s';
$lang['no_db_driver'] = 'N&atilde;o foram encontrados drivers de base de dados compat&iacute;veis';
$lang['test_check_output_buffering'] = 'A verificar o buffering de sa&iacute;da';
$lang['test_check_output_buffering_failed'] = 'O buffering de sa&iacute;da est&aacute; desactivado. Provavelmente n&atilde;o ser&aacute; capaz de usar qualquer funcionalidade que possa requerer isto';
$lang['phpinfo'] = 'Mostrar Informa&ccedil;&otilde;es PHP';
$lang['mod_security'] = 'Mod Security do Apache';
$lang['test_check_tempnam'] = 'A verificar a Fun&ccedil;&atilde;o tempnam';
$lang['test_check_db_drivers'] = 'Drivers DB';
$lang['test_check_db_drivers_failed'] = 'N&atilde;o foram encontrados drivers DB';
$lang['test_check_register_globals'] = 'A verificar PHP register globals';
$lang['test_check_register_globals_failed'] = 'PHP register globals est&aacute; activado. Por raz&otilde;es de seguran&ccedil;a, deve ser desactivado.';
$lang['test_check_disable_functions'] = 'A verificar PHP disable functions';
$lang['test_check_disable_functions_failed'] = 'Aviso: esta &eacute; uma lista de fun&ccedil;&otilde;es desactivadas no seu servidor.';
$lang['install_admin_db_port'] = 'Port da Base de Dados';
$lang['install_admin_db_port_info'] = 'Se n&atilde;o souber, deixe em branco para utilizar as predefini&ccedil;&otilde;es.';
$lang['install_admin_db_socket'] = 'Socket da Base de Dados';
$lang['install_admin_db_socket_info'] = 'N&Atilde;O SUPORTADO.';
$lang['install_admin_frontendlang'] = 'Linguagem predefinida para o frontend. Ajusta a defini&ccedil;&atilde;o locale por defeito usada para v&aacute;rias fun&ccedil;&otilde;es de manipula&ccedil;&atilde;o de datas, etc';
$lang['install_default_encoding'] = 'Em quase todos os casos, default_encoding dever&aacute; ser UTF-8.';
$lang['installer_done'] = '[conclu&iacute;do]';
$lang['installer_failed'] = '[falhado]';
$lang['create_permission'] = 'Criar permiss&otilde;es ...';
$lang['add_column_sql'] = 'A adicionar coluna &agrave; tabela %s ...';
$lang['update_table_sql'] = 'A actualizar tabela %s ...';
$lang['installing_module'] = 'A instalar o m&oacute;dulo %s ...';
$lang['updating_schema_version'] = 'A actualizar schema version %s ...';
$lang['upgrade_config'] = 'A actualizar config.php';
$lang['upgrade_config_info'] = 'actualiza&ccedil;&atilde;o config';
$lang['upgrade_failed_again'] = 'Uma ou mais actualiza&ccedil;&otilde;es falharam. Por favor, corrija o problema e clique no bot&atilde;o abaixo para voltar a verificar.';
$lang['upgrade_cache_dirs'] = 'A limpar os direct&oacute;rios de cache';
$lang['cannot_clean_cache_dirs'] = 'N&atilde;o foi poss&iacute;vel limpar os direct&oacute;rios de cache!';
$lang['upgrade_schema'] = 'Actualize schema';
$lang['need_upgrade_schema'] = 'O CMSMS necessita de um upgrade.<br /> Est&aacute; a usar o schema version %s e necessita uma actualiza&ccedil;&atilde;o para a vers&atilde;o %s';
$lang['schema_ok'] = 'A base de dados do CMSMS est&aacute; actualizada e a usar o schema version %s';
$lang['noneed_upgrade_schema'] = 'A base de dados do CMSMS est&aacute; actualizada e a usar o schema version %s';
$lang['upgrade_modules'] = 'Actualize os m&oacute;dulos';
$lang['noneed_upgrade_modules'] = 'Os m&oacute;dulos do Core est&atilde;o actualizados';
$lang['upgrade_sql_module_from_to'] = 'A actualizar o SQL do m&oacute;dulo &quot;%s&quot; de %s para %s ...';
$lang['upgrade_event_module_from_to'] = 'A actualizar os Eventos do m&oacute;dulo &quot;%s&quot; de %s para %s ...';
$lang['sitedown_not_removed'] = 'N&atilde;o foi poss&iacute;vel remover o ficheiro tmp/cache/SITEDOWN. Por favor, remova-o manualmente ou vai continuar a mostrar uma mensagem de &quot;Site Down for Maintainence&quot; no seu site';
$lang['upgrade_ok'] = 'Por favor, reveja o config.php, modifique quaisquer novas configura&ccedil;&otilde;es conforme necess&aacute;rio e, mude as permiss&otilde;es de volta a um estado de bloqueado. Dever&aacute;  tamb&eacute;m verificar se todos os m&oacute;dulos est&atilde;o actualizados, na p&aacute;gina Extens&otilde;es -> Gestor de M&oacute;dulos, na Tab &quot;Actualiza&ccedil;&otilde;es Dispon&iacute;veis&quot;';
$lang['upgrade_complete'] = 'Processo de actualiza&ccedil;&atilde;o conclu&iacute;do';
$lang['upgrade_end'] = 'O CMSMS est&aacute; actualizado. Porfavor clique %s para ir para o seu site CMSMS ou %s.';
$lang['here'] = 'aqui';
$lang['go_to_admin'] = 'Ir para o Painel de Administra&ccedil;&atilde;o';
$lang['errorfilenot'] = 'Ficheiro n&atilde;o encontrado!';
$lang['errorfilenotwritable'] = 'Ficheiro n&atilde;o pode ser escrito!';
$lang['nofiles'] = 'Este recurso n&atilde;o existe!';
$lang['is_directory'] = 'Este recurso &eacute; um direct&oacute;rio!';
$lang['is_readable_false'] = 'Este recurso n&atilde;o pode ser escrito!';
$lang['checksum_match'] = 'A soma de verifica&ccedil;&atilde;o confere!';
$lang['checksum_not_match'] = 'A soma de verifica&ccedil;&atilde;o n&atilde;o confere!';
$lang['not_checksum'] = 'N&atilde;o foi poss&iacute;vel obter a soma de verifica&ccedil;&atilde;o!';
$lang['format_datetime'] = '%c';
$lang['upload_err_ini_size'] = 'O ficheiro carregado excede a directiva upload_max_filesize do php.ini!';
$lang['upload_err_form_size'] = 'O ficheiro carregado excede a directiva MAX_FILE_SIZE especificada no formul&aacute;rio HTML.';
$lang['upload_err_partial'] = 'O ficheiro carregado, s&oacute; foi carregado parcialmente.';
$lang['upload_err_no_file'] = 'N&atilde;o foi carregado nenhum ficheiro.';
$lang['upload_err_no_tmp_dir'] = 'Falta um direct&oacute;rio tempor&aacute;rio.';
$lang['upload_err_cant_write'] = 'Falha ao escrever o ficheiro no disco.';
$lang['upload_err_extension'] = 'Carga de ficheiro interrompida por extens&atilde;o.';
$lang['upload_err_empty'] = 'O tamanho do ficheiro &eacute; zero';
$lang['upload_err_unknown'] = 'Problema desconhecido ao carregar ficheiro.';
$lang['function_file_uploads_off'] = 'file_uploads est&aacute; desabilitado na sua configura&ccedil;&atilde;o PHP!';
$lang['upload_file_no_readable'] = 'O ficheiro carregado n&atilde;o &eacute; leg&iacute;vel!';
$lang['upload_file_multiple'] = 'A carga m&uacute;ltipla de ficheiros n&atilde;o &eacute; permitida!';
$lang['test_check_magic_quotes_gpc'] = 'Magic quotes para opera&ccedil;&otilde;es Get/Post/Cookie';
$lang['test_check_magic_quotes_gpc_failed'] = 'Quando a directiva magic_quotes est&aacute; em efeito, todas as aspas, aspas duplas e barra invertida s&atilde;o escapados automaticamente com uma barra invertida, o que pode causar muitos problemas ao CMSMS.';
$lang['test_check_magic_quotes_runtime'] = 'Magic quotes no runtime';
$lang['test_check_magic_quotes_runtime_failed'] = 'Quando a directiva magic_quotes est&aacute; em efeito, a maioria das fun&ccedil;&otilde;es que retornarem dados de qualquer tipo de fonte externa, incluindo bases de dados e ficheiros de texto ter&atilde;o as aspas escapadas com uma barra invertida. Isso causar&aacute; problemas com CMS feito simples, o que pode causar problemas ao CMSMS.';
$lang['install_admin_checksum'] = 'Verifique a instala&ccedil;&atilde;o';
$lang['upgrade_admin_checksum'] = 'Verifique a actualisa&ccedil;&atilde;o do sistema';
$lang['checksum'] = 'Teste de soma de verifica&ccedil;&atilde;o';
$lang['checksum_file'] = 'Ficheiro de soma de verifica&ccedil;&atilde;o';
$lang['install_test_checksum'] = 'Pode validar a integridade dos ficheiros da sua instala&ccedil;&atilde;o do CMSMS ao comparar contra o ficheiro de soma de verifica&ccedil;&atilde;o feito a partir dos originais. Esta ac&ccedil;&atilde;o pode ajudar a despistar problemas que possam ter sido criados durante a c&oacute;pia de ficheiros para o servidor.';
$lang['checksum_passed'] = 'Todas as somas de verifica&ccedil;&atilde;o conferem!';
$lang['checksum_failed'] = 'Teste de soma de verifica&ccedil;&atilde;o tem erros. Verifique a Ajuda para mais informa&ccedil;&otilde;es';
$lang['test_check_open_basedir'] = 'Verificar PHP Open Basedir';
$lang['test_check_open_basedir_failed'] = 'As restri&ccedil;&otilde;es Open basedir est&atilde;o em vigor. Com esta restri&ccedil;&atilde;o pode ter dificuldades com algumas funcionalidades addon.';
$lang['unlimited'] = 'Ilimitado';
$lang['test_open_basedir_session_save_path'] = 'Restri&ccedil;&otilde;es de Open basedir est&atilde;o, aparentemente, em vigor. Se tem problemas de Sess&atilde;o (SESSION) e a configura&ccedil;&atilde;o ini_set funciona, pode tentar habilitar as sess&otilde;es com cookies adicionando: ini_set(&#039;session.use_only_cookies&#039;, 1); no topo do seu config.php.';
$lang['install_warn_db_createtables'] = 'Normalmente, este campo deve estar sempre seleccionado. Tenha cuidado ao desactivar este recurso';
$lang['install_admin_tablesnotcreated'] = 'Processo completo. O processo de instala&ccedil;&atilde;o est&aacute; conclu&iacute;do, a sua pedido as tabelas da base de dados n&atilde;o foram criadas. No entanto, o ficheiro config.php foi recriado e foram passados todos os testes de pr&eacute;-instala&ccedil;&atilde;o. Muito obrigado, e aqui est&aacute; o seu';
$lang['info_create_dir_and_file'] = 'O propriet&aacute;rio do Processo HTTP n&atilde;o pode criar um ficheiro dentro de um direct&oacute;rio que &eacute; propriet&aacute;rio. Isso provavelmente significa que o Safe Mode est&aacute;,  de alguma forma, activado. Muitas fun&ccedil;&otilde;es dentro CMSMS  n&atilde;o ir&atilde;o funcionar adequadamente sem essa capacidade. N&atilde;o &eacute; poss&iacute;vel continuar.';
$lang['test_create_dir_and_file'] = 'A verificar se o processo httpd pode criar um arquivo dentro de um direct&oacute;rio criado pelo pr&oacute;prio.';
$lang['cms_site'] = 'Site CMS';
$lang['or_greater'] = 'Ou superior';
$lang['sitename'] = 'Nome do Site';
$lang['warning_safe_mode'] = '<strong>AVISO:</strong> o safe mode  PHP est&aacute; activo. Isto ir&aacute; causar dificuldade nos ficheiros carregados atrav&eacute;s do interface web browser, incluindo imagens, e pacotes XML de temas e m&oacute;dulos.';
$lang['test'] = 'Teste';
$lang['results'] = 'Resultados';
$lang['untested'] = 'N&atilde;o Testado';
$lang['owner'] = 'Permiss&atilde;o';
$lang['permissions'] = 'Permiss&otilde;es';
$lang['off'] = 'Desligado';
$lang['on'] = 'Ligado';
$lang['permission_information'] = 'Informa&ccedil;&atilde;o de Permiss&otilde;es';
$lang['server_os'] = 'Sistema Operativo do Servidor';
$lang['server_api'] = 'API do Servidor';
$lang['server_software'] = 'Servidor Software';
$lang['server_information'] = 'Informa&ccedil;&atilde;o Servidor';
$lang['session_save_path'] = 'Caminho das Sess&otilde;es';
$lang['max_execution_time'] = 'Tempo M&aacute;ximo de Execu&ccedil;&atilde;o';
$lang['gd_version'] = 'Vers&atilde;o GD';
$lang['upload_max_filesize'] = 'Tamanho M&aacute;ximo de Carregamento';
$lang['post_max_size'] = 'Tamanho M&aacute;ximo de Envio (Maximum Post Size)';
$lang['memory_limit'] = 'Limite de Mem&oacute;ria PHP';
$lang['server_db_type'] = 'Servidor Base de Dados';
$lang['server_db_version'] = 'Vers&atilde;o do Servidor de Base de Dados';
$lang['phpversion'] = 'Vers&atilde;o Actual de PHP';
$lang['safe_mode'] = 'Modo Seguro PHP (Safe Mode)';
$lang['php_information'] = 'Informa&ccedil;&atilde;o PHP';
$lang['cms_install_information'] = 'Informa&ccedil;&atilde;o de Instala&ccedil;&atilde;o CMSMS';
$lang['cms_version'] = 'Vers&atilde;o CMSMS';
$lang['systeminfo_copy_paste'] = 'Por favor, copie e cole o texto selecionado no f&oacute;rum';
$lang['help_systeminformation'] = 'As informa&ccedil;&otilde;es indicadas a seguir s&atilde;o recolhidas a partir de uma variedade de locais, e aqui resumidos de modo que possa ser capaz de encontrar convenientemente algumas das informa&ccedil;&otilde;es necess&aacute;rias por forma a tentar diagnosticar um problema ou pedir ajuda com a sua instala&ccedil;&atilde;o do CMS Made Simple.';
$lang['systeminfo'] = 'Informa&ccedil;&atilde;o de Sistema';
$lang['systeminfodescription'] = 'Mostrar v&aacute;rias informa&ccedil;&otilde;es sobre o seu sistema que poder&aacute; ser &uacute;til no diagn&oacute;stico de problemas';
$lang['error'] = 'Erro';
$lang['new_version_available'] = '<b>Aviso:</b> Uma nova vers&atilde;o do CMSMS est&aacute; dispon&iacute;vel. Por favor, notifique o administrador.';
$lang['info_urlcheckversion'] = 'Se esta url for a palavra &quot;none&quot; as verifica&ccedil;&otilde;es n&atilde;o ser&atilde;o feitas.<br />  Um campo vazio ir&aacute; usar uma URL predefinida.';
$lang['urlcheckversion'] = 'Verifique se h&aacute; novas vers&otilde;es do CMSMS atrav&eacute;s deste URL';
$lang['read'] = 'Ler';
$lang['write'] = 'escrever';
$lang['execute'] = 'Executar';
$lang['group'] = 'Grupo';
$lang['other'] = 'Outro';
$lang['global_umask'] = 'Mascara de Cria&ccedil;&atilde;o de Ficheiros (umask)';
$lang['errorcantcreatefile'] = 'N&atilde;o foi poss&iacute;vel criar um ficheiro (problema de permiss&otilde;es?)';
$lang['add'] = 'Adicionar';
$lang['about'] = 'Sobre';
$lang['action'] = 'Ac&ccedil;&atilde;o';
$lang['actionstatus'] = 'Ac&ccedil;&atilde;o/Estado';
$lang['active'] = 'Activo';
$lang['cantremove'] = 'Imposs&iacute;vel Remover';
$lang['changepermissions'] = 'Alterar Permiss&otilde;es';
$lang['changepermissionsconfirm'] = 'USAR COM PRECAU&Ccedil;&Atilde;O\n\nEsta ac&ccedil;&atilde;o ir&aacute; tentar garantir que todos os ficheiros que comp&otilde;em o m&oacute;dulo podem ser escritos pelo servidor web.\nTem  a certeza de que pretende continuar?';
$lang['success'] = 'Sucesso';
$lang['advanced'] = 'Avan&ccedil;ado';
$lang['back'] = 'Voltar ao Menu';
$lang['cancel'] = 'Cancelar';
$lang['cantchmodfiles'] = 'N&atilde;o foi poss&iacute;vel mudar permiss&otilde;es em alguns arquivos';
$lang['cantremovefiles'] = 'Problema remo&ccedil;&atilde;o de arquivos (problema de permiss&otilde;es?)';
$lang['create'] = 'Criar';
$lang['database'] = 'Base de Dados';
$lang['databaseprefix'] = 'Prefixo da Base de Dados';
$lang['databasetype'] = 'Tipo de Base de Dados';
$lang['date'] = 'Data';
$lang['default'] = 'Predefini&ccedil;&atilde;o';
$lang['delete'] = 'Eliminar';
$lang['deleteconfirm'] = 'Tem a certeza que pertende eliminar - %s - ?';
$lang['description'] = 'Descri&ccedil;&atilde;o';
$lang['directoryexists'] = 'Este direct&oacute;rio j&aacute; existe.';
$lang['down'] = 'Baixo';
$lang['edit'] = 'Editar';
$lang['email'] = 'Endere&ccedil;o de Email';
$lang['errordeletingfile'] = 'Problema remo&ccedil;&atilde;o de ficheiros. Problema de permiss&otilde;es?';
$lang['errordirectorynotwritable'] = 'Sem permiss&atilde;o para escrever no direct&oacute;rio. Pode ser causado pela configura&ccedil;&atilde;o de permiss&otilde;es e  propriedade (ownership) de ficheiros. O Safe Mode pode tamb&eacute;m estar em vigor.';
$lang['cachenotwritable'] = 'A pasta de Cache n&atilde;o tem permiss&otilde;es de escrita. A limpeza da cache n&atilde;o ir&aacute; funcionar. Por favor fa&ccedil;a com que a pasta tmp/cache tenha todas as permiss&otilde;es (chmod 777). Tamb&eacute;m pode ter que desactivar o Safe Mode.';
$lang['modulesnotwritable'] = 'A pasta dos m&oacute;dulos n&atilde;o tem permiss&otilde;es de escrita, se quiser instalar m&oacute;dulos atrav&eacute;s da carga de um  ficheiro XML dever&aacute; fazer com que a pasta m&oacute;dulos tenha todas as permiss&otilde;es read/write/execute (chmod 777). O Safe Mode pode tamb&eacute;m estar em vigor.';
$lang['false'] = 'Falso';
$lang['settrue'] = 'Defenir Verdadeiro';
$lang['filename'] = 'Nome do Arquivo';
$lang['filesize'] = 'Tamanho do Arquivo';
$lang['help'] = 'Ajuda';
$lang['language'] = 'Linguagem';
$lang['lastname'] = '&Uacute;ltimo Nome';
$lang['name'] = 'Nome';
$lang['password'] = 'Palavra Chave';
$lang['passwordagain'] = 'Palavra Chave (novamente)';
$lang['remove'] = 'Remover';
$lang['saveconfig'] = 'Salvar Configura&ccedil;&atilde;o';
$lang['true'] = 'Verdadeiro';
$lang['setfalse'] = 'Definir Falso';
$lang['type'] = 'Tipo';
$lang['typenotvalid'] = 'Tipo n&atilde;o &eacute; v&aacute;lido';
$lang['unknown'] = 'Desconhecido';
$lang['user'] = 'Utilizador';
$lang['userdefinedtags'] = 'Tags Personalizadas';
$lang['usermanagement'] = 'Gestor de Utilizadores';
$lang['username'] = 'Nome de utilizador';
$lang['usernameincorrect'] = 'Nome de utilizador ou palavra chave incorrecta';
$lang['version'] = 'Vers&atilde;o';
$lang['install_title'] = 'CMS Made Simple Instala&ccedil;&atilde;o (passo %s)';
$lang['install_system'] = 'Instala&ccedil;&atilde;o do Sistema';
$lang['install_thanks'] = 'Obrigado por instalar o CMS Made Simple';
$lang['upgrade_title'] = 'Actualiza&ccedil;&atilde;o do CMS Made Simple (passo %s)';
$lang['upgrade_system'] = 'Sistema de Actualiza&ccedil;&atilde;o';
$lang['upgrade_thanks'] = 'Obrigado por actualizar o CMS Made Simple para';
$lang['install_please_read'] = 'Por Favor leia a p&aacute;gina <a rel="external" href="http://docs.cmsmadesimple.org/installation/requirements">Problemas na Instala&ccedil;&atilde;o</a>  na Documenta&ccedil;&atilde;o Oficial do CMS Made Simple.';
$lang['install_checking'] = 'Verifica&ccedil;&atilde;o de permiss&otilde;es e de configura&ccedil;&otilde;es de PHP';
$lang['install_test'] = 'Teste';
$lang['install_result'] = 'Resultados';
$lang['install_required_settings'] = 'Configura&ccedil;&otilde;es Obrigat&oacute;rias';
$lang['install_recommended_settings'] = 'Configura&ccedil;&otilde;es Recomendadas';
$lang['install_you_have'] = 'Valor encontrado:';
$lang['install_legend'] = 'Legenda';
$lang['install_symbol'] = 'Simbolo';
$lang['install_definition'] = 'Defini&ccedil;&atilde;o';
$lang['install_value_passed'] = 'Teste passado';
$lang['install_value_failed'] = 'Teste falhado';
$lang['install_error_fragment'] = 'Info Solu&ccedil;&atilde;o de Problemas de Instala&ccedil;&atilde;o';
$lang['install_value_required'] = 'Configura&ccedil;&atilde;o inferior a um valor m&iacute;nimo exigido';
$lang['install_value_recommended'] = 'Configura&ccedil;&atilde;o acima do valor exigido, mas abaixo do valor recomendado<br />ou ... Uma capacidade que <em>poderia</em> ser requerida para algumas funcionalidades opcionais n&atilde;o est&aacute; dispon&iacute;vel';
$lang['install_value_exceed'] = 'A configura&ccedil;&atilde;o atinge ou excede o limiar recomendado<br />ou ... <em>poderia</em> ser requerida para algumas funcionalidades opcionais est&aacute; dispon&iacute;vel';
$lang['install_test_failed'] = 'Um ou mais testes resultaram numa falha ou aviso. Pode instalar o sistema, mas algumas fun&ccedil;&otilde;es podem n&atilde;o funcionar correctamente.<br />Por favor, tente corrigir a situa&ccedil;&atilde;o e clique em &quot;Tente Novamente&quot;, ou clique no bot&atilde;o &quot;Continuar&quot; se as falhas forem apenas relativas a &quot;Configura&ccedil;&otilde;es recomendadas&quot;.';
$lang['install_test_passed'] = 'Todos os testes passaram (pelo menos no m&iacute;nimo recomendado). Por favor carregue no bot&atilde;o Continuar.';
$lang['install_failed_again'] = 'Um ou mais testes falharam. Corrija o problema e clique no bot&atilde;o abaixo para verificar novamente.';
$lang['install_try_again'] = 'Tente Novamente';
$lang['install_continue'] = 'Continuar';
$lang['failure'] = 'Falha';
$lang['caution'] = 'Cuidado';
$lang['install_admin_umask'] = 'Test de Mascara de Cria&ccedil;&atilde;o de Ficheiros';
$lang['install_test_umask'] = 'Por favor, clique no bot&atilde;o Teste para verificar o umask digitado...';
$lang['test_umask_text'] = 'umask (abrevia&ccedil;&atilde;o de &quot;user file creation mode mask&quot;) &eacute; uma fun&ccedil;&atilde;o em ambientes POSIX que afecta o modo de sistema de ficheiros a ser usado como &quot;por defeito&quot;, para ficheiros e direct&oacute;rios rec&eacute;m-criados pelo processo corrente. Controla quais das permiss&otilde;es de ficheiro a n&atilde;o ser usadas em ficheiros acabados de criar.';
$lang['test_check_umask'] = 'Resultados do teste do ficheiro criado em';
$lang['test_umask_not_given'] = 'Umask vazio';
$lang['test_check_umask_failed'] = 'Teste umask falhou';
$lang['test_username_not_given'] = 'Nome de Utilizador Obrigat&oacute;rio!';
$lang['test_username_illegal'] = 'Nome de Utilizador cont&eacute;m caracteres inv&aacute;lidos!';
$lang['test_not_both_passwd'] = 'Ambas as Senhas s&atilde;o  obrigat&oacute;rias!';
$lang['test_passwd_not_match'] = 'Senhas n&atilde;o correspondem!';
$lang['test_email_accountinfo'] = 'Op&ccedil;&atilde;o &quot;Conta de Email&quot; seleccionada, mas n&atilde;o foi fornecido nenhum Email!';
$lang['test_database_prefix'] = 'O prefixo da base de dados cont&eacute;m caracteres inv&aacute;lidos';
$lang['test_no_dbms'] = 'N&atilde;o foi selecionado nenhum dbms!';
$lang['test_could_not_connect_db'] = 'N&atilde;o foi poss&iacute;vel a liga&ccedil;&atilde;o &agrave; base de dados. Verifique se o Nome de Utilizador e Senha est&atilde;o correctos, e que o utilizador tem acesso &agrave; base de dados escolhida.';
$lang['test_could_not_drop_table'] = 'N&atilde;o foi poss&iacute;vel remover uma tabela. Verifique se o utilizador tem privil&eacute;gios para apagar tabelas na base de dados escolhida.';
$lang['test_could_not_create_table'] = 'N&atilde;o foi poss&iacute;vel criar uma tabela. Verifique se o utilizador tem privil&eacute;gios para criar tabelas na base de dados escolhida.';
$lang['test_check_php'] = 'A verificar a vers&atilde;o PHP %s+';
$lang['test_min_recommend'] = '(minimo %s, recomendado %s ou superior)';
$lang['test_min_recommend_plus'] = '(min %s, recomendado %s+)';
$lang['test_requires_php_version'] = 'O CMS Made Simple requer uma vers&atilde;o do php 5.2.4 ou superior (existente: %s),mas  PHP %s ou superior &eacute; recomendado para garantir a m&aacute;xima compatibilidade com outras extens&otilde;es';
$lang['test_check_md5_func'] = 'A verificar a Fun&ccedil;&atilde;o MD5';
$lang['test_check_safe_mode'] = 'A verificar o safe mode';
$lang['test_check_safe_mode_failed'] = 'O PHP safe mode poder&aacute; criar alguns problemas com o carregamento de ficheiros e outras fun&ccedil;&otilde;es. Tudo depende do quanto estrita &eacute; a configura&ccedil;&atilde;o safe mode do seu servidor.';
$lang['test_check_tokenizer'] = 'A verificar fun&ccedil;&otilde;es de tokenizer';
$lang['test_check_tokenizer_failed'] = 'N&atilde;o tendo o tokenizer poder&aacute; causar p&aacute;ginas puramente brancas. &Eacute; exigido que tenha instalado.';
$lang['test_check_gd'] = 'A verificar a biblioteca GD';
$lang['test_check_gd_failed'] = 'A  biblioteca GD &eacute; obrigat&oacute;ria para alguns m&oacute;dulos e funcionalidades.';
$lang['test_check_write'] = 'A verificar as permiss&otilde;es de escrita';
$lang['test_may_not_exist'] = 'Este ficheiro pode ainda n&atilde;o existir. Caso isso aconte&ccedil;a, deve criar um ficheiro vazio com este nome. Tente tamb&eacute;m garantir que este arquivo tenha permiss&otilde;es de escrita pelo processo do servidor web.';
$lang['could_not_retrieve_a_value'] = 'N&atilde;o foi poss&iacute;vel obter um valor.... a passar de qualquer dos modos.';
$lang['displaying_the_value_originally'] = '<br />A mostrar o valor inicialmente estabelecido no ficheiro de configura&ccedil;&atilde;o (este pode n&atilde;o ser exacto).';
$lang['test_check_xml_func'] = 'A verificar suporte XML b&aacute;sico (expat)';
$lang['test_allow_url_fopen_failed'] = 'Quando o &quot;allow url fopen&quot; estiver desabilitado n&atilde;o poder&aacute; aceder a objectos URL, como ficheiros, usando o protocolo http ou ftp.';
$lang['test_remote_url'] = 'Testar URL remoto';
$lang['test_remote_url_failed'] = 'Provavelmente n&atilde;o ser&aacute; capaz de abrir um arquivo remoto num servidor web.';
$lang['connection_error'] = 'Conex&otilde;es de sa&iacute;da HTTP parecem n&atilde;o funcionar! Existe um firewall ou algum ACL para liga&ccedil;&otilde;es externas? Se assim for, o Gestor de M&oacute;dulos e, potencialmente outras funcionalidades, poder&atilde;o falhar.';
$lang['remote_connection_timeout'] = 'A Liga&ccedil;&atilde;o Expirou (Timed Out)!';
$lang['search_string_find'] = 'Liga&ccedil;&atilde;o ok!';
$lang['connection_failed'] = 'A Liga&ccedil;&atilde;o Falhou!';
$lang['remote_response_ok'] = 'Resposta remota: ok!';
$lang['remote_response_404'] = 'Resposta remota: n&atilde;o encontrado!';
$lang['remote_response_error'] = 'Resposta remota: erro!';
$lang['test_check_file_upload'] = 'A verificar o carregamento de ficheiros';
$lang['test_check_file_failed'] = 'Enquanto o carregamento de ficheiros estiver desactivado n&atilde;o ser&aacute; capaz de utilizar qualquer uma das facilidades de carregamento de ficheiros inclu&iacute;das no CMS Made Simple. Se poss&iacute;vel, esta restri&ccedil;&atilde;o deve ser levantada pelo administrador de sistema, para poder utilizar correctamente todas as funcionalidades de gest&atilde;o de ficheiros do sistema. Prossiga com cuidado.';
$lang['test_check_memory'] = 'A verificar o limite de mem&oacute;ria PHP';
$lang['test_check_memory_failed'] = 'Pode n&atilde;o ter mem&oacute;ria suficiente para correr CMSMS correctamente, ou com todos as extens&otilde;es desejadas. Se poss&iacute;vel, deve tentar pedir ao administrador de sistema para aumentar este valor. Prossiga com cuidado.';
$lang['test_check_time_limit'] = 'A verificar o tempo limite PHP (time limit) em segundos';
$lang['test_check_time_limit_failed'] = 'N&uacute;mero de segundos em que um script pode ser executado. Se este for atingido, o script retorna um erro fatal.';
$lang['test_check_post_max'] = 'A verificar o &quot;max post size&quot;';
$lang['test_check_post_max_failed'] = 'Provavelmente n&atilde;o ser&aacute; capaz de submeter (maiores) quantidades de dados. Tenha esta restri&ccedil;&atilde;o em considera&ccedil;&atilde;o.';
$lang['test_check_upload_max'] = 'A verificar tamanho m&aacute;ximo de carregamento (max upload file size)';
$lang['test_check_upload_max_failed'] = 'Provavelmente n&atilde;o ser&aacute; capaz de carregar ficheiros (maiores). Tenha esta restri&ccedil;&atilde;o em considera&ccedil;&atilde;o.';
$lang['test_check_writable'] = 'A verificar se %s tem permis&atilde;o de escrita';
$lang['test_check_upload_failed'] = 'A pasta &quot;uploads&quot; n&atilde;o tem permiss&otilde;es de escrita. Pode instalar o sistema, mas n&atilde;o ser&aacute; capaz de carregar ficheiros atrav&eacute;s do painel de administra&ccedil;&atilde;o.';
$lang['test_check_images_failed'] = 'A pasta &quot;images&quot; n&atilde;o tem permiss&otilde;es de escrita. Pode instalar o sistema, mas n&atilde;o ser&aacute; capaz de carregar e usar ficheiros de imagem atrav&eacute;s do painel de administra&ccedil;&atilde;o.';
$lang['test_check_modules_failed'] = 'A pasta &quot;modules&quot; n&atilde;o tem permiss&otilde;es de escrita. Pode instalar o sistema, mas n&atilde;o ser&aacute; capaz de carregar modulos atrav&eacute;s do painel de administra&ccedil;&atilde;o.';
$lang['test_check_file_get_contents'] = 'A verificar &quot;file_get_contents&quot;';
$lang['test_check_file_get_contents_failed'] = 'Provavelmente n&atilde;o ser&aacute; capaz de utilizar nenhuma das funcionalidades que usem esta fun&ccedil;&atilde;o';
$lang['test_check_session_save_path'] = 'A verificar se &quot;session.save_path&quot; tem permis&atilde;o de escrita';
$lang['test_empty_session_save_path'] = 'O seu &quot;session.save_path&quot; est&aacute; vazio. O PHP usar&aacute; o direct&oacute;rio tempor&aacute;rio do seu Sistema Operativo. Se tem problemas com a SESS&Acirc;O, e o &quot;ini_set&quot; funciona, pode tentar habilitar &quot;session cookies&quot; acrescentando: &quot;ini_set ( &quot;session.use_only_cookies&quot;, 1);&quot; ao topo do seu ficheiro config.php file';
$lang['test_check_session_save_path_failed'] = 'O seu &quot;session.save_path&quot; &eacute; &quot;% s&quot;. N&atilde;o ter este direct&oacute;rio com permiss&otilde;es de escrita pode fazer com que logins no Painel de Administra&ccedil;&atilde;o n&atilde;o funcionem.  Este teste pode falhar se o safe_mode estiver habilitado (veja abaixo).';
$lang['test_check_ini_set'] = 'A verificar se ini_set funciona';
$lang['test_check_ini_set_failed'] = 'Embora a capacidade de ignorar e substituir configura&ccedil;&otilde;es do php ini n&atilde;o seja obrigat&oacute;ria, algumas funcionalidades (opcionais) via extens&otilde;es, utilizam &quot;ini_set timeouts&quot; para extender &quot;timeouts&quot;, e assim permitir o carregamento de ficheiros maiores, etc Pode ter dificuldade com algumas funcionalidades de extens&otilde;es por falta desta capacidade. Este teste pode falhar se o safe_mode estiver habilitado (veja abaixo).';
$lang['install_admin_header'] = 'Informa&ccedil;&atilde;o da Conta de Administrador';
$lang['install_admin_info'] = 'Seleccione o nome de utilizador, senha e endere&ccedil;o de e-mail para a conta de administrador. Por favor, certifique-se de que guarda esta senha.';
$lang['install_admin_email'] = 'Endere&ccedil;o de Email';
$lang['install_admin_email_info'] = 'Informa&ccedil;&atilde;o de Conta para o Email';
$lang['install_admin_email_note'] = '<strong>Nota:</strong> Esta ac&ccedil;&atilde;o usa a fun&ccedil;&atilde;o mail do php. N&atilde;o receber este email pode ser uma indica&ccedil;&atilde;o de que o seu servidor n&atilde;o est&aacute; correctamente configurado e de que deve entrar em contacto com seu administrador de alojamento.';
$lang['install_admin_sitename'] = 'Este &eacute; o nome do seu site. Vai ser utilizados em v&aacute;rios locais dos templates predefinidos e pode ser usado em qualquer lugar com a tag {sitename}.';
$lang['install_admin_db'] = 'Informa&ccedil;&atilde;o da Base de Dados';
$lang['install_admin_db_info'] = '<p>Certifique-se de ter criado a sua base de dados e concedido a um utilizador os privil&eacute;gios para usar essa base de dados.</p>
<p>Para MySQL, use o seguinte:</p>
<p>Fa&ccedil;a o login ao mysql a partir de uma consola e execute os seguintes comandos:</p>
<ol>
<li>create database cms; (use qualquer nome que queira aqui, mas certifique-se de que o memoriza, ser&aacute; necess&aacute;rio inseri-lo nesta p&aacute;gina)</li>
<li>grant all privileges on cms.* to cms_user@localhost identified by &#039;cms_pass&#039;;</li>
</ol>';
$lang['install_admin_follow'] = 'Preencha os campos seguintes';
$lang['install_admin_db_type'] = 'Tipo de Base de Dados';
$lang['install_admin_no_db'] = 'Drivers da Base de Dados inv&aacute;lidos. Por favor, confirme que tem  MySQL, mysqli, e/ou postgres7 instalado, e tente novamente.';
$lang['install_admin_db_host'] = 'Endere&ccedil;o do host da Base de Dados';
$lang['install_admin_db_name'] = 'Nome da Base de Dados';
$lang['install_admin_db_create'] = 'Cria&ccedil;&atilde;o Tabelas (Aviso: elimina os dados existentes)';
$lang['install_admin_db_prefix'] = 'Prefixo da Tabela';
$lang['install_admin_db_sample'] = 'Instalar conte&uacute;dos de exemplo e templates';
$lang['retry'] = 'Tentar de novo';
$lang['install_admin_db_create_seq'] = 'Cria&ccedil;&atilde;o tabela de sequ&ecirc;ncia %s...';
$lang['install_admin_importing'] = 'Importar dados de exemplos...';
$lang['invalid_query'] = 'Consulta (query) inv&aacute;lida: %s';
$lang['install_creating_table'] = '<p>A criar tabela %s... [%s]</p>';
$lang['install_creating_index'] = '<p>A criar index na tabela %s... [%s]</p>';
$lang['done'] = 'conclu&iacute;do';
$lang['failed'] = 'falhou';
$lang['install_admin_error_schema'] = 'Erro na obten&ccedil;&atilde;o do schema SQL';
$lang['install_admin_set_account'] = 'A configurar as informa&ccedil;&otilde;es da conta de administra&ccedil;&atilde;o...';
$lang['install_admin_set_sitename'] = 'A configurar o nome do site...';
$lang['install_admin_setup'] = 'Agora vamos continuar a definir o seu ficheiro de configura&ccedil;&atilde;o, j&aacute; temos a maior parte do que precisamos. Provavelmente, pode deixar todos estes valores como est&atilde;o, portanto quando estiver pronto, clique em Continuar.';
$lang['install_admin_docroot'] = 'Raiz do Documento CMS (como pode ser visto a partir do servidor web)';
$lang['install_admin_docroot_path'] = 'Caminho para a raiz do Documento';
$lang['install_admin_querystring'] = 'Query string (n&atilde;o altere a menos que tenha problemas, e de seguida, edite o config.php manualmente)';
$lang['invalid_querys'] = '<b>AVISO<b/>: Consultas (queries) inv&aacute;lidas na sua base de dados!';
$lang['install_admin_sitedown'] = 'Erro: N&atilde;o foi poss&iacute;vel remover o ficheiro tmp/cache/SITEDOWN. Por favor, remova-o manualmente.';
$lang['install_admin_update_hierarchy'] = 'Actualizar as posi&ccedil;&otilde;es de  hierarquia...';
$lang['install_admin_set_core_event'] = 'A configurar os eventos do Core...';
$lang['install_admin_install_modules'] = 'A instalar m&oacute;dulos...';
$lang['install_admin_index_search'] = 'A Indexar Pesquisa...';
$lang['install_admin_clear_cache'] = 'A limpar a cache do site (se houver)...';
$lang['install_admin_emailing'] = 'A enviar a informa&ccedil;&atilde;o da conta de administra&ccedil;&atilde;o por Email...';
$lang['install_admin_congratulations'] = 'Parab&eacute;ns, tudo configurado - aqui est&aacute; o seu';
$lang['could_not_connect_db'] = 'N&atilde;o foi poss&iacute;vel a liga&ccedil;&atilde;o &agrave; base de dados. Verifique se o Nome de Utilizador e Senha est&atilde;o correctos, e que o utilizador tem acesso &agrave; base de dados escolhida.';
$lang['cannot_write_config'] = 'Erro:  N&atilde;o &eacute; poss&iacute;vel escrever em %s.';
$lang['email_accountinfo_subject'] = 'CMS Made Simple -  Informa&ccedil;&atilde;o da Conta de Administra&ccedil;&atilde;o';
$lang['email_accountinfo_message'] = 'Obrigado por instalar o CMS Made Simple.

Esta &eacute; a informa&ccedil;&atilde;o da sua nova conta:
Nome de Utilizador: %s
Senha: %s

Administra&ccedil;&atilde;o do site em: %s';
$lang['utma'] = '57867837.1362122644.1392687815.1392841585.1392848289.14';
$lang['utmz'] = '57867837.1392747397.4.2.utmcsr=dev.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/bug/view/3664';
$lang['utmc'] = '57867837';
?>