<?php
namespace MIET\READINGS;
use Bitrix\Main\Application;
use Bitrix\Main\Entity;
use Bitrix\Main\Entity\Event;
use Bitrix\Main\Localization\Loc;
use Bitrix\Iblock\ElementTable;
use Bitrix\Main\UserTable;
Loc::loadMessages(__FILE__);

Class ReadingsManager
{

    public static function viewblock($qwer)
    {

$myresault = \CIBlockElement::GetList(
$arOrder = Array(), //массив полей сортировки элементов и еёнаправления
$arFilter = Array('IBLOCK_ID' => $qwer),
$arGroupBy = false,
$arNavStartParams = false,
$arSelectFields = Array('NAME', 'ID' )
);

        while($arElements = $myresault->Fetch()) {
            //Получение информации о файле с регламентом расчетапоказателя: ссылка на файл на сервере, название файла и т.д.

            $elements[] = $arElements;
        }
        // var_dump($elements);
        return $elements;

}


    public static function Save($arData,$reis,$pereod)
    {
        $db = Application::getConnection();
        $db->startTransaction();
        /* таблица Издание, все поля*/
        $result = ClientTable::add(array(
            'UF_EDITION_TITLE' => $arData['UF_EDITION_TITLE'],
            'UF_ID_RATING_TITLE' => $reis,
            'UF_ID_TYPE_EDITION' => $pereod,
            'UF_QUANTITY' =>$arData['UF_QUANTITY'],
            'UF_EDITOR' => $arData['UF_EDITOR']

        ));
        if (!$result->isSuccess()) {
            $db->rollbackTransaction();
            return false;
        }
        $idClient = $result->getID();
       // print_r($arData);
        if (!$result->isSuccess()) {
            $db->rollbackTransaction();
            return false;
        }
        $db->commitTransaction();
        return true;
    }
}