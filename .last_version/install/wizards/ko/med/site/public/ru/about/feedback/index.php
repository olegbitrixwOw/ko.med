<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обратная связь");
?>

<?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"feedback_by_ko",
	Array(
		"EMAIL_TO" => COption::GetOptionString("main", "email_from"),
		"EVENT_MESSAGE_ID" => array("#FOOTER_FEEDBACK_FORM_ID#"),
		"AJAX_MODE" => "Y",  // режим AJAX
		"AJAX_OPTION_SHADOW" => "N", // затемнять область
		"AJAX_OPTION_JUMP" => "N", // скроллить страницу до компонента
		"AJAX_OPTION_STYLE" => "Y", // подключать стили
		"AJAX_OPTION_HISTORY" => "N",
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array("NONE","NAME","EMAIL","MESSAGE"),
		"USE_CAPTCHA" => "Y"
	)
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

