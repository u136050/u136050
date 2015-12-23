<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
$APPLICATION->IncludeComponent("rating:sections.list", ".default", array(
    "IBLOCK_ID" => 31
),
    false);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?><?$APPLICATION->IncludeComponent(
	"rating:sections.list",
	"",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_ID" => "31",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600"
	)
);?><br>