    <?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?></p>
    <h2>
        Элементы инфоблока</h2>
    <? foreach($arResult as $res): ?>
        <div>
            Название: <?=$res['NAME']?></div>
        <div>
            Детальное описание: <?=$res['DETAIL_TEXT']?></div>
    <? endforeach; ?>
    <p>