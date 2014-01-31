<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Корзина");
?><?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket", "visual", array(
	"COLUMNS_LIST" => array(
		0 => "NAME",
		1 => "DISCOUNT",
		2 => "QUANTITY",
		3 => "PROPS",
		4 => "DELETE",
		5 => "DELAY",
		6 => "TYPE",
		7 => "PRICE",
		8 => "PROPERTY_SIZES_CLOTHES",
	),
	"OFFERS_PROPS" => array(
		0 => "COLOR_REF",
		1 => "SIZES_SHOES",
		2 => "SIZES_CLOTHES",
	),
	"PATH_TO_ORDER" => "/personal/order/make/",
	"HIDE_COUPON" => "Y",
	"PRICE_VAT_SHOW_VALUE" => "N",
	"COUNT_DISCOUNT_4_ALL_QUANTITY" => "N",
	"USE_PREPAYMENT" => "N",
	"SET_TITLE" => "Y"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>