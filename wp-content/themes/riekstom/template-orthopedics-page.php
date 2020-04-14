<?php
/*
Template name: Orthopedics page
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
    <section>
        <div class="container servicess-therapy">
            <div class="row">
                <div class="col-md-3"><span><?php echo get_post_meta( get_the_ID(), 'title_a_orthopedics_page', $single = true ); ?></span></div>
                <div class="col-md-9 therapy">
                    <?php $get_pages_i = get_field_object('links_a_orthopedics_page', get_the_ID()); ?>
                    <?php if($get_pages_i['value']){ ?>
					<?php foreach($get_pages_i['value'] as $pages){ ?>
						<a href="<?php echo get_permalink($pages->ID) ?>"><?php echo $pages->post_title; ?></a>
					<?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
  
<?php get_footer(); ?>