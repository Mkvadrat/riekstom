<?php
/*
Theme Name: Riekstom
Theme URI: http://riekstom.com/
Author: Thebarber
Author URI: http://mkvadrat.com/
Description: Тема для сайта http://riekstom.com/
Version: 1.0
*/
?>

<!DOCTYPE html>
<!-- HelloPreload http://hello-site.ru/preloader/ -->
<style type="text/css">#hellopreloader>p{display:none;}#hellopreloader_preload{display: block;position: fixed;z-index: 99999;top: 0;left: 0;width: 100%;height: 100%;min-width: 1000px;background: #2ECC71 url(http://hello-site.ru//main/images/preloads/circles.svg) center center no-repeat;background-size:101px;}</style>
<div id="hellopreloader"><div id="hellopreloader_preload"></div><p><a href="http://hello-site.ru">Hello-Site.ru. Бесплатный конструктор сайтов.</a></p></div>
<script type="text/javascript">var hellopreloader = document.getElementById("hellopreloader_preload");function fadeOutnojquery(el){el.style.opacity = 1;var interhellopreloader = setInterval(function(){el.style.opacity = el.style.opacity - 0.05;if (el.style.opacity <=0.05){ clearInterval(interhellopreloader);hellopreloader.style.display = "none";}},16);}window.onload = function(){setTimeout(function(){fadeOutnojquery(hellopreloader);},1000);};</script>
<!-- HelloPreload http://hello-site.ru/preloader/ -->
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo rs_wp_title('','', true, 'right'); ?></title>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/stylesheets.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/media.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/sweetalert.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery.mmenu.all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.dotdotdot/3.2.2/jquery.dotdotdot.js"></script>
    <script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/maskedinput.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.mmenu.all.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/sweetalert.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/reviews.js"></script>
</head>
<body>
    <div id="page">
        <nav id="menu">
            <ul>
                <li><a href="http://stoma.loc/o-klinike/">О клинике</a>
                    <ul>
                        <li><a href="http://1">Выпадающий список</a></li>
                        <li><a href="http://2">Выпадающий список</a></li>
                    </ul>
                </li>
                <li><a href="http://stoma.loc/services/">Услуги</a>
                    <ul>
                        <li><a href="http://stoma.loc/lechenie-kariesa/">Лечение кариеса</a></li>
                        <li><a href="http://stoma.loc/lechenie-pulpita/">Лечение пульпита</a></li>
                        <li><a href="http://stoma.loc/lechenie-periodontita/">Лечение периодонтита</a></li>
                        <li><a href="http://stoma.loc/protezirovanie/">Протезирование</a></li>
                        <li><a href="http://stoma.loc/restavraciya/">Реставрация</a></li>
                        <li><a href="http://stoma.loc/profosmotr/">Профосмотр</a></li>
                        <li><a href="http://stoma.loc/chistka-naleta-i-zubnogo-kamnya/">Чистка налета и зубного камня</a></li>
                        <li><a href="http://stoma.loc/brekety/">Брекеты</a></li>
                        <li><a href="http://stoma.loc/lechenie-zubov-pri-beremennosti/">Лечение зубов при беременности</a></li>
                        <li><a href="http://stoma.loc/apparaty-ortodonticheskie-semnye-i-n/">Аппараты ортодонтические сьемные и несъемные</a></li>
                        <li><a href="http://stoma.loc/kineziologicheskie-metody-resheniya-pr/">Кинезиологические методы решения проблемы сустава</a></li>
                        <li><a href="http://stoma.loc/zashhitnye-kappy-vakuum-former/">Защитные каппы (вакуум-формер)</a></li>
                        <li><a href="http://stoma.loc/reshenie-problem-desen/">Решение проблем десен</a></li>
                    </ul>
                </li>
                <li><a href="http://stoma.loc/oplata/">Оплата</a></li>
                <li><a href="http://stoma.loc/all-shares/">Акции</a></li>
                <li><a href="http://stoma.loc/reviews/">Отзывы</a></li>
                <li><a href="http://stoma.loc/contacts/">Контакты</a></li>
            </ul>
        </nav>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-6 logo">
                        <a class="header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img
                            src="<?php header_image(); ?>"
                            height="<?php echo get_custom_header()->height; ?>"
                            width="<?php echo get_custom_header()->width; ?>"
                            alt="logotype"
                            />
                            <span><?php echo getMeta('text_logo_main_page'); ?></span>
                        </a>
                    </div>
                    <div class="col-md-6 menu">
                        <?php
                            if (has_nav_menu('header_first_menu')){
                                wp_nav_menu( array(
                                    'theme_location'  => 'header_first_menu',
                                    'menu'            => '',
                                    'container'       => false,
                                    'container_class' => '',
                                    'container_id'    => '',
                                    'menu_class'      => '',
                                    'menu_id'         => '',
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'items_wrap'      => '<ul>%3$s</ul>',
                                    'depth'           => 2,
                                    'walker'          => new primary_menu(),
                                ) );
                            }
                        ?>
                    </div>
                    <div class="col-md-3 col-sm-8 col-xs-6 headling-info">
                        <a class="mobile-button greenbutton" href="#menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                        <a href="tel:<?php echo getMeta('phone_header_main_page'); ?>"><?php echo getMeta('phone_header_main_page'); ?></a>
                        <p><?php echo getMeta('mode_operation_header_main_page'); ?></p>
                    </div>
                </div>
            </div>
        </header>