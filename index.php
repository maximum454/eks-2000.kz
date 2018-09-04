<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?IncludeTemplateLangFile(__FILE__);?>
<!doctype html>
<html lang="ru">
<head>
    <?$APPLICATION->ShowHead()?>
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Twitter Card data -->
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Open Graph data -->
    <meta property="og:title" content="">
    <meta property="og:type" content="article">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:description" content="">
    <meta property="og:site_name" content="">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?$APPLICATION->SetAdditionalCSS("/bitrix/templates/".SITE_TEMPLATE_ID."/css/eks2000.css");?>
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<div class="wrp">
    <div class="upline">
        <div class="upline__inner">
            <a class="upline__logo" href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt=""></a>
            <a class="upline__adress" href="#">Республика Казахстан, г. Астана<br> ул. Бейсекбаева, 28</a>
            <a class="upline__mail" href="#">info@eks-2002.kz</a>
            <div class="upline__phone">
                <a href="tel:+77172472574">+7 (7172) 472-574</a><br>
                <a href="tel:+77015166928">+7 701 516 69 28</a>
            </div>
        </div>
        <?$APPLICATION->IncludeComponent(
            "bitrix:menu",
            "",
            Array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "left",
                "COMPOSITE_FRAME_MODE" => "A",
                "COMPOSITE_FRAME_TYPE" => "AUTO",
                "DELAY" => "N",
                "MAX_LEVEL" => "1",
                "MENU_CACHE_GET_VARS" => array(""),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "top",
                "USE_EXT" => "N"
            )
        );?>

    </div>
    <header class="header">
        <div class="header__inner">
            <h1>Энерго + Комплект + Сервис =</h1>
            <h2>Эффективность + Качество + Сотрудничество</h2>
            <hr>
            <h4>ТОЛЬКО КАЧЕСТВЕННЫЕ РЕШЕНИЯ</h4>
            <div class="header__bottom">
                <a class="header__btn" href="#">Каталог продукции</a>
                <a class="header__btn color" href="#">Заказать звонок</a>
            </div>
        </div>
    </header>
    <main class="main">
        #WORK_AREA#
        <div class="partners">
            <div class="partners__inner">
                <h3>Партнеры</h3>
                <div class="partners__slider js-partners">
                    <div class="partners__item"><img src="<?=SITE_TEMPLATE_PATH?>/img/mennekes.png" alt=""></div>
                    <div class="partners__item"><img src="<?=SITE_TEMPLATE_PATH?>/img/schneider.png" alt=""></div>
                    <div class="partners__item"><img src="<?=SITE_TEMPLATE_PATH?>/img/weidmuller.png" alt=""></div>
                    <div class="partners__item"><img src="<?=SITE_TEMPLATE_PATH?>/img/spectr-rs.png" alt=""></div>

                    <div class="partners__item"><img src="<?=SITE_TEMPLATE_PATH?>/img/mennekes.png" alt=""></div>
                    <div class="partners__item"><img src="<?=SITE_TEMPLATE_PATH?>/img/schneider.png" alt=""></div>
                    <div class="partners__item"><img src="<?=SITE_TEMPLATE_PATH?>/img/weidmuller.png" alt=""></div>
                    <div class="partners__item"><img src="<?=SITE_TEMPLATE_PATH?>/img/spectr-rs.png" alt=""></div>
                </div>
            </div>
        </div>
        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="w-100">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/banner.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="map">
            <div class="map__item">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A824a821435feca831df87a0c35bca0837b74e03bc52b468b78f4f786f277d44b&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=false"></script>
                <div class="map__inner">
                    <div class="map__anons color">
                        <h5>ОФИС КОМПАНИИ</h5>
                        <p>010000, Республика Казахстан<br>
                            г. Астана, ул. Бейсекбаева, 28</p>
                        <br>
                        <p><b>Тел./факс:</b> +7 (7172) 472-574</p>
                        <p><b>Ком. отдел:</b> +7 (7172) 472-575</p>
                        <p><b>ПТО:</b> +7 (7172) 472-574</p>
                        <p><b>Эл. почта:</b> info@eks-2002.kz</p>
                    </div>
                </div>
            </div>
            <div class="map__item">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A824a821435feca831df87a0c35bca0837b74e03bc52b468b78f4f786f277d44b&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=false"></script>
                <div class="map__inner">
                    <div class="map__anons">
                        <h5>ПРОИЗВОДСТВЕННЫЙ ОТДЕЛ</h5>
                        <p>010000, Республика Казахстан<br>
                            г. Астана, ул. Талапкерская, 26Б</p>
                        <br>
                        <p><b>Склад:</b> +7 707 777 55 11</p>
                        <p><b>Нач. производства:</b> +7 (7172) 472-575</p>
                        <p><b>Эл. почта:</b> factory@eks-2002.kz</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="footer__inner">
            <p>© ТОО «ЭнергоКомплектСервис-2002». Все права защищены</p>
            <img src="<?=SITE_TEMPLATE_PATH?>/img/count.png" alt="">
        </div>
    </footer>
</div>
<?$APPLICATION->AddHeadScript("/bitrix/templates/".SITE_TEMPLATE_ID."/js/eks2000.js");?>
</body>
</html>
