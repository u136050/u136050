<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->IncludeComponent("rating:sections.list", ".default", array(
    "IBLOCK_ID" => 31
),
    false);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>
