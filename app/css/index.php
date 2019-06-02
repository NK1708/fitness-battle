<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title>Drive Fitness</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:image" content="path/to/image.jpg">
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

<!-- Yandex.Metrika counter --> 
<script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter23058496 = new Ya.Metrika2({ id:23058496, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/tag.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks2"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/23058496" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</head>

<body>

<? 
    $arResult['PROPERTIES'] = array(
    'FULL_NAME',
    'PHONE',
    'CLUB' => array(
        0 => array(
            'NAME' => 'Гагарин (Сибирский тракт, 8Н)',
            'VALUE_ID' => '1',
            'VALUE' => '0',
            'EMAIL' => 'E.chuprakova@drivefitness.ru',
        ),
        1 => array(
            'NAME' => 'Победа (ул. Ильича, 47)',
            'VALUE_ID' => '1',
            'VALUE' => '1',
            'EMAIL' => 'N.kotegova@drivefitness.ru',
        ),
        3 => array(
            'NAME' => 'Айвазовского (ул. Айвазовского, 53)',
            'VALUE_ID' => '1',
            'VALUE' => '2',
            'EMAIL' => 'l.krasnoperova@drivefitness.ru',
        ),
        4 => array(
            'NAME' => 'Глобус (ул. Щербакова, 4)',
            'VALUE_ID' => '5',
            'VALUE' => '3',
            'EMAIL' => 'behappykit123@gmail.com',
        ),
        5 => array(
            'NAME' => 'Парк Хаус (ул. Сулимова, 50)',
            'VALUE_ID' => '2',
            'VALUE' => '4',
            'EMAIL' => 'A.gostinina@drivefitness.ru',
        ),
        6 => array(
            'NAME' => 'Ботаника (ул. Родонитовая, 4)',
            'VALUE_ID' => '4',
            'VALUE' => '5',
            'EMAIL' => 'k.pozdnyakova@drivefitness.ru',
        ),
        7 => array(
            'NAME' => 'Ольховский (ул. Машинистов, 1)',
            'VALUE_ID' => '2',
            'VALUE' => '6',
            'EMAIL' => 'K.ilushechkina@drivefitness.ru',
        ),
        8 => array(
            'NAME' => 'Фаворит (ул. Валерии Гнаровской, 12)',
            'VALUE_ID' => '2',
            'VALUE' => '7',
            'EMAIL' => 'I.dvoeglazova@drivefitness.ru',
        ),
        9 => array(
            'NAME' => 'Гудвин (ул. М. Горького, 70)',
            'VALUE_ID' => '2',
            'VALUE' => '8',
            'EMAIL' => 'p.teplyashina@drivefitness.ru',
        ),
        10 => array(
            'NAME' => 'Кортео (ул. Луначарского, 139)',
            'VALUE_ID' => '3',
            'VALUE' => '9',
            'EMAIL' => 'e.solodovnikova@drivefitness.ru',
        ),
    ),
    'CARD' => array(
        0 => array(
            'NAME' => '12 мес Комфорт',
            'VALUE' => '1',
            'PRICE' => array(
                '1' => '13 740',
                '2' => '14 940',
                '3' => '16 740',
                '4' => '13 500',
                '5' => '13 900'
            )
        ),
        1 => array(
            'NAME' => '6 мес Комфорт',
            'VALUE' => '2',
            'PRICE' => array(
                '1' => '8 640',
                '2' => '9 540',
                '3' => '10 920',
                '4' => '9 540',
                '5' => '9 540'
            )
        ),
        2 => array(
            'NAME' => '12 мес День',
            'VALUE' => '3',
            'PRICE' => array(
                '1' => '8 640',
                '2' => '9 540',
                '3' => '10 740',
                '4' => '9 540',
                '5' => '9 540'
            )
        )
    )
);
?>
 <div class="header-mobile">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="header-mobile-content">
                                <div class="header-mobile-content__logo"><img src="img/logo2.svg" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <div id="fullpage">
       
        <section class="first-block section page" data-anchor="section1">
        
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="header-content">
                                <div class="header-content__left"><span>Будь<br>#вкомандедрайва</span></div>
                                <div class="header-content__logo"><img src="img/logo2.svg" alt=""></div>
                                <div class="header-content__right"><a href="#section3">Забронировать<br>клубную карту</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="first-place">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Специальная серия клубных карт к ЧМ-2018</h1>
                            <div class="first-place__cart">
                               <img src="img/cart.png" alt="" class="cart1"> 
                               <img src="img/cart.png" alt="" class="cart2"> 
                               <div class="gradient"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="first-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                           <h1>Специальная серия клубных карт к ЧМ-2018</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="second-block section page" data-anchor="section2">
        
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="header-content">
                                <div class="header-content__left"><span>Будь<br>#вкомандедрайва</span></div>
                                <div class="header-content__logo"><img src="img/logo.png" alt=""></div>
                                <div class="header-content__right"><a href="#section3">Забронировать<br>клубную карту</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="second-content">
                <div class="dark"></div>
                <div class="second-content__fon">
                    <div class="second-content__item first"></div>
                    <div class="second-content__item second"></div>
                    <div class="second-content__item third"></div>
                </div>
                <div class="second-content__info">
                    <div class="second-content__text">
                        <img src="img/firstpic1.png" alt="">
                        <div class="second-content__textbox">
                            <p>Год безлимитного фитнеса<br>в федеральной сети<br>от 13.470 руб</p>
                        </div>
                    </div>
                    <div class="second-content__text">
                        <img src="img/firstpic2.png" alt="">
                        <div class="second-content__textbox">
                            <p>ничего не отвлечет<br>тебя от ЧМ-2018</p>
                        </div>
                    </div>
                    <div class="second-content__text" >
                        <img src="img/firstpic3.png" alt="">
                        <div class="second-content__textbox">
                            <p>персональные тренировки;<br>групповые программы;<br>уход за телом;<br>солярий</p>
                        </div>
                    </div>
                </div>
                <div class="second-cart">
                    <img src="img/cart.png" alt="" class="second-cart__pic1">
                    <img src="img/cartback.png" alt="" class="second-cart__pic2">
                </div>
            </div>
        </section>
        <section class="third-block section page" data-anchor="section3">
        
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="header-content">
                                <div class="header-content__left"><span>Будь<br>#вкомандедрайва</span></div>
                                <div class="header-content__logo"><img src="img/logo.png" alt=""></div>
                                <div class="header-content__right"><a href="#section3">Забронировать<br>клубную карту</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="third-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="third-content__items">
                                <form id="query-form" action="query-form.php">
                                    <input type="hidden" value="-" name="PROPERTY[CLUB]">
                                    <select class="place-select" name="PROPERTY[CLUB]">
                                        <option selected disabled>Выберите клуб</option>
                                        <?foreach ($arResult['PROPERTIES']['CLUB'] as $arValue){?>
                                            <option class="nms" value="<?=$arValue['VALUE']?>" data-id="<?=$arValue['VALUE_ID']?>" <?=$arValue['SELECTED'] ? $arValue['SELECTED'] : ''?> »><?=$arValue['NAME']?></option>
                                        <?}?>
                                    </select>
                                    <div class="place-select-parent"></div>
                                    <input type="hidden" value="-" name="PROPERTY[CARD]">
                                    <select class="tarif-select" name="PROPERTY[CARD]">
                                        <option disabled selected>Выберите карту</option>
                                        <?foreach ($arResult['PROPERTIES']['CARD'] as $arValue){?>
                                            <option class="nms" <?foreach ($arValue['PRICE'] as $i => $arPrice){?>
                                                        data-price_<?=$i?>="<?=$arPrice?>"
                                                    <?}?>
                                                    value="<?=$arValue['NAME']?>" <?=$arValue['SELECTED'] ? $arValue['SELECTED'] : ''?>»><?=$arValue['NAME']?></option>
                                        <?}?>
                                    </select>
                                    <div class="tarif-select-parent"></div>
                                    <div class="final-price"><span class="final-price__text">Итого:</span><span class="final-price__number">0</span><span class="red"> руб.</span></div>
                                    <input type="text" placeholder="Имя Фамилия" name="PROPERTY[FULL_NAME]" class="main-input" value="<?=$arResult['FORM_RESULT']['FULL_NAME'] ? $arResult['FORM_RESULT']['FULL_NAME'] : ''?>">
                                    <input type="phone" id="phone_input" name="PROPERTY[PHONE]" placeholder="Телефон" class="main-input" value="<?=$arResult['FORM_RESULT']['PHONE'] ? $arResult['FORM_RESULT']['PHONE'] : ''?>">
                                    <div class="form_message"></div>
                                    <div class="accord">
                                        <input type="checkbox" name="PROPERTY[POLITIC]" <?=$arResult['PROPERTIES']['POLITIC']['VALUE'];?> class="checkbox" id="checkbox"/>
                                        <label for="checkbox"><p align="justify">Нажимая на кнопку, я принимаю условия Акции, описанной на сайте drivefitness.ru, и даю свое согласие на обработку моих персональных данных, в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных»</p></label>
                                    </div>
                                    <input type="hidden" name="SUBMIT_FORM" value="Y">
                                    <input type="submit" class="book_button" value="Забронировать">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="fourth-block section page" data-anchor="section4">

            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="header-content">
                                <div class="header-content__left"><span>Будь<br>#вкомандедрайва</span></div>
                                <div class="header-content__logo"><img src="img/logo.png" alt=""></div>
                                <div class="header-content__right"><a href="#section3">Забронировать<br>клубную карту</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fourth-content">
               <div class="fourth-content__menu">
                   <select class="map-select">
                        <option value="Выберите город" disabled selected>Выберите город</option>
                       <option value="Екатеринбург">Екатеринбург</option>
                       <option value="Тюмень">Тюмень</option>
                   </select>
                   <div class="map-select-parent"></div>
                   <div class="fourth-content__list">
                       <ul class="geo-list" data-city="Екатеринбург">
                            <li>
                                <address class="geo-touch" data-street="Екатеринбург, Сибирский тракт, 8Н" data-yandex-x="56.823730" data-index="1" data-yandex-y="60.649765" data-name="клуб в тц «гагарин»">
                                    <span class="fourth-content__title">клуб в тц «гагарин»</span>
                                    <span class="fourth-content__address">Сибирский тракт, 8Н</span>
                                </address>
                            </li>
                            <li>
                                <address class="geo-touch" data-street="Екатеринбург, Щербакова, 4" data-yandex-x="56.788549" data-index="1" data-yandex-y="60.649020" data-name="клуб в трк «глобус»">
                                    <span class="fourth-content__title">клуб в трк «глобус»</span>
                                    <span class="fourth-content__address">ул. Щербакова, 4</span>
                                </address>
                            </li>
                            <li>
                                <address class="geo-touch" data-street="Екатеринбург, ул. Ильича, 47" data-yandex-x="56.896027" data-index="1" data-yandex-y="60.605290" data-name="клуб в трц «победа»">
                                    <span class="fourth-content__title">клуб в трц «победа»</span>
                                    <span class="fourth-content__address">ул. Ильича, 47</span>
                                </address>
                            </li>
                            <li>
                                <address class="geo-touch" data-street="Екатеринбург, ул. Родонитовая, 4" data-yandex-x="56.792232" data-index="1" data-yandex-y="60.617615" data-name="Клуб на родонитовой">
                                    <span class="fourth-content__title">Клуб на родонитовой</span>
                                    <span class="fourth-content__address">ул. Родонитовая, 4</span>
                                </address>
                            </li>
                            <li>
                                <address class="geo-touch" data-street="Екатеринбург, ул. Айвазовского, 53" data-yandex-x="56.802238" data-index="1" data-yandex-y="60.598723" data-name="Клуб на айвазовского">
                                    <span class="fourth-content__title">Клуб на айвазовского</span>
                                    <span class="fourth-content__address">ул. Айвазовского, 53</span>
                                </address>
                            </li>
                            <li>
                                <address class="geo-touch" data-street="Екатеринбург, ул. Луначарского, 139" data-yandex-x="56.836697" data-index="1" data-yandex-y="60.622349" data-name="Клуб в тц «кортео»">
                                    <span class="fourth-content__title">Клуб в тц «кортео»</span>
                                    <span class="fourth-content__address">ул. Луначарского, 139</span>
                                </address>
                            </li>
                            <li>
                                <address class="geo-touch" data-street="Екатеринбург, ул. Сулимова, 50" data-yandex-x="56.863483" data-index="1" data-yandex-y="60.630766" data-name="Клуб в трк «парк хаус»">
                                    <span class="fourth-content__title">Клуб в трк «парк хаус»</span>
                                    <span class="fourth-content__address">ул. Сулимова, 50</span>
                                </address>
                            </li>
                            <li>
                                <address class="geo-touch" data-street="Екатеринбург, ул. Машинистов, 1" data-yandex-x="56.852488" data-index="1" data-yandex-y="60.574406" data-name="Клуб в трк «парк хаус»">
                                    <span class="fourth-content__title">КЛУБ В ЖК «ОЛЬХОВСКИЙ ПАРК»</span>
                                    <span class="fourth-content__address">ул. Машинистов, 1</span>
                                </address>
                            </li>
                            <div class="fourth-content__phonebox">
                               <span class="fourth-content__phonetext">тел:</span>
                               <span class="fourth-content__phonenumber"><a href="tel:2876600">287-66-00</a></span>
                           </div>
                       </ul>
                       <ul class="geo-list hidden-list" data-city="Тюмень">
                            <li>
                                <address class="geo-touch" data-street="Тюмень, ул. Валерии Гнаровской, 12" data-yandex-x="57.123451" data-index="1" data-yandex-y="65.562804" data-name="КЛУБ В ТРЦ «ФАВОРИТ»">
                                    <span class="fourth-content__title">КЛУБ В ТРЦ «ФАВОРИТ»</span>
                                    <span class="fourth-content__address">ул. Валерии Гнаровской, 12</span>
                                </address>
                            </li>
                            <li>
                                <address class="geo-touch" data-street="г. Тюмень, ул. Федюнинского, 67" data-yandex-x="57.102973" data-index="1" data-yandex-y="65.570368" data-name="КЛУБ В ТРЦ «ОСТРОВ»">
                                    <span class="fourth-content__title">КЛУБ В ТРЦ «ОСТРОВ»</span>
                                    <span class="fourth-content__address">ул. Федюнинского, 67</span>
                                </address>
                            </li>
                            <li>
                                <address class="geo-touch" data-street="г. Тюмень, ул. М. Горького, 70" data-yandex-x="57.148849" data-index="1" data-yandex-y="65.559867" data-name="КЛУБ В ТРЦ «ГУДВИН»">
                                    <span class="fourth-content__title">КЛУБ В ТРЦ «ГУДВИН»</span>
                                    <span class="fourth-content__address">ул. М. Горького, 70</span>
                                </address>
                            </li>
                            <div class="fourth-content__phonebox">
                               <span class="fourth-content__phonetext">тел:</span>
                               <span class="fourth-content__phonenumber"><a href="tel:2516690">251-66-90</a></span>
                           </div>
                       </ul>
                   </div>
               </div>
               <div class="fourth-content__map" id="map">
                   <div id="mobile-swipe"></div>
               </div>
            </div>
        </section>
        <section class="section fifth-block page" data-anchor="section5">
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="header-content">
                                <div class="header-content__left"><span>Будь<br>#вкомандедрайва</span></div>
                                <div class="header-content__logo"><img src="img/logo.png" alt=""></div>
                                <div class="header-content__right"><a href="#section3">Забронировать<br>клубную карту</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fifth-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-10 col-md-offset-1">
                            <div class="fifth-content__titles">
                                <h2 class="fifth-content__phrase"><span class="red">11</span> фитнес-клубов</h2>
                                <h2 class="fifth-content__phrase"><span class="red">20.000</span> клиентов</h2>
                                <h2 class="fifth-content__phrase">«Фитнес-клуб года» <span class="red year">2017</span></h2>
                            </div>
                            <div class="fifth-content__box">
                                <p>Каждый клуб Drive Fitness - это более 1.500 м², все необходимое для эффективных и комфортных тренировок</p>
                            </div>
                            <div class="fifth-content__list">
                                <ul>
                                    <li><span>Большая кардиолиния и тренажерный зал с профессиональным оборудованием;</span></li>
                                    <li><span>Зона СrossFit и WorkOut;</span></li>
                                    <li><span>Зона боевых искусств, профессиональный ринг;</span></li>
                                    <li><span>Залы групповых программ (2-3 зала);</span></li>
                                </ul>
                                <ul>
                                    <li><span>Просторные раздевалки;</span></li>
                                    <li><span>Сауны в женской и мужской раздевалках;</span></li>
                                    <li><span>Детский клуб «Drive Kids»;</span></li>
                                    <li><span>Фитнес-бар «Drive Bar»;</span></li>
                                    <li><span>Кабинет по уходу за телом.</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="fifth-content__more">*Победитель в номинации «Фитнес-клуб года»-2017 Народной премии Е1.RU</p>
            </div>
        </section>
        <section class="section sixth-block page" data-anchor="section6">
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="header-content">
                                <div class="header-content__left"><span>Будь<br>#вкомандедрайва</span></div>
                                <div class="header-content__logo"><img src="img/logo.png" alt=""></div>
                                <div class="header-content__right"><a href="#section3">Забронировать<br>клубную карту</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sixth-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="sixth-content__box">
                                <h2 class="sixth-content__phrase">Будь <span class="century">#</span>вкомандедрайва</h2>
                                <h2 class="sixth-content__phrase">Побеждай <span class="century">#</span>сдрайвом</h2>
                            </div>
                            <a href="#section3" class="book_button">Забронировать</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </div>
    <div class="mobile-footer">
            <a href="#section3" class="book-link">Забронировать<br>клубную карту</a>
        </div>


	<link rel="stylesheet" href="css/main.min.css">
	<script src="js/scripts.min.js"></script>
    

</body>
</html>
