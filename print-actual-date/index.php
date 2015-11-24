<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вывод текущей даты");
?>
<?$APPLICATION->IncludeComponent(
	"dv:date.current",
	"",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"TEMPLATE_FOR_DATE" => "F j, Y, g:i:s a"
	)
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
