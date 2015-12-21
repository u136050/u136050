<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
###Инициализация глобальных переменных Битрикс###
global $DB;
/** @global CUser $USER */
global $USER;
###
\Bitrix\Main\Loader::includeModule('miet.readings');
use MIET\READINGS;
$arResult['reit']=READINGS\ReadingsManager:: viewblock (31 );
$arResult['pereod']=READINGS\ReadingsManager:: viewblock (32 );


foreach($arResult['reit'] as $value1)
{
    if($value1['NAME']==$_REQUEST['reit'])$reis=$value1['ID'];

}
foreach($arResult['pereod'] as $value1)
{
    if($value1['NAME']==$_REQUEST['pereod'])$pereod=$value1['ID'];

}



    if($_REQUEST['save']) {
    if(READINGS\ReadingsManager::Save($_REQUEST,$reis,$pereod)) {
        $arResult['OK'] = 'Изменения успешно сохранены';
    } else {
        $arResult['ERROR'] = 'Ошибка при сохранении';
    }
}


###Подключение шаблона компонента###
$this->IncludeComponentTemplate();
###
?>