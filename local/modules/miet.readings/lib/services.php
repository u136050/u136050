<?php
namespace MIET\READINGS;
use Bitrix\Main\Entity;
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
class ServicesTable extends Entity\DataManager {
    public static function getFilePath()
    {
        return __FILE__;
    }
    /*Название таблицы HL в БД*/
    public static function getTableName()
    {
        return 'services';
    }
    /*Описание полей сущности (соответсвуют полям HL EmployeeKPI)*/
    public static function getMap()
    {
        return array(
            'ID' => array(
                'data_type' => 'integer',
                'primary' => true,
                'autocomplete' => true,
                'title' => Loc::getMessage('SERVICES_ID_FIELD')
            ),
            'UF_MEAN_VALUE' => array(
                'data_type' => 'float',
                'required' => true,
                'validation' => array(//Метод-валидатор значения
                    __CLASS__,//Имя класса метода-валидатора, вданном случае текущий класс
                    'val1' //Название метода-валидатора вданном классе
                ),

                'title' => Loc::getMessage('MEAN_VALUE_FIELD')
            ),
            'UF_TARIFF' => array(
                'data_type' => 'float',
                'required' => true,
                'validation' => array(//Метод-валидатор значения
                    __CLASS__,//Имя класса метода-валидатора, вданном случае текущий класс
                    'val1' //Название метода-валидатора вданном классе
                ),
                'title' =>Loc::getMessage('TARIFF_FIELD')

            ),
            'UF_SERVICE_NAME' => array(
                'data_type' => 'string',
                'required' => true,
                'title' => Loc::getMessage('SERVICE_NAME_FIELD')
            ),
            'UF_UNIT' => array(
                'data_type' => 'integer',
                'required' => true,
                'title' => Loc::getMessage('UNIT_FIELD')
            ),

            //Описываем все связи с другими таблицами (внешние ключи)
            new Entity\ReferenceField(
                'UF_UNIT',
                'Bitrix\Iblock\ElementTable',
                array('=this.UF_UNIT' => 'ref.ID')
            )

        );
    }
    public static function val1()
    {
        return array(
            new Entity\Validator\Range(0, null, false, array("MIN" =>
                "Количество должно быть больше нуля")),
        );
    }

    //public static function GetMinPeriod()
    //{
    //   return current(self::getList(array(
    //     'select' => array(
    //         new Entity\ExpressionField('MIN_PERIOD', 'MIN(%s)',
    //             array('UF_PERIOD'))
    //   )
    // ))->fetch());
    // }
}