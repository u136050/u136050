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
    public static function SaveReadings($arData)
    {
        $db = Application::getConnection();
        $db->startTransaction();
        /* таблица Клиент, все поля*/
        $date = explode("-", $arData['Date_receiped']);
        $result = ClientTable::add(array(
            'UF_EDITION_TITLE' => $arData['Surname'],
            'UF_ID_RATING_TITLE' => $arData['Name'],
            'UF_ID_TYPE_EDITION' => $arData['Patronymic'],
            'UF_QUANTITY' => $arData['House'],
            'UF_EDITOR' => $arData['Region'],
            'UF_DATE_RECEIPED' => new \Bitrix\Main\Type\Date($date[2].'.'.$date[1].'.'.$date[0])
        ));
        if (!$result->isSuccess()) {
            $db->rollbackTransaction();
            return false;
        }
        $idClient = $result->getID();
        print_r($arData);
        $date = explode("-", $arData['Show_date']);
        /* таблица Показания счетчика,только поля дата и показания*/
        $result = MeterReadingsTable::add(array(
            'UF_ID_CLIENT' => $idClient,
            'UF_ID_SERVICE' => $arData['UF_SERVICE_NAME'],
            'UF_SHOW_DATE' => new \Bitrix\Main\Type\Date($date[2].'.'.$date[1].'.'.$date[0]),
            'UF_READINGS' => $arData['Readings']
        ));
        if (!$result->isSuccess()) {
            $db->rollbackTransaction();
            return false;
        }
        $db->commitTransaction();
        return true;
    }
}