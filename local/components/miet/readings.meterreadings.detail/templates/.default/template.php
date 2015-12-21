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
            <td class="fortext"><?=GetMessage("UF_EDITION_TITLE");?></td>
            <td ><input type="text" name="UF_EDITION_TITLE" value="<?=$REQUEST["UF_FAM"];?>"></td>
        </tr>
        <tr>
            <td class="fortext"><?=GetMessage("reit");?></td>
            <td><select name="reit">
                    <?foreach($arResult['reit'] as $value):?>

                    <option><?=$value['NAME']?></option>

 <?endforeach;?>

                </select></td>
        </tr>
        <tr>
            <td class="fortext"><?=GetMessage("Patronymic");?></td>
            <td>

                <select  name="pereod"  >
                    <?foreach($arResult['pereod'] as $value):?>

                        <option><?=$value['NAME']?></option>

                    <?endforeach;?>



                </select>


            </td>
        </tr>
        <tr>
            <td class="fortext"><?=GetMessage("UF_QUANTITY");?></td>
            <td><input type="text" name="UF_QUANTITY" value="<?=$REQUEST["UF_FLAT"];?>"></td>
        </tr>
        <tr>
            <td class="fortext"><?=GetMessage("UF_EDITOR");?></td>
            <td><input type="text" name="UF_EDITOR" value="<?=$REQUEST["UF_HOUSE_BUILDING"];?>"></td>
        </tr>

        <tr>
            <td>
    <input type="submit" id="submit" name="save" value="<?=GetMessage("Save_readings");?>">
            </td>
        </tr>
    </table>
</form>





