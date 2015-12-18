<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?if($arResult['OK']):?>
    <?ShowMessage(array('TYPE' => 'OK','MESSAGE' => $arResult['OK']));?>
<?endif;?>
<?if($arResult['ERROR']):?>
    <?ShowMessage(array('TYPE' => 'ERROR','MESSAGE' => $arResult['ERROR']));?>
<?endif;?>

<form class="myclass" name="meterreadingsform" action="<?=POST_FORM_ACTION_URI?>" method="POST">
    <table class="formMeterReadings" border="0" cellpadding="10px">
        <tr>
            <td class="fortext"><?=GetMessage("Surname");?></td>
            <td ><input type="text" name="Surname" value="<?=$REQUEST["UF_FAM"];?>"></td>
        </tr>
        <tr>
            <td class="fortext"><?=GetMessage("Name");?></td>
            <td><input type="text" name="Name" value="<?=$REQUEST["UF_IMYA"];?>"></td>
        </tr>
        <tr>
            <td class="fortext"><?=GetMessage("Patronymic");?></td>
            <td><input type="text" name="Patronymic" value="<?=$REQUEST["UF_OTCH"];?>"></td>
        </tr>
        <tr>
            <td class="fortext"><?=GetMessage("Flat");?></td>
            <td><input type="text" name="Flat" value="<?=$REQUEST["UF_FLAT"];?>"></td>
        </tr>
        <tr>
            <td class="fortext"><?=GetMessage("House");?></td>
            <td><input type="text" name="House" value="<?=$REQUEST["UF_HOUSE_BUILDING"];?>"></td>
        </tr>
        <tr>
            <td class="fortext"><?=GetMessage("Birth");?></td>
            <td><input type="date" name="Birth" value="<?=$REQUEST["UF_BIRTH_DATE"];?>"></td>
        </tr>
        <tr>
            <td>
    <input type="submit" id="submit" name="saveMeterReading" value="<?=GetMessage("Save_readings");?>">
            </td>
        </tr>
    </table>
</form>





