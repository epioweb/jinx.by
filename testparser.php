<?
$params = array(
    'geocode' => 'Москва, м. Домодедовская', // адрес
    'format'  => 'json',                          // формат ответа
    'results' => 1,                               // количество выводимых результатов
    'key'  =>'AC0bq1IBAAAA3S23QAQAhwGCryBGFxYQ4dVinTjE_AnrnBUAAAAAAAAAAADbyjrDGSS-2j4uBSCB5qlgH6Z0zQ==',                           // ваш api key
);
$response = json_decode(file_get_contents('http://geocode-maps.yandex.ru/1.x/?' . http_build_query($params, '', '&')));
 
if ($response->response->GeoObjectCollection->metaDataProperty->GeocoderResponseMetaData->found > 0)
{
    echo $response->response->GeoObjectCollection->featureMember[0]->GeoObject->Point->pos;
}
else
{
    echo 'Ничего не найдено';
}

?>
