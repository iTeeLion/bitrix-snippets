<?php

// GetList
try {
    $CompanyTable = new \Bitrix\Crm\CompanyTable();
    $dbRes = $CompanyTable::getList([
        'select' => [],
        'filter' => [],
        'group' => [],
        'order' => [],
        'limit' => 1,
        'offset' => 1,
        'count_total' => true,
        'runtime' => [],
    ]);
    $rows = $dbRes->fetchAll();
    while ($row = $dbRes->fetch()) {
        $arUF = $GLOBALS['USER_FIELD_MANAGER']->GetUserFields($CompanyTable::getUFId(), $item['ID']);
        foreach($arUF as $field){
            $item[$field['FIELD_NAME']] = $field['VALUE'];
        }
        $rows[] = $row;
    }
} catch (\Exception $e) {
    echo $e->getMessage();
}

// Add / Update
$result = BookTable::add($arFields);

// Update
$result = BookTable::update($id, $arFields);
