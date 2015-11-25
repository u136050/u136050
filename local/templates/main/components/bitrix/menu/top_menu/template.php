<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<ul id="nav" class="ddsmoothmenu">
	<li class="active"><a href="/general/" class="home">Home</a></li>




		<?if (!empty($arResult)):?>

			<?foreach($arResult as $key => $arItem):?>
				<?if($arItem['DEPTH_LEVEL'] != 1){
					continue;
				}
				?>
				<?if($arItem['DEPTH_LEVEL'] == 1):?>
					<li>

						<a href="<?=$arItem["LINK"];?>"  class="with-drop"><span><em><?=$arItem["TEXT"];?></em></span></a>

				<?endif;?>


				<?foreach($arResult as $keyInner => $arItemInner):?>
					<?if($keyInner <= $key) {
						continue;
					}
					?>
					<?if($arItemInner['DEPTH_LEVEL'] == 2):?>
				<ul class="drop">
						<li>
							<a href="<?=$arItemInner["LINK"];?>" class="with-drop"><?=$arItemInner["TEXT"];?></a>

						</li>
				</ul>



					<?endif;?>
					<?if($arItemInner['DEPTH_LEVEL'] != 2){
						break;
					}
					?>
				<?endforeach;?>

				<?if($arItem['DEPTH_LEVEL'] == 1):?>


					</li>

				<?endif;?>

			<?endforeach;?>
			<?endif?>

















</ul>
