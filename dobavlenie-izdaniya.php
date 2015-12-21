<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Добавление издания");
?><?$APPLICATION->IncludeComponent(
	"miet:readings.meterreadings.detail",
	"",
	Array(
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>