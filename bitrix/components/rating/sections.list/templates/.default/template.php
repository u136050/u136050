    <div style="margin: 15px;">
        <ul class="older">
        <? foreach($arResult as $category): ?>
            <li><a href="#"><?=$category["NAME"]?></a></li>
        <? endforeach; ?>
        </ul>
    </div>