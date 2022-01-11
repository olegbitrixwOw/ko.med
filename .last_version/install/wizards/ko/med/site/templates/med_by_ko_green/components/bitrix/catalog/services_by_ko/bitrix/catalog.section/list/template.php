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


	<?foreach($arResult["ITEMS"] as $arElement):?>
	<?
	$this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));


				  $arFileTmp = CFile::ResizeImageGet(
					$arElement["PREVIEW_PICTURE"],
					array("width" => 320, "height" => 200),
					BX_RESIZE_IMAGE_EXACT,
					true,
					$arWaterMark
				);
				?><a href="<?=$arElement["DETAIL_PAGE_URL"]?>">
					<div class="col-lg-4 service">
						
							<img src="<?=$arFileTmp["src"]?>">
							
						
						<p class="name"><?echo $arElement["NAME"];?></p>
					</div>
				</a>
			<?		
			//}?>
	<?endforeach;?>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<p><?=$arResult["NAV_STRING"]?></p>
<?endif?>

