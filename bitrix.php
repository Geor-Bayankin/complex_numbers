<?php


require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

$rsProducts = CIBlockElement::GetList(
    ['CATALOG_PRICE_4' => 'desc'],
    ['IBLOCK_ID' => 26,
    ],
    false,
    ['nTopCount' => 1],
    ['ID', 'CATALOG_PRICE_1']
);
echo '<pre>';
print_r($rsProducts->Fetch());
echo '</pre>';

print ('Hello world');