<?php
namespace MIET\READINGS;
use Bitrix\Main\Entity;
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
class ClientTable extends Entity\DataManager {
    public static function getFilePath()
    {
        return __FILE__;
    }
    /*Название таблицы HL в БД*/
    public static function getTableName()
    {
        return 't_edition';
    }
    /*Описание полей сущности (соответсвуют полям HL EmployeeKPI)*/
    public static function getMap()
    {
        return array(
            'ID' => array(
                'data_type' => 'integer',
                'primary' => true,
                'autocomplete' => true,
                'title' => Loc::getMessage('CLIENT_ID_FIELD')
            ),
            'UF_EDITION_TITLE' => array(
                'data_type' => 'string',
                'required' => true,
                'title' => Loc::getMessage('OTCH_FIELD')
            ),
            'UF_ID_RATING_TITLE' => array(
                'data_type' => 'integer',
                'required' => false,
                'title' => Loc::getMessage('IMYA_FIELD')
            ),
            'UF_ID_TYPE_EDITION' => array(
                'data_type' => 'integer',
                'required' => false,
                'title' => Loc::getMessage('FAM_FIELD')
            ),
            'UF_DATE_RECEIPED' => array(
                'data_type' => 'date',
                'required' => true,
                'title' => Loc::getMessage('FLAT_FIELD')
            ),
            'UF_QUANTITY' => array(
                'data_type' => 'integer',
                'required' => true,
                'title' => Loc::getMessage('HOUSE_BUILDING_FIELD')
            ),
            'UF_EDITOR' => array(
                'data_type' => 'string',
                'required' => true,
                'title' => Loc::getMessage('REGION_FIELD')
            ),
        );
    }
            //Описываем все связи с другими таблицами (внешние ключи)
        new Entity\ReferenceField(
        'UF_ID_RATING_TITLE',
        'Bitrix\Iblock\ElementTable',
        array('=this.UF_ID_RATING_TITLE' => 'ref.ID')
        ),
        new Entity\ReferenceField(
        'UF_ID_TYPE_EDITION',
        'Bitrix\Iblock\ElementTable',
        array('=this.UF_ID_TYPE_EDITION' => 'ref.ID')
        ),
        );
        }
        public static function validateValue()
        {
            return array(
                new Entity\Validator\Range(0, null, false, array("MIN" =>
                    "Количество должно быть больше нуля")),
            );
        }
        }