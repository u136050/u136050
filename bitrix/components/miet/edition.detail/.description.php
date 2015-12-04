<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arComponentDescription = array(
    "NAME" => GetMessage("Мой компонент 923490245"),
    "DESCRIPTION" => GetMessage("DESCRIPTION_COMPONENT"),
    "SORT" => 20,
    "CACHE_PATH" => "Y",
    "PATH" => array(
        "ID" => "intranet",
        "NAME" => GetMessage("NAME_INTRANET"),
        "CHILD" => array(
            "ID" => "KPI",
            "NAME" => GetMessage("NAME_KPI"),
            "SORT" => 10,
            "CHILD" => array(
                "ID" => "KPIValue",
            )
        ),
    ),
);
