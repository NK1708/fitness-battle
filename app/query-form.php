<?

include_once "parameters.php";
$json = array();
$json['POST'] = $_POST;
$arResult['FILEDS_NAME'] = array(
        'FULL_NAME' => 'ФИО: ',
        'PHONE' => 'Телефон: ',
        'CITY' => 'Город: ',
        'CLUB' => 'Клуб: '
);
$arResult['MAIL_NAME'] = 'Заявка с сайта';
$arResult['MAIL_TO'] = array();
$arResult['MAIL_MAIN'] = 'a.kuznetsova@drivefitness.ru';

$arResult['MESS_SUCCESS'] = 'Спасибо за заявку! Менеджер Drive Fitness свяжется с вами в ближайшее время.';
$arResult['MESS_ERROR'] = 'Ошибка отправки';

$arResult['ERROR'] = array(
    'FULL_NAME' => 'Укажите ФИО',
    'PHONE' => 'Укажите телефон',
    'CITY' => 'Укажите город',
    'CLUB' => 'Укажите клуб'
);
$arResult['CLUB'] = array();



if($_GET['set_city'] == 'y'){
    foreach($arResult['CITIES'][$_GET['id_city']]['VALUES'] as $id){
        $json['clubs'][$id] = $arResult['ALL_CLUBS']['CLUB'][$id];
    }

}

if($_POST['SUBMIT_FORM'] == 'Y'){
    $arResult['FORM_RESULT'] = $_POST['PROPERTY'];
    $arError = 'N';
    foreach ($arResult['FORM_RESULT'] as $propCODE => $arProperty) {
    
        if(strlen($arProperty) == 0 || $arProperty == '-') {

            $arError = 'Y'; 
            $arResult['MESSAGE'] = $arResult['ERROR'][$propCODE];
            $json['error'] = $arResult['MESSAGE'];
            break;
        } else {
            if($propCODE == 'CITY'){
                $arResult['PROPERTIES'][$propCODE]['VALUE'] = $arResult['CITIES'][$arProperty]['NAME'];
            } elseif($propCODE == 'CLUB') {
                $arResult['PROPERTIES'][$propCODE]['VALUE'] = $arResult['ALL_CLUBS']['CLUB'][$arProperty]['NAME'];
            } else {
                $arResult['PROPERTIES'][$propCODE] = array('VALUE'=>$arProperty);
            }
            
        }
    }
    if($arError == 'N'){
        $arResult['MAIL_TO'] = $arResult['ALL_CLUBS']['CLUB'][$arResult['FORM_RESULT']['CLUB']]['EMAIL'];
        $arResult['MAIL_CONTENT'] = '<html><head><title>'.$arResult['MAIL_NAME'].'</title></head><body>';

        foreach ($arResult['PROPERTIES'] as $propCODE => $prop_value) {



            $arResult['MAIL_CONTENT'] .= $arResult['FILEDS_NAME'][$propCODE] . $prop_value['VALUE'] .'<br>';
            
        }
        $arResult['MAIL_CONTENT'] .= '</body></html>';
        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
        
        if(mail($arResult['MAIL_MAIN'], $arResult['MAIL_NAME'], $arResult['MAIL_CONTENT'], $headers)){
            if(isset($arResult['MAIL_TO'])){
                 mail($arResult['MAIL_TO'], $arResult['MAIL_NAME'], $arResult['MAIL_CONTENT'], $headers);
             }
             $json['success'] = $arResult['MESS_SUCCESS'];
        } else {
            $arResult['MESSAGE'] = $arResult['MESS_ERROR'];
            $json['error'] = 2;
        }
    } 

    
}
if ($json) {
    echo json_encode($json);
}
?>