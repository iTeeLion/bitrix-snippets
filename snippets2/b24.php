<?php 

// Верхнее меню bitrix24
$baseDir = str_replace(realpath($_SERVER['DOCUMENT_ROOT']), '', realpath(__DIR__));
$aMenuLinks = [
    ['Назад', '../', [], [], ''],
    ['Главная', '$baseDir', [], [], ''],
    ['Страница', '$baseDir/page', [], [], ''],
];

// Добавить кастомное статичное меню в стандартное динамическое .superleft.menu_ext.php (.top.menu_ext.php)
foreach($aMenuLinks as $menuItem){
    $arMenu[] = $menuItem;
}

// Left menu - Add static menu item .superleft.menu.php (.top.menu.php)
$aMenuLinks = [
    [
      'Link name',
      '/linktodir/',
      [],
      [],
      '',
    ],
];
