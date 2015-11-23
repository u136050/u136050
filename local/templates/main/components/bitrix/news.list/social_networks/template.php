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
	<h3>Новости</h3>
	<p>Вы сможете получать самые свежие новости от нас!</p>
	<form action="#" class="subscribe-form">
		<fieldset>
			<span class="text-wrap"><input type="text" class="text" value="E-mail адрес" /></span>
			<input type="submit" class="submit" value="Подписаться" />
		</fieldset>
	</form>
	<h3>Подписывайся!</h3>
	<?if (!empty($arResult)):?>
	<ul class="social-list">
		<?foreach($arResult["ITEMS"] as $key => $arItem):?>
			<li><a href="<?=$arItem["PROPERTIES"]["URL"]["VALUE"]?>" class="background: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>) no-repeat" class=" social4 fadeThis"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"];?>"/><span class="hover"><?=$arItem["PREVIEW_PICTURE"]["TITLE"];?></span></a></li>
		<?endforeach;?>
	</ul>
	<?endif?>
</div>