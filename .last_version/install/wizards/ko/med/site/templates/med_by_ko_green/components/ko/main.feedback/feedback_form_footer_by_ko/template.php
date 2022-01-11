<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
 $this->setFrameMode(true);
?>
<div class="advantages container feedback_footer_form">
   <div class="row item">
   <?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
	?>
	<script>
		//alert("123");
		$(".form").hide();
	</script>
	
		
	
	<? 
}
?>
		 
		 <div class="container">
		 <span class="mf-ok-text" ><?=$arResult["OK_MESSAGE"]?></span>
<form action="<?=POST_FORM_ACTION_URI?>" method="POST" class="form">
<?=bitrix_sessid_post()?>
	<div class="col-lg-4 col-md-3  col-sm-6 col-xs-12">
		 <div class="title"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/cons_title2.php"), false);?></div>
	</div>
	<div class="col-lg-5 col-md-6  col-sm-6 col-xs-12">
		<input type="text"  name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>" required placeholder="<?=GetMessage("MFT_NAME")?>" size="30">
		<input type="text" name="user_phone" required placeholder="<?=GetMessage("MFT_PHONE")?>" size="30">
		<?/*if($arParams["USE_CAPTCHA"] == "Y"):?>
			<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
			<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="100" height="40" alt="CAPTCHA"><br/><br/>	
			<input type="text" required name="captcha_word" size="30" maxlength="50" value="" placeholder="<?=GetMessage("MFT_CAPTCHA_CODE")?>">
		<?endif;*/?>
	</div>
	

	

	

	
	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
	<div class="col-lg-3 col-md-3  col-sm-4 col-xs-12">
		<input type="submit" name="submit" class="btn_feed" value="<?=GetMessage("MFT_SUBMIT")?>"> 
		
		
	</div>
	
</form>
</div>
</div>

    </div>
