<?php 

// Common
$bCheckPermissions = false;
$CCrmContact = new \CCrmContact($bCheckPermissions);

// GetList
$CCrmContact::GetList($arOrder, $arFilter, $arSelect, $nPageTop);

// Add / Update
#ToDo
