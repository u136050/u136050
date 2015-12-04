<?php
//Для примера данные будем брать из инфоблока, который служил в прошлые года справочником для товаров
$oldElementID = 31;
$HL_Infoblock_ID = 2; //ID предварительно созданного HL ИБ

CModule::IncludeModule("iblock");
$res = CIBlockElement::GetByID($oldElementID);
if($ar_res = $res->GetNext()){

    //готовим массив с данными по структуре HL инфоблока
    $arFile = array();

    if($ar_res["DETAIL_PICTURE"])
        $arFile = CFile::MakeFileArray($ar_res["DETAIL_PICTURE"]);
    elseif($ar_res["PREVIEW_PICTURE"])
        $arFile = CFile::MakeFileArray($ar_res["PREVIEW_PICTURE"]);

    $data = array(
        "UF_NAME" => $ar_res["NAME"],
        "UF_SORT" => $ar_res["SORT"],
        "UF_XML_ID" => $ar_res["ID"],
        "UF_LINK" => "",
        "UF_DESCRIPTION" => "",
        "UF_FULL_DESCRIPTION" =>"",
        "UF_DEF" => "0",
        "UF_FILE" => $arFile
    );
}

use Bitrix\Highloadblock as HL;

$hlblock = HL\HighloadBlockTable::getById($HL_Infoblock_ID)->fetch();
$entity = HL\HighloadBlockTable::compileEntity($hlblock);
$entity_data_class = $entity->getDataClass();

$result = $entity_data_class::add($data);
$ID = $result->getId();
if($result->isSuccess())
{
    echo 'В справочник добавлена запись '.$ID.'<br />';
}
else {
    echo 'Ошибка добавления записи';
}



if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
###Инициализация глобальных переменных Битрикс###
global $DB;
/** @global CUser $USER */
global $USER;
###
\Bitrix\Main\Loader::includeModule('miet.kpi');
use MIET\KPI;

// $hlblock_id - задает ID вашего hlblock'a
// $entity берется аналогично примерам выше

use Bitrix\Highloadblock as HL;
use Bitrix\Main\Entity;

$hlblock = HL\HighloadBlockTable::getById($hlblock_id)->fetch();

$entity_data_class = $entity->getDataClass();
$entity_table_name = $hlblock['TABLE_NAME'];

$arFilter = array(); //задаете фильтр по вашим полям

$sTableID = 'tbl_'.$entity_table_name;
$rsData = $entity_data_class::getList(array(
    "select" => array('*'), //выбираем все поля
    "filter" => $arFilter,
    "order" => array("UF_SORT"=>"ASC") // сортировка по полю UF_SORT, будет работать только, если вы завели такое поле в hl'блоке
));
$rsData = new CDBResult($rsData, $sTableID);
while($arRes = $rsData->Fetch()){
    var_dump($arRes);
}

if ($this->StartResultCache(3600))
{
    $section_id  = 0;
    $cnt = 0;
    $iblock_id = $arParams["IBLOCK_ID"];
    $arFilter = array("INCLUDE_ELEMENTS"=>"Y" ,"IBLOCK_ID"=>$iblock_id);
    $db_list = GetIBlockElementList($iblock_id, $section_id, array("SORT"=>"ASC"), $cnt, $arFilter);
    // CIBlockSection::GetList(array("NAME"=>"ASC"), $arFilter, true, array("ID", "NAME", "CODE")); Это только для пораздельного вывода
    while($ar_result = $db_list->GetNext())
    {
        $arResult[] = array(
            "ID" => $ar_result["ID"],
            "CODE" => $ar_result["CODE"],
            "NAME" => $ar_result["NAME"],
            "ELEMENT_CNT" => $ar_result["ELEMENT_CNT"]
        );
        $a=$arParams["USER_ID"];
        $arResult['ITEMS'] = KPI\KPIManager::GetKPIEmployee($ar_result["ID"],$a,"11-02-2011");
    }
    //  echo '<pre>'; print_r($arResult); echo '</pre>';
    $this->IncludeComponentTemplate();
}
?>





<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
###Инициализация глобальных переменных Битрикс###
global $DB;
/** @global CUser $USER */
global $USER;
###
\Bitrix\Main\Loader::includeModule('miet.kpi');
use MIET\KPI;
###Проверка входных параметров на корректность и приведение их к нужному виду###
$arParams["USER_ID"] = intval($arParams["USER_ID"]);
if(!$arParams["USER_ID"]) {
    ShowError(GetMessage("EMPTY_USER"));
    @define("ERROR_404", "Y");
    if($arParams["SET_STATUS_404"]==="Y") {
        CHTTP::SetStatus("404 Not Found");
    }
    return array();
}
if(!$_REQUEST['UF_PERIOD']) {
    $_REQUEST['UF_PERIOD'] = '01.' . date('m') . '.' . date('Y');
}
$arParams["DATE_FORMAT"] = trim($arParams["DATE_FORMAT"]);
if(strlen($arParams["DATE_FORMAT"]) <= 0) {
    $arParams["DATE_FORMAT"] = $DB->DateFormatToPHP(CSite::GetDateFormat("SHORT"));
}
###
###Сохранение значений KPI###
if($_REQUEST['saveKPI']) {
    if(KPI\KPIManager::SetKPIEmployee($arParams["USER_ID"],
        $_REQUEST['UF_PERIOD'], $_REQUEST['KPI'])) {
        $arResult['OK'] = 'Изменения успешно сохранены';
    } else {
        $arResult['ERROR'] = 'Ошибка при сохранении';
    }
}
###
###Получение данных из БД###
if($this->StartResultCache(false, array(($arParams["CACHE_GROUPS"]
=== "N" ? false: $USER->GetGroups()), $bUSER_HAVE_ACCESS))) {
    ###Формирование списка отчетных периодов (месяц, год)###
    //Получение текущего месяца и года
    for($i = 1; $i <= 12; $i++) {
        if(strlen($i) == 1) {
            $i = '0' . $i;
        }
        $arResult['PERIOD_ITEMS'][] = array(
            'SELECTED' => ($_REQUEST['UF_PERIOD'] == $i) ? 'selected'
                : '', //Выбираем ранее выбранный, либо текущий месяц
            'VALUE' => '01.' . $i . '.' . date('Y')
        );
    }
    ###
    ###Получение списка показателей KPI для сотрудника###
    $a=$arParams["USER_ID"];
    $arResult['ITEMS'] = KPI\KPIManager::GetKPIEmployee($a);
    ###Кэширование значения элементов массива $arResult###
    $this->SetResultCacheKeys(array(
        "ITEMS",
        "FIO_USER",
        "PROGRAM_DETAIL_PAGE_URL",
        "FORM_ACTION",
        "NAME"
    ));
    ###
    ###Подключение шаблона компонента###
    $this->IncludeComponentTemplate();
    ###
}
###Вывод элементов из кэша###
if(isset($arResult["ITEM"])) {
    $this->SetTemplateCachedData();
    return $arResult["ITEM"];
}
###
