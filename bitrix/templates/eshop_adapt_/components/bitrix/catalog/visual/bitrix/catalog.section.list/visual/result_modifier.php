<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arViewModeList = array('LINE', 'TEXT', 'TILE');

if (!array_key_exists('VIEW_MODE', $arParams))
	$arParams['VIEW_MODE'] = 'LINE';
if (!in_array($arParams['VIEW_MODE'], $arViewModeList))
	$arParams['VIEW_MODE'] = 'LINE';

if (!array_key_exists('SHOW_PARENT_NAME', $arParams))
	$arParams['SHOW_PARENT_NAME'] = 'Y';
if ('N' != $arParams['SHOW_PARENT_NAME'])
	$arParams['SHOW_PARENT_NAME'] = 'Y';

if (0 < $arResult['SECTIONS_COUNT'])
{
	$boolPicture = false;
	$boolDescr = false;
	$arSelect = array('ID');
	$arMap = array();
	if ('LINE' == $arParams['VIEW_MODE'] || 'TILE' == $arParams['VIEW_MODE'])
	{
		$arCurrent = current($arResult['SECTIONS']);
		if (!array_key_exists('PICTURE', $arCurrent))
		{
			$boolPicture = true;
			$arSelect[] = 'PICTURE';
		}
		if ('LINE' == $arParams['VIEW_MODE'] && !array_key_exists('DESCRIPTION', $arCurrent))
		{
			$boolDescr = true;
			$arSelect[] = 'DESCRIPTION';
			$arSelect[] = 'DESCRIPTION_TYPE';
		}
	}
	if ($boolPicture || $boolDescr)
	{
		foreach ($arResult['SECTIONS'] as $key => $arSection)
		{
			$arMap[$arSection['ID']] = $key;
		}

		$rsSections = CIBlockSection::GetList(array(), array('ID' => array_keys($arMap)), false, $arSelect);
		while ($arSection = $rsSections->GetNext())
		{
			$key = $arMap[$arSection['ID']];
			if ($boolPicture)
			{
				$arSection['PICTURE'] = intval($arSection['PICTURE']);
				$arSection['PICTURE'] = (0 < $arSection['PICTURE'] ? CFile::GetFileArray($arSection['PICTURE']) : false);
				$arResult['SECTIONS'][$key]['PICTURE'] = $arSection['PICTURE'];
				$arResult['SECTIONS'][$key]['~PICTURE'] = $arSection['~PICTURE'];
			}
			if ($boolDescr)
			{
				$arResult['SECTIONS'][$key]['DESCRIPTION'] = $arSection['DESCRIPTION'];
				$arResult['SECTIONS'][$key]['~DESCRIPTION'] = $arSection['~DESCRIPTION'];
				$arResult['SECTIONS'][$key]['DESCRIPTION_TYPE'] = $arSection['DESCRIPTION_TYPE'];
				$arResult['SECTIONS'][$key]['~DESCRIPTION_TYPE'] = $arSection['~DESCRIPTION_TYPE'];
			}
		}
	}
}
?>

<? //Ресайз картинок
$res=CIBlockSection::GetList(
    array("SORT"=>"ASC"),
    array( "ID" => $arResult["SECTION"]["ID"], "IBLOCK_ID" => $arResult["SECTION"]["IBLOCK_ID"]),
    false,
    array("ID", "UF_IMAGE"),
    false
);

$UF_FIELDS=$res->GetNext();

$arResult["SECTION"]["UF_IMAGE"]=array(
                                                               "ID" => $UF_FIELDS["UF_IMAGE"], 
                                                               "SRC" => CFile::GetPath( $UF_FIELDS["UF_IMAGE"])
                                                               );

$image=CFile::ResizeImageGet( 
      $arResult["SECTION"]["UF_IMAGE"]["ID"], 
      array("width"=>780, "height"=>200),
      BX_RESIZE_IMAGE_EXACT /* BX_RESIZE_IMAGE_PROPORTIONAL_ALT */, 
      true
   );

$arResult["SECTION"]["UF_IMAGE"]["SRC"]=$image["src"];
