<?
include_once "parameters.php";
?>
<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">

    <title>Drive Fitness</title>
    <meta name="description" content="">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <? 
        if ($_SESSION['resultKey']) { ?>
            <meta property="og:image" content="uploads/<?=$_SESSION['resultKey']?>.png">
        <? } else { ?>
            <meta property="og:image" content="path/to/image.jpg">
        <? } ?>
    <link rel="shortcut icon" href="img/favicon/fire.png" type="image/x-icon">
    <script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#fff">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#fff">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#fff">

    <style>body { opacity: 0; overflow-x: hidden; } html { background-color: #fff; }</style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106073122-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-106073122-1');
  </script>
 
<script>window.roistatCookieDomain = 'drivefitness.ru';</script>


</head>

<body>
    <div class="dark"></div>

    <section class="third-block section page" data-anchor="section3">
        <div class="third-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="third-content__title">Старт: 15 октября</div>
                        <img class="third-content__logo" src="img/logo-battle.png" alt="">
                        <div class="third-content__items">
                            <form id="query-form" action="query-form.php">

                                <input type="text" placeholder="ФИО" name="PROPERTY[FULL_NAME]" class="main-input name" value="<?=$arResult['FORM_RESULT']['FULL_NAME'] ? $arResult['FORM_RESULT']['FULL_NAME'] : ''?>">
                                <input type="phone" id="phone_input" name="PROPERTY[PHONE]" placeholder="+7(___)___-__-__" class="main-input phone" value="<?=$arResult['FORM_RESULT']['PHONE'] ? $arResult['FORM_RESULT']['PHONE'] : ''?>">

                                <div class="third-content__select">
                                    <input type="hidden" value="-" name="PROPERTY[CITY]">


                                     <select name="PROPERTY[CITY]" class="city-select first-block__select" id="city-select">
                                        <option disabled selected>Выбрать город</option>

                                        <? foreach ($arResult['CITIES'] as $id => $arCity) { ?>
                                            <option value="<?=$id?>"><?=$arCity['NAME']?></option>
                                        <? } ?>

                                    </select>


                                    <div class="city-select__parent select-list"></div>
                                    <input type="hidden" value="" name="PROPERTY[CLUB]">

                                    <input type="hidden" value="" id="card_price" name="CARD_PRICE">
                                    <select name="PROPERTY[CLUB]" class="place-select first-block__select" id="place-select">
                                        <option disabled selected>Выбрать клуб</option>

                                    </select>
                                    <div class="place-select__parent select-list"></div>
                                </div>
                               
                                
                                <div class="form_message"></div>
                               
                                <input type="hidden" name="SUBMIT_FORM" value="Y">
                                <input type="submit" class="book_button" value="Отправить заявку на участие">
                            </form>
                        </div>
                        <a href="polozhenie.pdf" download class="third-content__save">Скачать положение<img src="img/save.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <div style="display: none;">
        <div class="box-modal" id="exampleModal">
            <p>Спасибо за ваше обращение! Мы ответим вам в ближайшее время. <br> С уважением, Екатерина Панкова.</p>
        </div>
    </div>

    <link rel="stylesheet" href="css/main.min.css">
    <script src="js/scripts.min.js"></script>
    <script>

    (function(w, d, s, h, id) {

        w.roistatProjectId = id; w.roistatHost = h;

        var p = d.location.protocol == "https:" ? "https://" : "http://";

        var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init";

        var js = d.createElement(s); js.charset="UTF-8"; js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);

    })(window, document, 'script', 'cloud.roistat.com', 'f1f50f523729691571e03b60d69bdea4');

    </script>

</body>
</html>

