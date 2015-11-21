<?php
/**
 * Created by PhpStorm.
 * User: Samsung
 * Date: 22.11.2015
 * Time: 1:19
 */
?>
<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die(); ?>
<?
IncludeTemplateLangFile(__FILE__);
$arTemplate = Array(
    "NAME" => GetMessage("TEMPLATE_DESCRIPTION_NAME"),
    "DESCRIPTION" => GetMessage("TEMPLATE_DESCRIPTION_DESC")
);
?>

