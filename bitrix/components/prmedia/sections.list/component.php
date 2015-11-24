<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
 //   echo '<pre>'; print_r($arParams); echo '</pre>';
CModule::IncludeModule('iblock');
if ($this->StartResultCache(3600))
{
    $section_id  = 0;
    $cnt = 0;
    $iblock_id = $arParams["IBLOCK_ID"];
    $arFilter = array("INCLUDE_ELEMENTS"=>"Y" ,"IBLOCK_ID"=>$iblock_id);
    $db_list = GetIBlockElementList($iblock_id, $section_id, array("SORT"=>"ASC"), $cnt, $arFilter);
        // CIBlockSection::GetList(array("NAME"=>"ASC"), $arFilter, true, array("ID", "NAME", "CODE"));
    while($ar_result = $db_list->GetNext())
    {
        $arResult[] = array(
            "ID" => $ar_result["ID"],
            "CODE" => $ar_result["CODE"],
            "NAME" => $ar_result["NAME"],
            "ELEMENT_CNT" => $ar_result["ELEMENT_CNT"]
        );
    }
   //  echo '<pre>'; print_r($arResult); echo '</pre>';
    $this->IncludeComponentTemplate();
}
?>


