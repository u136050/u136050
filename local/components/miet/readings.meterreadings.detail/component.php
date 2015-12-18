<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
###Инициализация глобальных переменных Битрикс###
global $DB;
/** @global CUser $USER */
global $USER;
###
\Bitrix\Main\Loader::includeModule('miet.readings');
use MIET\READINGS;

if($_REQUEST['saveMeterReading']) {
    if(READINGS\ReadingsManager::SaveReadings($_REQUEST)) {
        $arResult['OK'] = 'Изменения успешно сохранены';
    } else {
        $arResult['ERROR'] = 'Ошибка при сохранении';
    }
}


###Подключение шаблона компонента###
$this->IncludeComponentTemplate();
###
?>