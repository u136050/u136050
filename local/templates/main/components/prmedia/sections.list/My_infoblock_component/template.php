<h2>Рейтинги</h2>
<?if (!empty($arResult)):?>
<ul>
    <? foreach($arResult as  $key => $category): ?>
        <li><a href="/posts/<?=$category["CODE"]?>/" title="<?=$category["NAME"]?>"><?=$category["NAME"]?> (<?=

                $category["ELEMENT_CNT"]?>)</a></li>
    <? endforeach; ?>
</ul>
<?endif?>

