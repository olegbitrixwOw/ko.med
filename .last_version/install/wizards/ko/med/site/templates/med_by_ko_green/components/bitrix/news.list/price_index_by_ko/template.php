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
<div class="table-responsive price"> 
	<h3>
		<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/price_title.php"), false);?>  
	</h3>
<table class="table table-bordered">
    <thead>
        <tr>
           
            <th><?=GetMessage("SERVICE_TEXT_KO")?></th>
			
			
            <th><?=GetMessage("PRICE_TD_TEXT_KO")?></th>
            
        </tr>
    </thead>
    <tbody>
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				
				//print_r($arItem);
				?>
				<?
					$last_section = $ar_res["NAME"];
					
					$res = CIBlockSection::GetByID($arItem["IBLOCK_SECTION_ID"]);
					if($ar_res = $res->GetNext())
					  $section_name = $ar_res["NAME"];
				    //$last_section = $ar_res["NAME"];
					//echo $section_name;
					//echo $last_section;
				    if ($section_name <> $last_section ){
						
				?>
				<? //if($USER->IsAdmin()) {echo '<pre>'; print_r($arItem); echo '</pre>';} ?>
				 <tr>
				 	<td class="section_name"><?echo $section_name?></td>
				 </tr>
					<?}?>
				 <tr>
				
					<td><?echo $arItem["NAME"]?></td>
					
					<td><?echo $arItem["PROPERTIES"]["PRICE"]["VALUE"];?></td>
					
					
				</tr>
				
			<?endforeach;?>
 </tbody>
</table>
	<?
		global $APPLICATION;
		$dir = $APPLICATION->GetCurDir();
	?>
	<?if ($dir == SITE_DIR):?>
		<div>
			<a class="btn_feed btn" href="<?=SITE_DIR?>price/"><?=GetMessage("PRICE_TEXT_KO")?></a>
		</div>
	<?endif;?>
</div>