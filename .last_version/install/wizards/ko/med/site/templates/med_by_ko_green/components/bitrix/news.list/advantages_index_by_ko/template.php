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
<div class="advantages">	
    <h3><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/advantages_title.php"), false);?> </h3>
			
		
                
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				 <div >
                    <div class="item_adv">
                         <div class="<?echo $arItem["DETAIL_TEXT"];?>">
							<?if (intval($arItem["NAME"]) <> 0){?>
								<span><?echo $arItem["NAME"]?> </span>
							<?}?>
                            <p><?echo $arItem["CODE"]?></p>
                            
                            
                        </div>
                        <p><?echo $arItem["PREVIEW_TEXT"];?></p>
					</div>
                </div>
				
				
			<?endforeach;?>
	
</div>