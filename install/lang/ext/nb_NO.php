<?php
$lang['error_timedifference'] = 'Filsystemet hvor CMSMS er installert har en signifikant forskjellig tid enn aktuell servertid';
$lang['test_timedifference'] = 'Tester om filsystem tid er forskjellig fra server tid';
$lang['detected'] = 'Oppdaget';
$lang['docroot_leaveblank'] = 'La dette stå blankt for å benytte systemets standard';
$lang['test_xmlreader_class'] = 'Tester om XMLReader klassen eksisterer';
$lang['test_xmlreader_failed'] = 'XMLReader klassen er ikke aktivert i din php installasjon. Du kan fortsatt benytte systemet, men vil ikke kunne benytte noen av de eksterne modulinstallasjons funksjonene.';
$lang['test_check_xml_failed'] = 'XML støtte er ikke kompilert inn i din php installasjon. Du kan fortsatt benytte systemet, men vil ikke kunne benytte noen av fjerninstallasjonsfunksjonene for moduler.';
$lang['installed_module'] = 'Modul installert';
$lang['automatedtask_success'] = 'Automatisk oppgavekjøring vellykket';
$lang['ip_addr'] = 'IP Adresse';
$lang['install_admin_pwsalt_note'] = 'Velger du slå på Salt kryptering, finnes det ingen mulighet for å nullstille glemte passord, utenom gjennom nullstill passord funksjonaliteten. Det er derfor kritisk at alle kontoer har en tilknyttet epostadresse.';
$lang['admin_salt'] = 'Salt administrator passord';
$lang['setup_flat_urls'] = 'Flate URLer er aktiverte';
$lang['install_timezone2'] = 'Vennligst velg tidssone for din installasjon. Denne tidssone verdi vil bli brukt til å angi tider inn i systemet og for dato og klokkeslett beregninger.<br/><br/>CMSMS har forsøkt å velge en intelligent standard for deg, basert på din servers nåværende posisjon, men dette er ikke sikkert at er riktig .<br/><br/><strong style="color: red;">Merk: </strong> Dette er en endring i atferd fra tidligere versjoner av CMSMS. Det kan også hende at du må aktivere set_db_timezone config verdien hvis din server er i en annen tidssone enn din primære brukergruppe.';
$lang['timezone'] = 'Tdssone';
$lang['none'] = 'Ingen';
$lang['test_error_estrict'] = 'Tester error_reporting for å sikre at E_STRICT ikke er aktivert';
$lang['test_estrict_failed'] = 'E_STRICT er aktivert';
$lang['info_estrict_failed'] = 'Noen biblioteker som CMS Made Simple benytter fungerer ikke godt med E_STRICT. Vennligst slå av denne før du fortsetter';
$lang['test_error_edeprecated'] = 'Tester error_reporting for å sikre at E_DEPRECATED ikke er aktivert';
$lang['test_edeprecated_failed'] = 'E_DEPRECATED er aktivert';
$lang['info_edeprecated_failed'] = 'Om E_DEPRECATED er aktivert i din feilrapportering så vil brukere se mange advarselmeldinger som kan ha innvirkning på visningen og funksjonaliteten';
$lang['invalidemail'] = 'E-postadressen som er oppgitt er ugyldig';
$lang['empty_query'] = 'Tom spørring?? %s';
$lang['no_db_driver'] = 'Ingen kompatible databasedrivere ble funnet';
$lang['test_check_output_buffering'] = 'Tester for output buffring';
$lang['test_check_output_buffering_failed'] = 'Output buffering er avslått. Du vil trolig får problemer med å benytte de funksjoner som benytter denne funksjonen';
$lang['phpinfo'] = 'Se på PHP Informasjon';
$lang['mod_security'] = 'Apache Mod Security';
$lang['test_check_tempnam'] = 'Tester for tempnam Function';
$lang['test_check_db_drivers'] = 'DB drivere';
$lang['test_check_db_drivers_failed'] = 'Ingen DB drivere ble funnet';
$lang['test_check_register_globals'] = 'Tester PHP register globals';
$lang['test_check_register_globals_failed'] = 'PHP register globals er aktiv. For sikkerhetens skyld be om at dette slås av.';
$lang['test_check_disable_functions'] = 'Tester PHP disable functions';
$lang['test_check_disable_functions_failed'] = 'Advarsel: Dette er en liste med funksjoner som er avslått på din server.';
$lang['install_admin_db_port'] = 'Databaseport';
$lang['install_admin_db_port_info'] = 'Om du ikke kjenner denne - lar du dette felte forbli blankt for å benytte standard port';
$lang['install_admin_db_socket'] = 'Database socket';
$lang['install_admin_db_socket_info'] = 'IKKE STØTTET.';
$lang['install_admin_frontendlang'] = 'Standard språk for frontend. Dette justerer lokalitet(locale) som benyttes for diverse standard datobehandlingsfunksjoner, osv..';
$lang['install_default_encoding'] = 'I nesten alle tilfeller,bør default_encoding være utf-8.';
$lang['installer_done'] = '[utført]';
$lang['installer_failed'] = '[feilet]';
$lang['create_permission'] = 'Oppretter rettighet ...';
$lang['add_column_sql'] = 'Legger til kolonne til %s tabellen ...';
$lang['update_table_sql'] = 'Oppdaterer %s tabellen ...';
$lang['installing_module'] = 'Installerer %s modulen ...';
$lang['updating_schema_version'] = 'Oppdaterer skjemaversjon %s ...';
$lang['upgrade_config'] = 'Oppgraderer config.php';
$lang['upgrade_config_info'] = 'config oppgradert';
$lang['upgrade_failed_again'] = 'En eller flere oppgraderinger har feilet. Vennligst korriger problemet og klikk knappen nedenfor for en ny test.';
$lang['upgrade_cache_dirs'] = 'Tømmer cache katalogene';
$lang['cannot_clean_cache_dirs'] = 'Klarer ikke å tømme fra cache katalogene!';
$lang['upgrade_schema'] = 'Oppgrader skjema';
$lang['need_upgrade_schema'] = 'CMS trenger en oppgradering.<br />Du kjører nå på skjema versjon %s og du trenger å oppgradere til versjon %s';
$lang['schema_ok'] = 'CMS databasen er siste versjon. Skjema versjon %s benyttes';
$lang['noneed_upgrade_schema'] = 'CMS databasen kjører siste skjema versjon som er %s';
$lang['upgrade_modules'] = 'Oppgrader moduler';
$lang['noneed_upgrade_modules'] = 'Core modulene er siste versjon';
$lang['upgrade_sql_module_from_to'] = 'Oppgraderer SQL for "%s" modulen fra %s til %s ...';
$lang['upgrade_event_module_from_to'] = 'Oppgraderer Hendelser/Events for "%s" modulen fra %s til %s ...';
$lang['sitedown_not_removed'] = 'Kunne ikke fjerne tmp/cache/SITEDOWN filen. Vennligst fjern denne manuelt ellers vil nettstedet forsatt vise en "Site Down for Maintainence" melding';
$lang['upgrade_ok'] = 'Vennligst se over config.php, endre eventuelt nye innstillinger om nødvendig og så setter du filens rettigheter tilbake til beskyttet. Du bær også sjekke at alle dine moduler er siste versjon, ved å gå til Utvidelser -> Moduler siden og se etter om noen av dem er merket "Trenger Oppgradering"';
$lang['upgrade_complete'] = 'Oppgraderingsprosessen er fullført';
$lang['upgrade_end'] = 'CMS er oppdatert. Vennligst klikk %s for å gå til ditt CMS nettsted eller du kan %s.';
$lang['here'] = 'her';
$lang['go_to_admin'] = 'gå til Administrasjonspanelet';
$lang['errorfilenot'] = 'Filen ble ikke funnet!';
$lang['errorfilenotwritable'] = 'Fil ikke skrivbar!';
$lang['nofiles'] = 'Denne ressursen eksisterer ikke!';
$lang['is_directory'] = 'Denne ressursen er en katalog!';
$lang['is_readable_false'] = 'Denne ressursen er ikke lesbar!';
$lang['checksum_match'] = 'Checksum er lik!';
$lang['checksum_not_match'] = 'Checksum er ikke lik!';
$lang['not_checksum'] = 'Ingen checksum å finne!';
$lang['format_datetime'] = '%c';
$lang['upload_err_ini_size'] = 'Den opplastede filen overstiger upload_max_filesize oppsettet i php.ini!';
$lang['upload_err_form_size'] = 'Den opplastede filen overstiger MAX_FILE_SIZE oppsettet som er spesifisert i HTML skjemaet.';
$lang['upload_err_partial'] = 'Den opplastede filen ble bare delvis lastet opp.';
$lang['upload_err_no_file'] = 'Ingen fil ble lastet opp.';
$lang['upload_err_no_tmp_dir'] = 'Mangler en midlertidig katalog.';
$lang['upload_err_cant_write'] = 'Feilet å skrive filen til disken.';
$lang['upload_err_extension'] = 'Filopplasting stoppet av filendelsen.';
$lang['upload_err_empty'] = 'Filen har null størrelse';
$lang['upload_err_unknown'] = 'Filopplastingsfeil ukjent.';
$lang['function_file_uploads_off'] = 'file_uploads er avslått i din php!';
$lang['upload_file_no_readable'] = 'Opplastet fil er ikke lesbar!';
$lang['upload_file_multiple'] = 'Flere filopplastinger ikke tillatt!';
$lang['test_check_magic_quotes_gpc'] = 'Magic quotes for Get/Post/Cookie operasjoner';
$lang['test_check_magic_quotes_gpc_failed'] = 'Når magic_quotes er på, vil alle apostrofer, anførselstegn og omvendt skråstrek bli markert(escaped) med omvendt skråstrek automatisk. Dette kan gi mange problemer i CMS.';
$lang['test_check_magic_quotes_runtime'] = 'Test om Magic quotes er aktivert';
$lang['test_check_magic_quotes_runtime_failed'] = 'Når magic_quotes er på, vil de fleste funksjoner som returnerer data fra enhver form for ekstern kilde - inkludert databaser og tekstfiler ha anførselstegn markert(escaped) med omvendt skråstrek. Dette vil gi problemer med CMS Made Simple.';
$lang['install_admin_checksum'] = 'Test din installasjon';
$lang['upgrade_admin_checksum'] = 'Test din systemoppgradering';
$lang['checksum'] = 'Testsum test';
$lang['checksum_file'] = 'Testsum fil';
$lang['install_test_checksum'] = 'Du kan teste integriteten for dine CMS filer ved å sammenligne mot en original CMS checksum. Dette kan hjelpe til med å finne problemer med opplastingen.';
$lang['checksum_passed'] = 'Alle checksum\'er er like!';
$lang['checksum_failed'] = 'Checksum hadde feil. Se i hjelp for mer informasjon';
$lang['test_check_open_basedir'] = 'Test for PHP Open Basedir';
$lang['test_check_open_basedir_failed'] = 'Open basedir restriksjoner er effektive. Du vil trolig ha problemer med noe tilleggfunksjonalitet med denne restriksjonen.';
$lang['unlimited'] = 'Ubegrenset';
$lang['test_open_basedir_session_save_path'] = 'Open basedir restriksjoner ser ut til å være i effekt. Om du har SESSION problemer og ini_set fungerer kan du forsøke å slå på session cookies ved å legge til: ini_set(\'session.use_only_cookies\', 1); til toppen av config.php fila';
$lang['install_warn_db_createtables'] = 'Normal skal dette feltet alltid være avkrysset. Vær forsiktig om du slår av denne egenskapen.';
$lang['install_admin_tablesnotcreated'] = 'Prosessering ferdig. Installasjonprosessen er fullført, på din begjæring ble ikke databasetabeller opprettet. Men config filen har blitt tilbakestilt og alle før-installasjontester ble gjennomført. Takk, og her er din';
$lang['info_create_dir_and_file'] = 'HTTP prosessens eier kan ikke opprette en fil inne i en katalog som den eier. Dette betyr sannsynligvis at safe mode er slått på på en eller annen måte. Mange funksjoner inne i CMS Made Simple vil ikke fungere skikkelig uten denne muligheten. Å fortsette er ikke mulig.';
$lang['test_create_dir_and_file'] = 'Tester om http prosessen kan opprette en fil inne i en katalog den har opprettet.';
$lang['cms_site'] = 'CMS nettsted';
$lang['or_greater'] = 'Eller større';
$lang['sitename'] = 'Nettstedsnavn';
$lang['warning_safe_mode'] = '<strong><em>ADVARSEL:</em></strong> PHP Safe_mode er påslått.  Dette vil medføre problemer med filer som lastes opp via nettleser grensesnittet, inkludert bilder, tema og modul XML pakker. Du rådes til  å kontakte din nettstedadministrator for å se om safe_mode kan slås av.';
$lang['test'] = 'Test';
$lang['results'] = 'Resultater';
$lang['untested'] = 'Ikke testet';
$lang['owner'] = 'Eier';
$lang['permissions'] = 'Rettigheter';
$lang['off'] = 'Av';
$lang['on'] = 'På';
$lang['permission_information'] = 'Rettighetsinformasjon';
$lang['server_os'] = 'Server operativsystem';
$lang['server_software'] = 'Server programvare';
$lang['server_information'] = 'Serverinformasjon';
$lang['gd_version'] = 'GD versjon';
$lang['upload_max_filesize'] = 'Maksimum \'Upload Size\'';
$lang['post_max_size'] = 'Maksimum \'Post Size\'';
$lang['server_db_version'] = 'Server Database versjon';
$lang['phpversion'] = 'PHP versjon';
$lang['php_information'] = 'PHP informasjon';
$lang['cms_install_information'] = 'CMS Installasjonsinformasjon';
$lang['cms_version'] = 'CMS versjon';
$lang['systeminfo_copy_paste'] = 'Vennligst kopier og lim inn følgende valgte tekst i ditt forum innlegg';
$lang['help_systeminformation'] = 'Informasjonen vist nedenfor er innsamlet fra forskjellige plasser og summeres her så du enkelt kan finne noe av informasjonen du trenger når du forsøker å diagnostisere et problem eller spør etter hjelp med din CMS Made Simple installasjon.';
$lang['systeminfo'] = 'Systeminformasjon';
$lang['systeminfodescription'] = 'Vis forskjellige biter med informasjon om ditt system som kan være nyttig i diagnostisering av problemer';
$lang['error'] = 'Feil';
$lang['new_version_available'] = '<em>Merk:</em> En ny versjon av CMS Made Simple er tilgjengelig.  Vennligst meld fra til din administrator.';
$lang['info_urlcheckversion'] = 'Om urlen er ordet "none" vil ingen sjekk gjøres.<br/>En blank streng vil resultere i at en standard URL benyttes.';
$lang['urlcheckversion'] = 'Se etter nye CMS versjoner ved å benytte denne URL/sti';
$lang['read'] = 'Lese';
$lang['write'] = 'Skrive';
$lang['execute'] = 'Utføre';
$lang['group'] = 'Gruppe';
$lang['other'] = 'Annet';
$lang['global_umask'] = 'Fil opprettelse maske (umask)';
$lang['errorcantcreatefile'] = 'Kunne ikke opprette fil (rettighetsproblem?)';
$lang['add'] = 'Legg til';
$lang['about'] = 'Om';
$lang['action'] = 'Handling';
$lang['actionstatus'] = 'Handling/Status';
$lang['active'] = 'Aktiv';
$lang['cantremove'] = 'Kan ikke fjerne';
$lang['changepermissions'] = 'Endre rettigheter';
$lang['changepermissionsconfirm'] = 'VÆR FORSIKTIG\n\nDenne handling vil forsøke å endre det slik at alle filene som utgjør modulen er skrivbare for webserveren.\nEr du sikker på at du vil fortsette?';
$lang['success'] = 'Vellykket';
$lang['advanced'] = 'Avansert';
$lang['back'] = 'Tilbake til meny';
$lang['cancel'] = 'Avbryt';
$lang['cantchmodfiles'] = 'Klarte ikke å endre rettigheter på noen av filene';
$lang['cantremovefiles'] = 'Problem med å fjerne filer (rettigheter?)';
$lang['create'] = 'Opprett';
$lang['databaseprefix'] = 'Database forstavelse(prefix)';
$lang['databasetype'] = 'Databasetype';
$lang['date'] = 'Dato';
$lang['default'] = 'Standard';
$lang['delete'] = 'Slett';
$lang['deleteconfirm'] = 'Er du sikker på at du vil slette - %s - ?';
$lang['description'] = 'Beskrivelse';
$lang['directoryexists'] = 'Katalogen eksisterer allerede.';
$lang['down'] = 'Ned';
$lang['edit'] = 'Rediger';
$lang['email'] = 'E-postadresse';
$lang['errordeletingfile'] = 'Kan ikke slette filen, Rettighetsproblem?';
$lang['errordirectorynotwritable'] = 'Har ikke rettighet til å skrive til katalog. Dette kan forårsakes av filrettigheter og eierskap. Safe_mode kan også være i effekt.';
$lang['cachenotwritable'] = 'Cache mappen er ikke skrivbar. Å tømme cache vil ikke fungere. Vennligst endre tmp/cache katalogen til å ha full lese/skrive/utføre(read/write/execute) rettigheter (chmod 777) for PHP-prosessen. Du trenger kanskje også å slå av safe mode.';
$lang['modulesnotwritable'] = 'Modules mappen er ikke skrivbar. Om du ønsker å installere moduler ved å laste opp en XML-fil så trenger du å endre modules-mappen til å ha fulle lese/skrive/utfør(read/write/execute) rettigheter (chmod 777) for PHP-prosessen.  Safe mode kan også være i effekt.';
$lang['false'] = 'Usann';
$lang['settrue'] = 'Sett sann';
$lang['filename'] = 'Filnavn';
$lang['filesize'] = 'Filstørrelse';
$lang['help'] = 'Hjelp';
$lang['language'] = 'Språk';
$lang['lastname'] = 'Etternavn';
$lang['name'] = 'Navn';
$lang['password'] = 'Passord';
$lang['passwordagain'] = 'Passord (gjenta)';
$lang['remove'] = 'Fjern';
$lang['saveconfig'] = 'Lagre konfig.';
$lang['true'] = 'Sann';
$lang['setfalse'] = 'Sett usann';
$lang['typenotvalid'] = 'Type er ikke gyldig';
$lang['unknown'] = 'Ukjent';
$lang['user'] = 'Bruker';
$lang['userdefinedtags'] = 'Brukerdefinerte tagger (UDT)';
$lang['usermanagement'] = 'Brukeradministrasjon';
$lang['username'] = 'Brukernavn';
$lang['usernameincorrect'] = 'Brukernavn eller passord er feil';
$lang['version'] = 'Versjon';
$lang['install_title'] = 'CMS Made Simple Installasjon (steg %s)';
$lang['install_system'] = 'Installer systemet';
$lang['install_thanks'] = 'Takk for at du installerer CMS Made Simple';
$lang['upgrade_title'] = 'CMS Made Simple Oppgradering (trinn %s)';
$lang['upgrade_system'] = 'Oppgrader Systemet';
$lang['upgrade_thanks'] = 'Takk for at du oppgraderer CMS Made Simple til';
$lang['install_please_read'] = 'Vennligst les <a rel="external" href="http://docs.cmsmadesimple.org/installation/requirements">Installation Troubleshooting</a> - siden i CMS Made Simple™ Official Documentation.';
$lang['install_checking'] = 'Tester rettigheter og PHP innstillinger';
$lang['install_result'] = 'Resultat';
$lang['install_required_settings'] = 'Påkrevde innstillinger';
$lang['install_recommended_settings'] = 'Anbefalte innstillinger';
$lang['install_you_have'] = 'Du har';
$lang['install_legend'] = 'Tegnforklaring(Legend)';
$lang['install_symbol'] = 'Tegn';
$lang['install_definition'] = 'Definisjon';
$lang['install_value_passed'] = 'En påkrevd test var vellykket';
$lang['install_value_failed'] = 'En påkrevd test mislyktes';
$lang['install_error_fragment'] = 'Info for feilsøking ved installasjon';
$lang['install_value_required'] = 'En innstilling er lavere enn påkrevd minimum';
$lang['install_value_recommended'] = 'En innstilling er over påkrevd verdi, men er lavere enn anbefalt verdi<br />eller... Noe som <em>kan</em> være påkrevd for at noe utvidet funksjonalitet skal fungere';
$lang['install_value_exceed'] = 'En innstilling oppfyller eller overstiger anbefalt nivå<br />eller... Noe som <em>kan</em> være påkrevd for at noe utvidet funksjonalitet skal fungere';
$lang['install_test_failed'] = 'En eler flere tester har feilet eller har advarsel. Du kan fortsatt installere systemet men noen funksjoner vil muligens ikke fungere godt.<br />Vennligst forsøk å rette på situasjonen og klikk "Forsøk igjen", eller klikk på Fortsett knappen om testene bare er for Anbefalte innstillinger.';
$lang['install_test_passed'] = 'Alle tester ble bestått (i det minste på minimum nivå). Vennligst klikk på Fortsett knappen.';
$lang['install_failed_again'] = 'En eller flere tester har feilet. Vennligst korriger problemet og klikk på knappen nedenfor for å teste på ny.';
$lang['install_try_again'] = 'Forsøk igjen';
$lang['install_continue'] = 'Fortsett';
$lang['failure'] = 'Feilet';
$lang['caution'] = 'Obs';
$lang['install_admin_umask'] = 'Test umask på serveren';
$lang['install_test_umask'] = 'Vennligst klikk testknappen for å teste umask som er oppgitt ...';
$lang['test_umask_text'] = 'umask (som kommer fra user file creation mode mask) er en funksjon i POSIX omgivelser som innvirker på standard filsystem modus for nylig opprettede filer og kataloger for denne prosessen. Det kontrollerer hvilke filrettigheter som ikke vil bli satt for alle nylig opprettede filer.';
$lang['test_check_umask'] = 'Resultat for test av fil opprettet i';
$lang['test_umask_not_given'] = 'Umask ikke oppgitt';
$lang['test_check_umask_failed'] = 'umask-test feilet';
$lang['test_username_not_given'] = 'Brukernavn ikke oppgitt!';
$lang['test_username_illegal'] = 'Brukernavn inneholder ugyldige bokstaver!';
$lang['test_not_both_passwd'] = 'Begge passordfeltene ble ikke fylt ut';
$lang['test_passwd_not_match'] = 'Passordfeltene samsvarer ikke!';
$lang['test_email_accountinfo'] = 'Send kontoinformasjon via e-post er valgt, men ingen e-postadresse er oppgitt!';
$lang['test_database_prefix'] = 'Database forstavelse inneholder ugyldige bokstaver';
$lang['test_no_dbms'] = 'Ingen dbms valgt!';
$lang['test_could_not_connect_db'] = 'Kunne ikke koble til databasen. Sjekk at brukernavn og passord er korrekte, og at den brukeren har tilgang til den oppgitte databasen.';
$lang['test_could_not_drop_table'] = 'Kunne ikke gjøre \'drop\' av en tabell. Bekreft at brukeren har rettighet til å gjøre \'drop\' tabell i den oppgitte databasen.';
$lang['test_could_not_create_table'] = 'Kunne ikke opprette en tabell. Bekreft at brukeren har rettighet til å opprette tabeller i den oppgitte databasen.';
$lang['test_check_php'] = 'Tester om PHP versjon %s+';
$lang['test_min_recommend'] = '(minimum %s, anbefalt %s eller større)';
$lang['test_min_recommend_plus'] = '(min. %s, anbefalt %s+)';
$lang['test_requires_php_version'] = 'CMS Made Simple krever php versjon 5.2.4 eller større (du har %s), men PHP %s eller større er anbefalt for å sikre maksimum kompatibilitet med tredjeparts tillegg';
$lang['test_check_md5_func'] = 'Ser etter md5 funksjon';
$lang['test_check_safe_mode'] = 'Tester om safe_mode';
$lang['test_check_safe_mode_failed'] = 'PHP safe mode kan forårsake noen problemer under opplasting av filer og med andre funksjoner. Alt avhenger av hvor streng din server safe mode innstilling er.';
$lang['test_check_tokenizer'] = 'Ser etter tokenizer funksjoner';
$lang['test_check_tokenizer_failed'] = 'Å ikke ha tokenizeren kan forårsake sider til å rendere helt hvite. Vi anbefaler deg å ha denne installert, men nettstedet ditt kan mulig også fungere uten denne.';
$lang['test_check_gd'] = 'Ser etter GD bibliotek';
$lang['test_check_gd_failed'] = 'GD biblioteket er nødvendig for noen moduler og funksjoner.';
$lang['test_check_write'] = 'Tester skriverett på';
$lang['test_may_not_exist'] = 'Det er mulig denne filen ikke eksisterer ennå. Om den ikke eksisterer, oppretter du en tom fil med dette navnet. Vennligst også forsikre deg om at denne filen er skrivbar for webserver prosessen.';
$lang['could_not_retrieve_a_value'] = 'Klarte ikke lese verdien.... fortsetter alikevel.';
$lang['displaying_the_value_originally'] = '<br />Viser verdien opprinnelig satt i config filen (dette kan være uriktig).';
$lang['test_check_xml_func'] = 'Tester om grunnleggende XML (expat) støtte';
$lang['test_allow_url_fopen_failed'] = 'Når \'allow url fopen\' er slått av vil du ikke være i stand til å nå URL objekter som filer ved å benytte ftp eller http protokollene.';
$lang['test_remote_url'] = 'Test for tilgang til fjern URL';
$lang['test_remote_url_failed'] = 'Du vil trolig ikke kunne åpne en fil på en fjern-webserver.';
$lang['connection_error'] = 'Utgående http forbindelser ser ikke ut til å fungere! Det er en brannmur eller en eller annen ACL for eksterne forbindelser? Dette vil medføre at modulbehandleren, og potensielt annen funksjonalitet feiler.';
$lang['remote_connection_timeout'] = 'Forbindelsen fikk tidsavbrudd!';
$lang['search_string_find'] = 'Forbindelse i orden!';
$lang['connection_failed'] = 'Tilkobling feilet!';
$lang['remote_response_ok'] = 'Fjern respons: i orden!';
$lang['remote_response_404'] = 'Fjern respons: ikke funnet!';
$lang['remote_response_error'] = 'Fjern respons: feil!';
$lang['test_check_file_upload'] = 'Tester filopplasting';
$lang['test_check_file_failed'] = 'Når filopplasting er slått av vil du ikke kunne benytte noen av filopplastingsfasilitetene inkludert i CMS Made Simple. Om mulig, bør denne restriksjonen fjernes av din systemadministrator for at du skal kunne benytte alle filbehandlingsfunksjonene i systemet. Fortsett med forsiktighet.';
$lang['test_check_memory'] = 'Tester PHP memory limit';
$lang['test_check_memory_failed'] = 'Det er mulig du ikke har nok minne for å kjøre CMSMS godt, eller med alle ønskede tillegg. Om mulig,, bør du forsøke å få din systemadministrator til å heve denne verdien. Fortsett med forsiktighet.';
$lang['test_check_time_limit'] = 'Tester PHP time limit i sekunder';
$lang['test_check_time_limit_failed'] = 'Antall sekunder et skript er tillatt å kjøre. Om denne verdi nås vil skriptet returnere en fatal error(=alvorlig feil).';
$lang['test_check_post_max'] = 'Tester maks post-størrelse (post_max_size)';
$lang['test_check_post_max_failed'] = 'Du vil trolig ikke kunne sende (mye) data. Vennligst vær oppmerksom på denne begrensningen.';
$lang['test_check_upload_max'] = 'Tester maksimum filopplastingstørrelse (upload_max_filesize)';
$lang['test_check_upload_max_failed'] = 'Du vil trolig ikke kunne sende (store) filer ved å benytte de innebygde filbehandlingsfunksjonene. Vennligst vær oppmerksom på denne begrensningen.';
$lang['test_check_writable'] = 'Sjekker om %s er skrivbar';
$lang['test_check_upload_failed'] = 'Uploads-mappa er ikke skrivbar. Du kan fortsatt installere systemet, men du vil ikke kunne laste opp filer via Administrasjonspanelet.';
$lang['test_check_images_failed'] = 'Images-mappa er ikke skrivbar. Du kan fortsatt installere systemet, men du vil ikke kunne laste opp og benytte bilder via Administrasjonspanelet.';
$lang['test_check_modules_failed'] = 'Modules-mappa er ikke skrivbar. Du kan fortsatt installere systemet, men du vil ikke kunne laste opp moduler via Administrasjonspanelet.';
$lang['test_check_file_get_contents'] = 'Tester file_get_contents';
$lang['test_check_file_get_contents_failed'] = 'Du vil trolig ikke kunne benytte funksjonalitet som benytter denne funksjonen';
$lang['test_check_session_save_path'] = 'Sjekker om session.save_path er skrivbar';
$lang['test_empty_session_save_path'] = 'Din session.save_path er tom. PHP vil benytte den midlertidige mappa for din vert. Om du har SESSION problemer og ini_set fungerer kan du forsøke å slå på session cookies ved å legge til: ini_set(\'session.use_only_cookies\', 1);    til toppen av config.php filen';
$lang['test_check_session_save_path_failed'] = 'Din session.save_path er "%s". Å ikke ha denne satt som skrivbar kan forårsake at innlogging til administrasjonspanelet ikke fungerer. Du bør forsøke å gjøre denne stien skrivbar om du har problemer med innlogging til administrasjonspanelet. Denne testen kan feile om safe_mode er aktivert (se nedenfor).';
$lang['test_check_ini_set'] = 'Sjekker om ini_set fungerer';
$lang['test_check_ini_set_failed'] = 'Selv om muligheten til å overstyre php ini innstillinger ikke er nødvendig, så vil noen tillegg (valgfri) funksjonalitet benytte ini_set for å utvide tidsavbrudd, og tillater da opplasting av større filer, osv. Du kan få vanskeligheter med noen tilleggsfunksjoner om du ikke har denne muligheten. Denne testen kan feile om safe_mode er aktivert (se nedenfor).';
$lang['install_admin_header'] = 'Admin kontoinformasjon';
$lang['install_admin_info'] = 'Velg brukernavn, passord og e-postadresse for din adminkonto. Vennligst pass på at du tar godt vare på denne informasjonen.';
$lang['install_admin_email'] = 'E-postadresse';
$lang['install_admin_email_info'] = 'Send E-post med kontoinformasjon';
$lang['install_admin_email_note'] = '<strong>Merk:</strong> Denne funksjonen benytter php\'s e-postfunksjon. Om du ikke mottar denne e-posten, kan det være en indikasjon på at din server ikke er godt konfigurert og at du bør kontakte din vert administrator.';
$lang['install_admin_sitename'] = 'Dette er navnet på ditt nettsted. Det vil bli benyttet på forskjellige plasser i standard malene og kan benyttes hvor som helst med taggen {sitename}.';
$lang['install_admin_db'] = 'Databaseinformasjon';
$lang['install_admin_db_info'] = '<p>Vær sikker på at du har opprettet din database og har tilegnet en bruker fulle privileger for å benytte denne databasen.</p>
<p>For MySQL, benytt følgende:</p>
<p>Logg inn i mysql fra et konsoll og kjør følgende kommandoer:</p>
<ol>
<li>create database cms; (benytt hvilket navn du vil her, men pass på at du husker det, du vil trenge å skrive dette inn på denne siden)</li>
<li>grant all privileges on cms.* to cms_user@localhost identified by \'cms_pass\';</li>
</ol>';
$lang['install_admin_follow'] = 'Vennligst fyll ut følgende felter';
$lang['install_admin_db_type'] = 'Databasetype';
$lang['install_admin_no_db'] = 'Ingen gyldige database drivere synes å være kompilert inn i din PHP installasjon. Vennligst bekreft at du har mysql, mysqli, og/eller postgres7 støtte installert, og forsøk så igjen.';
$lang['install_admin_db_host'] = 'Database vertsadresse(host address)';
$lang['install_admin_db_name'] = 'Databasenavn';
$lang['install_admin_db_create'] = 'Opprett kataloger (Advarsel: Dette sletter eksisterende data)';
$lang['install_admin_db_prefix'] = 'Table prefiks';
$lang['install_admin_db_sample'] = 'Installer standarddata og maler';
$lang['retry'] = 'Forsøk igjen';
$lang['install_admin_db_create_seq'] = 'Oppretter %s tabellsekvens...';
$lang['install_admin_importing'] = 'Importerer standarddata...';
$lang['invalid_query'] = 'Ugyldig spørring: %s';
$lang['install_creating_table'] = '<p>Opretter %s tabell... [%s]</p>';
$lang['install_creating_index'] = '<p>Oppretter index i %s tabell... [%s]</p>';
$lang['done'] = 'utført';
$lang['failed'] = 'feilet';
$lang['install_admin_error_schema'] = 'Feil ved henting av SQL schema';
$lang['install_admin_set_account'] = 'Skriver admin kontoinformasjon...';
$lang['install_admin_set_sitename'] = 'Skriver nettstedsnavn...';
$lang['install_admin_setup'] = 'Nå la oss fortsette å sette opp din konfigurasjonsfil. Vi har allerede det meste vi trenger. Det er mulig du kan la de følgende verdier være som de er, så når du er klar - trykk Fortsett.';
$lang['install_admin_docroot'] = 'CMS dokumentrot (som sett fra webservveren)';
$lang['install_admin_docroot_path'] = 'Sti til Dokumentrota(Document root)';
$lang['install_admin_querystring'] = 'Query string (ikke rør denne om du ikke har problemer, om så - rediger config.php manuelt)';
$lang['invalid_querys'] = '<b>ADVARSEL<b/>: Ugyldige spørringer mot din DB!';
$lang['install_admin_sitedown'] = 'Feil: Kunne ikke fjerne tmp/cache/SITEDOWN filen. Vennligst fjern denne manuelt.';
$lang['install_admin_update_hierarchy'] = 'Oppdaterer hierarkiposisjoner...';
$lang['install_admin_set_core_event'] = 'Setter opp core handlinger...';
$lang['install_admin_install_modules'] = 'Installerer moduler...';
$lang['install_admin_index_search'] = 'Indekserer søk...';
$lang['install_admin_clear_cache'] = 'Tømmer nettsteds cache (om finnes)...';
$lang['install_admin_emailing'] = 'Sender admin kontoinnstillinger via e-post...';
$lang['install_admin_congratulations'] = 'Gratulerer, nå er alt ferdig satt opp - her er ditt';
$lang['could_not_connect_db'] = 'Kunne ikke koble til databasen. Sjekk at brukernavn og passord er korrekte, og at denne brukeren har tilgang til den oppgitte databasen.';
$lang['cannot_write_config'] = 'Feil: kan ikke skrive til %s.';
$lang['email_accountinfo_subject'] = 'CMS Made Simple Adminkonto informasjon';
$lang['email_accountinfo_message'] = 'Takk for at du installerte CMS Made Simple.

Dette er din nye kontoinformasjon:
brukernavn: %s
passord: %s

Logg inn i nettstedets administrasjon her: %s';
?>