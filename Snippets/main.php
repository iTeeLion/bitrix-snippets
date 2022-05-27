<?php

###
### Common
###

// Page requires
require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');

// Include module
CModule::IncludeModule('crm');

// Include module D7
\Bitrix\Main\Loader::includeModule('im');
\Bitrix\Main\Loader::includeModule('crm');
\Bitrix\Main\Loader::includeModule('sale');
\Bitrix\Main\Loader::includeModule('iblock');
\Bitrix\Main\Loader::includeModule('catalog');

// Header show methods
$GLOBALS['APPLICATION']->ShowTitle();
$GLOBALS['APPLICATION']->ShowHead();
$GLOBALS['APPLICATION']->ShowMeta('keywords');
$GLOBALS['APPLICATION']->ShowMeta('description');
$GLOBALS['APPLICATION']->ShowCSS();
$GLOBALS['APPLICATION']->ShowHeadStrings();
$GLOBALS['APPLICATION']->ShowHeadScripts();
$GLOBALS['APPLICATION']->ShowPanel();
$GLOBALS['APPLICATION']->RestartBuffer();

// Add assets (JS/CSS)
$GLOBALS['APPLICATION']->SetAdditionalCss('/link/to/css');
$GLOBALS['APPLICATION']->SetAdditionalJS('/link/to/js');

// Add assets D7 (JS/CSS)
\Bitrix\Main\Page\Asset::getInstance()->addCss('/path/to/style.css');
\Bitrix\Main\Page\Asset::getInstance()->addJs('/path/to/script.js');

###
### User
###

// Get current
$arUser = \CUser::GetByID($GLOBALS['USER']->GetID())->Fetch();

// Get current groups
$GLOBALS['USER']->GetUserGroupArray();

// GetList
$by = 'ID';
$order = 'ASC';
$arFilter = ['ACTIVE' => 'Y'];
$arParams = [];
$dbRes = \CUser::GetList($by, $order, $arFilter, $arParams);
while ($user = $dbRes->GetNext()) {
    echo '<pre>'; var_dump($item); echo '</pre>';
}

###
### UserFields
###

// UserFields class
global $USER_FIELD_MANAGER;
$EntityTable = new \Bitrix\Crm\CompanyTable()

// UserFields get
$arUF = $USER_FIELD_MANAGER->GetUserFields($EntityTable::getUFId(), $ID);

// UserFields update
$USER_FIELD_MANAGER->Update($EntityTable::getUFId(), $ID, $arFields);

###
### Events
###

