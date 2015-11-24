    <div class="wrap">
    <ul id="nav" class="ddsmoothmenu">
        <li class="active"><a href="#"><span><em style="background-color: brown !important">Рейтинги:</em></span></a></li>

        <? foreach($arResult as $category): ?>
            <li class="active"><a href="#" title="<?=$category["NAME"]?>"><span><em><?=$category["NAME"]?></em></span></a></li>
        <? endforeach; ?>
    </ul>
    </div>