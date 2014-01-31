<?
function notifyNewItemFeedback($ID, $arFields){
    ob_start();
    $res = CIBlockElement::GetList(
        array(),
        array(
            'IBLOCK_ID' => 2, // ID инфоблока каталога для которого размещен комментарий
            'PROPERTY_FORUM_TOPIC_ID' => $arFields["TOPIC_ID"]
        ),
        false,
        false,
        array('*', 'IBLOCK_ID', 'ID', 'NAME', 'PROPERTY_FORUM_TOPIC_ID', 'SECTION_ID', 'SECTION', 'SECTIONS','CODE','SECTION_CODE')
    );
 
    if($ar_res = $res->GetNext()){
        echo 'найден товар '.$ar_res['NAME'];
        $TYPE_MAIL_EVENT = 'NEW_ITEM_REVIEW'; // типо почтового события
        $arMail = array(
            'ITEM_NAME' => $ar_res['NAME'],
            'AUTHOR_NAME' => $arFields['AUTHOR_NAME'],
            'POST_DATE' => date('d.m.Y H:i:s'),
            'POST_MESSAGE' => $arFields['POST_TEXT'],
            'PATH2ITEM' => '/catalog/' . $ar_res['SECTION_CODE'] . '/' . $ar_res['CODE'], //путь к элементу
        );
        $ID_MAIL_EVENT = 36; //ID почтового шаблона
        $ok = CEvent::Send($TYPE_MAIL_EVENT, "s1", $arMail, $ID_MAIL_EVENT);
        if ($ok){
            echo 'Сообщение отправлено';
        }
        else{
            'Сообщение не отправлено '.$ok;
        }
    }
    else
        echo 'Элемент не найден.';
    $dump = ob_get_clean();
 
    if (!empty($ok)){
        return true;
    }
    else{
mail("egor.urban@gmail.com", "My Subject", $dump);
        $filename = dirname(__FILE__).'/dump.txt';
 
        if (!file_exists($filename)){
            $f = fopen($filename, 'w+');
            fclose($f);
        }
        file_put_contents($filename, $dump);
    }
}
AddEventHandler("blog", "OnCommentAdd", "notifyNewItemFeedback");
include("tools.php");
?>
