<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("� ���");
?>����������� ����� ����� ���&nbsp;������ � 1955 ���� � ����� �����, �� ����� �������� ������� � ������� ����������� ������, � ������ ������. � 2005 ���� ����������� ����� ������ �������� � ���� ������������ � ����� ��������� ���������� ������ ���� , ������� ������������ ��������� ������������ ��������������� �&nbsp;.<br>
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