<?php
/*
Template name: In services page
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
        <div class="container">
            <div class="row">
                <aside class="col-md-3 services-list">
                    <span><?php echo get_field('title_a_tooth_hurts_services_page', '95'); ?></span>
                    <ul>
                    <?php $get_pages_a = get_field_object('links_a_tooth_hurts_services_page', '95'); ?>
                    <?php if($get_pages_a['value']){ ?>
					<?php foreach($get_pages_a['value'] as $pages){ ?>
                        <li><p><a href="<?php echo get_permalink($pages->ID) ?>"><?php echo $pages->post_title; ?></a></p></li>
					<?php } ?>
                    <?php } ?>  
                    </ul>
                    <span><?php echo get_field('title_b_tooth_destroyed_services_page', '95'); ?></span>
                    <ul>
                    <?php $get_pages_b = get_field_object('links_b_tooth_destroyed_services_page', '95'); ?>
                    <?php if($get_pages_b['value']){ ?>
					<?php foreach($get_pages_b['value'] as $pages){ ?>
                        <li><p><a href="<?php echo get_permalink($pages->ID) ?>"><?php echo $pages->post_title; ?></a></p></li>
					<?php } ?>
                    <?php } ?>
                    </ul>
                    <span><?php echo get_field('title_c_tooth_not_hurt_services_page', '95'); ?></span>
                    <ul>
                    <?php $get_pages_с = get_field_object('links_c_tooth_not_hurt_services_page', '95'); ?>
                    <?php if($get_pages_с['value']){ ?>
					<?php foreach($get_pages_с['value'] as $pages){ ?>
                        <li><p><a href="<?php echo get_permalink($pages->ID) ?>"><?php echo $pages->post_title; ?></a></p></li>
					<?php } ?>
                    <?php } ?>
                    </ul>
                    <span><?php echo get_field('title_d_special_care_services_page', '95'); ?></span>
                    <ul>
                    <?php $get_pages_d = get_field_object('links_d_special_care_services_page', '95'); ?>
                    <?php if($get_pages_d['value']){ ?>
					<?php foreach($get_pages_d['value'] as $pages){ ?>
                        <li><p><a href="<?php echo get_permalink($pages->ID) ?>"><?php echo $pages->post_title; ?></a></p></li>
					<?php } ?>
                    <?php } ?>
                    </ul>
                    <span><?php echo get_field('title_e_align_bite_services_page', '95'); ?></span>
                    <ul>
                    <?php $get_pages_e = get_field_object('links_e_align_bite_services_page', '95'); ?>
                    <?php if($get_pages_e['value']){ ?>
					<?php foreach($get_pages_e['value'] as $pages){ ?>
                        <li><p><a href="<?php echo get_permalink($pages->ID) ?>"><?php echo $pages->post_title; ?></a></p></li>
					<?php } ?>
                    <?php } ?>
                    </ul>
                    <span><?php echo get_field('title_f_temporomandibular_joint_hurts_services_page', '95'); ?></span>
                    <ul>
                    <?php $get_pages_f = get_field_object('links_f_temporomandibular_joint_hurts_services_page', '95'); ?>
                    <?php if($get_pages_f['value']){ ?>
					<?php foreach($get_pages_f['value'] as $pages){ ?>
                        <li><p><a href="<?php echo get_permalink($pages->ID) ?>"><?php echo $pages->post_title; ?></a></p></li>
					<?php } ?>
                    <?php } ?>    
                    </ul>
                    <span><?php echo get_field('title_g_plasmolifting_services_page', '95'); ?></span>
                    <ul>
                    <?php $get_pages_g = get_field_object('links_g_plasmolifting_services_page', '95'); ?>
                    <?php if($get_pages_g['value']){ ?>
					<?php foreach($get_pages_g['value'] as $pages){ ?>
                        <li><p><a href="<?php echo get_permalink($pages->ID) ?>"><?php echo $pages->post_title; ?></a></p></li>
					<?php } ?>
                    <?php } ?>       
                    </ul>
                    <span><?php echo get_field('title_h_therapy_services_page', '95'); ?></span>
                    <ul>
                    <?php $get_pages_h = get_field_object('links_h_therapy_services_page', '95'); ?>
                    <?php if($get_pages_h['value']){ ?>
					<?php foreach($get_pages_h['value'] as $pages){ ?>
                        <li><p><a href="<?php echo get_permalink($pages->ID) ?>"><?php echo $pages->post_title; ?></a></p></li>
					<?php } ?>
                    <?php } ?>     
                    </ul>
                    <span><?php echo get_field('title_i_orthopedics_services_page', '95'); ?></span>
                    <ul>
                    <?php $get_pages_i = get_field_object('links_i_orthopedics_services_page', '95'); ?>
                    <?php if($get_pages_i['value']){ ?>
					<?php foreach($get_pages_i['value'] as $pages){ ?>
                        <li><p><a href="<?php echo get_permalink($pages->ID) ?>"><?php echo $pages->post_title; ?></a></p></li>
					<?php } ?>
                    <?php } ?>      
                    </ul>
                    <span><?php echo get_field('title_j_additional_services_page', '95'); ?></span>
                    <ul>
                    <?php $get_pages_j = get_field_object('links_j_additional_services_page', '95'); ?>
                    <?php if($get_pages_j['value']){ ?>
					<?php foreach($get_pages_j['value'] as $pages){ ?>
                        <li><p><a href="<?php echo get_permalink($pages->ID) ?>"><?php echo $pages->post_title; ?></a></p></li>
					<?php } ?>
                    <?php } ?>      
                    </ul>
                </aside>
                <article class="col-md-8 in-services">
                    <h1 class="title"><?php the_title(); ?></h1>
                    
                    <?php if (have_posts()): while (have_posts()): the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; endif; ?>
            
                    <!--<a href="<?php echo get_permalink( 284 ); ?>" class="greenbutton samebutton"><?php echo get_field('view_examples_in_services_page', '95'); ?></a>-->
                    <a href="<?php echo get_permalink( 69 ); ?>" class="greenbutton samebutton"><?php echo get_field('all_text_reviews_block_main_page', '7'); ?></a>
                </article>
            </div>
        </div>
    </section>
  
<?php get_footer(); ?>