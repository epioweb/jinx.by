<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "игровые футболки, футболки для геймеров, футболки, толстовки, байки, брелки для ключей");
$APPLICATION->SetPageProperty("description", "J!NX создаёт уникальную одежду для геймеров и гиков. Мы предлагаем самую большую коллекцию футболок и толстовок по видеоиграм.");
$APPLICATION->SetTitle("J!NX: Одежда вдохновлённая видеоиграми и гик-культурой");
?>

<? $GLOBALS["arrFilterSALELEADER"] = array("PROPERTY_SALELEADER_VALUE" => "да"); ?>

<?$APPLICATION->IncludeComponent("bitrix:catalog.section", "visual", array(
	"IBLOCK_TYPE" => "catalog",
	"IBLOCK_ID" => "2",
	"SECTION_ID" => "",
	"SECTION_CODE" => "",
	"SECTION_USER_FIELDS" => array(
		0 => "",
		1 => "",
	),
	"ELEMENT_SORT_FIELD" => "sort",
	"ELEMENT_SORT_ORDER" => "asc",
	"ELEMENT_SORT_FIELD2" => "id",
	"ELEMENT_SORT_ORDER2" => "desc",
	"FILTER_NAME" => "arrFilterSALELEADER",
	"INCLUDE_SUBSECTIONS" => "Y",
	"SHOW_ALL_WO_SECTION" => "Y",
	"HIDE_NOT_AVAILABLE" => "N",
	"PAGE_ELEMENT_COUNT" => "20",
	"LINE_ELEMENT_COUNT" => "4",
	"PROPERTY_CODE" => array(
		0 => "NEWPRODUCT",
		1 => "",
	),
	"OFFERS_FIELD_CODE" => array(
		0 => "ID",
		1 => "NAME",
		2 => "PREVIEW_PICTURE",
		3 => "DETAIL_PICTURE",
		4 => "",
	),
	"OFFERS_PROPERTY_CODE" => array(
		0 => "ARTNUMBER",
		1 => "COLOR_REF",
		2 => "SIZES_SHOES",
		3 => "SIZES_CLOTHES",
		4 => "MORE_PHOTO",
		5 => "",
	),
	"OFFERS_SORT_FIELD" => "",
	"OFFERS_SORT_ORDER" => "desc",
	"OFFERS_SORT_FIELD2" => "id",
	"OFFERS_SORT_ORDER2" => "desc",
	"OFFERS_LIMIT" => "0",
	"PRODUCT_DISPLAY_MODE" => "Y",
	"ADD_PICT_PROP" => "-",
	"LABEL_PROP" => "NEWPRODUCT",
	"OFFER_ADD_PICT_PROP" => "MORE_PHOTO",
	"OFFER_TREE_PROPS" => array(
		0 => "-",
		1 => "COLOR_REF",
		2 => "SIZES_CLOTHES",
		3 => "ORDER",
		4 => "",
	),
	"PRODUCT_SUBSCRIPTION" => "N",
	"SHOW_DISCOUNT_PERCENT" => "Y",
	"SHOW_OLD_PRICE" => "Y",
	"MESS_BTN_BUY" => "Купить",
	"MESS_BTN_ADD_TO_BASKET" => "В корзину",
	"MESS_BTN_SUBSCRIBE" => "Подписаться",
	"MESS_BTN_DETAIL" => "Подробнее",
	"MESS_NOT_AVAILABLE" => "Нет в наличии",
	"SECTION_URL" => "",
	"DETAIL_URL" => "",
	"BASKET_URL" => "/personal/cart/",
	"ACTION_VARIABLE" => "action",
	"PRODUCT_ID_VARIABLE" => "id",
	"PRODUCT_QUANTITY_VARIABLE" => "quantity",
	"PRODUCT_PROPS_VARIABLE" => "prop",
	"SECTION_ID_VARIABLE" => "SECTION_ID",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "N",
	"META_KEYWORDS" => "UF_KEYWORDS",
	"META_DESCRIPTION" => "UF_META_DESCRIPTION",
	"BROWSER_TITLE" => "UF_BROWSER_TITLE",
	"ADD_SECTIONS_CHAIN" => "N",
	"DISPLAY_COMPARE" => "N",
	"SET_TITLE" => "N",
	"SET_STATUS_404" => "Y",
	"CACHE_FILTER" => "N",
	"PRICE_CODE" => array(
		0 => "BASE",
	),
	"USE_PRICE_COUNT" => "N",
	"SHOW_PRICE_COUNT" => "1",
	"PRICE_VAT_INCLUDE" => "Y",
	"PRODUCT_PROPERTIES" => array(
		0 => "NEWPRODUCT",
		1 => "SALELEADER",
		2 => "SPECIALOFFER",
	),
	"USE_PRODUCT_QUANTITY" => "Y",
	"CONVERT_CURRENCY" => "Y",
	"CURRENCY_ID" => "BYR",
	"OFFERS_CART_PROPERTIES" => array(
		0 => "SIZES_CLOTHES",
		1 => "ORDER",
	),
	"PAGER_TEMPLATE" => "visual",
	"DISPLAY_TOP_PAGER" => "N",
	"DISPLAY_BOTTOM_PAGER" => "N",
	"PAGER_TITLE" => "Товары",
	"PAGER_SHOW_ALWAYS" => "N",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
	"PAGER_SHOW_ALL" => "Y",
	"AJAX_OPTION_ADDITIONAL" => ""
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "Y"
	)
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
