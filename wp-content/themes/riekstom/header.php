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
<!-- HelloPreload http://hello-site.ru/preloader/ 
<style type="text/css">#hellopreloader>p{display:none;}#hellopreloader_preload{display: block;position: fixed;z-index: 99999;top: 0;left: 0;width: 100%;height: 100%;/* min-width: 1000px */;background: #2ECC71 url(http://hello-site.ru//main/images/preloads/circles.svg) center center no-repeat;background-size:101px;}</style>
<div id="hellopreloader"><div id="hellopreloader_preload"></div><p><a href="http://hello-site.ru">Hello-Site.ru. Бесплатный конструктор сайтов.</a></p></div>
<script type="text/javascript">var hellopreloader = document.getElementById("hellopreloader_preload");function fadeOutnojquery(el){el.style.opacity = 1;var interhellopreloader = setInterval(function(){el.style.opacity = el.style.opacity - 0.05;if (el.style.opacity <=0.05){ clearInterval(interhellopreloader);hellopreloader.style.display = "none";}},16);}window.onload = function(){setTimeout(function(){fadeOutnojquery(hellopreloader);},1000);};</script>
 HelloPreload http://hello-site.ru/preloader/ -->
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

    <meta name="yandex-verification" content="db029f2c99578a89" />

    <?php wp_head(); ?>
</head>

<body>
    <div id="page">
        <header>
            <div class="container">
                <div class="top-header">
                    <div class="header-item">
                        <?php echo get_field('text_header_main_page', '7'); ?>
                    </div>
                    <div class="header-item">
                        <?php echo get_field('address_header_main_page', '7'); ?>
                    </div>
                </div>
            </div>
            <hr class="header-line" />
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-6 logo">
                        <a class="header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
                                width="<?php echo get_custom_header()->width; ?>" alt="logotype" />
                            <span><?php echo get_field('text_logo_main_page', '7'); ?></span>
                        </a>
                    </div>
                    <div class="col-md-6 menu">
                        <p><?php echo get_field('mode_operation_header_main_page', '7'); ?></p>

						<nav class="menu-main">
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
                                        'depth'           => 3,
                                        'walker'          => new primary_menu(),
                                    ) );
                                }
                            ?>
						</nav>
                    </div>
                    <div class="col-md-3 col-sm-8 col-xs-6 headling-info">
                        <a class="mobile-button greenbutton" href="#menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                        <a
                            href="tel:<?php echo get_field('phone_header_main_page', '7'); ?>"><?php echo get_field('phone_header_main_page', '7'); ?></a>
                        <div class="btn-header">
                            <?php echo get_field('callback_header_main_page', '7'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>