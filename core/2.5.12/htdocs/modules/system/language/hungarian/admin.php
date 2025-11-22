<?php
/**
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license         GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * _LANGCODE        hu
 * _CHARSET         UTF-8
 * Translator: Molnár Vilmos (XOOPS Translation Team)
 */
// Main
define('_AM_SYSTEM_CONFIG', 'Rendszerkonfiguráció');
define('_AM_SYSTEM_CPANEL', 'Vezérlőpult');
define('_AM_SYSTEM_UPDATE', 'Frissítés');
define('_AM_SYSTEM_GOTOMODULE', 'Ugrás a modulhoz');
define('_AM_SYSTEM_HELP', 'Súgó');
define('_AM_SYSTEM_HELP_VIEW', 'Súgó Megjelenítése');
define('_AM_SYSTEM_HELP_HIDE', 'Súgó Elrejtése');
define('_AM_SYSTEM_TIPS', 'Tippek');
define('_AM_SYSTEM_SECTION', 'Szekció');
define('_AM_SYSTEM_DESC', 'Leírás');
define('_AM_SYSTEM_GO', 'Hozzáférés ehhez a szekcióhoz');
define('_AM_SYSTEM_STATUS', 'Szekció állapotának megváltoztatása');
define('_AM_SYSTEM_LOADING', 'Betöltés');
define('_AM_SYSTEM_ALL', 'Összes');
define('_AM_SYSTEM_TIPS_MAIN', '<ul><li>Engedélyezd vagy tiltsd le a Rendszer modul szekcióit, vagy egyszerűen csak lépj be oda.</li></ul>');
define('_AM_SYSTEM_AVATAR_INFO', "<ul><li><span class='bold red'>%s</span> avatar.</li></ul>");
define('_AM_SYSTEM_BANNER_INFO', "<ul><li><span class='bold red'>%s</span> reklámszalag (banner).</li></ul>");
define('_AM_SYSTEM_COMMENT_INFO', "<ul><li><span class='bold red'>%s</span> hozzászólás.</li></ul>");
define('_AM_SYSTEM_GROUP_INFO', "<ul><li><span class='bold red'>%s</span> csoport.</li></ul>");
define('_AM_SYSTEM_IMG_INFO', "<ul><li><span class='bold red'>%s</span> kép.</li></ul>");
define('_AM_SYSTEM_SMILIES_INFO', "<ul><li><span class='bold red'>%s</span> hangulatjel (smilies).</li></ul>");
define('_AM_SYSTEM_RANKS_INFO', "<ul><li><span class='bold red'>%s</span> felhasználói rang.</li></ul>");
define('_AM_SYSTEM_USERS_INFO', "<ul><li><span class='bold red'>%s</span> felhasználó.</li></ul>");
// Admin Module Names and description
define('_AM_SYSTEM_ADGS', 'Csoportok');
define('_AM_SYSTEM_ADGS_DESC', 'Kezeld a modul hozzáférési jogosultságait a felhasználók és csoportok számára.');
define('_AM_SYSTEM_BANS', 'Reklámszalagok (Bannerek)');
define('_AM_SYSTEM_BANS_DESC', 'Kezeld a XOOPS hirdetési bannereit.');
define('_AM_SYSTEM_BLOCKS', 'Blokkok');
define('_AM_SYSTEM_BLOCKS_DESC', 'A blokkok bármely oldalon megjeleníthetik a modul tartalmát. Itt kezelheted a blokkokat.');
define('_AM_SYSTEM_MODULES', 'Modulok');
define('_AM_SYSTEM_MODULES_DESC', 'Telepítsd és távolítsd el a XOOPS modulokat.');
define('_AM_SYSTEM_SMLS', 'Hangulatjelek (Smilies)');
define('_AM_SYSTEM_SMLS_DESC', 'Rejtsd el, változtasd meg, és adj hozzá egyedi hangulatjeleket, amelyeket a felhasználók használhatnak a bejegyzésekben és hozzászólásokban.');
define('_AM_SYSTEM_RANK', 'Felhasználói Rangok');
define('_AM_SYSTEM_RANK_DESC', 'Szerkeszd és hozd létre a névvel ellátott rangokat a felhasználók és moderátorok számára.');
define('_AM_SYSTEM_USER', 'Felhasználók');
define('_AM_SYSTEM_USER_DESC', 'Manuálisan adj hozzá felhasználókat, szerkeszd a felhasználói profilokat és változtasd meg a jelszavakat.');
define('_AM_SYSTEM_PREF', 'Beállítások');
define('_AM_SYSTEM_PREF_DESC', 'Változtasd meg a XOOPS weboldalad globális beállításait.');
define('_AM_SYSTEM_MLUS', 'E-mail Küldés Felhasználóknak');
define('_AM_SYSTEM_MLUS_DESC', 'E-mailt vagy privát üzenetet küldhetsz egy vagy több felhasználónak innen.');
define('_AM_SYSTEM_IMAGES', 'Képkezelő');
define('_AM_SYSTEM_IMAGES_DESC', 'Készíts kategóriákat a képkezelőhöz, és tölts fel ide képeket.');
define('_AM_SYSTEM_AVATARS', 'Avatárok');
define('_AM_SYSTEM_AVATARS_DESC', 'Tölts fel egyedi avatárokat, amelyeket a felhasználók megjeleníthetnek profiljukban.');
define('_AM_SYSTEM_TPLSETS', 'Sablonok (Templates)');
define('_AM_SYSTEM_TPLSETS_DESC', 'Szerkeszd a modul sablonjait közvetlenül anélkül, hogy a lemezen lévő fájlokat szerkesztenéd.');
define('_AM_SYSTEM_COMMENTS', 'Hozzászólások');
define('_AM_SYSTEM_COMMENTS_DESC', 'Sok modul engedélyezi a felhasználóknak a hozzászólások feladását. Itt törölheted vagy szerkesztheted őket.');
define('_AM_SYSTEM_FILEMANAGER', 'Fájlkezelő');
define('_AM_SYSTEM_FILEMANAGER_DESC', 'XOOPS fájlkezelő.');
define('_AM_SYSTEM_MAINTENANCE', 'Karbantartás');
define('_AM_SYSTEM_MAINTENANCE_DESC', 'Karbantartási eszközök az adatbázis táblákhoz, gyorsítótár mappákhoz és a munkamenet (session) táblához.');
// Messages
define('_AM_SYSTEM_DBUPDATED', 'Az Adatbázis Sikeresen Frissítve!');
define('_AM_SYSTEM_DBERROR', 'Az adatbázis nem frissült hiba miatt!');
define('_AM_SYSTEM_NOTACTIVE', 'Ez a szekció nem aktív!');
// Group permission phrases
define('_MD_AM_PERMADDNG', 'Nem sikerült hozzáadni a(z) %s jogosultságot a(z) %s elemhez a(z) %s csoport számára');
define('_MD_AM_PERMADDOK', 'A(z) %s jogosultság sikeresen hozzáadva a(z) %s elemhez a(z) %s csoport számára');
define('_MD_AM_PERMRESETNG', 'Nem sikerült visszaállítani a csoport jogosultságát a(z) %s modulhoz');
define('_MD_AM_PERMADDNGP', 'Minden szülőelemet ki kell választani.');
define('_AM_SYSTEM_UNINSTALL', 'Eltávolítás');

//2.5.7
define('_AM_SYSTEM_USAGE', 'Használat');
define('_AM_SYSTEM_ACTIVE', 'Aktív');
