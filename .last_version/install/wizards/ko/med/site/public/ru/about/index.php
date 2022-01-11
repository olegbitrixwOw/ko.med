<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О нас");
?>Медицинский центр Мария был&nbsp;создан в 1955 году в Рамат Пория, на месте больницы «Швицер» и роддома Шотландской церкви, в городе Тверия. В 2005 году медицинский центр сменил название и была переименован в честь покойного профессора Баруха Паде , бывшего генерального директора Министерства здравоохранения и&nbsp;.<br>
<p>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => SITE_DIR."include/video_youtube.php"
	)
);?>
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>