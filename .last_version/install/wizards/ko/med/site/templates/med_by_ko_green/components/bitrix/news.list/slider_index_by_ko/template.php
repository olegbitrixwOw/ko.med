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

		
		<ul class="bxslider">
			<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
				$arFileTmp = CFile::ResizeImageGet(
					$arItem["PREVIEW_PICTURE"],
					array("width" => 1000, "height" => 300),
					BX_RESIZE_IMAGE_EXACT,
					true,
					$arWaterMark
				);
			?>
			
				<li>
				<a href="<?=SITE_DIR?><?=$arItem["CODE"]?>">
					<div class="carousel-caption">
						 
								
					</div>
					
						<img src="<?=$arFileTmp["src"]?>" alt="<?=$arItem["NAME"]?>">
					</a>
				</li>
			<?endforeach;?>					

		</ul>
	
	
