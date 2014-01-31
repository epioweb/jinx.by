<?
/*
if(isset($arParams["CURRENCY_ID"])):
function convertCurrency($price, $curFormat)
{
      return str_replace("#", number_format( 
                         $price,
                         $curFormat["DECIMALS"],
                         $curFormat["DEC_POINT"],
                         $curFormat["THOUSANDS_SEP"]),
                      $curFormat["FORMAT_STRING"]);
};

//
function roundPrice($price,$curFormat,$currency_old,$how)
{
   $price = str_replace(' ','',$price);
   $price = $currency_old["AMOUNT"]*str_replace('руб.','',$price);
   $price = ceil($price/$how) * $how;
   return convertCurrency($price, $curFormat); 
};

//printAdmin($arParams["CURRENCY_ID"]);
// Formating USD CURRENCY to BYR
$currency_old=CCurrency::GetCurrency($arResult["DELIVERY"][1]["CURRENCY"]); 
$arCurFormat=CCurrencyLang::GetCurrencyFormat($arParams["CURRENCY_ID"]);

foreach($arResult["DELIVERY"] as $key => $arDelivery):
   $arResult["DELIVERY"][$key]["PRICE_FORMATED"] = ($arDelivery["PRICE"]*$currency_old["AMOUNT"]);
   $arResult["DELIVERY"][$key]["PRICE_FORMATED"] = convertCurrency(
                                                            $arResult["DELIVERY"][$key]["PRICE_FORMATED"],
                                                            $arCurFormat
                                                            );
endforeach;


// Formating RUB CURRENCY to BYR
$currency_old=CCurrency::GetCurrency($arResult["BASE_LANG_CURRENCY"]); 
// для подраздела "Товары"
foreach($arResult["BASKET_ITEMS"] as $key2 => $arItem):
   $arItem["SUM"] = explode(" ",$arItem["SUM"]);
   array_pop($arItem["SUM"]);
   $resVal = "";
   foreach($arItem["SUM"] as $value):
      $resVal .=$value;
   endforeach;

   $arItem["SUM"] =  $resVal;

   $arResult["BASKET_ITEMS"][$key2]["PRICE_FORMATED"] = ($arItem["SUM"]*$currency_old["AMOUNT"]);
   $costs[] = $arResult["BASKET_ITEMS"][$key2]["PRICE_FORMATED"];
   $arResult["BASKET_ITEMS"][$key2]["PRICE_FORMATED"] = convertCurrency(
                                                            $arResult["BASKET_ITEMS"][$key2]["PRICE_FORMATED"],
                                                            $arCurFormat
                                                            );
endforeach;


$i=0; $sum=0;
foreach($arResult["GRID"]["ROWS"] as $key3 => $arRow):
   $arResult["GRID"]["ROWS"][$key3]["data"]["PRICE_FORMATED"] = $costs[$i];
   $arResult["GRID"]["ROWS"][$key3]["data"]["PRICE_FORMATED"] = ceil($arResult["GRID"]["ROWS"][$key3]["data"]["PRICE_FORMATED"]/1000) * 1000;
   $arResult["GRID"]["ROWS"][$key3]["data"]["PRICE_FORMATED"] = convertCurrency(
                                                           $arResult["GRID"]["ROWS"][$key3]["data"]["PRICE_FORMATED"],
                                                            $arCurFormat
                                                            );
   //Рассчёт итоговой стоимости
   $arResult["GRID"]["ROWS"][$key3]["data"]["SUM"] = roundPrice(
                              $arResult["GRID"]["ROWS"][$key3]["data"]["SUM"],
                              $arCurFormat,
                              $currency_old,
                              1000);
   $price = str_replace(' ','',$arResult["GRID"]["ROWS"][$key3]["data"]["SUM"]);
   $price = str_replace('руб.','',$price);
   $sum += $price;
   $i++;
endforeach;

//"Товаров на"
$arResult["ORDER_PRICE_FORMATED"] = convertCurrency($sum,$arCurFormat);

//"Доставка"
$arResult["DELIVERY_PRICE_FORMATED"] = roundPrice(
                              $arResult["DELIVERY_PRICE_FORMATED"],
                              $arCurFormat,
                              $currency_old,
                              1000);
//Итого
   $price = str_replace(' ','',$arResult["ORDER_PRICE_FORMATED"]);
   $price = str_replace('руб.','',$price);
   $delivery = str_replace(' ','',$arResult["DELIVERY_PRICE_FORMATED"]);
   $delivery = str_replace('руб.','',$delivery);
   $total = $price + $delivery;
$arResult["ORDER_TOTAL_PRICE_FORMATED"] =  convertCurrency($total,$arCurFormat);
endif;
*/
?>