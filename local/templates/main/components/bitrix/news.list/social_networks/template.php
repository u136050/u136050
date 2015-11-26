<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="column">
	<h3>Немного о нас...</h3>
	<p>Компания вносит свой вклад в развитие образования, повышение благосостояния населения и страны, соблюдая налоговое, таможенное и трудовое законодательство.</p>
	<h3>Подписывайся!</h3>
	<?if (!empty($arResult)):?>
	<ul class="social-list">
		<?foreach($arResult["ITEMS"] as $key => $arItem):?>
			<li><a href="<?=$arItem["PROPERTIES"]["URL"]["VALUE"]?>" class="background: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>) no-repeat" class="social4 fadeThis"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"];?>"/><span class="hover"><?=$arItem["PREVIEW_PICTURE"]["TITLE"];?></span></a></li>
		<?endforeach;?>
	</ul>
	<?endif?>
</div>