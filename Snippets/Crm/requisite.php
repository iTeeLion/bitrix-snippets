<?php 

// requisites
$EntityRequisite = new \Bitrix\Crm\EntityRequisite();
$dbRes = $EntityRequisite->getList([
    'filter' => [
        'ENTITY_TYPE_ID' => CCrmOwnerType::Company,
        'ENTITY_ID' => $companyId,
    ],
]);
$dbRes->fetchAll();

// bank detail
$EntityBankDetail = new \Bitrix\Crm\EntityBankDetail();

// address
$EntityAddress = new \Bitrix\Crm\EntityAddress();

// rq presets
$EntityRequisite = new \Bitrix\Crm\EntityRequisite();
$EntityRequisite::getFixedPresetList();
#1 => COMPANY
#2 => INDIVIDUAL
#3 => PERSON