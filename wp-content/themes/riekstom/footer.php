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
        
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="title"><?php echo getMeta('services_footer_main_page'); ?></p>
                    <div class="row">
                        <div class="col-md-6">
                            <?php
                                if (has_nav_menu('footer_first_menu')){
                                    wp_nav_menu( array(
                                        'theme_location'  => 'footer_first_menu',
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
                                        'depth'           => 1,
                                    ) );
                                }
                            ?>
                        </div>
                        <div class="col-md-6">
                            <?php
                                if (has_nav_menu('footer_second_menu')){
                                    wp_nav_menu( array(
                                        'theme_location'  => 'footer_second_menu',
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
                                        'depth'           => 1,
                                    ) );
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-5">
                            <p class="title"><?php echo getMeta('company_footer_main_page'); ?></p>
                            <?php
                                if (has_nav_menu('footer_third_menu')){
                                    wp_nav_menu( array(
                                        'theme_location'  => 'footer_third_menu',
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
                                        'depth'           => 1,
                                    ) );
                                }
                            ?>
                        </div>
                        <div class="col-md-7 footer-contacts">
                            <div class="footer-info">
                                <?php echo getMeta('mode_operation_footer_main_page'); ?>
                            </div>
                            <p class="address"><?php echo getMeta('address_footer_main_page'); ?></p>
                            <div class="socials">
                                <a href="<?php echo getMeta('link_a_soc_links_footer_main_page'); ?>" class="vk"><img src="<?php echo getAttachment('image_a_soc_links_footer_main_page'); ?>" alt="<?php echo getAltImage('image_a_soc_links_footer_main_page'); ?>"></a>
                                <a href="<?php echo getMeta('link_b_soc_links_footer_main_page'); ?>" class="fb"><img src="<?php echo getAttachment('image_b_soc_links_footer_main_page'); ?>" alt="<?php echo getAltImage('image_b_soc_links_footer_main_page'); ?>"></a>
                                <a href="<?php echo getMeta('link_c_soc_links_footer_main_page'); ?>" class="insta"><img src="<?php echo getAttachment('image_c_soc_links_footer_main_page'); ?>" alt="<?php echo getAltImage('image_c_soc_links_footer_main_page'); ?>"></a>
                                <a href="<?php echo getMeta('link_d_soc_links_footer_main_page'); ?>" class="yutb"><img src="<?php echo getAttachment('image_d_soc_links_footer_main_page'); ?>" alt="<?php echo getAltImage('image_d_soc_links_footer_main_page'); ?>"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 copyright">
                   <?php echo getMeta('copyright_footer_main_page'); ?>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>

