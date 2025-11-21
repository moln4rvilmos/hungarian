<?php

//
// _LANGCODE: hu
// _CHARSET : UTF-8
// Translator: XOOPS Magyar Fordító Csapat

$supports = [];

// Support site for Hungarian
$supports['hungarian'] = [
    'url' => 'https://www.xoops.hu/', // Ha van hivatalos magyar XOOPS oldal
    'title' => 'Magyar nyelvű támogatás',
];

// Support site for English (Az eredeti angol link megtartva, de a magyar leírással)
$supports['english'] = [
    'url' => 'https://xoops.org/',
    'title' => 'Angol nyelvű támogatás',
];


// Add extra support sites, use corresponding language folder name as key, for instance:
/*
$supports["french"] = array(
    "url"   => "https://www.frxoops.org/",
    "title" => "Support francophone"
);
*/

return $supports;
