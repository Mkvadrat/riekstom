<?php
/*
Theme Name: Riekstom
Theme URI: http://riekstom.com/
Author: Thebarber
Author URI: http://mkvadrat.com/
Description: Тема для сайта http://riekstom.com/
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
	<?php
		$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array(
			'taxonomy'    => 'articles-list',
			'post_type'   => 'articles',
			'orderby'     => 'date',
			'order'       => 'DESC',
			'posts_per_page' => $GLOBALS['wp_query']->query_vars['posts_per_page'],
			'paged'          => $current_page,

		);

		$articles = get_posts( $args );
	?>
    <section>
        <div class="container articles-page">
            <div class="row">
                <div class="col-md-9">
                    <h1 class="title"><?php echo get_cat_name(getCurrentArticlesID()); ?></h1>
					<?php if($articles){ ?>
					<?php foreach($articles as $article){ ?>
					<?php
						$title = $article->post_title;
						$image_url = wp_get_attachment_image_src( get_post_thumbnail_id($article->ID), 'full');
						$descr = wp_trim_words($article->post_content, 30, '...' );
						$link = get_permalink($article->ID);
					
					?>
                    <div class="article">
                        <a href="<?php echo $link; ?>" style="background-image: url('<?php echo $image_url[0] ? $image_url[0] : esc_url( get_template_directory_uri() ) . '/images/article.jpg'; ?>')"></a>
                        <div>
                            <h2><a href="<?php echo $link; ?>" class="sub-title"><?php echo $title; ?></a></h2>
                            <p><?php echo $descr; ?></p>
                            <a href="<?php echo $link; ?>">Подробнее</a>
                        </div>
                    </div>
					<?php } ?>
					<?php wp_reset_postdata(); ?>
					<?php }else{ ?>
					<div class="article">
						<div>В данной категории статей не найдено!</div>
					</div>
					<?php } ?>
                    
                </div>
                <aside class="col-md-3 right-side-links">
                    <div>
                        <span>Статьи</span>
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
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
					<?php
						$defaults = array(
							'type' => 'array',
							'prev_next'    => false,
							'prev_text'    => __('В начало'),
							'next_text'    => __('В конец'),
						);
					
						$pagination = paginate_links($defaults);
					?>
					<?php if($pagination){ ?>
                    <div class="paggination">
                        <ul>
							<?php foreach ($pagination as $pag){ ?>
								<li><?php echo $pag; ?></li>
							<?php } ?>
						</ul>
                    </div>
					<?php } ?>
                </div>
            </div>
        </div>
    </section>
	
	
<?php get_footer(); ?>
