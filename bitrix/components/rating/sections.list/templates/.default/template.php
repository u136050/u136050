<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>
    <div style="margin: 15px;">
        <ul class="older">
        <? foreach($arResult as $category): ?>
            <li><a href="#"><?=$category["NAME"]?></a></li>
        <? endforeach; ?>
        </ul>
    </div>