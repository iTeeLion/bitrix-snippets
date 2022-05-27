<?php 

// Common
$bCheckPermissions = false;
$CCrmLead = new \CCrmLead($bCheckPermissions);

// GetList
$dbRes = $CCrmLead::GetList($arOrder, $arFilter, $arSelect);
while ($item = $dbRes->GetNext()) {
    echo '<pre>'; var_dump($item); echo '</pre>';
}

// Add/Update
$arFields = [
    'TITLE' => 'Title',
    'FM' => [
      'PHONE' => [
        ['VALUE_TYPE' => 'WORK', 'VALUE' => ''],
      ],
      'EMAIL' => [
        ['VALUE_TYPE' => 'WORK', 'VALUE' => ''],
      ],
    ],
];
$CCrmLead->Add($arFields);
$CCrmLead->Update($leadId, $arFields);