<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Должники");
?><div style="margin: 15px; margin-left: 250px;">
<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.list",
	"",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"BLOCK_ID" => "4",
		"DETAIL_URL" => ""
	)
);?>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>