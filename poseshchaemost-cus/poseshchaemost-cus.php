<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Посещаемость");
?><div style="margin: 15px; margin-left: 300px;">
<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.list",
	"",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"BLOCK_ID" => "3",
		"DETAIL_URL" => ""
	)
);?>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>