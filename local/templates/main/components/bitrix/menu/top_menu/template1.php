<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="wrap">
	<?if (!empty($arResult)):?>
	<ul id="nav" class="ddsmoothmenu">
		<li class="active"><a href="index.html" class="home">Home</a></li>
		<?foreach($arResult as $key => $arItem):?>
			<li><a href="<?=$arItem["LINK"];?>"><span><em><?=$arItem["TEXT"];?></em></span></a></li>
		<?endforeach;?>

	</ul>
	<?endif?>
</div>