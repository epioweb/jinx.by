<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Заказы");
?><?$APPLICATION->IncludeComponent("bitrix:sale.order.ajax", "visual", array(
	"PAY_FROM_ACCOUNT" => "N",
	"ONLY_FULL_PAY_FROM_ACCOUNT" => "N",
	"COUNT_DELIVERY_TAX" => "N",
	"COUNT_DISCOUNT_4_ALL_QUANTITY" => "Y",
	"ALLOW_AUTO_REGISTER" => "Y",
	"SEND_NEW_USER_NOTIFY" => "Y",
	"DELIVERY_NO_AJAX" => "N",
	"DELIVERY_NO_SESSION" => "N",
	"TEMPLATE_LOCATION" => "popup",
	"DELIVERY_TO_PAYSYSTEM" => "d2p",
	"USE_PREPAYMENT" => "N",
	"PROP_1" => array(
	),
	"ALLOW_NEW_PROFILE" => "Y",
	"SHOW_PAYMENT_SERVICES_NAMES" => "Y",
	"SHOW_STORES_IMAGES" => "N",
	"PATH_TO_BASKET" => "/personal/cart/",
	"PATH_TO_PERSONAL" => "/personal/order/",
	"PATH_TO_PAYMENT" => "/personal/order/payment/",
	"PATH_TO_AUTH" => "/auth/",
	"SET_TITLE" => "Y",
	"PRODUCT_COLUMNS" => array(
	),
	"DISABLE_BASKET_REDIRECT" => "N",
	"DISPLAY_IMG_WIDTH" => "90",
	"DISPLAY_IMG_HEIGHT" => "90"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>