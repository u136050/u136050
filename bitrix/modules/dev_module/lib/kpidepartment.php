<?php
namespace MIET\KPI;

use \Entity;
use \Loc;

Loc::loadMessages(__FILE__);

class KPIDepartmentTableextends \DataManager {
    public static function getFilePath()
    {
        return __FILE__;
    }

/*Названиетаблицы HL вБД*/
public static function getTableName()
    {
        return 't_department_kpi';
    }

/*Описаниеполейсущности (соответсвуютполям HL DepartmentKPI)*/
public static function getMap()
    {
        return array(
            'ID' =>array(
                'data_type' =>'integer',
                'primary' =>true,
                'autocomplete' =>true,
                'title' =>Loc::getMessage('KPI_ENTITY_ID_FIELD'),
            ),
            /*Еслиполеявляетсяссылкой - внешнимключом, то */
            'UF_KPI' =>new \ReferenceField(
                'UF_KPI',
                'Bitrix\Iblock\ElementTable',
                array('=this.UF_KPI' =>'ref.ID')
            ),
            'UF_VALUE' =>array(
                'data_type' =>'float',
                'validation' =>array(//Метод-валидаторзначения
                    __CLASS__,//Имяклассаметода-валидатора, вданномслучаетекущийкласс
                    'validateValue' //Названиеметода-валидаторавданномклассе
                ),
                'title' =>Loc::getMessage('KPI_ENTITY_UF_VALUE_FIELD'),
            ),
            'UF_DEPARTMENT' =>new \ReferenceField(
                'UF_DEPARTMENT',
                'Bitrix\Iblock\SectionElementTable',
                array('=this.UF_DEPARTMENT' =>'ref.ID')
            ),
            'UF_CREATED_BY' =>new \ReferenceField(
                'UF_CREATED_BY',
                'Bitrix\Main\UserTable',
                array('=this.UF_CREATED_BY' =>'ref.ID')
            ),
            'UF_CREATED' =>array(
                'data_type' =>'datetime',
                'title' =>Loc::getMessage('KPI_ENTITY_UF_CREATED_FIELD'),
            ),
            'UF_CHANGED_BY' =>new \ReferenceField(
                'UF_CHANGED_BY',
                'Bitrix\Main\UserTable',
                array('=this.UF_CHANGED_BY' =>'ref.ID')
            ),
            'UF_CHANGED' =>array(
                'data_type' =>'datetime',
                'title' =>Loc::getMessage('KPI_ENTITY_UF_CHANGED_FIELD'),
            )
        );
    }

public static function validateValue()
    {
        return array(
            new \Range(0, null, false, array("MIN" =>"Количестводолжнобытьбольшенуля")),
        );
    }
}
