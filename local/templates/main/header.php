<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>
<?IncludeTemplateLangFile(__FILE__);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang=<?=LANGUAGE_ID?>>
<head>
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle();?></title>
    <link type="text/css" rel="stylesheet" href="<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/_include/css/all.css", true);?>"/>
    <script type="text/javascript" src="<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/jquery-1.4.2.min.js", true);?>"></script>
    <script type="text/javascript" src="<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/loopedslider.js", true);?>"></script>
    <script type="text/javascript" src="<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/looped-options.js", true);?>"></script>
    <script type="text/javascript" src="<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/slideBlock.js", true);?>"></script>
    <script type="text/javascript" src="<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/latte.js", true);?>"></script>
    <script type="text/javascript" src="<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/jquery.roundabout.min.js", true);?>"></script>
    <script type="text/javascript" src="<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/loader.js", true);?>"></script>
    <script type="text/javascript" src="<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/ddsmoothmenu.js", true);?>"></script>
    <script type="text/javascript" src="<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/cufon.js", true);?>"></script>
    <script type="text/javascript" src="<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/cufon-fonts.js", true);?>"></script>
    <script type="text/javascript" src="<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/cufon-settings.js", true);?>"></script>
    <script type="text/javascript" src="<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/input.js", true);?>"></script>
    <script type="text/javascript" src="<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/_include/js/main.js", true);?>"></script>
    <!--[if lt IE 8]><link rel="stylesheet" href="<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/_include/css/ie.css", true);?>" type="text/css" /><![endif]-->
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<!-- start header -->
<div class="header-wrap">
    <div id="header">
        <div class="header-holder">
            <h class="logo"><a href="index.html">Synoptic</a></h>

            <?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"MENU_CACHE_TYPE" => "A",	// Тип кеширования
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MAX_LEVEL" => "2",	// Уровень вложенности меню
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
	),
	false
);?>

                <div class="form-wrap">
                <form action="#" class="search-form">
                    <fieldset>
                        <span class="text-wrap"><input type="text" class="text" value="Поиск..." /></span>
                        <input type="submit" class="submit" value="Поиск..." />
                    </fieldset>
                </form>
                <form action="#" class="login-form">
                    <fieldset>
                        <input type="button" class="button sign-up" value="Регистрация" />
                        <input type="button" class="button sign-in" value="Погнали!" />
                        <span class="text-wrap"><input type="text" class="text" value="Пароль..." /></span>
                        <span class="text-wrap"><input type="text" class="text" value="Логин..." /></span>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end header -->

<!-- start intro-holder -->
<div id="intro-holder">
    <div class="intro-box">
        <div class="roundabout-holder large">
            <ul id="myRoundabout">
                <li>
                    <img src="<?=SITE_TEMPLATE_PATH;?>/_include/images/slider1.jpg" alt="image description" width="100%" />
                    <div class="image">

                    </div>
                </li>
                <li>
                    <img src="<?=SITE_TEMPLATE_PATH;?>/_include/images/slider2.jpg" alt="image description" width="100%" />
                    <div class="image">

                    </div>
                </li>
                <li>
                    <img src="<?=SITE_TEMPLATE_PATH;?>/_include/images/slider3.jpg" alt="image description" width="100%" />
                    <div class="image">

                    </div>
                </li>
            </ul>
            <div class="controls">
                <a href="#" id="next">Next!</a>
                <a href="#" id="previous">Previous!</a>
            </div>
        </div>
    </div>
</div>
<!-- end intro-holder -->