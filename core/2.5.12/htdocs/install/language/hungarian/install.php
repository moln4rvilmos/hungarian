<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright   (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license     GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package     installer
 * @since       2.3.0
 * @author      Haruki Setoyama <haruki@planewave.org>
 * @author      Kazumi Ono <webmaster@myweb.ne.jp>
 * @author      Skalpa Keo <skalpa@xoops.org>
 * @author      Taiwen Jiang <phppp@users.sourceforge.net>
 * @author      dugris <dugris@frxoops.org>
 */
// _LANGCODE: hu
// _CHARSET : UTF-8
// Translator: XOOPS Magyar Fordító Csapat
define('SHOW_HIDE_HELP', 'Segítő szöveg mutatása/elrejtése');
// License
//define('LICENSE_NOT_WRITEABLE', 'A licenc fájl ("%s") NEM írható!');
//define('LICENSE_IS_WRITEABLE', '%s licenc írható.');
// Configuration check page
define('SERVER_API', 'Szerver API');
define('PHP_EXTENSION', '%s kiterjesztés');
define('CHAR_ENCODING', 'Karakterkódolás');
define('XML_PARSING', 'XML elemzés');
define('REQUIREMENTS', 'Követelmények');
define('_PHP_VERSION', 'PHP verzió');
define('RECOMMENDED_SETTINGS', 'Ajánlott beállítások');
define('RECOMMENDED_EXTENSIONS', 'Ajánlott kiterjesztések');
define('SETTING_NAME', 'Beállítás neve');
define('RECOMMENDED', 'Ajánlott');
define('CURRENT', 'Jelenlegi');
define('RECOMMENDED_EXTENSIONS_MSG', 'Ezek a kiterjesztések nem szükségesek a normál használathoz, de egyes speciális funkciók
    (például a többnyelvűség vagy az RSS támogatás) felfedezéséhez szükségesek lehetnek. Ezért ajánlott a telepítésük.');
define('NONE', 'Nincs');
define('SUCCESS', 'Sikerült');
define('WARNING', 'Figyelmeztetés');
define('FAILED', 'Sikertelen');
// Titles (main and pages)
define('XOOPS_INSTALL_WIZARD', 'XOOPS Telepítő Varázsló');
define('LANGUAGE_SELECTION', 'Nyelvválasztás');
define('LANGUAGE_SELECTION_TITLE', 'Válassza ki a nyelvet');        // L128
define('INTRODUCTION', 'Bevezetés');
define('INTRODUCTION_TITLE', 'Üdvözöljük a XOOPS Telepítő Varázslóban');        // L0
define('CONFIGURATION_CHECK', 'Konfiguráció ellenőrzése');
define('CONFIGURATION_CHECK_TITLE', 'Szerver konfiguráció ellenőrzése');
define('PATHS_SETTINGS', 'Útvonalak beállítása');
define('PATHS_SETTINGS_TITLE', 'Útvonalak beállítása');
define('DATABASE_CONNECTION', 'Adatbázis csatlakozás');
define('DATABASE_CONNECTION_TITLE', 'Adatbázis csatlakozás');
define('DATABASE_CONFIG', 'Adatbázis konfiguráció');
define('DATABASE_CONFIG_TITLE', 'Adatbázis konfiguráció');
define('CONFIG_SAVE', 'Konfiguráció mentése');
define('CONFIG_SAVE_TITLE', 'Rendszerkonfiguráció mentése');
define('TABLES_CREATION', 'Táblák létrehozása');
define('TABLES_CREATION_TITLE', 'Adatbázis táblák létrehozása');
define('INITIAL_SETTINGS', 'Kezdeti beállítások');
define('INITIAL_SETTINGS_TITLE', 'Kérjük, adja meg a kezdeti beállításokat');
define('DATA_INSERTION', 'Adatok beillesztése');
define('DATA_INSERTION_TITLE', 'Beállítások mentése az adatbázisba');
define('WELCOME', 'Üdvözöljük');
define('WELCOME_TITLE', 'Üdvözöljük a XOOPS webhelyén');        // L0
// Settings (labels and help text)
define('XOOPS_PATHS', 'XOOPS Fizikai útvonalak');
define('XOOPS_URLS', 'Webhelyek (URL-ek)');
define('XOOPS_ROOT_PATH_LABEL', 'XOOPS dokumentumok gyökérkönyvtárának fizikai útvonala');
define('XOOPS_ROOT_PATH_HELP', 'A XOOPS dokumentumok (kiszolgált) könyvtárának fizikai útvonala, záró perjel NÉLKÜL');
define('XOOPS_LIB_PATH_LABEL', 'XOOPS könyvtár mappa');
define('XOOPS_LIB_PATH_HELP', 'A XOOPS könyvtár mappa fizikai útvonala záró perjel NÉLKÜL, a későbbi kompatibilitás érdekében. Helyezze a mappát a ' . XOOPS_ROOT_PATH_LABEL . ' könyvtáron kívülre a biztonság növelése érdekében.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS adatfájlok mappa');
define('XOOPS_DATA_PATH_HELP', 'A XOOPS adatfájlok (írható) könyvtárának fizikai útvonala záró perjel NÉLKÜL, a későbbi kompatibilitás érdekében. Helyezze a mappát a ' . XOOPS_ROOT_PATH_LABEL . ' könyvtáron kívülre a biztonság növelése érdekében.');
define('XOOPS_URL_LABEL', 'Webhely címe (URL)'); // L56
define('XOOPS_URL_HELP', 'A fő URL, amellyel a XOOPS telepítését el fogja érni'); // L58
define('LEGEND_CONNECTION', 'Szerver csatlakozás');
define('LEGEND_DATABASE', 'Adatbázis'); // L51
define('DB_HOST_LABEL', 'Szerver állomásnév (hostname)');    // L27
define('DB_HOST_HELP', 'Az adatbázis-szerver állomásneve. Ha bizonytalan, a legtöbb esetben a <em>localhost</em> működik'); // L67
define('DB_USER_LABEL', 'Felhasználónév');    // L28
define('DB_USER_HELP', 'A felhasználói fiók neve, amelyet az adatbázis-szerverhez való csatlakozáshoz használ'); // L65
define('DB_PASS_LABEL', 'Jelszó');    // L52
define('DB_PASS_HELP', 'Az adatbázis felhasználói fiókjának jelszava'); // L68
define('DB_NAME_LABEL', 'Adatbázis neve');    // L29
define('DB_NAME_HELP', 'Az adatbázis neve a szerveren. A telepítő megpróbálja létrehozni az adatbázist, ha az nem létezik'); // L64
define('DB_CHARSET_LABEL', 'Adatbázis karakterkészlet');
define('DB_CHARSET_HELP', 'A MySQL karakterkészlet-támogatást tartalmaz, amely lehetővé teszi adatok tárolását különféle karakterkészletek használatával és összehasonlítások végzését különféle rendezési szabályok szerint.');
define('DB_COLLATION_LABEL', 'Adatbázis rendezési szabály (collation)');
define('DB_COLLATION_HELP', 'A rendezési szabály egy karakterkészletben lévő karakterek összehasonlítására vonatkozó szabályok összessége.');
define('DB_PREFIX_LABEL', 'Tábla előtag (prefix)');    // L30
define('DB_PREFIX_HELP', 'Ez az előtag hozzá lesz adva minden újonnan létrehozott táblához az adatbázisban lévő névegyezések elkerülése érdekében. Ha bizonytalan, tartsa meg az alapértelmezettet'); // L63
define('DB_PCONNECT_LABEL', 'Állandó kapcsolat (persistent connection) használata');    // L54
define('DB_PCONNECT_HELP', "Az alapértelmezett: 'Nem'. Hagyja üresen, ha bizonytalan"); // L69
define('DB_DATABASE_LABEL', 'Adatbázis');
define('LEGEND_ADMIN_ACCOUNT', 'Adminisztrátori fiók');
define('ADMIN_LOGIN_LABEL', 'Adminisztrátori bejelentkezési név'); // L37
define('ADMIN_EMAIL_LABEL', 'Adminisztrátori e-mail cím'); // L38
define('ADMIN_PASS_LABEL', 'Adminisztrátori jelszó'); // L39
define('ADMIN_CONFIRMPASS_LABEL', 'Jelszó megerősítése'); // L74
// Buttons
define('BUTTON_PREVIOUS', 'Előző'); // L42
define('BUTTON_NEXT', 'Tovább'); // L47
// Messages
define('XOOPS_FOUND', '%s található');
define('CHECKING_PERMISSIONS', 'Fájl- és könyvtárjogosultságok ellenőrzése...'); // L82
define('IS_NOT_WRITABLE', 'A(z) %s NEM írható.'); // L83
define('IS_WRITABLE', 'A(z) %s írható.'); // L84
define('XOOPS_PATH_FOUND', 'Útvonal megtalálva.');
//define('READY_CREATE_TABLES', 'Nem található XOOPS tábla.<br>A telepítő most készen áll a XOOPS rendszer tábláinak létrehozására.');
define('XOOPS_TABLES_FOUND', 'A XOOPS rendszer táblái már léteznek az adatbázisában.'); // L131
define('XOOPS_TABLES_CREATED', 'A XOOPS rendszer táblái létrehozva.');
//define('READY_INSERT_DATA', 'A telepítő most készen áll a kezdeti adatok adatbázisba történő beillesztésére.');
//define('READY_SAVE_MAINFILE', 'A telepítő most készen áll a megadott beállítások mentésére a <em>mainfile.php</em> fájlba.');
define('SAVED_MAINFILE', 'Beállítások elmentve');
define('SAVED_MAINFILE_MSG', 'A telepítő a megadott beállításokat elmentette a <em>mainfile.php</em> és a <em>secure.php</em> fájlokba.');
define('DATA_ALREADY_INSERTED', 'XOOPS adatok találhatók az adatbázisban.');
define('DATA_INSERTED', 'A kezdeti adatok beillesztve az adatbázisba.');
// %s is database name
define('DATABASE_CREATED', 'A(z) %s adatbázis létrehozva!'); // L43
// %s is table name
define('TABLE_NOT_CREATED', 'Nem sikerült létrehozni a(z) %s táblát'); // L118
define('TABLE_CREATED', 'A(z) %s tábla létrehozva.'); // L45
define('ROWS_INSERTED', '%d bejegyzés beillesztve a(z) %s táblába.'); // L119
define('ROWS_FAILED', 'Nem sikerült beilleszteni %d bejegyzést a(z) %s táblába.'); // L120
define('TABLE_ALTERED', 'A(z) %s tábla frissítve.'); // L133
define('TABLE_NOT_ALTERED', 'Nem sikerült frissíteni a(z) %s táblát.'); // L134
define('TABLE_DROPPED', 'A(z) %s tábla eldobva (törölve).'); // L163
define('TABLE_NOT_DROPPED', 'Nem sikerült törölni a(z) %s táblát.'); // L164
// Error messages
define('ERR_COULD_NOT_ACCESS', 'Nem sikerült elérni a megadott mappát. Kérjük, ellenőrizze, hogy létezik-e, és hogy a szerver számára olvasható-e.');
define('ERR_NO_XOOPS_FOUND', 'Nem található XOOPS telepítés a megadott mappában.');
define('ERR_INVALID_EMAIL', 'Érvénytelen e-mail cím'); // L73
define('ERR_REQUIRED', 'Információ megadása kötelező.'); // L41
define('ERR_PASSWORD_MATCH', 'A két jelszó nem egyezik');
define('ERR_NEED_WRITE_ACCESS', 'A szervernek írási jogosultságot kell adni a következő fájlokhoz és mappákhoz<br>(pl. <em>chmod 775 mappa_név</em> UNIX/LINUX szerveren)<br>Ha nem állnak rendelkezésre, vagy nincsenek megfelelően létrehozva, kérjük, hozza létre őket manuálisan és állítsa be a megfelelő jogosultságokat.');
define('ERR_NO_DATABASE', 'Nem sikerült létrehozni az adatbázist. Részletekért lépjen kapcsolatba a szerver adminisztrátorával.'); // L31
define('ERR_NO_DBCONNECTION', 'Nem sikerült csatlakozni az adatbázis-szerverhez.'); // L106
define('ERR_WRITING_CONSTANT', 'Nem sikerült kiírni a(z) %s konstanst.'); // L122
define('ERR_COPY_MAINFILE', 'Nem sikerült a disztribúciós fájlt átmásolni a(z) %s helyre');
define('ERR_WRITE_MAINFILE', 'Nem sikerült írni a(z) %s fájlba. Kérjük, ellenőrizze a fájl jogosultságát, majd próbálja újra.');
define('ERR_READ_MAINFILE', 'Nem sikerült megnyitni a(z) %s fájlt olvasásra');
define('ERR_INVALID_DBCHARSET', "A(z) '%s' karakterkészlet nem támogatott.");
define('ERR_INVALID_DBCOLLATION', "A(z) '%s' rendezési szabály (collation) nem támogatott.");
define('ERR_CHARSET_NOT_SET', 'Az alapértelmezett karakterkészlet nincs beállítva a XOOPS adatbázishoz.');
define('_INSTALL_CHARSET', 'UTF-8');
define('SUPPORT', 'Támogatás');
define('LOGIN', 'Hitelesítés');
define('LOGIN_TITLE', 'Hitelesítés');
define('USER_LOGIN', 'Adminisztrátori bejelentkezés');
define('USERNAME', 'Felhasználónév :');
define('PASSWORD', 'Jelszó :');
define('ICONV_CONVERSION', 'Karakterkészlet konverzió');
define('ZLIB_COMPRESSION', 'Zlib tömörítés');
define('IMAGE_FUNCTIONS', 'Képkezelő funkciók');
define('IMAGE_METAS', 'Kép meta adatok (exif)');
define('FILTER_FUNCTIONS', 'Szűrő funkciók');
define('ADMIN_EXIST', 'Az adminisztrátori fiók már létezik.');
define('CONFIG_SITE', 'Webhely konfiguráció');
define('CONFIG_SITE_TITLE', 'Webhely konfiguráció');
define('MODULES', 'Modulok telepítése');
define('MODULES_TITLE', 'Modulok telepítése');
define('THEME', 'Téma kiválasztása');
define('THEME_TITLE', 'Az alapértelmezett téma kiválasztása');
define('INSTALLED_MODULES', 'A következő modulok lettek telepítve.');
define('NO_MODULES_FOUND', 'Nem található modul.');
define('NO_INSTALLED_MODULES', 'Nincs telepített modul.');
define('THEME_NO_SCREENSHOT', 'Nem található képernyőfotó');
define('IS_VALOR', ' => ');
// password message
define('PASSWORD_LABEL', 'Jelszó erőssége');
define('PASSWORD_DESC', 'Jelszó nincs megadva');
define('PASSWORD_GENERATOR', 'Jelszó generátor');
define('PASSWORD_GENERATE', 'Generálás');
define('PASSWORD_COPY', 'Másolás');
define('PASSWORD_VERY_WEAK', 'Nagyon gyenge');
define('PASSWORD_WEAK', 'Gyenge');
define('PASSWORD_BETTER', 'Jobb');
define('PASSWORD_MEDIUM', 'Közepes');
define('PASSWORD_STRONG', 'Erős');
define('PASSWORD_STRONGEST', 'Legerősebb');
//2.5.7
define('WRITTEN_LICENSE', 'A XOOPS %s licenckulcs kiírva: <strong>%s</strong>');
//2.5.8
define('CHMOD_CHGRP_REPEAT', 'Újrapróbálás');
define('CHMOD_CHGRP_IGNORE', 'Használat így is');
define('CHMOD_CHGRP_ERROR', 'A telepítő nem tudja írni a(z) %1$s konfigurációs fájlt.<p>A PHP a fájlokat %2$s felhasználóként és %3$s csoportként írja.<p>A(z) %4$s/ könyvtár felhasználója: %5$s, csoportja: %6$s');
//2.5.9
define("CURL_HTTP", "Client URL Library (cURL)");
define('XOOPS_COOKIE_DOMAIN_LABEL', 'Webhely cookie tartománya (Domain)');
define('XOOPS_COOKIE_DOMAIN_HELP', 'Tartomány (domain) a cookie-k beállításához. Lehet üres, az URL teljes állomásneve (www.pelda.hu), vagy az aldomainek nélküli regisztrált tartomány (pelda.hu), hogy megosztható legyen az aldomainek között (www.pelda.hu és blog.pelda.hu).');
define('INTL_SUPPORT', 'Nemzetköziesítési (Internationalization) funkciók');
define('XOOPS_SOURCE_CODE', "XOOPS a GitHub-on");
define('XOOPS_INSTALLING', 'Telepítés folyamatban');
define('XOOPS_ERROR_ENCOUNTERED', 'Hiba történt');
define('XOOPS_ERROR_SEE_BELOW', 'Lásd alább az üzeneteket.');
define('MODULES_AVAILABLE', 'Elérhető modulok');
define('INSTALL_THIS_MODULE', '%s hozzáadása');
//2.5.11
define('ERR_COPY_CONFIG_FILE', 'Nem sikerült átmásolni a(z) %s konfigurációs fájlt');
