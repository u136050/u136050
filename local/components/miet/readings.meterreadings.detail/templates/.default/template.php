<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?if($arResult['OK']):?>
    <?ShowMessage(array('TYPE' => 'OK','MESSAGE' => $arResult['OK']));?>
<?endif;?>
<?if($arResult['ERROR']):?>
    <?ShowMessage(array('TYPE' => 'ERROR','MESSAGE' => $arResult['ERROR']));?>
<?endif;?>

<form name="meterreadingsform" action="<?=POST_FORM_ACTION_URI?>" method="POST">
    <table class="formMeterReadings" border="0" cellpadding="10px">
        <tr>
            <td><?=GetMessage("Surname");?></td>
            <td><input type="text" name="Surname" value="<?=$REQUEST["UF_EDITION_TITLE"];?>"></td>
        </tr>
        <tr>
            <td><?=GetMessage("Name");?></td>
            <td><input type="int" name="Name" value="<?=$REQUEST["UF_ID_RATING_TITLE"];?>"></td>
        </tr>
        <tr>
            <td><?=GetMessage("Patronymic");?></td>
            <td><input type="int" name="Patronymic" value="<?=$REQUEST["UF_ID_TYPE_EDITION"];?>"></td>
        </tr>
        <tr>
            <td><?=GetMessage("Flat");?></td>
            <td><input type="date" name="Birth" value="<?=$REQUEST["UF_DATE_RECEIPED"];?>"></td>
        </tr>
        <tr>
            <td><?=GetMessage("House");?></td>
            <td><input type="int" name="House" value="<?=$REQUEST["UF_QUANTITY"];?>"></td>
        </tr>
        <tr>
            <td><?=GetMessage("Region");?></td>
            <td><input type="text" name="Region" value="<?=$REQUEST["UF_EDITOR"];?>"></td>
        </tr>
       <tr>
            <td><?=GetMessage("Meter_readings");?></td>
            <td><input type="text" name="Meter_readings" value="<?=$REQUEST["UF_READINGS"];?>"></td>
        </tr>
        <tr>
            <td><?=GetMessage("Service_name");?></td>
            <td>
                <select name="UF_SERVICE_NAME">
                    <?foreach($arResult["SERVICES"] as $arItem):?>
                        <option  value="<?=$arItem['ID'];?>"><?=$arItem['UF_SERVICE_NAME'];?></option>
                    <?endforeach;?>
                </select>
            </td>
        </tr>
        <tr>
            <td>
    <input type="submit" name="saveMeterReading" value="<?=GetMessage("Save_readings");?>">
            </td>
        </tr>
    </table>
</form>



