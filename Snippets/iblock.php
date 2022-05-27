<?php

// GetList
$arOrder = ['SORT' => 'ASC'];
$arFilter = ['IBLOCK_ID' => '', 'ACTIVE' => 'Y'];
$arGroupBy = false;
$arNav = false;
$arSelect = ['ID', 'IBLOCK_ID', 'NAME', 'PROPERTY_*'];
$dbRes = \CIBlockElement::GetList($arOrder, $arFilter, $arGroupBy, $arNav, $arSelect);
while ($item = $dbRes->GetNext()) {
    echo '<pre>'; var_dump($item); echo '</pre>';
}
while ($ob = $dbRes->GetNextElement()) {
    $item = $ob->GetFields();
    $item['PROPERTIES'] = $ob->GetProperties();
}

// Set permissions
$ElementRights = new \CIBlockElementRights($IBLOCK_ID, $ELEMENT_ID);
$arPermissions = $ElementRights->GetRights();
$arPermissions['n0'] = [
    'GROUP_CODE' => 'U1',
    'TASK_ID' => 51,
];
$ElementRights->SetRights($arPermissions);