<?php 

// Common
$bCheckPermissions = false;
$CCrmDeal = new \CCrmDeal($bCheckPermissions);

// GetList
$dbRes = $CCrmDeal::GetList($arOrder, $arFilter, $arSelect, $nPage);
while ($item = $dbRes->GetNext()) {
    echo '<pre>'; var_dump($item); echo '</pre>';
}

// Add / Update
//ToDo