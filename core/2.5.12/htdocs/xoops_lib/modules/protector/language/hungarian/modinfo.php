<?php

if (defined('FOR_XOOPS_LANG_CHECKER')) {
    $mydirname = 'protector';
}
$constpref = '_MI_' . strtoupper($mydirname);

if (defined('FOR_XOOPS_LANG_CHECKER') || !defined($constpref . '_LOADED')) {
    define($constpref . '_LOADED', 1);

    // The name of this module
    define($constpref . '_NAME', 'Protector');

    // A brief description of this module
    define($constpref . '_DESC', 'Ez a modul megvédi a XOOPS webhelyet különféle támadásoktól, mint például a DoS, SQL Injection és Változó szennyezés.');

    // Menu
    define($constpref . '_ADMININDEX', 'Protector Központ');
    define($constpref . '_ADVISORY', 'Biztonsági Tanácsadás');
    define($constpref . '_PREFIXMANAGER', 'Előtag (Prefix) Kezelő');
    define($constpref . '_ADMENU_MYBLOCKSADMIN', 'Jogosultságok');

    // Configs
    define($constpref . '_GLOBAL_DISBL', 'Ideiglenesen letiltva');
    define($constpref . '_GLOBAL_DISBLDSC', 'Minden védelem ideiglenesen le van tiltva.<br>Ne felejtsd el kikapcsolni, miután a hibát elhárítottad');

    define($constpref . '_DEFAULT_LANG', 'Alapértelmezett nyelv');
    define($constpref . '_DEFAULT_LANGDSC', 'Add meg a nyelv beállítást, amely a common.php feldolgozása előtt megjelenő üzeneteket jeleníti meg');

    define($constpref . '_RELIABLE_IPS', 'Megbízható IP-k');
    define($constpref . '_RELIABLE_IPSDSC', 'Állítsd be a megbízható IP-ket, | jellel elválasztva. A ^ megegyezik a sztring elejével, a $ a sztring végével.');

    define($constpref . '_LOG_LEVEL', 'Naplózási szint');
    define($constpref . '_LOG_LEVELDSC', '');

    define($constpref . '_BANIP_TIME0', 'Tiltott IP felfüggesztési idő (másodperc)');

    define($constpref . '_LOGLEVEL0', 'nincs');
    define($constpref . '_LOGLEVEL15', 'Csendes');
    define($constpref . '_LOGLEVEL63', 'csendes');
    define($constpref . '_LOGLEVEL255', 'teljes');

    define($constpref . '_HIJACK_TOPBIT', 'Védett IP bitek a munkamenethez');
    define($constpref . '_HIJACK_TOPBITDSC', 'Munkamenet eltérítés elleni védelem (Anti Session Hi-Jacking):<br>Alapértelmezett 24/56 (netmaszk IPV4/IPV6-hoz). (Minden bit védett)<br>Ha az IP-címed nem stabil, állítsd be az IP-tartományt a bitek számával.<br>(pl.) Ha az IP-d 192.168.0.0-192.168.0.255 tartományban mozoghat, állítsd 24-re (bit) itt');
    define($constpref . '_HIJACK_DENYGP', 'Csoportok, amelyeknek nem engedélyezett az IP-cím változtatása egy munkamenetben');
    define($constpref . '_HIJACK_DENYGPDSC', 'Munkamenet eltérítés elleni védelem:<br>Válaszd ki azokat a csoportokat, amelyeknek nem engedélyezett az IP-címük megváltoztatása egy munkamenetben.<br>(Javaslom, hogy az Adminisztrátort kapcsold be.)');
    define($constpref . '_SAN_NULLBYTE', 'Null-bájtok szanálása (tisztítása)');
    define($constpref . '_SAN_NULLBYTEDSC', 'A lezáró "\\0" karaktert gyakran használják rosszindulatú támadásoknál.<br>A null-bájt szóközre változik.<br>(Erősen ajánlott bekapcsolva tartani)');
    define($constpref . '_DIE_NULLBYTE', 'Kilépés, ha null-bájtot talál');
    define($constpref . '_DIE_NULLBYTEDSC', 'A lezáró "\\0" karaktert gyakran használják rosszindulatú támadásoknál.<br>(Erősen ajánlott bekapcsolva tartani)');
    define($constpref . '_DIE_BADEXT', 'Kilépés, ha rossz fájl kiterjesztésű fájlokat töltenek fel');
    define($constpref . '_DIE_BADEXTDSC', 'Ha valaki megpróbál rossz kiterjesztésű fájlokat feltölteni, mint pl. .php, ez a modul kilép a XOOPS-ból.<br>Ha gyakran csatolsz php fájlokat a B-Wiki-hez vagy PukiWikiMod-hoz, kapcsold ki.');
    define($constpref . '_CONTAMI_ACTION', 'Művelet, ha változó szennyeződést talál');
    define($constpref . '_CONTAMI_ACTIONDS', 'Válaszd ki a műveletet, ha valaki megpróbálja szennyezni a rendszer globális változóit a XOOPS-odban.<br>(Az ajánlott opció az üres képernyő)');
    define($constpref . '_ISOCOM_ACTION', 'Művelet, ha elszigetelt komment-kezdetet talál');
    define($constpref . '_ISOCOM_ACTIONDSC', 'Anti SQL Injection:<br>Válaszd ki a műveletet, ha elszigetelt "/*" található.<br>A "Szanálás" azt jelenti, hogy hozzáad egy másik "*/"-t a végén.<br>(Az ajánlott opció a Szanálás)');
    define($constpref . '_UNION_ACTION', 'Művelet, ha UNION-t talál');
    define($constpref . '_UNION_ACTIONDSC', 'Anti SQL Injection:<br>Válaszd ki a műveletet, ha SQL-szerű UNION szintaxist talál.<br>A "Szanálás" azt jelenti, hogy "union"-t "uni-on"-ra cserél.<br>(Az ajánlott opció a Szanálás)');
    define($constpref . '_ID_INTVAL', 'Kényszerített intval (egész számmá alakítás) változókra, mint pl. id');
    define($constpref . '_ID_INTVALDSC', 'Minden "*id" nevű kérés egész számként lesz kezelve.<br>Ez az opció védelmet nyújt néhány XSS és SQL Injection ellen.<br>Bár javaslom ennek az opciónak a bekapcsolását, problémákat okozhat néhány modulnál.');
    define($constpref . '_FILE_DOTDOT', 'Védelem a Könyvtár Bejárás (Directory Traversal) ellen');
    define($constpref . '_FILE_DOTDOTDSC', 'Eltávolítja a ".." karaktert minden olyan kérésből, amely Könyvtár Bejárásnak tűnik');

    define($constpref . '_BF_COUNT', 'Anti Brute Force (Brutális Erő elleni védelem)');
    define($constpref . '_BF_COUNTDSC', "Állítsd be, hányszor próbálkozhat egy vendég bejelentkezni 10 percen belül. Ha a sikertelen kísérletek meghaladják ezt a számot, a vendég IP-címe tiltva lesz.");

    define($constpref . '_BWLIMIT_COUNT', 'Sávszélesség korlátozás');
    define($constpref . '_BWLIMIT_COUNTDSC', 'Add meg a mainfile.php maximális hozzáférését a figyelési idő alatt. Ennek az értéknek 0-nak kell lennie a normál környezetekben, ahol elegendő a CPU sávszélesség. A 10-nél kisebb számokat a rendszer figyelmen kívül hagyja.');

    define($constpref . '_DOS_SKIPMODS', 'Modulok a DoS/Crawler ellenőrzőn kívül');
    define($constpref . '_DOS_SKIPMODSDSC', 'Állítsd be a modulok könyvtárnevét | jellel elválasztva. Ez az opció hasznos lehet csevegő moduloknál, stb.');

    define($constpref . '_DOS_EXPIRE', 'Figyelési idő magas terhelések esetén (másodperc)');
    define($constpref . '_DOS_EXPIREDSC', 'Ez az érték meghatározza a gyakori újratöltések (F5 támadás) és a magas terhelést okozó crawlerek figyelési idejét.');

    define($constpref . '_DOS_F5COUNT', 'Hibás szám az F5 Támadásra');
    define($constpref . '_DOS_F5COUNTDSC', 'DoS támadások megelőzése.<br>Ez az érték határozza meg az újratöltési számot, amely már rosszindulatú támadásnak minősül.');
    define($constpref . '_DOS_F5ACTION', 'Művelet F5 Támadás ellen');

    define($constpref . '_DOS_CRCOUNT', 'Hibás szám a Crawlerekre (robotokra)');
    define($constpref . '_DOS_CRCOUNTDSC', 'Magas terhelést okozó crawlerek megelőzése.<br>Ez az érték határozza meg a hozzáférések számát, amelyet rosszindulatú crawlernek tekintünk.');
    define($constpref . '_DOS_CRACTION', 'Művelet a magas terhelést okozó Crawlerek ellen');

    define($constpref . '_DOS_CRSAFE', 'Üdvözölt User-Agent');
    define($constpref . '_DOS_CRSAFEDSC', 'Egy perl regex minta a User-Agent-hez.<br>Ha megegyezik, a crawler sosem minősül magas terhelést okozó crawlernek.<br>pl) /(bingbot|Googlebot|Yahoo! Slurp)/i');

    define($constpref . '_OPT_NONE', 'Nincs (csak naplózás)');
    define($constpref . '_OPT_SAN', 'Szanálás (Tisztítás)');
    define($constpref . '_OPT_EXIT', 'Üres Képernyő');
    define($constpref . '_OPT_BIP', 'IP letiltása (korlátlanul)');
    define($constpref . '_OPT_BIPTIME0', 'IP letiltása (moratóriummal)');

    define($constpref . '_DOSOPT_NONE', 'Nincs (csak naplózás)');
    define($constpref . '_DOSOPT_SLEEP', 'Alvás (Sleep)');
    define($constpref . '_DOSOPT_EXIT', 'Üres Képernyő');
    define($constpref . '_DOSOPT_BIP', 'IP letiltása (korlátlanul)');
    define($constpref . '_DOSOPT_BIPTIME0', 'IP letiltása (moratóriummal)');
    define('define(_DOSOPT_HTA', 'DENY by .htaccess (Kísérleti)');

    define($constpref . '_BIP_EXCEPT', 'Csoportok, amelyek soha nem kerülnek Rossz IP-ként regisztrálásra');
    define($constpref . '_BIP_EXCEPTDSC', 'Az itt megadott csoporthoz tartozó felhasználó soha nem lesz letiltva.<br>(Javaslom, hogy az Adminisztrátort kapcsold be.)');

    define($constpref . '_DISABLES', 'Veszélyes funkciók letiltása a XOOPS-ban');

    define($constpref . '_DBLAYERTRAP', 'DB Réteg csapdázás (trapping) engedélyezése az anti-SQL-Injection-höz');
    define($constpref . '_DBLAYERTRAPDSC', 'Szinte minden SQL Injection támadás megszűnik ezzel a funkcióval. Ez a funkció támogatást igényel a databasefactory-tól. Ezt ellenőrizheted a Biztonsági Tanácsadás oldalon. Ennek a beállításnak bekapcsolva kell lennie. Soha ne kapcsold ki könnyelműen.');
    define($constpref . '_DBTRAPWOSRV', 'Soha ne ellenőrizze a _SERVER-t az anti-SQL-Injection-höz');
    define($constpref . '_DBTRAPWOSRVDSC', 'Néhány szerver mindig engedélyezi a DB Layer trapping-et. Ez hibás észlelést okoz SQL Injection támadásként. Ha ilyen hibákat tapasztalsz, kapcsold be ezt az opciót. Tudnod kell, hogy ez az opció gyengíti a DB Layer trapping anti-SQL-Injection biztonságát.');

    define($constpref . '_BIGUMBRELLA', 'anti-XSS engedélyezése (BigUmbrella)');
    define($constpref . '_BIGUMBRELLADSC', 'Ez megvéd szinte minden támadástól XSS sebezhetőségeken keresztül. De nem 100%-os.');

    define($constpref . '_SPAMURI4U', 'anti-SPAM: URL-ek normál felhasználók számára');
    define($constpref . '_SPAMURI4UDSC', 'Ha ennyi URL-t találnak a POST adatokban az adminisztrátoron kívüli felhasználóktól, a POST SPAM-nek minősül. A 0 azt jelenti, hogy a funkció ki van kapcsolva.');
    define($constpref . '_SPAMURI4G', 'anti-SPAM: URL-ek vendégek számára');
    define($constpref . '_SPAMURI4GDSC', 'Ha ennyi URL-t találnak a POST adatokban vendégektől, a POST SPAM-nek minősül. A 0 azt jelenti, hogy a funkció ki van kapcsolva.');

    //3.40b
    define($constpref . '_ADMINHOME', 'Kezdőlap');
    define($constpref . '_ADMINABOUT', 'Rólunk');
    //3.50
    define($constpref . '_STOPFORUMSPAM_ACTION', 'Stop Forum Spam');
    define($constpref . '_STOPFORUMSPAM_ACTIONDSC', 'Ellenőrzi a POST adatokat a www.stopforumspam.com adatbázisban regisztrált spammerek ellen. Szükséges hozzá a php CURL könyvtár.');
    // 3.60
    define($constpref . '_ADMINSTATS', 'Áttekintés');
    define($constpref . '_BANIP_TIME0DSC', 'Felfüggesztési idő másodpercben az automatikus IP tiltásokhoz');
}
