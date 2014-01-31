<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Возможность задать вопрос. Для того чтобы задать свой вопрос, заполните обязательные поля.");
$APPLICATION->SetPageProperty("keywords", "задать вопрос, задайте вопрос, j!nx");
$APPLICATION->SetTitle("Задайте вопрос");
?>
<div align="justify" class="bx_page"> 
  <h1>Задайте вопрос</h1>
</div>
 <?$APPLICATION->IncludeComponent("bitrix:main.feedback", "eshop_adapt", array(
	"USE_CAPTCHA" => "Y",
	"OK_TEXT" => "Спасибо, ваше сообщение принято.",
	"EMAIL_TO" => "info@jinx.by,egor.urban@gmail.com",
	"REQUIRED_FIELDS" => array(
	),
	"EVENT_MESSAGE_ID" => array(
		0 => "7",
	)
	),
	false
);?> <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")?>