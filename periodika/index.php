<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->IncludeComponent("periodika:sections.list", ".default", array(
    "IBLOCK_ID" => 32
),
    false);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>