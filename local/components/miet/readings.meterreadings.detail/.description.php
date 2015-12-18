<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arComponentDescription = array(
    "NAME" => GetMessage("NAME_COMPONENT"),
    "DESCRIPTION" => GetMessage("DESCRIPTION_COMPONENT"),
    "SORT" => 20,
    "CACHE_PATH" => "Y",
    "PATH" => array(
        "ID" => "intran11et",
        "NAME" => GetMessage("NAME_INTRANET"),
        "CHILD" => array(
            "ID" => "K32PI",
            "NAME" => GetMessage("NAME_KPI"),
            "SORT" => 10,
            "CHILD" => array(
                "ID" => "KP3232IValue",
            )
        ),
    ),
);
?>