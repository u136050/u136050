<?php
namespace MIET\READINGS;
use Bitrix\Main\Entity;
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
class MeterReadingsTable extends Entity\DataManager {
    public static function getFilePath()
    {
        return __FILE__;
    }
    /*Название таблицы HL в БД*/
    public static function getTableName()
    {
        return 'meter_readings';
    }
    /*Описание полей сущности (соответсвуют полям HL EmployeeKPI)*/
    public static function getMap()
    {
        return array(
            'ID' => array(
                'data_type' => 'integer',
                'primary' => true,
                'autocomplete' => true,
                'title' => Loc::getMessage('METER_READINGS_ID_FIELD')
            ),
            'UF_ID_CLIENT' => array(
                'data_type' => 'integer',
                'required' => true,
                'title' => Loc::getMessage('CLIENT_ID_FIELD')
            ),
            'UF_READINGS' => array(
                'data_type' => 'float',
                'required' => true,
                'validation' => array(//Метод-валидатор значения
                    __CLASS__,//Имя класса метода-валидатора, вданном случае текущий класс
               'val_readings' //Название метода-валидатора вданном классе
            ),
                'title' =>Loc::getMessage('READINGS_FIELD')

            ),
            'UF_SHOW_DATE' => array(
            'data_type' => 'date',
            'required' => true,
            'title' => Loc::getMessage('SHOW_DATE_FIELD')
             ),
            'UF_ID_SERVICE' => array(
            'data_type' => 'integer',
            'required' => true,
                'title' => Loc::getMessage('ID_SERVICE_FIELD')
            ),

 //Описываем все связи с другими таблицами (внешние ключи)
 new Entity\ReferenceField(
     'UF_ID_CLIENT',
     'MIET\READINGS\Clients',
     array('=this.UF_ID_CLIENT' => 'ref.ID')
 ),
 new Entity\ReferenceField(
     'UF_ID_SERVICE',
     'MIET\READINGS\Services',
     array('=this.UF_ID_SERVICE' => 'ref.ID')
 )

 );
 }
    public static function val_readings()
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