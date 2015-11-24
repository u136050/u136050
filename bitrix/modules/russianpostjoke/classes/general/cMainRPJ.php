<?php
class cMainRPJ {
    static $MODULE_ID="russianpostjoke";
    /**
     * �������, ������������� ��������� � ����������
     * @param $arFields
     * @return bool
     */
    static function onBeforeElementUpdateHandler($arFields){
        // ������ ���������� ������
        // $iblock_id = ;
        // �������� ������������
        if (in_array(date('w'),array(0,6)) || (date('H')>18) || (date('H')<9))
        {
            global $APPLICATION;
            $APPLICATION->throwException(COption::GetOptionString(self::$MODULE_ID, "WE_ARE_CLOSED_TEXT", "���� �� ����, � ��� �������!"));
            return false;
        }
        // ���������
        return true;
    }
}