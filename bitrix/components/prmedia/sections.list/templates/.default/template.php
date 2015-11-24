<h2>Рейтинги</h2>
<ul>
    <? foreach($arResult as $category): ?>
        <li><a href="/posts/<?=$category["CODE"]?>/" title="<?=$category["NAME"]?>"><?=$category["NAME"]?> (<?=

                $category["ELEMENT_CNT"]?>)</a></li>
    <? endforeach; ?>
</ul>
