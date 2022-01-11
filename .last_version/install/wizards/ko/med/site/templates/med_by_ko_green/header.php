<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)  die();
$curPage = $APPLICATION->GetCurPage();
IncludeTemplateLangFile(__FILE__);

?><!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->

<!--<![endif]-->
<head>
<meta charset="<?=SITE_CHARSET?>">
<title><?$APPLICATION->ShowTitle()?></title>
<?

$APPLICATION->ShowMeta("robots", false, false);
$APPLICATION->ShowMeta("keywords", false, false);
$APPLICATION->ShowMeta("description", false, false);
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<meta name="author" content="">
<meta name="yandex-verification" content="">
<meta name="google-site-verification" content="">

<link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" type="image/x-icon">

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico">
	<link rel="apple-touch-icon" href="./img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="./img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="./img/apple-touch-icon-114x114.png">
<?//$APPLICATION->ShowHead();?>

<?

$APPLICATION->ShowLink("canonical", null, false);

	


	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/bootstrap.min.css", true);
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/bootstrap-slider.min.css", true);
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/libs/font-awesome-4.2.0/css/font-awesome.min.css", true);
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/libs/fancybox/jquery.fancybox.css", true);
//	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/libs/owl-carousel/owl.carousel.css", true);
	//$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/libs/countdown/jquery.countdown.css", true);
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/fonts.css", true);
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/preset.css", true);
	//$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/main.css", true);
	
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/jquery.bxslider.css", true);
	
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/color.switch.css", true);
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/ui.totop.css", true);
	
	//$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/media.css", true);
$APPLICATION->ShowCSS(true, false);
?>
	<link rel="stylesheet" id="theme" href="<?=SITE_TEMPLATE_PATH?>/green.css" type="text/css" />
	

	<link rel="stylesheet"  href="<?=SITE_TEMPLATE_PATH?>/css/media.css" />


	<?
	$APPLICATION->ShowHeadStrings();
	$APPLICATION->ShowHeadScripts();
	?>
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
	<script src="<?=SITE_TEMPLATE_PATH?>/js/functions.js" type="text/javascript"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/script.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/functions.js"></script> 
	
	
	
	
	
</head>
<body>
    <?$APPLICATION->ShowPanel();?>
	<div class="container-fluid hmenu default" id="hmenutop">
            <div class="row">
				<div class="container hmenu_cont" >
					<div class="col-lg-5 col-md-6 col col-xs-4">
					
						<?$APPLICATION->IncludeComponent("bitrix:menu", "horizontal_multilevel_by_ko", Array(
							"ALLOW_MULTI_SELECT" => "N",	
								"CHILD_MENU_TYPE" => "left",	
								"DELAY" => "N",	
								"MAX_LEVEL" => "2",	
								"MENU_CACHE_GET_VARS" => "",	
								"MENU_CACHE_TIME" => "3600",	
								"MENU_CACHE_TYPE" => "N",	
								"MENU_CACHE_USE_GROUPS" => "Y",	
								"ROOT_MENU_TYPE" => "top",	
								"USE_EXT" => "N",	 
								"COMPONENT_TEMPLATE" => "horizontal_multilevel"
							),
							false
						);?>
			

					  
					</div>
					 <div class="col-lg-7 col-md-6 col col-xs-8 header_phone">
						<a class="zapis_priem btn callback call_master_btn btn_feed"><?=GetMessage("CALL_MASTER_TITLE")?></a>
						
							<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/phone.php"), false);?>
						
						
						<span class="social_header_icon">	
							<a href="#" target="_blank"><i class="fa social-fa fa-vk" aria-hidden="true"></i></a>
							<a href="#" target="_blank"><i class="fa social-fa fa-facebook" aria-hidden="true"></i></a>
							<a href="#" target="_blank"><i class="fa social-fa fa-instagram" aria-hidden="true"></i></a>
							<a href="#" target="_blank"><i class="fa social-fa fa-twitter" aria-hidden="true"></i></a>
							<a href="#" target="_blank"><i class="fa social-fa fa-youtube" aria-hidden="true"></i></a>
							
						</span>
					   
					</div>
				</div> 
            </div>
        </div>    

    <div class="container-fluid header_bg">
        <div class="container" >
            <div class="header row">
                <div class="logo col-lg-3 col-md-3 col-sm-3 col-xs-6 hidden-sm hidden-xs">
				<?if ($curPage <> "/") {
						$dir = SITE_DIR;
					}else{ 
					$dir = "/";
				}?>
                    <a href="<?=$dir?>"><div class="logo_bg"></div></a>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 slider_header">
				<?
						$APPLICATION->IncludeComponent(
							"bitrix:news.list",
							"slider_index_by_ko",
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
								"IBLOCK_ID" => "#SLIDER_IBLOCK_ID#",
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
	</div>
		
		
        <?
			
			if ($curPage == SITE_DIR):
		?>
			
       
    
		<?endif;?>
			<!--begin inner content-->
	<div class="container-fluid services_menu">
		<div class="container">
			
			<div class="lmenu row">
				<div class="col-lg-12 col">
					<?$APPLICATION->IncludeComponent("bitrix:menu", "header_menu_by_ko", Array(
								"ALLOW_MULTI_SELECT" => "N",	
									"CHILD_MENU_TYPE" => "left",	
									"DELAY" => "N",	
									"MAX_LEVEL" => "2",	
									"MENU_CACHE_GET_VARS" => "",	
									"MENU_CACHE_TIME" => "3600",	
									"MENU_CACHE_TYPE" => "N",	
									"MENU_CACHE_USE_GROUPS" => "Y",	
									"ROOT_MENU_TYPE" => "left",	
									"USE_EXT" => "N",	 
									"COMPONENT_TEMPLATE" => ""
								),
								false
							);?>
				</div>
			</div>
		</div>
     </div>          
			<?if ($curPage != SITE_DIR){?> 
				<div class="container content">
				<div class="col-lg-12 col">
					<?$APPLICATION->IncludeComponent(
					"bitrix:breadcrumb",
					"",
					Array(
						"PATH" => "",
						"SITE_ID" => "#BREADCRUMB#",
						"START_FROM" => "0"
					)
				);?>
				   <h1><?$APPLICATION->ShowTitle(false)?> </h1>
						
							
			<?}else{?>
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 col leftmenu">
						<div class="block_director">
							<span><?=GetMessage("DIRECTOR_TITLE")?></span>
							<div class="content">
								<img src="<?=SITE_TEMPLATE_PATH?>/images/director.png" width="100%">
								<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/director_text.php"), false);?> 

								
							</div>
						</div>
					
					<div class="block_director">
							<span><?=GetMessage("NEWS_TITLE")?></span>
							<div class="content">
								<?
									$APPLICATION->IncludeComponent("bitrix:news.list", "news_articles_list_index_by_ko", Array(
									"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
										"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
										"AJAX_MODE" => "N",	// Включить режим AJAX
										"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
										"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
										"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
										"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
										"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
										"CACHE_GROUPS" => "Y",	// Учитывать права доступа
										"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
										"CACHE_TYPE" => "A",	// Тип кеширования
										"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
										"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
										"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
										"DISPLAY_DATE" => "Y",	// Выводить дату элемента
										"DISPLAY_NAME" => "Y",	// Выводить название элемента
										"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
										"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
										"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
										"FIELD_CODE" => array(	// Поля
											0 => "",
											1 => "",
										),
										"FILTER_NAME" => "",	// Фильтр
										"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
										"IBLOCK_ID" => "#NEWS_IBLOCK_ID#",	// Код информационного блока
										"IBLOCK_TYPE" => "ko_med",	// Тип информационного блока (используется только для проверки)
										"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
										"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
										"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
										"NEWS_COUNT" => "2",	// Количество новостей на странице
										"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
										"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
										"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
										"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
										"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
										"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
										"PAGER_TITLE" => "Новости",	// Название категорий
										"PARENT_SECTION" => "",	// ID раздела
										"PARENT_SECTION_CODE" => "",	// Код раздела
										"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
										"PROPERTY_CODE" => array(	// Свойства
											0 => "",
											1 => "",
										),
										"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
										"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
										"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
										"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
										"SET_STATUS_404" => "N",	// Устанавливать статус 404
										"SET_TITLE" => "N",	// Устанавливать заголовок страницы
										"SHOW_404" => "N",	// Показ специальной страницы
										"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
										"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
										"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
										"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
									),
									false
								);
									
									?>	
								
							</div>
						</div>
					</div>
					
					
					
					<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col content">
						
			<?}?>
			<!--end inner content--> 		