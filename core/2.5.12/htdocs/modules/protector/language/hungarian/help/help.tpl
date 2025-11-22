<div id="help-template" class="outer">
    <h1 class="head">Súgó: <a class="ui-corner-all tooltip" href="<{$xoops_url}>/modules/protector/admin/index.php" title="Vissza a Protector adminisztrációjához"> Protector <img src="<{xoAdminIcons 'home.png'}>" alt="Vissza a Protector adminisztrációjához"/></a></h1>
    <h4 class="odd">Leírás</h4>

    <p class="even">A Protector egy modul a XOOPS CMS védelmére a különféle rosszindulatú támadások ellen.</p>
    <h4 class="odd">Telepítés/eltávolítás</h4>

    <p>Először is, definiáld a **XOOPS_TRUST_PATH** útvonalat a **mainfile.php** fájlban, ha még nem tetted meg.</p>
    <br>

    <p>Másold a html/modules/protector mappát az archívumból a XOOPS_ROOT_PATH/modules/ mappádba.</p>

    <p>Másold a xoops_trust_path/modules/protector mappát az archívumból a XOOPS_TRUST_PATH/modules/ mappádba.</p>
    <br>

    <p>Állítsd írhatóra a XOOPS_TRUST_PATH/modules/protector/configs mappa jogosultságát (chmod).</p>
    <h4 class="odd">= Hogyan mentsd meg =</h4>

    <p class="even">Ha a Protector kitiltott téged, egyszerűen csak töröld a fájlokat a **XOOPS_TRUST_PATH/modules/protector/configs/** mappa alatt.</p>
    <h4 class="odd">Bevezetés a szűrő-pluginokhoz ebben az archívumban.</h4>

    <p class="even">- **postcommon_post_deny_by_rbl.php**
        <br>
        Egy SPAM-ellenes plugin.
        <br>
        Minden olyan üzenet, ami RBL-ben regisztrált IP-címről érkezik, el lesz utasítva.
        <br>
        Ez a plugin lassíthatja az üzenetek küldését, különösen a chat modulok esetén.
    </p>

    <p>- **postcommon_post_deny_by_httpbl.php**
        <br>
        Egy SPAM-ellenes plugin.
        <br>
        Minden olyan üzenet, ami a http:BL-ben regisztrált IP-címről érkezik, el lesz utasítva.
        <br>
        Használat előtt szerezd be a **HTTPBL_KEY** kulcsot a http://www.projecthoneypot.org/ oldalról, és állítsd be azt a szűrőfájlban:
        <br>
        define( 'PROTECTOR_HTTPBL_KEY' , '............' ) ;
    </p>

    <p class="even">- **postcommon_post_need_multibyte.php**
        <br>
        Egy SPAM-ellenes plugin.
        <br>
        A többbájtos karakterek nélküli üzenetek el lesznek utasítva.
        <br>
        Ez a plugin csak japán, hagyományos kínai, egyszerűsített kínai és koreai oldalakhoz használható.
    </p>

    <p>- **postcommon_post_htmlpurify4guest.php**
        <br>
        Minden vendégek által küldött üzenet adatai HTMLPurifier-rel lesznek megtisztítva.
        <br>
        Ha engedélyezed a vendégeknek a HTML beillesztést, erősen ajánlom az engedélyezését.
    </p>

    <p class="even">-**postcommon_register_insert_js_check.php**
        <br>
        Ez a plugin megakadályozza, hogy robotok regisztráljanak az oldaladon.
        <br>
        A látogató böngészőjében működő JavaScript szükséges hozzá.
    </p>

    <p>- **bruteforce_overrun_message.php**
        <br>
        Meghatározza az üzenetet azoknak a látogatóknak, akik a megadott számú alkalomnál többször próbáltak rossz jelszóval bejelentkezni.
        <br>
        Minden `*_message.php` nevű plugin határozza meg az elutasított hozzáférésekhez tartozó üzenetet.
    </p>

    <p class="even">- **precommon_bwlimit_errorlog.php**
        <br>
        Ha a sávszélesség korlátozás (bandwidth limitation) sajnos működésbe lép, ez a plugin naplózza azt az Apache error_log fájljába.
    </p>

    <p>Minden `*_errorlog.php` nevű plugin naplóz bizonyos információkat az Apache error_log fájljába.</p>
    <h4 class="odd">Oktatóanyag</h4>

    <p class="even">Oktatóanyag hamarosan érkezik.</p>
    </div>
