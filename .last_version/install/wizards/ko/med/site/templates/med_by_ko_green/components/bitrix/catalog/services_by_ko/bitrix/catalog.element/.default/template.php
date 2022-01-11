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
	$this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));


				  $arFileTmp = CFile::ResizeImageGet(
					$arResult["DETAIL_PICTURE"],
					array("width" => 600, "height" => 400),
					BX_RESIZE_IMAGE_EXACT,
					true,
					$arWaterMark
				);
				?>
<div class="service-item">

	<img  src="<?echo $arFileTmp["src"]?>">
	<div class="text"><?echo $arResult["DETAIL_TEXT"]?></div>
	<div class="price">
		<?if (!empty($arResult["PROPERTIES"]["PRICE"]["VALUE"])):
			echo $arResult["PROPERTIES"]["PRICE"]["NAME"];
			echo " : ";
			echo $arResult["PROPERTIES"]["PRICE"]["VALUE"];
		endif;?>
	</div>
	
	<a class="zapis_priem btn callback call_master_btn btn_feed"><?=GetMessage("ZAPIS_NA_PRIEM")?></a>
</div>
