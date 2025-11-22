<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','Jogosultságok');
define('_MD_A_MYMENU_MYPREFERENCES','Beállítások');
// index.php
define('_AM_TH_DATETIME', 'Idő');
define('_AM_TH_USER', 'Felhasználó');
define('_AM_TH_IP', 'IP');
define('_AM_TH_AGENT', 'AGENT');
define('_AM_TH_TYPE', 'Típus');
define('_AM_TH_DESCRIPTION', 'Leírás');
define('_AM_TH_BADIPS','Rossz IP-k<br><br><span style="font-weight:normal;">Írj minden IP-címet egy sorba<br>az üresen hagyás azt jelenti, hogy minden IP engedélyezett</span>');
define('_AM_TH_GROUP1IPS','Engedélyezett IP-k Csoport=1 számára<br><br><span style="font-weight:normal;">Írj minden IP-címet egy sorba.<br>192.168. jelentése 192.168.*<br>az üresen hagyás azt jelenti, hogy minden IP engedélyezett</span>');
define('_AM_LABEL_COMPACTLOG', 'Napló tömörítése');
define('_AM_BUTTON_COMPACTLOG', 'Tömörítés!');
define('_AM_JS_COMPACTLOGCONFIRM', 'A duplikált (IP, Típus) bejegyzések eltávolításra kerülnek');
define('_AM_LABEL_REMOVEALL', 'Minden bejegyzés eltávolítása');
define('_AM_BUTTON_REMOVEALL', 'Mindent eltávolít!');
define('_AM_JS_REMOVEALLCONFIRM', 'Az összes naplóbejegyzés eltávolításra kerül. Biztosan megteszed?');
define('_AM_LABEL_REMOVE', 'Jelölt bejegyzések eltávolítása:');
define('_AM_BUTTON_REMOVE', 'Eltávolít!');
define('_AM_JS_REMOVECONFIRM', 'Eltávolítás rendben?');
define('_AM_MSG_IPFILESUPDATED', 'Az IP fájlok frissítve lettek');
define('_AM_MSG_BADIPSCANTOPEN', 'A rossz IP-ket tartalmazó fájl nem nyitható meg');
define('_AM_MSG_GROUP1IPSCANTOPEN', 'Az 1. csoportot engedélyező fájl nem nyitható meg');
define('_AM_MSG_REMOVED', 'A bejegyzések eltávolítva');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'Tedd írhatóvá a configs mappát: %s');
// prefix_manager.php
define('_AM_H3_PREFIXMAN', 'Előtag (Prefix) Kezelő');
define('_AM_MSG_DBUPDATED', 'Adatbázis sikeresen frissítve!');
define('_AM_CONFIRM_DELETE', 'Minden adat törlésre kerül. OK?');
define('_AM_TXT_HOWTOCHANGEDB',"Ha meg akarod változtatni az előtagot,<br> szerkeszd a %s/data/secure.php fájlt manuálisan.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');");
// advisory.php
define('_AM_ADV_NOTSECURE', 'Nem biztonságos');
define('_AM_ADV_TRUSTPATHPUBLIC', 'Ha látsz egy -NG- képet, vagy a link normál oldalt ad vissza, a XOOPS_TRUST_PATH nincs megfelelően elhelyezve. A XOOPS_TRUST_PATH legjobb helye a DocumentRoot-on kívül van. Ha ez nem lehetséges, a XOOPS_TRUST_PATH mappába tegyél egy .htaccess fájlt (DENY FROM ALL), ez a második legjobb megoldás.');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'Ellenőrizd, hogy a TRUST_PATH belüli PHP fájlok csak olvashatóra vannak-e állítva (404, 403 vagy 500 hibát kell kapnod)');
define('_AM_ADV_REGISTERGLOBALS',"Ha 'ON' (Be), ez a beállítás különféle injektálási támadásoknak ad teret. Ha tudod, állítsd 'register_globals off'-ra a php.ini-ben, vagy ha nem lehetséges, hozd létre vagy szerkeszd a .htaccess fájlt a XOOPS könyvtáradban:");
define('_AM_ADV_ALLOWURLFOPEN',"Ha 'ON' (Be), ez a beállítás lehetővé teszi a támadóknak, hogy tetszőleges szkripteket futtassanak távoli szervereken.<br>Ezt az opciót csak az adminisztrátor módosíthatja.<br>Ha te vagy az admin, szerkeszd a php.ini-t vagy a httpd.conf-ot.<br><b>Példa httpd.conf-ra:<br> &nbsp; php_admin_flag &nbsp; allow_url_fopen &nbsp; off</b><br>Ellenkező esetben kérd meg az adminisztrátorodat.");
define('_AM_ADV_USETRANSSID',"Ha 'ON' (Be), a Session ID-d meg fog jelenni horgony (anchor) címkékben, stb.<br>A munkamenet eltérítés (session hi-jacking) megakadályozására adj hozzá egy sort a XOOPS_ROOT_PATH mappában lévő .htaccess-hez.<br><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX',"Ez a beállítás 'SQL Injektálásoknak' ad teret.<br>Ne felejtsd el bekapcsolni a 'Force sanitizing *' opciót ennek a modulnak a beállításaiban.");
define('_AM_ADV_LINK_TO_PREFIXMAN', 'Ugrás az előtag kezelőhöz');
define('_AM_ADV_MAINUNPATCHED', 'A mainfile.php fájlodat a README-ben leírtak szerint kell szerkesztened.');
define('_AM_ADV_DBFACTORYPATCHED', 'Az adatbázisgyárad készen áll a DBLayer Trapping anti-SQL-Injektálásra');
define('_AM_ADV_DBFACTORYUNPATCHED', 'Az adatbázisgyárad nincs felkészülve a DBLayer Trapping anti-SQL-Injektálásra. Néhány javítás szükséges.');
define('_AM_ADV_SUBTITLECHECK', 'Ellenőrizze, hogy a Protector megfelelően működik-e');
define('_AM_ADV_CHECKCONTAMI', 'Szennyeződés');
define('_AM_ADV_CHECKISOCOM', 'Elszigetelt Hozzászólások');
//XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', 'és helyezd bele az alábbi sort:');
//XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', 'Előtag');
define('_AM_PROTECTOR_TABLES', 'Táblák');
define('_AM_PROTECTOR_UPDATED', 'Frissítve');
define('_AM_PROTECTOR_COPY', 'Másolás');
define('_AM_PROTECTOR_ACTIONS', 'Műveletek');
// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', 'Tiltsd le a jelölt bejegyzéseken lévő IP-ket:');
define('_AM_BUTTON_BAN_BY_IP', 'IP Tiltás!');
define('_AM_JS_BANCONFIRM', 'IP Tiltások OK?');
define('_AM_MSG_BANNEDIP', 'Az IP-k le vannak tiltva');
define('_AM_ADMINSTATS_TITLE', 'Protector Napló Összegzés');
// XOOPS 2.5.11
define('_AM_ADMINSTATS_LAST_MONTH', 'Múlt hónap');
define('_AM_ADMINSTATS_LAST_WEEK', 'Múlt hét');
define('_AM_ADMINSTATS_LAST_DAY', 'Tegnap');
define('_AM_ADMINSTATS_LAST_HOUR', 'Elmúlt óra');
