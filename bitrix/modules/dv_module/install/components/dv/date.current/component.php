<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$arResult['DATE'] = date($arParams["TEMPLATE_FOR_DATE"]);
//$arResult["TITLE"] = string($arParams["TITLE"]);
$this->IncludeComponentTemplate();
?>
