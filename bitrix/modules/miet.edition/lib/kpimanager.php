<?php
namespace MIET\EDITION;
use Bitrix\Main\Application;
use Bitrix\Main\Entity;
use Bitrix\Main\Entity\Event;
use Bitrix\Main\Localization\Loc;
use Bitrix\Iblock\ElementTable;
use Bitrix\Main\UserTable;
Loc::loadMessages(__FILE__);
class KPIManager {
    const IBLOCK_CODE_IZDANIE = 'izdanie';
    const IBLOCK_CODE_DEPARTMENTS = 'departments';
    public static function GetKPI(
        $arOrder = array('SORT' => 'ASC'),
        $arFilter = array(),
        $arGroupBy = false,
        $arNavStartParams = false,
        $arSelectFields = array('ID', 'NAME')
    ) {
        $elements = array();
        //Получаем ID инфоблока Edition по его символьному коду
        $rsIblock = \CIBlock::GetList(
            array(),
            array('CODE' => self::IBLOCK_CODE_IZDANIE, 'SITE_ID' => SITE_ID)
        );
        $arIblock = $rsIblock->GetNext();
        $arFilter['IBLOCK_ID'] = $arIblock['ID'];
        $rsElements = \CIBlockElement::GetList(
            $arOrder, //массив полей сортировки элементов и её            направления
            $arFilter, //массив полей фильтра элементов и их значений
            $arGroupBy, //массив полей для группировки элементов
            $arNavStartParams, //параметры для постраничной навигациии ограничения количества выводимых элементов
            $arSelectFields //массив возвращаемых полей элементов
 );
 while($arElements = $rsElements->Fetch()) {
     //Получение информации о файле с регламентом расчета     показателя: ссылка на файл на сервере, название файла и т.д.
 foreach($arElements['PROPERTY_REGULATIONS_VALUE'] as $key => $idFileRegulation) {
         $arElements['PROPERTY_REGULATIONS_VALUE'][$key] = \CFile::GetFileArray($idFileRegulation);
     }
 $elements[] = $arElements;
 }
 return $elements;
 }
    public static function GetKPIEmployee($idEmployee) {
        if(!$idEmployee) {
            return array();
        }
        //Получаем список всех рейтингов издания
        $arDepartmentsUser = UserTable::getList(array(
            'select' => array(
                'UF_ID_RATING_TITLE'
            ),
            'filter' => array(
                'ID' => $idEmployee
            )
        ))->fetch();
        //Получаем список всех KPI данных подразделений
        return self::GetKPI(
            array('NAME' => 'asc'),
            array('ID_RATING.ID' => $arDepartmentsUser),
            false,
            false,
            array('ID', 'NAME')
        );
    }
    public static function SetKPIEmployee($edition_title, $idRating, $idPeriodika, $dateReceiped, $quantity, $editor, $arEditionValues) {
        if (!$edition_title || !$idRating || !$idPeriodika || !$dateReceiped || !$quantity || !$editor || !$arEditionValues)
        {
            return array();
        }
        global $USER;
        //Получаем объект подключения к БД
        $db = Application::getConnection();
        //Начинаем транзакцию
        $db->startTransaction();

        foreach($arEditionValues as $edition => $editionValue) {
            $arValue = array(
                'UF_EDITION_TITLE' => $edition_title,
                'UF_ID_RATING_TITLE' => $idRating,
                'UF_ID_TYPE_EDITION' => $idPeriodika,
                'UF_DATE_RECEIPED' => $dateReceiped,
                'UF_QUANTITY' => $quantity,
                'UF_EDITOR' => $editor,

            );
            $result = KPIEmployeeTable::add($arValue);
            if (!$result->isSuccess()) {
                $db->rollbackTransaction();
                return false;
            }
        }
        if ($result->isSuccess()) {
            $db->commitTransaction();
            return true;
        }
    }

    public static function GetKPIEmployeeValue($edition_title, $idRating, $idPeriodika, $dateReceiped, $quantity, $editor, $arEditionValues)
    {
        if (!$edition_title || !$idRating || !$idPeriodika || !$dateReceiped || !$quantity || !$editor || !$arEditionValues)
        {
            return array();
        }

        return KPIEmployeeTable::getList(array(
            'select' => array(
                'UF_EDITION_TITLE',
                'ID'
            ),
            'filter' => array(
                'UF_EDITION_TITLE' => $edition_title,
                'UF_ID_RATING_TITLE' => $idRating,
                'UF_ID_TYPE_EDITION' => $idPeriodika,
                'UF_DATE_RECEIPED' => $dateReceiped,
                'UF_QUANTITY' => $quantity,
                'UF_EDITOR' => $editor,
            )
        ))->fetch();
    }
}