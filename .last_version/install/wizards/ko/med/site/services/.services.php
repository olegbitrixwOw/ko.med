<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arServices = Array(
	"main" => Array(
		"NAME" => GetMessage("SERVICE_MAIN_SETTINGS"),
		"STAGES" => Array(
			"files.php", // Copy bitrix files
			"template.php", // Install template
			"theme.php", // Install theme
			"group.php", // Install group
			"menu.php", // Install menu
			"events.php", // Install menu
			"settings.php",
		),
	),

	"iblock" => Array(
		"NAME" => GetMessage("SERVICE_IBLOCK"),
		"STAGES" => Array(
			"types.php", //IBlock types
			"actions.php",
			"adv.php",
			"articles.php",
			"cert.php",
			"company.php",
			"empl.php",
			"news.php",
			"price.php",
			"reviews.php",
			"services.php",
			"slider.php",
				
			"video.php",
	
		),
	),
);
?>