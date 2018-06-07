<?php
/*
Theme Name: Webholder
Theme URI: http://webholderads.com/
Author: webholder
Author URI: http://webholderads.com/
Description: Тема для сайта http://webholderads.com/
Version: 1.0
*/

get_header();
?>
    
    <section>
        <div class="container breadkrumbs">
            <div class="row">
                <div class="col-md-12">
                    <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container in-articles-page">
            <div class="row">
                <div class="col-md-8 in-articles">
                    <h1 class="title"><?php the_title(); ?></h1>
                   
                    <?php if (have_posts()): while (have_posts()): the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; endif; ?>
                
                </div>
                <aside class="col-md-3 right-side-links">
                    <div>
                        <?php  $term = get_the_terms($post->ID, 'articles-list'); ?>
                        <span><?php echo $term[0]->name; ?></span>
                        <?php 
                            $args_list = array(
                                'numberposts' => 6,
                                'orderby'     => 'date',
                                'order'       => 'DESC',
                                'post_type'   => 'articles',
                            );

                            $articles_line = get_posts( $args_list );
                            
                            if($articles_line){
                                
                            foreach($articles_line as $post){ setup_postdata($post);
                        ?>
                            <p><a href="<?php echo get_permalink($post->ID); ?>"><?php echo wp_trim_words( $post->post_title, 10, '...' ); ?></a></p>
                            <?php
                            
                                }
                            }
                            wp_reset_postdata();
                        ?>
                    </div>
 					<?php
						if (has_nav_menu('sidebar_menu')){
							wp_nav_menu( array(
								'theme_location'  => 'sidebar_menu',
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
								'walker'          => new reviews_menu(),
							) );
						}
					?>
                </aside>
            </div>
        </div>
    </section>
    

<?php get_footer(); ?>
