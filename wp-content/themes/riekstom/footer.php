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
                    <div class="col-md-7 footer-contacts footer-contacts-mobile">
                        <div class="footer-info">
                            <?php echo get_field('mode_operation_footer_main_page', '7'); ?>
                        </div>
                        <p class="address"><?php echo get_field('address_footer_main_page', '7'); ?></p>
                        <div class="socials">
                            <a href="<?php echo get_field('link_a_soc_links_footer_main_page', '7'); ?>" class="vk">
                                <?php $a_soc = get_field('image_a_soc_links_footer_main_page', '7'); ?>
                                <img src="<?php echo $a_soc['url']; ?>" alt="<?php echo $a_soc['alt']; ?>">
                            </a>
                            <a href="<?php echo get_field('link_b_soc_links_footer_main_page', '7'); ?>" class="fb">
                                <?php $b_soc = get_field('image_b_soc_links_footer_main_page', '7'); ?>
                                <img src="<?php echo $b_soc['url']; ?>" alt="<?php echo $b_soc['alt']; ?>">
                            </a>
                            <a href="<?php echo get_field('link_c_soc_links_footer_main_page', '7'); ?>" class="insta">
                                <?php $c_soc = get_field('image_c_soc_links_footer_main_page', '7'); ?>
                                <img src="<?php echo $c_soc['url']; ?>" alt="<?php echo $c_soc['alt']; ?>">
                            </a>
                            <a href="<?php echo get_field('link_d_soc_links_footer_main_page', '7'); ?>" class="yutb">
                                <?php $c_soc = get_field('image_d_soc_links_footer_main_page', '7'); ?>
                                <img src="<?php echo $d_soc['url']; ?>" alt="<?php echo $d_soc['alt']; ?>">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="title"><?php echo get_field('services_footer_main_page', '7'); ?></p>
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
                                <p class="title"><?php echo get_field('company_footer_main_page', '7'); ?></p>
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
                                    <?php echo get_field('mode_operation_footer_main_page', '7'); ?>
                                </div>
                                <p class="address"><?php echo get_field('address_footer_main_page', '7'); ?></p>
                                <div class="socials">
                                    <a href="<?php echo get_field('link_a_soc_links_footer_main_page', '7'); ?>" class="vk">
                                        <?php $a_soc = get_field('image_a_soc_links_footer_main_page', '7'); ?>
                                        <img src="<?php echo $a_soc['url']; ?>" alt="<?php echo $a_soc['alt']; ?>">
                                    </a>
                                    <a href="<?php echo get_field('link_b_soc_links_footer_main_page', '7'); ?>" class="fb">
                                        <?php $b_soc = get_field('image_b_soc_links_footer_main_page', '7'); ?>
                                        <img src="<?php echo $b_soc['url']; ?>" alt="<?php echo $b_soc['alt']; ?>">
                                    </a>
                                    <a href="<?php echo get_field('link_c_soc_links_footer_main_page', '7'); ?>" class="insta">
                                        <?php $c_soc = get_field('image_c_soc_links_footer_main_page', '7'); ?>
                                        <img src="<?php echo $c_soc['url']; ?>" alt="<?php echo $c_soc['alt']; ?>">
                                    </a>
                                    <a href="<?php echo get_field('link_d_soc_links_footer_main_page', '7'); ?>" class="yutb">
                                        <?php $d_soc = get_field('image_d_soc_links_footer_main_page', '7'); ?>
                                        <img src="<?php echo $d_soc['url']; ?>" alt="<?php echo $d_soc['alt']; ?>">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 copyright">
                        <?php echo get_field('copyright_footer_main_page', '7'); ?>
                    </div>
                </div>
            </div>
        </footer>
    </div>
   
    <?php wp_footer(); ?>   
</body>
</html>

