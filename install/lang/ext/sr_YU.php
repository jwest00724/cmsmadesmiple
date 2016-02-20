<?php
$lang['error_timedifference'] = 'Fajl sistem gdje je instaliran CMS MS ima znatno drukčije vreme od vremena na serveru';
$lang['test_timedifference'] = 'Proveravam da li se vreme u fajl sistemu razlikuje od vremena na serveru';
$lang['detected'] = 'Detektovano';
$lang['docroot_leaveblank'] = 'Ostavite ovo polje prazno ukoliko želite da koristite podrazumevane sistemske vrednosti';
$lang['test_xmlreader_class'] = 'Provera postojanja XMLReader klase';
$lang['test_xmlreader_failed'] = 'Klasa XMLReader nije omogućena u Va&scaron;oj PHP instalaciji.  I dalje možete koristiti CMSMS, ali nijedna od funkcija daljinske instalacije modula neće raditi.';
$lang['test_check_xml_failed'] = 'Podr&scaron;ka za XML nije ukompajlirana u Va&scaron;u PHP instalaciju. Vi i dalje možete da koristite sistem, ali nećete biti u mogućnosti da koristite ni jednu funkciju daljinske instalacije modula.';
$lang['installed_module'] = 'Modul instaliran';
$lang['automatedtask_success'] = 'Automatizovani zadatak uspe&scaron;no izvr&scaron;en';
$lang['ip_addr'] = 'IP adresa';
$lang['install_admin_pwsalt_note'] = '<a href="http://en.wikipedia.org/wiki/Salt_%28cryptography%29" title="Obja&scaron;njenje (novi prozor)" target="_blank">Obja&scaron;njenje na Vikipediji</a>. Ako omogućite ovu enkripcionu opciju, moći ćete da resetujete administratorske lozinke isključivo preko mehanizma za izgubljene lozinke. Izuzetno je važno da svakom administratorskom nalogu dodelite e-mail adresu';
$lang['admin_salt'] = '&quot;Posoli&quot; administratorske lozinke';
$lang['setup_flat_urls'] = 'Postavljene su proste URL adrese';
$lang['install_timezone2'] = 'Izaberite vremensku zonu za instalaciju. Ova  vrednost vremenske zone će se koristiti za unos vremena u sistem i za računanje datuma i vremena.<br/>
CMSMS je poku&scaron;ao da izabere podrazumenvano pode&scaron;enje  za vas na osnovu trenutne lokacije va&scaron;eg servera, međutim, to ne mora biti tačno.<br/><br/><strong style=&quot;color: red;&quot;>Napomena: </strong> Ovo je promena u pona&scaron;anju u odnosu na prethodne verzije CMSMS. Takođe, će biti potrebno da omogućite set_db_timezone vrednost u konfiguracijskoj datoteki ako se server nalazi u drugoj vremenskoj zoni od baze va&scaron;ih primarnih korisnika.';
$lang['timezone'] = 'Vremenska zona';
$lang['none'] = 'Nijedna';
$lang['test_error_estrict'] = 'Proveravam <em>error_reporting</em> kako bih bio siguran da je E_STRICT onemogućen';
$lang['test_estrict_failed'] = 'E_STRICT je omogućen';
$lang['info_estrict_failed'] = 'Neke od bibilioteka koje koristi CMSMS ne rade najbolje sa funkcijom E_STRICT.  Isključite je pre nego &scaron;to nastavite';
$lang['test_error_edeprecated'] = 'Proveravam error_reporting kako bih bio siguran da je E_DEPRECATED onemogućen';
$lang['test_edeprecated_failed'] = 'E_DEPRECATED je omogućen';
$lang['info_edeprecated_failed'] = 'Ukoliko je E_DEPRECATED uključen u va&scaron;im obave&scaron;tenjima o gre&scaron;kama, korisnici će videti mno&scaron;tvo upozorenja koja mogu da utiču na prikaz i funkcionalnost sajta';
$lang['invalidemail'] = 'Uneta adresa e-po&scaron;te je neispravna';
$lang['empty_query'] = 'Prazan upit?? %s';
$lang['no_db_driver'] = 'Nisu pronađeni kompatibilni pokretački programi za bazu podataka';
$lang['test_check_output_buffering'] = 'Proveravam <em>output buffering</em>';
$lang['test_check_output_buffering_failed'] = '<em>Output buffering</em> je isključen. Verovatno nećete biti u mogućnosti da koristitie nijednu funkcionalnost koja zavisi od ovoga';
$lang['phpinfo'] = 'Prikaži podatke o PHP-u';
$lang['mod_security'] = '<em>Apache Mod Security</em>';
$lang['test_check_tempnam'] = 'Proveravam funkciju <em>tempnam</em>';
$lang['test_check_db_drivers'] = 'Drajveri baza podataka';
$lang['test_check_db_drivers_failed'] = 'Nisu pronađeni drajveri baza podataka';
$lang['test_check_register_globals'] = 'Proveravam <em>PHP register globals</em>';
$lang['test_check_register_globals_failed'] = '<em>PHP register globals</em> je aktivan. Iz bezbednosnih razloga ovo treba da isključite.';
$lang['test_check_disable_functions'] = 'Proveravam <em>PHP disable functions</em>';
$lang['test_check_disable_functions_failed'] = 'Upozorenje: ovo je spisak isključenih funkcija na va&scaron;em serveru.';
$lang['install_admin_db_port'] = 'Port baze podataka';
$lang['install_admin_db_port_info'] = 'Ako ne znate koji je, ostavite ovo polje prazno.';
$lang['install_admin_db_socket'] = 'Soket baze podataka';
$lang['install_admin_db_socket_info'] = 'NIJE PODRŽANO.';
$lang['install_admin_frontendlang'] = 'Podrazumevani jezik za javni deo sajta. Ovim se pode&scaron;avaju lokalne postavke neophodne za različite funkcije upravljanja datumima i sl.';
$lang['install_default_encoding'] = 'U skoro svim slučajevima default_encoding treba da bude utf-8.';
$lang['installer_done'] = '[zavr&scaron;eno]';
$lang['installer_failed'] = '[neuspe&scaron;no]';
$lang['create_permission'] = 'Kreiram ovla&scaron;ćenja ...';
$lang['add_column_sql'] = 'Dodajem kolone u tabelu %s ...';
$lang['update_table_sql'] = 'Ažuriram tabelu %s ...';
$lang['installing_module'] = 'Instaliram modul %s ...';
$lang['updating_schema_version'] = 'Ažuriram shemu verzije %s ...';
$lang['upgrade_config'] = 'Ažuriram <em>config.php</em>';
$lang['upgrade_config_info'] = 'ažuriram config';
$lang['upgrade_failed_again'] = 'Jedna ili vi&scaron;e nadogradnji nisu uspele. Ispravite problem i kliknite na donje dugme za ponovnu proveru';
$lang['upgrade_cache_dirs'] = 'Čistim direktorijume ke&scaron;a';
$lang['cannot_clean_cache_dirs'] = 'Ne mogu da očistim direktorijume ke&scaron;a!';
$lang['upgrade_schema'] = 'Ažuriranje &scaron;eme baze podataka';
$lang['need_upgrade_schema'] = '&Scaron;ema baze podataka CMS MS-a mora biti ažurirana.<br />Trenutno koristite &scaron;emu verzije %s, koju treba nadograditi na verziju %s';
$lang['schema_ok'] = '&Scaron;ema baze podataka je ažurna. Koristite &scaron;emu verzije %s';
$lang['noneed_upgrade_schema'] = '&Scaron;ema baze podataka je ažurna. Koristite &scaron;emu verzije %s';
$lang['upgrade_modules'] = 'Ažuriram module';
$lang['noneed_upgrade_modules'] = 'Sistemski moduli su ažurni';
$lang['upgrade_sql_module_from_to'] = 'Ažuriram SQL za modul &quot;%s&quot; sa %s na %s ...';
$lang['upgrade_event_module_from_to'] = 'Ažuriram Events za modul &quot;%s&quot; sa %s na %s ...';
$lang['sitedown_not_removed'] = 'Ne mogu da uklonim datoteku tmp/cache/SITEDOWN. Uklonite je ručno. Ukoliko je ne uklonite,  na va&scaron;em sajtu će ostati poruka &quot;Sajt je nedostupan zbog održavanja&quot;';
$lang['upgrade_ok'] = 'Pregledajte <em>config.php</em>, proverite i izmenite sve nove postavke ukoliko je potrebno, a zatim podesite ovla&scaron;ćenje nad datotekom na zaključani status. Takođe biste trebali da proverite da li su Va&scaron;i moduli ažurni, tako &scaron;to ćete otići na  stranicu Ekstenzije -> Upravljanje modulima i pogledati karticu  &quot;Dostupne nadogradnje&quot;';
$lang['upgrade_complete'] = 'Proces ažuriranja je zavr&scaron;en';
$lang['upgrade_end'] = 'CMS je ažuran. Kliknite %s da biste oti&scaron;li na Va&scaron; CMS MS sajt, a možete i da pogledate %s.';
$lang['here'] = 'ovde';
$lang['go_to_admin'] = 'Administratorski deo sajta';
$lang['errorfilenot'] = 'Datoteka nije pronađena!';
$lang['errorfilenotwritable'] = 'Datoteka je zaključana za pisanje!';
$lang['nofiles'] = 'Ovaj izvor ne postoji!';
$lang['is_directory'] = 'Ovaj izvor je direktorijum!';
$lang['is_readable_false'] = 'Ovaj izvor nije čitljiv!';
$lang['checksum_match'] = 'Kontrolna datoteka se podudara!';
$lang['checksum_not_match'] = 'Kontrolna datoteka se ne podudara!';
$lang['not_checksum'] = 'Ne mogu da dobavim kontrolnu datoteku!';
$lang['format_datetime'] = '%c';
$lang['upload_err_ini_size'] = 'Preneta datoteka prema&scaron;uje direktivu upload_max_filesize u php.ini!';
$lang['upload_err_form_size'] = 'Preneta datoteka prema&scaron;uje direktivu MAX_FILE_SIZE koja je definisana u HTML obrascu.';
$lang['upload_err_partial'] = 'Datoteka je preneta samo delimično.';
$lang['upload_err_no_file'] = 'Nijedna datoteka nije preneta.';
$lang['upload_err_no_tmp_dir'] = 'Nedostaje privremeni direktorijum.';
$lang['upload_err_cant_write'] = 'Upis datoteke na disk nije uspeo.';
$lang['upload_err_extension'] = 'Prenos datoteke je zaustavljen zbog ekstenzije.';
$lang['upload_err_empty'] = 'Veličina datoteke je nula';
$lang['upload_err_unknown'] = 'Nepoznati problem sa prenosom datoteke.';
$lang['function_file_uploads_off'] = '<em>file_uploads</em> je isključen u va&scaron;oj PHP konfiguraciji.';
$lang['upload_file_no_readable'] = 'Preneta datoteka nije čitljiva.';
$lang['upload_file_multiple'] = 'Vi&scaron;estruki prenos datoteka nije dozvoljen.';
$lang['test_check_magic_quotes_gpc'] = '<em>Magic quotes</em> za Get/Post/Cookie operacije';
$lang['test_check_magic_quotes_gpc_failed'] = 'Kada je opcija <em>magic_quotes<iem> uključena, svi apostrofi, navodnici i kose crte su automatski zamenjeni kosom crtom. Ovo može da izazove mnogo problema u CMS-u.';
$lang['test_check_magic_quotes_runtime'] = '<em>Magic quotes<em> u runtime';
$lang['test_check_magic_quotes_runtime_failed'] = 'Kada je opcija <em>magic_quotes<em> uključena, većina funkcija koje vraćaju podatke iz bilo koje vrste spoljnih izvora, uključujući baze podataka i tekstualne datoteke, imaće navodnike zamenjene kosom crtom. To će prouzrokovati probleme u radu CMSMS-a.';
$lang['install_admin_checksum'] = 'Proverite Va&scaron;u instalaciju';
$lang['upgrade_admin_checksum'] = 'Proverite nadogradnju Va&scaron;eg sistema';
$lang['checksum'] = 'Test kontrolnom datotekom';
$lang['checksum_file'] = 'Kontrolna datoteka';
$lang['install_test_checksum'] = 'Integritet va&scaron;ih CMS datoteka možete testirati upoređivanjem sa originalnom kontrolnom datotekom CMS-a  <em>(checksum)</em>.  To Vam može pomoći kod otkrivanja problema sa prenosom podataka.';
$lang['checksum_passed'] = 'Svi podaci se slažu!';
$lang['checksum_failed'] = 'Prilikom kontrolnog poređenja pronađene su gre&scaron;ke. Pogledajte pomoć za detaljnije informacije';
$lang['test_check_open_basedir'] = 'Proveravam PHP <em>Open Basedir</em>';
$lang['test_check_open_basedir_failed'] = 'Restrikcije <em>Open basedir</em> su na snazi. Zbog toga možete imati problema sa nekim dodatim funckionalnostima';
$lang['unlimited'] = 'Neograničeno';
$lang['test_open_basedir_session_save_path'] = 'Izgleda da su restrikcije <em>Open basedir</em> na snazi. Ukoliko imate problema sa funkcijama SESSION i <em>ini_set</em> možete da poku&scaron;ate da omogućite sesije sa kolačićima dodajući: <em>ini_set(&#039;session.use_only_cookies&#039;, 1);<em> na vrh Va&scaron;e datoteke config.php';
$lang['install_warn_db_createtables'] = 'Obično ovo polje treba da bude uvek čekirano. Budite obazrivi kada isključujete ovu opciju.';
$lang['install_admin_tablesnotcreated'] = 'Proces instalacije je zavr&scaron;en. Na Va&scaron; zahtev tabele u bazi nisu kreirane. Bez obzira na to, konfiguraciona datoteka je resetovana i svi testovi pred instalaciju su bili uspe&scaron;ni. Hvala. Pogledajte Va&scaron;';
$lang['info_create_dir_and_file'] = 'Vlasnik HTTP procesa ne može da kreira datoteku unutar direktorijuma čiji je vlasnik. ovo verovatno znači da je <em>safe mode</em> uključen na neki način. Mnoge funkcije unutar CMSMS-a neće raditi ispravno bez ove mogućnosti. Nastavak nije moguć.';
$lang['test_create_dir_and_file'] = 'Proveravam da li <em>httpd</em> proces može da kreira datoteku unutar direktorijuma koji je kreirao.';
$lang['cms_site'] = 'CMS MS sajt';
$lang['or_greater'] = 'ili veći';
$lang['sitename'] = 'Naziv sajta';
$lang['warning_safe_mode'] = '<strong><em>UPOZORENJE:</em></strong> PHP <em>safe mode</em> je uključen.  To može da prozrokuje te&scaron;koće sa datotekama koje se prenose na server preko interfejsa web čitača, uključujući slike, teme i XML pakete modula. Savetujem da se obratite administratoru kako biste isključili <em>safe mode</em>.';
$lang['test'] = 'Testiraj';
$lang['results'] = 'Rezultati';
$lang['untested'] = 'Nije testirano';
$lang['owner'] = 'Vlasnik';
$lang['permissions'] = 'Ovla&scaron;ćenja';
$lang['off'] = 'Isključeno';
$lang['on'] = 'Uključeno';
$lang['permission_information'] = 'Informacije o ovla&scaron;ćenju';
$lang['server_os'] = 'Operativni sistem servera';
$lang['server_api'] = 'API servera';
$lang['server_software'] = 'Softver servera';
$lang['server_information'] = 'Podaci o serveru';
$lang['session_save_path'] = 'Putanja čuvanja sesije';
$lang['max_execution_time'] = 'Maksimalno vreme izvr&scaron;enja';
$lang['gd_version'] = 'Verzija GD';
$lang['upload_max_filesize'] = 'Maksimalna veličina datoteke za prenos';
$lang['post_max_size'] = 'Maksimalna veličina slanja';
$lang['memory_limit'] = 'Limit PHP memorije';
$lang['server_db_type'] = 'Baza podataka na serveru';
$lang['server_db_version'] = 'Verzija baze podataka na serveru';
$lang['phpversion'] = 'Aktuelna verzija PHP-a';
$lang['safe_mode'] = 'PHP <em>Safe Mode<em>';
$lang['php_information'] = 'Informacije o PHP-u';
$lang['cms_install_information'] = 'Informacije o instalaciji CMS-a';
$lang['cms_version'] = 'Verzija CMS-a';
$lang['systeminfo_copy_paste'] = 'Kopirajte i nalepite ovaj označeni tekst u va&scaron; komentar';
$lang['help_systeminformation'] = 'Informacije koje su prikazane ispod prikupljene su sa različitih lokacija i sažete tako da &scaron;to lak&scaron;e pronađete tražene podatke kada poku&scaron;avate da dijagnostikujete problem ili kada tražite pomoć u vezi sa va&scaron;om instalacijom CMS-a.';
$lang['systeminfo'] = 'Informacije o sistemu';
$lang['systeminfodescription'] = 'Prikaz različitih delova podataka o Va&scaron;em sistemu koje mogu da budu korisne prilikom dijagnostifikovanja problema';
$lang['error'] = 'Gre&scaron;ka';
$lang['new_version_available'] = '<em>Napomena:</em> Dostupna je nova verzija CMS Made Simple. Obavestite svog administratora.';
$lang['info_urlcheckversion'] = 'Ukoliko je vrednost ovog polja &quot;none&quot;, neće biti vr&scaron;ena provera. <br/>Ako je polje prazno, koristiće se podrazumevana URL adresa.';
$lang['urlcheckversion'] = 'Provera nove verzije CMS-a kori&scaron;ćenjem ove URL adrese';
$lang['read'] = 'Čitanje';
$lang['write'] = 'Pisanje';
$lang['execute'] = 'Izvr&scaron;enje';
$lang['group'] = 'Grupa';
$lang['other'] = 'Drugo';
$lang['global_umask'] = 'Maska kreiranja datoteka (umask)';
$lang['errorcantcreatefile'] = 'Ne mogu da kreiram datoteku (problem sa ovla&scaron;ćenjima?)';
$lang['add'] = 'Dodaj';
$lang['about'] = 'O';
$lang['action'] = 'Akcija';
$lang['actionstatus'] = 'Akcija/Status';
$lang['active'] = 'Aktivan';
$lang['cantremove'] = 'Nemoguće ukloniti';
$lang['changepermissions'] = 'Promenite ovla&scaron;ćenja';
$lang['changepermissionsconfirm'] = 'KORISTITI OBAZRIVO\n\nOva akcija će poku&scaron;ati da utvrdi da li sve datoteke koje su sastavni deo modula imaju ovla&scaron;ćenje pisanja od strane web servera.\nDa li ste sigurni da želite da nastavite?';
$lang['success'] = 'Uspe&scaron;no';
$lang['advanced'] = 'Napredno';
$lang['back'] = 'Povratak na meni';
$lang['cancel'] = 'Otkaži';
$lang['cantchmodfiles'] = 'Menjanje ovla&scaron;ćenja nad nekim datotekama nije uspelo';
$lang['cantremovefiles'] = 'Problem kod uklanjanja datoteka (ovla&scaron;ćenja?)';
$lang['create'] = 'Kreiraj';
$lang['database'] = 'Baza podataka';
$lang['databaseprefix'] = 'Prefiks baze podataka';
$lang['databasetype'] = 'Tip baze podataka';
$lang['date'] = 'Datum';
$lang['default'] = 'Podrazumevano';
$lang['delete'] = 'Obri&scaron;i';
$lang['deleteconfirm'] = 'Jeste li sigurni da želite da obri&scaron;ete - %s - ?';
$lang['description'] = 'Opis';
$lang['directoryexists'] = 'Ovaj direktorijum već postoji.';
$lang['down'] = 'Dole';
$lang['edit'] = 'Uredi';
$lang['email'] = 'Adresa e-po&scaron;te';
$lang['errordeletingfile'] = 'Ne mogu da obri&scaron;em datoteku. Problem sa ovla&scaron;ćenjima?';
$lang['errordirectorynotwritable'] = 'Nemam ovla&scaron;ćenja da pi&scaron;em u direktorijum. Razlog može da bude u ovla&scaron;ćenjima i vlasni&scaron;tvu nad datotekama. Moguće je i da je <em>Safe mode<em> na snazi.';
$lang['cachenotwritable'] = 'Nije dozvoljeno pisanje u <em>cache</em> direktorijum. Pražnjenje ke&scaron;a neće funkcionisati. Dodelite direkotrijumu  <em>tmp/cache<em> puna <em>read/write/execute<em> ovla&scaron;ćenja (chmod 777).  Možda ćete morati da isključite <em>safe mode<em>.';
$lang['modulesnotwritable'] = 'Nije moguće pisati u direktorijum modules. Ukoliko želite da instalirate modul preno&scaron;enjem XML datoteke, morate dodeliti direktoijumu modules puna read/write/execute ovla&scaron;ćenja (chmod 777).  Moguće je i da je <em>Safe mode<em> na snazi.';
$lang['false'] = 'Netačno';
$lang['settrue'] = 'Postavi na Tačno';
$lang['filename'] = 'Naziv datoteke';
$lang['filesize'] = 'Veličina datoteke';
$lang['help'] = 'Pomoć';
$lang['language'] = 'Jezik';
$lang['lastname'] = 'Prezime';
$lang['name'] = 'Ime';
$lang['password'] = 'Lozinka';
$lang['passwordagain'] = 'Lozinka (ponovo)';
$lang['remove'] = 'Ukloni';
$lang['saveconfig'] = 'Sačuvaj konfiuraciju';
$lang['true'] = 'Ta&scaron;no';
$lang['setfalse'] = 'Postavi na Netačno';
$lang['type'] = 'Tip';
$lang['typenotvalid'] = 'Tip nije validan';
$lang['unknown'] = 'Nepoznat';
$lang['user'] = 'Korisnik';
$lang['userdefinedtags'] = 'Korisnikove oznake (UDT)';
$lang['usermanagement'] = 'Upravljanje korisnicima';
$lang['username'] = 'Korisničko ime';
$lang['usernameincorrect'] = 'Netačno korisničko ime ili lozinka';
$lang['version'] = 'Verzija';
$lang['install_title'] = 'Instaliram CMS Made Simple (korak %s)';
$lang['install_system'] = 'Instalacija sistema';
$lang['install_thanks'] = 'Hvala &scaron;to instalirate CMS Made Simple';
$lang['upgrade_title'] = 'Ažuriranje CMS Made Simple sistema (korak %s)';
$lang['upgrade_system'] = 'Nadogradnja sistema';
$lang['upgrade_thanks'] = 'Hvala Vam &scaron;to nadograđujete CMS Made Simple na';
$lang['install_please_read'] = 'Pročitajte stranicu <a rel="external" href="http://docs.cmsmadesimple.org/installation/requirements"><em>Re&scaron;avanje problema pri instalaciji</em></a> u CMS Made Simple Dokumentaciji.';
$lang['install_checking'] = 'Provera ovla&scaron;ćenja i pode&scaron;avanja PHP-a';
$lang['install_test'] = 'Testiranje';
$lang['install_result'] = 'Rezultat';
$lang['install_required_settings'] = 'Obavezna pode&scaron;avanja';
$lang['install_recommended_settings'] = 'Preporučena pode&scaron;avanja';
$lang['install_you_have'] = 'Imate';
$lang['install_legend'] = 'Legenda';
$lang['install_symbol'] = 'Simbol';
$lang['install_definition'] = 'Definicija';
$lang['install_value_passed'] = 'Obavezni test uspe&scaron;an';
$lang['install_value_failed'] = 'Obavezni test neuspe&scaron;an';
$lang['install_error_fragment'] = 'Informacije o re&scaron;avanju problema sa instalacijom';
$lang['install_value_required'] = 'Pode&scaron;avanja su ispod minimalnih vrednosti';
$lang['install_value_recommended'] = 'Pode&scaron;avanje je iznad minimalne, ali ispod preporučene vrednosti, ili...<br /> su vrednosti koje <em>mogu</em> biti neophodne za neke opcione funkcionalnosti nedostupne';
$lang['install_value_exceed'] = 'Pode&scaron;avanja su u skladu ili nadma&scaron;uju preporučene vrednosti ili...<br />  su vrednosti koje <em>mogu</em> biti neophodne za neke opcione funkcionalnosti dostupne';
$lang['install_test_failed'] = 'Jedan ili vi&scaron;e testova bili su neuspe&scaron;ni ili su pod upozorenjem. Možete nastaviti sa instaliranjem sistema, ali neke funkcije možda neće raditi ispravno.<br />Poku&scaron;ajte da ispravite označene stavke, a zatim kliknite na dugme  &quot;Proveri ponovo&quot;, ili kliknite na dugme &quot;Nastavi&quot;.';
$lang['install_test_passed'] = 'Svi testovi su uspe&scaron;no izvr&scaron;eni (barem na minimalnom nivou). Kliknite na dugme &quot;Nastavi&quot;.';
$lang['install_failed_again'] = 'Najmanje jedan test nije uspe&scaron;no izvr&scaron;en. Ispravite problem i kliknite na dugme ispod da biste ponovo pokrenuli testove.';
$lang['install_try_again'] = 'Proveri ponovo';
$lang['install_continue'] = 'Nastavi';
$lang['failure'] = 'Neuspe&scaron;no';
$lang['caution'] = 'Upozorenje';
$lang['install_admin_umask'] = 'Testiranje maske za kreiranje datoteka';
$lang['install_test_umask'] = 'Kliknite na dugme &quot;Testiraj&quot; da biste proverili <em>umask</em>...';
$lang['test_umask_text'] = 'umask (skraćenica za <em><strong>u</strong>ser file creation mode <strong>mask</strong></em>) je funkcionalnost u  POSIX okruženjima koja utiče na podrazumevani režim kreiranja novih datoteka od strane fajl sistema. Kontroli&scaron;e koje dozvole neće biti pode&scaron;ene za bilo koju novokreiranu datoteku.';
$lang['test_check_umask'] = 'Rezultat testa nad datotekom krerianom u';
$lang['test_umask_not_given'] = 'Umask nije postavljen';
$lang['test_check_umask_failed'] = 'Testiranje umask-e nije uspelo';
$lang['test_username_not_given'] = 'Morate uneti korisničko ime.';
$lang['test_username_illegal'] = 'Korisničko ime sadrži najmanje jedan nedozvoljeni karakter.';
$lang['test_not_both_passwd'] = 'Popunite oba polja za lozinku.';
$lang['test_passwd_not_match'] = 'Lozinke se ne podudaraju!';
$lang['test_email_accountinfo'] = 'Označeno je polje za obave&scaron;tenje putem e-po&scaron;te, ali adresa e-po&scaron;te nije uneta!';
$lang['test_database_prefix'] = 'Prefiks naziva tabela sadrži nedozvoljene karaktere';
$lang['test_no_dbms'] = 'Nije odabran sistem za upravljanje bazom podataka.';
$lang['test_could_not_connect_db'] = 'Neuspelo povezivanje sa bazom podataka. Proverite da li su korisničko ime i lozinka ispravni, i da li korisnik ima pravo pristupa navedenoj bazi podataka.';
$lang['test_could_not_drop_table'] = 'Ne mogu da obri&scaron;em tabelu. Proverite da li korisnik ima ovla&scaron;ćenje za brisanje tabela u datoj bazi podataka.';
$lang['test_could_not_create_table'] = 'Ne mogu da kreiram tabelu. Proverite da li korisnik ima ovla&scaron;ćenje za kreiranje tabela u datoj bazi podataka.';
$lang['test_check_php'] = 'Proveravam da li je verzija PHP-a %s+';
$lang['test_min_recommend'] = '(minimum %s, preporučeno %s ili vi&scaron;e)';
$lang['test_min_recommend_plus'] = '(min %s, preporučeno %s+)';
$lang['test_requires_php_version'] = 'CMS Made Simple zahteva PHP verzije 5.2.4 ili vi&scaron;e (vi imate %s), ali je PHP %s ili vi&scaron;a preporučena kako bi se osigurala maksimalna kompatibilnost sa dodacima koje su kreirali korisnici';
$lang['test_check_md5_func'] = 'Proveravam funkciju md5';
$lang['test_check_safe_mode'] = 'Provervam <em>safe mode</em>';
$lang['test_check_safe_mode_failed'] = '<em>PHP safe mode</em> može da stvori određene probleme prilikom prenosa datoteka i drugih funkcija. To sve zavisi od toga koliko su striktna serverska pode&scaron;avanja za <em>safe mode</em>.';
$lang['test_check_tokenizer'] = 'Provervam funkcije tokenizer';
$lang['test_check_tokenizer_failed'] = 'Bez tokenizera može da dođe do prikaza potpuno praznih stranica. Ova funkcija mora biti instalirana.';
$lang['test_check_gd'] = 'Provervam bibilioteku GD';
$lang['test_check_gd_failed'] = 'Biblioteka GD je obavezna za rad nekih modula i funkcionalnosti.';
$lang['test_check_write'] = 'Provervam ovla&scaron;ćenja za pisanje u';
$lang['test_may_not_exist'] = 'Ova datoteka možda jo&scaron; ne postoji. Ako ne postoji treba da kreirate praznu datoteku sa voim nazivom. Takođe proverite da li ovla&scaron;ćenja dozvoljavaju upis podatak u datotekau od strane serverskih proce. If it does not, you should createsa.';
$lang['could_not_retrieve_a_value'] = 'Ne mogu da dobavim vrednost.... svejedno nastavljam.';
$lang['displaying_the_value_originally'] = '<br />Prikazujem vrednost koja je izvorno pode&scaron;ena u konfiguracionoj datoteci (ovo može biti netačno).';
$lang['test_check_xml_func'] = 'Proveravam osnovnu podr&scaron;ku za XML (expat)';
$lang['test_allow_url_fopen_failed'] = 'Kada je allow url fopen isključen nećete biti u mogućnosti da pristupite URL objektu kao &scaron;to je datoteka koristeći ftp ili http protokol.';
$lang['test_remote_url'] = 'Test za udaljenu URL adresu';
$lang['test_remote_url_failed'] = 'Verovatno nećete biti u mogućnosti da otvorite datoteku na udaljenom web serveru.';
$lang['connection_error'] = 'Čini se da odlazne HTTP konekcije ne rade! Postoji li za&scaron;titni zid ili neki ACL za eksterne konekcije? To će dovesti do problema sa upravljačem modula i, potecijalno, sa drugim fukcionalnostima.';
$lang['remote_connection_timeout'] = 'Vreme za povezivanje je isteklo!';
$lang['search_string_find'] = 'Povezivanje je u redu!';
$lang['connection_failed'] = 'Povezivanje nije uspelo!';
$lang['remote_response_ok'] = 'Daljinski odgovor: u redu!';
$lang['remote_response_404'] = 'Daljinski odgovor: nije pronađeno!';
$lang['remote_response_error'] = 'Daljinski odgovor: gre&scaron;ka!';
$lang['test_check_file_upload'] = 'Proveravam prenose datoteka';
$lang['test_check_file_failed'] = 'Kada je prenos datoteka na server onemogućen niste u mogućnosti da koristite ni jednu  funkciju prenosa podataka koja je sastavni deo CMSMS-a. Ukoliko je moguće, Va&scaron; sistem administrator bi trebao da ukloni ovu restrikciju kako bi bila omogućena pravilna upotreba sistemskih funkcija upravljanja datotekama. Nastavite sa oprezom.';
$lang['test_check_memory'] = 'Proveravam PHP <em>memory limit</em>';
$lang['test_check_memory_failed'] = 'Moguće je da nemate dovoljno memorije za pravilno funkcionisanje CMSMS-a ili dodataka koje želite da koristite. Ukoliko je moguće, Va&scaron; adminsitrator bi trebao da podigne ove vrednosti. Nastavite sa oprezom.';
$lang['test_check_time_limit'] = 'Proveravam PHP <em>time limit</em> u sekundama';
$lang['test_check_time_limit_failed'] = 'Vreme u sekundama, tokom kojeg je skriptu dozvoljeno izvr&scaron;avanje. Ukoliko je ova vrednost prekoračena, skript će vratiti poruku o fatalnoj gre&scaron;ci.';
$lang['test_check_post_max'] = 'Proveravam <em>max post size</em>';
$lang['test_check_post_max_failed'] = 'Verovatno nećete biti u mogućnosti da &scaron;aljete veću količinu podataka. Obratite pažnju na ovo ograničenje.';
$lang['test_check_upload_max'] = 'Proberavam <em>max upload file size</em>';
$lang['test_check_upload_max_failed'] = 'Verovatno nećete biti u mogućnosti da &scaron;aljete veću količinu podataka koristeći uključene funkcije upravljanja datotekama. Oratite pažnju na ovo ograničenje.';
$lang['test_check_writable'] = 'Proveravam da li je moguće pisati u %s';
$lang['test_check_upload_failed'] = 'U direktorijum <em>uploads<em> nije dozvoljeno pisanje. Vi i pored toga možete da instalirate sistem, ali nećete biti u mogućnosti da postavljate datoteke na server preko administratorke konzole.';
$lang['test_check_images_failed'] = 'U direktorijum <em>images<em> nije dozvoljeno pisanje. Vi i pored toga možete da instalirate sistem, ali nećete biti u mogućnosti da postavljate datoteke na server preko administratorke konzole.';
$lang['test_check_modules_failed'] = 'U direktorijum <em>modules</em> nije dozvoljeno pisanje. Vi i pored toga možete da instalirate sistem, ali nećete biti u mogućnosti da postavljate datoteke na server preko administratorke konzole.';
$lang['test_check_file_get_contents'] = 'Proveravam <em>file_get_contents</em>';
$lang['test_check_file_get_contents_failed'] = 'Verovatno nećete biti u mogućnosti da koristite bilo koju funkcionalnost koja koristi ovu fukciju';
$lang['test_check_session_save_path'] = 'Provervam da li je moguće pisati u <em>session.save_path</em>';
$lang['test_empty_session_save_path'] = 'Va&scaron; <em>session.save_path</em> putanja je prazna. PHP će koristiti privremeni direktorijum va&scaron;eg operativnog sistema. Ukoliko imate problema sa SESIJOM i radom <em>ini_set-a<em>, možete poku&scaron;ati da omogućite kolačiće sesije dodavanjem: <em>ini_set(&#039;session.use_only_cookies&#039;, 1);</em> na početak va&scaron;e <em>config.php</em> datoteke';
$lang['test_check_session_save_path_failed'] = 'Va&scaron;a <em>session.save_path</em> putanja je &quot;%s&quot;. Ukoliko na njoj nije moguće pisanje, prijavljivanje u administratorsku konzolu neće funkcionisati. Trebalo bi da postavite ovla&scaron;ćenje pisanja za ovu putanju ukoliko imate problema sa prijavljivanjem u adminsitratorsku konzolu. Ovaj test neće proći ukoliko je <em>safe_mode</em> uključen (vidi ispod).';
$lang['test_check_ini_set'] = 'Proveravam da li <em>ini_set</em> radi';
$lang['test_check_ini_set_failed'] = 'Iako mogućnost da menjate postavke datoteke <em>php.ini<em> nije obavezna, neke dodatne (opcione) funkcionalnosti koriste <em>ini_set<em> za pro&scaron;irenje vremenskih ograničenja (<em>timeout<em>) i dozvoljavaju prenos većih datoteka itd. Možete imati te&scaron;koća sa nekim dodatnim fukcionalnostima bez ove mogućnosti. Ovaj test može biti neuspe&scaron;an ukoliko je uključena funkcija <em>safe_mode<em> (vidi ispod).';
$lang['install_admin_header'] = 'Podaci o administratorskom nalogu';
$lang['install_admin_info'] = 'Odaberite korisničko ime, lozinku i adresu e-po&scaron;te za va&scaron; administratorski nalog. Obavezno sačuvajte ove podatke na sigurnom mestu.';
$lang['install_admin_email'] = 'Adresa e-po&scaron;te';
$lang['install_admin_email_info'] = 'Po&scaron;alji ove podatke na navedenu adresu e-po&scaron;te';
$lang['install_admin_email_note'] = '<strong>Napomena:</strong> Ovaj zadatak koristi <em>mail</em> PHP funkciju. Ukoliko ne primite ovu poruku, to može biti znak da Va&scaron; server nije pravilno pode&scaron;en i da biste trebali da se obratite administratoru.';
$lang['install_admin_sitename'] = 'Ovo je naziv Va&scaron;eg sajta. On će biti kori&scaron;ćen na različitim mestima unutar podrazumevanog &Scaron;ablona, i može se koristiti bilo gde pomoću {sitename} taga.';
$lang['install_admin_db'] = 'Podaci o bazi podataka';
$lang['install_admin_db_info'] = '<p>Proverite da li ste kreirali bazu podataka i da li ste dodelili sva ovla&scaron;ćenja korisniku koji će koristiti bazu.</p>
<p>Za MySQL, možete koristiti sledeće uputstvo:</p>
<p>Prijavite se na mysql iz konzole i pokrenite sledeće komande:</p>
<ol>
<li>create database cms; (ovde koristite koji god naziv želite, ali potrudite se da ga zapamtite, jer će biti potrebno da ga unsete na ovoj stranici)</li>
<li>grant all privileges on cms.* to cms_user@localhost identified by &#039;cms_pass&#039;;</li>
</ol>';
$lang['install_admin_follow'] = 'Popunite sledeća polja';
$lang['install_admin_db_type'] = 'Tip baze podataka';
$lang['install_admin_no_db'] = 'Izgleda da ni jedan validni upravljački program za bazu podataka nije kompajliran u va&scaron;u PHP instalaciju. Proverite da li imate instaliranu podr&scaron;ku za mysql, mysqli i/ili postgres7, pa poku&scaron;ajte ponovo.';
$lang['install_admin_db_host'] = 'Adresa hosta baze podataka';
$lang['install_admin_db_name'] = 'Naziv baze podataka';
$lang['install_admin_db_create'] = 'Kreiraj tabele (pažnja: <strong>bri&scaron;e postojeće podatke</strong>)';
$lang['install_admin_db_prefix'] = 'Prefiks tabela';
$lang['install_admin_db_sample'] = 'Instaliraj uzorke sadržaja i tema';
$lang['retry'] = 'Poku&scaron;aj ponovo';
$lang['install_admin_db_create_seq'] = 'Kreiram sekvencu tabele %s ...';
$lang['install_admin_importing'] = 'Uvozim uzorke podataka...';
$lang['invalid_query'] = 'Neispravan upit: %s';
$lang['install_creating_table'] = '<p>Kreiram tabelu %s... [%s]</p>';
$lang['install_creating_index'] = '<p>Kreiram indeks u tabeli %s... [%s]</p>';
$lang['done'] = 'gotovo';
$lang['failed'] = 'neuspe&scaron;no';
$lang['install_admin_error_schema'] = 'Gre&scaron;ka u preuzimanju SQL sheme';
$lang['install_admin_set_account'] = 'Pode&scaron;avam podatke administratorskog naloga...';
$lang['install_admin_set_sitename'] = 'Upisujem naziv sajta...';
$lang['install_admin_setup'] = 'Poku&scaron;ajmo sada da podesimo Va&scaron;u konfiguracionu datoteku, po&scaron;to smo već obavili većinu neophodnih stvari. Velika je verovatnoća da ćete većinu ovih vrednosti ostaviti neizmenjene, pa kad budete spremni kliknite na dugme &quot;Nastavi&quot;';
$lang['install_admin_docroot'] = 'CMS bazični direktorijum (iz perspektive Veb servera)';
$lang['install_admin_docroot_path'] = 'Putanja do bazičnog direktorijuma';
$lang['install_admin_querystring'] = 'String upita (ne dirajte ovo, osim ako nemate problem, zatim ručno uredite config.php)';
$lang['invalid_querys'] = '<b>UPOZORENJE</b>: Neispravni upiti nad va&scaron;om bazom podataka!';
$lang['install_admin_sitedown'] = 'Gre&scaron;ka: Brisanje datoteke tmp/cache/SITEDOWN nije uspelo. Obri&scaron;ite je ručno.';
$lang['install_admin_update_hierarchy'] = 'Ažuriram pozicije hijerarhije...';
$lang['install_admin_set_core_event'] = 'Pode&scaron;avam sistemske događaje...';
$lang['install_admin_install_modules'] = 'Instaliram module...';
$lang['install_admin_index_search'] = 'Pretražujem indeks...';
$lang['install_admin_clear_cache'] = 'Praznim ke&scaron; sajta (ako ga ima)...';
$lang['install_admin_emailing'] = 'Slanje podataka o administratorskom nalogu e-po&scaron;tom...';
$lang['install_admin_congratulations'] = 'Čestitamo, sve je uspe&scaron;no zavr&scaron;eno - evo ga Va&scaron;';
$lang['could_not_connect_db'] = 'Ne mogu da se povežem sa bazom podataka. Proverite da li su korisničko ime i lozinka ispravni, i da li korisnik ima pravo pristupa toj bazi.';
$lang['cannot_write_config'] = 'Gre&scaron;ka: ne mogu da pi&scaron;em u %s.';
$lang['email_accountinfo_subject'] = 'Podaci o administratorskom nalogu CMS Made Simple-a';
$lang['email_accountinfo_message'] = 'Hvala &scaron;to ste instalirali CMS Made Simple&amp;trade;.

Ovo su podaci va&scaron;eg novog naloga:
korisničko ime: %s
lozinka: %s

Ovde se možete prijaviti na administratorski deo sajta: %s';
$lang['utma'] = '156861353.114482514.1383506026.1383506026.1383510479.2';
$lang['utmc'] = '156861353';
$lang['utmz'] = '156861353.1383506026.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none)';
$lang['utmb'] = '156861353';
?>