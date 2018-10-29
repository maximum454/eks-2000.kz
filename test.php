<header class="header">
    <div class="header__inner">
        <h1>Энерго + Комплект + Сервис =</h1>
        <h2>Эффективность + Качество + Сотрудничество</h2>
        <hr>
        <h4>ТОЛЬКО КАЧЕСТВЕННЫЕ РЕШЕНИЯ</h4>
        <div class="header__bottom">
            <a class="header__btn" href="<?= SITE_DIR . "energetics/" ?>">Каталог продукции</a>
            <a class="header__btn color" data-fancybox data-src="#feedback" href="#feedback">Заказать звонок</a>
        </div>
    </div>
</header>
<?$APPLICATION->IncludeComponent(
    "mirum:iblock.element.add.form",
    "feedback",
    array(
        "COMPOSITE_FRAME_MODE" => "A",
        "COMPOSITE_FRAME_TYPE" => "AUTO",
        "CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
        "CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
        "CUSTOM_TITLE_DETAIL_PICTURE" => "",
        "CUSTOM_TITLE_DETAIL_TEXT" => "",
        "CUSTOM_TITLE_IBLOCK_SECTION" => "",
        "CUSTOM_TITLE_NAME" => "",
        "CUSTOM_TITLE_PREVIEW_PICTURE" => "",
        "CUSTOM_TITLE_PREVIEW_TEXT" => "",
        "CUSTOM_TITLE_TAGS" => "",
        "DEFAULT_INPUT_SIZE" => "30",
        "DETAIL_TEXT_USE_HTML_EDITOR" => "N",
        "ELEMENT_ASSOC" => "CREATED_BY",
        "GROUPS" => array(
        ),
        "IBLOCK_ID" => "25",
        "IBLOCK_TYPE" => "contant_eks",
        "LEVEL_LAST" => "Y",
        "LIST_URL" => "",
        "MAX_FILE_SIZE" => "0",
        "MAX_LEVELS" => "100000",
        "MAX_USER_ENTRIES" => "100000",
        "PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
        "PROPERTY_CODES" => array(
            0 => "25",
            1 => "26",
            2 => "NAME",
        ),
        "PROPERTY_CODES_REQUIRED" => array(
            0 => "25",
            1 => "NAME",
        ),
        "RESIZE_IMAGES" => "N",
        "SEF_MODE" => "N",
        "STATUS" => "ANY",
        "STATUS_NEW" => "ANY",
        "USER_MESSAGE_ADD" => "",
        "USER_MESSAGE_EDIT" => "",
        "USE_CAPTCHA" => "N",
        "COMPONENT_TEMPLATE" => "feedback",
        "HIDDEN" => "Y"
    ),
    false
);?>