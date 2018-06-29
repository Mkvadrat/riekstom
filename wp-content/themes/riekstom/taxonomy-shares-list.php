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
			'taxonomy'    => 'shares-list',
			'post_type'   => 'shares',
			'orderby'     => 'date',
			'order'       => 'DESC',
			'posts_per_page' => $GLOBALS['wp_query']->query_vars['posts_per_page'],
			'paged'          => $current_page,

		);

		$shares = get_posts( $args );
	?>
    <section>
        <div class="container shares-page">
            <div class="row">
                <div class="col-md-12">
					<?php  $term = get_queried_object(); ?>
                    <h1 class="title"><?php echo $term->name; ?></h1>
					<div class="row shares">
						<?php if($shares){ ?>
							<?php foreach($shares as $share){ ?>
							<?php
								$title = $share->post_title;
								$image_url = wp_get_attachment_image_src( get_post_thumbnail_id($share->ID), 'full');
								$descr = wp_trim_words($share->post_content, 30, '...' );
								$link = get_permalink($share->ID);
							
							?>
							<div class="col-md-4 col-sm-4 col-xs-6">
								<a href="<?php echo $link; ?>" style="background-image: url('<?php echo $image_url[0] ? $image_url[0] : esc_url( get_template_directory_uri() ) . '/images/shares.jpg'; ?>')"></a>
								<h2 class="sub-title"><a href="<?php echo $link; ?>"><?php echo $title; ?></a></h2>
								<p><?php echo $descr; ?></p>
								<a href="<?php echo $link; ?>">Подробнее</a>
							</div>
							<?php wp_reset_postdata(); ?>
							<?php } ?>
						<?php }else{ ?>
						<div class="col-md-4">
							<div>В данной категории статей не найдено!</div>
						</div>
						<?php } ?>
                    </div> 
                </div>
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
