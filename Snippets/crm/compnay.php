<?php 

// Common
$bCheckPermissions = false;
$CCrmCompany = new \CCrmCompany($bCheckPermissions);

// GetList
$arOrder = ['DATE_CREATE' => 'DESC'];
$arFilter = [];
$arSelect = [];
$nPageTop = false;
$dbRes = $CCrmCompany::GetList($arOrder, $arFilter, $arSelect, $nPageTop);
$dbRes = $CCrmCompany::GetListEx($arOrder, $arFilter, false, false, $arSelect);
while ($item = $dbRes->GetNext()) {
    echo '<pre>'; var_dump($item); echo '</pre>';
}

// Add / Update
$arFields = [];
$bUpdateSearch = true;
$arOptions = [];
$CCrmCompany->Add($arFields, $bUpdateSearch, $arOptions);
$CCrmCompany->Update($companyId, $arFields, $bUpdateSearch, $arOptions);