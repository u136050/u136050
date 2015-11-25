<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вывод хайл");
?><?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.list",
	"",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"BLOCK_ID" => "1",
		"DETAIL_URL" => ""
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>