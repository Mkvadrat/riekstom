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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.dotdotdot/3.2.2/jquery.dotdotdot.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/owl.carousel.min.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/custom.js"></script>
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-3 logo">
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
                <div class="col-md-3 headling-info">
                    <a href="tel:<?php echo getMeta('phone_header_main_page'); ?>"><?php echo getMeta('phone_header_main_page'); ?></a>
                    <p><?php echo getMeta('mode_operation_header_main_page'); ?></p>
                </div>
            </div>
        </div>
    </header>