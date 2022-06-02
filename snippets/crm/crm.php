<?php

// Виды типов разных сущностей (ctrl + r mouse)
CCrmOwnerType::Undefined;
CCrmActivityType::Undefined;
$TT = new \Bitrix\Crm\Timeline\TimelineType();

// Получение информации из справочников CRM
$CrmStatusTable = new \Bitrix\Crm\StatusTable();

// получить информацию по ИНН через bitrix (доступно только с оплаченной лицензией)
if (\Bitrix\Main\Loader::includeModule('socialservices')) {
    $client = new \Bitrix\socialservices\properties\Client;
    $data = $client->getByInn($inn);
    var_dump($data);
}
