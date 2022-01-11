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
<div class="services_section">
<?
foreach ($arResult['SECTIONS'] as &$arSection)
			{
				  $arFileTmp = CFile::ResizeImageGet(
					$arSection["PICTURE"],
					array("width" => 320, "height" => 200),
					BX_RESIZE_IMAGE_EXACT,
					true,
					$arWaterMark
				);
				?><a href="<?=$arSection["SECTION_PAGE_URL"]?>">
					<div class="col-lg-4 service">
						
							<img src="<?=$arFileTmp["src"]?>">
							
						
						<div class="name"><?echo $arSection["NAME"];?></div>
					</div>
				</a>
			<?		
			}?>
</div>

