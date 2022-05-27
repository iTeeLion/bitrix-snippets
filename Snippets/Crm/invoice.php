<?php 

// Common
$bCheckPermissions = false;
$CCrmInvoice = new \CCrmInvoice($bCheckPermissions);

// GetList
$arOrder = ['ID' => 'DESC'];
$arFilter = ['CHECK_PERMISSIONS' => 'N'];
$arGroupBy = false;
$arNav = false;
$arSelect = [];
$arOptions = [];
$dbRes = $CCrmInvoice::GetList($arOrder, $arFilter, $arGroupBy, $arNav, $arSelect, $arOptions);
while ($item = $dbRes->GetNext()) {
    echo '<pre>'; var_dump($item); echo '</pre>';
}

// Add/Update
$arProducts[] = [
   'ID' => 0,
   'CUSTOMIZED' => 'Y',
   'PRODUCT_ID' => 123,
   'PRODUCT_NAME' => '',
   'QUANTITY' => 1,
   'VAT_RATE' => 0.20,
   'VAT_INCLUDED' => 'Y',
   'DISCOUNT_PRICE' => 0,
   'PRICE' => 1,
   'MEASURE_CODE' => 1,
   'MEASURE_NAME' => 'шт',
];
$arProducts[] = [
  'ID' => $i,
  'CUSTOMIZED' => 'Y',
  //'PRODUCT_ID' => 0,
  'PRODUCT_NAME' => '',
  'QUANTITY' => 1,
  'VAT_RATE' => 0.20,
  'VAT_INCLUDED' => 'Y',
  'DISCOUNT_PRICE' => 0,
  'PRICE' => 1,
  'MEASURE_CODE' => 1,
  'MEASURE_NAME' => 'шт',
];
$arFields = [
  'ACCOUNT_NUMBER' => $params['orderId'],
  'ORDER_TOPIC' => 'Заказ #' . $params['orderId'],
  'STATUS_ID' => 'N',
  'PAY_SYSTEM_ID' => 1,
  'PERSON_TYPE_ID' => 1,
  'ASSIGNED_BY_ID' => 1,
  'RESPONSIBLE_ID' => $userid,
  'UF_DEAL_ID' => 0,
  'UF_QUOTE_ID' => 0,
  'UF_CONTACT_ID' => 0,
  'UF_COMPANY_ID' => 0,
  'UF_MYCOMPANY_ID' => 0,
  'PRODUCT_ROWS' => $arProducts,
  'INVOICE_PROPERTIES' => ['', ''],
];
$arOptions = [];
$arRecalculated = false;
$siteId = 's1';
$dbRes = $CCrmInvoice->Update($id, $arFields, $arOptions);
$id = $CCrmInvoice->Add($arFields, $arRecalculated, $siteId, $arOptions);