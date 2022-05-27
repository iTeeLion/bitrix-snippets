<?php 

$arSort = [];
$arFilter = ['ELEMENT_ID' => $CompanyID / $ContactID];
$dbRes = \CCrmFieldMulti::GetList($arSort, $arFilter);
while ($item = $dbRes->GetNext()) {
    echo '<pre>'; var_dump($item); echo '</pre>';
}
