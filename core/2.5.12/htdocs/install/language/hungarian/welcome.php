<?php
//
// _LANGCODE: hu
// _CHARSET : UTF-8
// Translator: XOOPS Hungarian Translation Team

$content = '
<p>
    <abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr> egy nyílt forráskódú,
    objektumorientált webes közzétételi rendszer, mely PHP nyelven íródott. Ideális eszköz
    kis és nagy dinamikus közösségi webhelyek, vállalati intranetes portálok, céges portálok, webnaplók (weblogok)
    és sok egyéb fejlesztésére.
</p>
<p>
    A XOOPS a
    <a href="https://www.gnu.org/licenses/gpl-2.0.html" rel="external">GNU General Public License (GPL)</a>
    2. vagy újabb verziójának feltételei szerint került kiadásra, és szabadon használható, illetve módosítható.
    Szabadon terjeszthető, mindaddig, amíg betartja a GPL terjesztési feltételeit.
</p>
<h3>Követelmények</h3>
<ul>
    <li>WWW Szerver (<a href="https://www.apache.org/" rel="external">Apache</a>, <a href="https://www.nginx.com/" rel="external">NGINX</a>, IIS, stb.)</li>
     <li><a href="https://www.php.net/" rel="external">PHP</a> 7.4 vagy újabb, 8.3.0+ ajánlott</li>
     <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.7 vagy újabb, 8.4.5+ ajánlott </li>
</ul>
<h3>Telepítés előtt</h3>
<ol>
    <li>Állítsa be megfelelően a WWW szervert, a PHP-t és az adatbázis-szervert.</li>
    <li>Készítsen elő egy adatbázist a XOOPS webhely számára.</li>
    <li>Készítsen elő egy felhasználói fiókot, és adjon a felhasználónak hozzáférést az adatbázishoz.</li>
    <li>Tegye írhatóvá ezeket a könyvtárakat és fájlokat: %s</li>
    <li>Biztonsági okokból nyomatékosan javasolt az alábbi két könyvtárat áthelyezni a <a href="https://privacyaustralia.net/phpsec/projects/guide/php-security-guide-databases-and-sql/" rel="external">dokumentum gyökérkönyvtáron (document root)</a> kívülre, és a mappaneveket megváltoztatni: %s</li>
    <li>Hozza létre (ha még nem léteznek) és tegye írhatóvá ezeket a könyvtárakat: %s</li>
    <li>Kapcsolja be a böngészőjében a cookie-kat és a JavaScriptet.</li>
</ol>
<h3>Különleges Megjegyzések</h3>
<p>Bizonyos speciális rendszer-szoftver kombinációk további konfigurációt igényelhetnek ahhoz, hogy
 együttműködjenek a XOOPS-szal. Ha bármelyik téma vonatkozik az Ön környezetére, további információkért
 tekintse meg a teljes <a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">XOOPS
 telepítési útmutatót</a>.
</p>
<p>A MySQL 8.0-t nem támogatja minden PHP verzió. Még a támogatott verziókban is előfordulhat, hogy a
 PHP <em>mysqlnd</em> könyvtárával kapcsolatos problémák miatt a MySQL szerver
 <em>default-authentication-plugin</em> beállítását <em>mysql_native_password</em> értékre kell állítani a
 megfelelő működéshez.
</p>
<p>Az SELinux-engedélyezett rendszereken (például CentOS és RHEL) szükség lehet a XOOPS könyvtárak
 biztonsági kontextusának megváltoztatására a normál fájl jogosultságokon túlmenően is, hogy a
 könyvtárak írhatóvá váljanak. Kérjük, konzultáljon rendszere dokumentációjával és/vagy a
 rendszergazdájával.
</p>
';

return $content;
