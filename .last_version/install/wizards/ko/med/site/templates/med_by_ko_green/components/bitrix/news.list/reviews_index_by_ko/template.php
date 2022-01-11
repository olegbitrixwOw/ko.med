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
<?

$curPage = $APPLICATION->GetCurPage();

?>
<div class="advantages container reviews_inner">
	<?if ($curPage == SITE_DIR):?>
		<h3>
			<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/reviews_title.php"), false);?>  
		</h3>
	<?endif;?>
		<div class="row">
		<div class="reviews">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div class="col-lg-12 col-md-12  col-sm-12 col-xs-12 review-col">
				
				<?
				
					 $arFileTmp = CFile::ResizeImageGet(
							$arItem["PREVIEW_PICTURE"],
							array("width" => 150, "height" => 110),
							BX_RESIZE_IMAGE_EXACT,
							true,
							$arWaterMark
						);
				?>


					<div class="item">
						<div class="img"><span>
						<?if (!empty($arItem["PREVIEW_PICTURE"]["SRC"])){?>
							<img src="<?=$arFileTmp["src"]?>" width="150" height="110">
						<?}else{?>
							<img src="<?=SITE_TEMPLATE_PATH?>/images/no_image.png">
						<?}?>
						</span></div>
						<div class="content_review">
							<div class="name"><?echo $arItem["NAME"]?></div>
							<div class="date"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></div>
							<div class="text"><?echo $arItem["PREVIEW_TEXT"];?></div>
						</div>
					</div>

				</div>
				
			<?endforeach;?>
			</div>
			<div class="clear"></div>
			<div class="reviews_bottom">
				<a class="btn_feed btn add_review_btn" ><?=GetMessage("ADD_REVIEW_KO")?></a>
				<?if ($curPage == SITE_DIR):?>
					<a class="btn_feed btn" href="<?=SITE_DIR?>reviews/"><?=GetMessage("REVIEW_LINKS_KO")?></a>
				<?endif;?>
			</div>
			
		</div>
</div>