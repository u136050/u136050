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

<div id="intro-holder">
	<div class="intro-box">
		<div class="roundabout-holder large">
			<?if (!empty($arResult)):?>
			<ul id="myRoundabout">
				<?foreach($arResult["ROWS"] as $key => $arItem):?>
				<li>
					<img src="<?=$arItem["PICTURE"]["SRC"];?>" alt="<?=$arItem["PICTURE"]["ALT"];?>" width="<?=$arItem["PICTURE"]["WIDTH"]?>" height="<?=$arItem["PICTURE"]["HEIGHT"]?>" />
					<div class="image">

					</div>
				</li>
				<?endforeach;?>
			</ul>
			<?endif?>
			<div class="controls">
				<a href="#" id="next">Next!</a>
				<a href="#" id="previous">Previous!</a>
			</div>
		</div>
	</div>
</div>
<!-- end intro-holder -->