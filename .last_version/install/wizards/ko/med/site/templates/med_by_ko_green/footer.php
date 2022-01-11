<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)  die();
$curPage = $APPLICATION->GetCurPage();
IncludeTemplateLangFile(__FILE__);
?>				
<!--begin inner content-->
	<?if ($curPage <> SITE_DIR):?>		
				</div>
			</div>
		
   <?endif;?>
<!--end inner content--> 
<?if ($curPage == SITE_DIR):?>
    </div>   </div>   </div>  
  <?endif;?>  
 

<?if ($curPage == SITE_DIR):?> 
<div class="container raspisanie">
	<div class="row">
		<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/raspisanie.php"), false);?>
	
	</div>
</div>
<div class="container-fluid cert-fluid">
<div class="container">	
	<div class="certificates">			
			<?
			$APPLICATION->IncludeComponent(
			"bitrix:news.list", 
			"cert_index_by_ko", 
			array(
				"ACTIVE_DATE_FORMAT" => "d.m.Y",
				"ADD_SECTIONS_CHAIN" => "Y",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"CHECK_DATES" => "Y",
				"DETAIL_URL" => "",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"FIELD_CODE" => array(
					0 => "",
					1 => "",
				),
				"FILTER_NAME" => "",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "#CERT_IBLOCK_ID#",
				"IBLOCK_TYPE" => "ko_med",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"INCLUDE_SUBSECTIONS" => "N",
				"MESSAGE_404" => "",
				"NEWS_COUNT" => "30",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => ".default",
				"PAGER_TITLE" => "Новости",
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"PREVIEW_TRUNCATE_LEN" => "",
				"PROPERTY_CODE" => array(
					0 => "PRICE",
					1 => "",
				),
				"SET_BROWSER_TITLE" => "N",
				"SET_LAST_MODIFIED" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_META_KEYWORDS" => "N",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "N",
				"SHOW_404" => "N",
				"SORT_BY1" => "SORT",
				"SORT_BY2" => "SORT",
				"SORT_ORDER1" => "ASC",
				"SORT_ORDER2" => "ASC",
				"COMPONENT_TEMPLATE" => "price_index_by_ko"
			),
			false
		);
			
			?>	
	
	</div>
	</div>
</div>
	<div class="container clients_fluid">

<div class="container clients">			
	<?
	$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"price_index_by_ko", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "#PRICE_IBLOCK_ID#",
		"IBLOCK_TYPE" => "ko_med",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "30",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "PRICE",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "price_index_by_ko"
	),
	false
);
	
	?>	
	
	</div>
</div>
  <div class="container-fluid feedback">
	<div class="row">
		<?$APPLICATION->IncludeComponent(
		"ko:main.feedback",
		"feedback_form_footer_by_ko",
		Array(
			"EMAIL_TO" => COption::GetOptionString("main", "email_from"),
			"EVENT_MESSAGE_ID" => array("#FOOTER_FEEDBACK_FORM_ID#"),
			"AJAX_MODE" => "Y",  
			"AJAX_OPTION_SHADOW" => "N", 
			"AJAX_OPTION_JUMP" => "N", 
			"AJAX_OPTION_STYLE" => "Y", 
			"AJAX_OPTION_HISTORY" => "N",
						"OK_TEXT" => GetMessage("ALL_ZAYVKA_TITLE"),
			"REQUIRED_FIELDS" => array("NONE","NAME","EMAIL"),
			"USE_CAPTCHA" => "N"
		)
	);?>
	</div>
</div>	

<div class="containerf-fluid reviews">	
<div class="container">			
	<?
	$APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"reviews_index_by_ko",
		Array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_SECTIONS_CHAIN" => "Y",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"DISPLAY_DATE" => "Y",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array("", ""),
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "#REVIEWS_IBLOCK_ID#",
			"IBLOCK_TYPE" => "ko_med",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "N",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "3",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array("", ""),
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => "SORT",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "ASC",
			"SORT_ORDER2" => "ASC"
		)
	);
	
	?>	
	
	</div>	
</div>

<div class="container-fluid clients_fluid">
<div class="container clients">			
	<?
	$APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"clients_index_by_ko",
		Array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_SECTIONS_CHAIN" => "Y",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"DISPLAY_DATE" => "Y",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"FIELD_CODE" => array("", ""),
			"FILTER_NAME" => "",
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",
			"IBLOCK_ID" => "#COMPANY_IBLOCK_ID#",
			"IBLOCK_TYPE" => "ko_med",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"INCLUDE_SUBSECTIONS" => "N",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "30",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => "",
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array("", ""),
			"SET_BROWSER_TITLE" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"SORT_BY1" => "SORT",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "ASC",
			"SORT_ORDER2" => "ASC"
		)
	);
	
	?>	
	
	</div>
</div>		
<?endif;?>  
   
   <div class="container-fluid feedback">
	<div class="row">
		<?$APPLICATION->IncludeComponent(
		"ko:main.feedback",
		"feedback_form_footer_by_ko",
		Array(
			"EMAIL_TO" => COption::GetOptionString("main", "email_from"),
			"EVENT_MESSAGE_ID" => array("#FOOTER_FEEDBACK_FORM_ID#"),
			"AJAX_MODE" => "Y",  
			"AJAX_OPTION_SHADOW" => "N", 
			"AJAX_OPTION_JUMP" => "N", 
			"AJAX_OPTION_STYLE" => "Y", 
			"AJAX_OPTION_HISTORY" => "N",
						"OK_TEXT" => GetMessage("ALL_ZAYVKA_TITLE"),
			"REQUIRED_FIELDS" => array("NONE","NAME","EMAIL"),
			"USE_CAPTCHA" => "N"
		)
	);?>
	</div>
</div>
  
      <div class="container-fluid">
		<div class="row">
			<div class="col">
				<?$APPLICATION->IncludeComponent(
					"bitrix:map.yandex.view",
					"",
					Array(
						"CONTROLS" => array("ZOOM","SMALLZOOM","MINIMAP","TYPECONTROL","SCALELINE","SEARCH"),
						"INIT_MAP_TYPE" => "MAP",
						"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.8637519999936;s:10:\"yandex_lon\";d:37.606011;s:12:\"yandex_scale\";i:14;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.605839338623035;s:3:\"LAT\";d:55.86112134783088;s:4:\"TEXT\";s:0:\"\";}}}",
						"MAP_HEIGHT" => "400",
						"MAP_ID" => "",
						"MAP_WIDTH" => "100%",
						"OPTIONS" => array("ENABLE_DBLCLICK_ZOOM","ENABLE_RIGHT_MAGNIFIER","ENABLE_DRAGGING")
					)
				);?>				
			</div>
		</div>
	</div>
		
		<div class="container-fluid footer">
			<div class="container">
				<div class="row">

					<div class="menu_footer col-lg-5 col-md-5 hidden-xs">
						<?$APPLICATION->IncludeComponent("bitrix:menu", "footer_menu_by_ko", Array(
							"ALLOW_MULTI_SELECT" => "N",	
								"CHILD_MENU_TYPE" => "left",	
								"DELAY" => "N",	
								"MAX_LEVEL" => "1",	
								"MENU_CACHE_GET_VARS" => "",	
								"MENU_CACHE_TIME" => "3600",	
								"MENU_CACHE_TYPE" => "N",	
								"MENU_CACHE_USE_GROUPS" => "Y",	
								"ROOT_MENU_TYPE" => "top",	
								"USE_EXT" => "Y",	
								"COMPONENT_TEMPLATE" => ""
							),
							false
						);?>
						
					</div>
					
					 <div class="menu_footer col-lg-4 col-md-4 mail-skype">
						<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/phone.php"), false);?> 

					</div>
				
					<div class="social col-lg-3 col-md-3">
                   
					        <p class="social_title"> 
								<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/addr.php"), false);?>
								
							<p class="copy"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/footer_copy.php"), false);?></p>	
						</div>
					</div>
			</div>			
		</div>
		

	

	
	<div id="modal_feedback" class="modal fade" tabindex="-1">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" style="cursor: pointer;" data-dismiss="modal" aria-hidden="true">X</button>
			<h4><?=GetMessage("ZAKAZ_ZVONOK_TITLE")?></h4>
		  </div>
		  <div class="modal-body">
			  <?$APPLICATION->IncludeComponent(
					"ko:main.feedback",
					"feedback_popup_by_ko",
					Array(
						"EMAIL_TO" => COption::GetOptionString("main", "email_from"),
						"EVENT_MESSAGE_ID" => array("#FOOTER_FEEDBACK_FORM_ID#"),
						"AJAX_MODE" => "Y", 
						"AJAX_OPTION_SHADOW" => "N", 
						"AJAX_OPTION_JUMP" => "N", 
						"AJAX_OPTION_STYLE" => "Y", 
						"AJAX_OPTION_HISTORY" => "N",
						"OK_TEXT" => GetMessage("ALL_ZAYVKA_TITLE"),
						"REQUIRED_FIELDS" => array("NONE","NAME","EMAIL"),
						"USE_CAPTCHA" => "Y"
					)
				);?>
			</div>	
			
				
		
		</div>
	  </div>
	</div>
	

	
	<div id="modal_add_review" class="modal fade" tabindex="-1">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" style="cursor: pointer;" data-dismiss="modal" aria-hidden="true">X</button>
			<h4><?=GetMessage("ADD_REVIEW_TITLE")?></h4>
		  </div>
		  <div class="modal-body">
			  <?$APPLICATION->IncludeComponent(
					"bitrix:main.feedback",
					"feedback_by_ko",
					Array(
						"EMAIL_TO" => COption::GetOptionString("main", "email_from"),
						"EVENT_MESSAGE_ID" => array("#ADD_REVIEW_ID#"),
						"AJAX_MODE" => "Y",  
						"AJAX_OPTION_SHADOW" => "N", 
						"AJAX_OPTION_JUMP" => "N", 
						"AJAX_OPTION_STYLE" => "Y", 
						"AJAX_OPTION_HISTORY" => "N",
						"OK_TEXT" => GetMessage("ALL_REVIEW_TITLE"),
						"REQUIRED_FIELDS" => array("NONE","NAME","EMAIL","MESSAGE"),
						"USE_CAPTCHA" => "Y"
					)
				);?>
			</div>	
			
				
		
		</div>
	  </div>
	</div>
	
		<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery-1.8.3.min.js"></script>
	
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/scripts/bootstrap/js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap-slider.js"></script>

	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/functions.js"></script> 

	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.flexisel.js"></script>
	
	<script src="<?=SITE_TEMPLATE_PATH?>/libs/fancybox/jquery.fancybox.pack.js"></script>
	
	
	<!--begin scripts slider on index page-->
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.bxslider.js"></script>
	
	<!--end scripts slider on index page-->

	
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.ui.totop.js" type="text/javascript"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.style-switcher.js" type="text/javascript"></script>
	
	<script src="<?=SITE_TEMPLATE_PATH?>/js/script.js" type="text/javascript"></script>

</body>
</html>