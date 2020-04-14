<?php
/*
Template name: Services page
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
        <div class="container servicess servicess-page">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title"><?php the_title(); ?></h3>
					
					<div class="reviews-text">
                            <?php echo wpautop(get_post_meta( get_the_ID(), 'text_services_page', $single = true )); ?>
                    </div>
                </div>
            </div>
            <div class="row help">
                <div class="col-md-3">
                    <div>
                        <?php $a_image = get_field('image_a_tooth_hurts_services_page', get_the_ID()); ?>
                        <img src="<?php echo $a_image['url']; ?>" alt="<?php echo $a_image['alt']; ?>">
                    </div>
                    <span><?php echo get_post_meta( get_the_ID(), 'title_a_tooth_hurts_services_page', $single = true ); ?></span>
                    
                    <?php $get_pages_a = get_field_object('links_a_tooth_hurts_services_page', get_the_ID()); ?>
                    <?php if($get_pages_a['value']){ ?>
					<?php foreach($get_pages_a['value'] as $pages){ ?>
						<a href="<?php echo get_permalink($pages->ID) ?>"><?php echo $pages->post_title; ?></a>
					<?php } ?>
                    <?php } ?>
                </div>
                <div class="col-md-3">
                    <div>
                        <?php $b_image = get_field('image_b_tooth_destroyed_services_page', get_the_ID()); ?>
                        <img src="<?php echo $b_image['url']; ?>" alt="<?php echo $b_image['alt']; ?>">
                    </div>
                    <span><?php echo get_post_meta( get_the_ID(), 'title_b_tooth_destroyed_services_page', $single = true ); ?></span>
                    
                    <?php $get_pages_b = get_field_object('links_b_tooth_destroyed_services_page', get_the_ID()); ?>
                    <?php if($get_pages_b['value']){ ?>
					<?php foreach($get_pages_b['value'] as $pages){ ?>
						<a href="<?php echo get_permalink($pages->ID) ?>"><?php echo $pages->post_title; ?></a>
					<?php } ?>
                    <?php } ?>
                </div>
                <div class="col-md-3">
                    <div>
                        <?php $c_image = get_field('image_c_tooth_not_hurt_services_page', get_the_ID()); ?>
                        <img src="<?php echo $c_image['url']; ?>" alt="<?php echo $c_image['alt']; ?>">
                    </div>
                    <span><?php echo get_post_meta( get_the_ID(), 'title_c_tooth_not_hurt_services_page', $single = true ); ?></span>
                    
                    <?php $get_pages_с = get_field_object('links_c_tooth_not_hurt_services_page', get_the_ID()); ?>
                    <?php if($get_pages_с['value']){ ?>
					<?php foreach($get_pages_с['value'] as $pages){ ?>
						<a href="<?php echo get_permalink($pages->ID) ?>"><?php echo $pages->post_title; ?></a>
					<?php } ?>
                    <?php } ?>
                </div>
                <div class="col-md-3">
                    <div>
                        <?php $d_image = get_field('image_d_special_care_services_page', get_the_ID()); ?>
                        <img src="<?php echo $d_image['url']; ?>" alt="<?php echo $d_image['alt']; ?>">
                    </div>
                    <span><?php echo get_post_meta( get_the_ID(), 'title_d_special_care_services_page', $single = true ); ?></span>
					
                    <?php $get_pages_d = get_field_object('links_d_special_care_services_page', get_the_ID()); ?>
                    <?php if($get_pages_d['value']){ ?>
					<?php foreach($get_pages_d['value'] as $pages){ ?>
						<a href="<?php echo get_permalink($pages->ID) ?>"><?php echo $pages->post_title; ?></a>
					<?php } ?>
                    <?php } ?>
                </div>
            </div>
            <div class="row help">
                <div class="col-md-3">
					<div>
                        <?php $e_image = get_field('image_e_align_bite_services_page', get_the_ID()); ?>
                        <img src="<?php echo $e_image['url']; ?>" alt="<?php echo $e_image['alt']; ?>">
                    </div>
                    <span><?php echo get_post_meta( get_the_ID(), 'title_e_align_bite_services_page', $single = true ); ?></span>
                    
                    <?php $get_pages_e = get_field_object('links_e_align_bite_services_page', get_the_ID()); ?>
                    <?php if($get_pages_e['value']){ ?>
					<?php foreach($get_pages_e['value'] as $pages){ ?>
						<a href="<?php echo get_permalink($pages->ID) ?>"><?php echo $pages->post_title; ?></a>
					<?php } ?>
                    <?php } ?>
                </div>
                <div class="col-md-3">
					<div>
                        <?php $f_image = get_field('image_f_temporomandibular_joint_hurts_services_page', get_the_ID()); ?>
                        <img src="<?php echo $f_image['url']; ?>" alt="<?php echo $f_image['alt']; ?>">
                    </div>
                    <span><?php echo get_post_meta( get_the_ID(), 'title_f_temporomandibular_joint_hurts_services_page', $single = true ); ?></span>
                    
                    <?php $get_pages_f = get_field_object('links_f_temporomandibular_joint_hurts_services_page', get_the_ID()); ?>
                    <?php if($get_pages_f['value']){ ?>
					<?php foreach($get_pages_f['value'] as $pages){ ?>
						<a href="<?php echo get_permalink($pages->ID) ?>"><?php echo $pages->post_title; ?></a>
					<?php } ?>
                    <?php } ?>
                </div>
                <div class="col-md-3">
					<div>
                        <?php $g_image = get_field('image_g_plasmolifting_services_page', get_the_ID()); ?>
                        <img src="<?php echo $g_image['url']; ?>" alt="<?php echo $g_image['alt']; ?>">
                    </div>
                    <span><?php echo get_post_meta( get_the_ID(), 'title_g_plasmolifting_services_page', $single = true ); ?></span>
                    
                    <?php $get_pages_g = get_field_object('links_g_plasmolifting_services_page', get_the_ID()); ?>
                    <?php if($get_pages_g['value']){ ?>
					<?php foreach($get_pages_g['value'] as $pages){ ?>
						<a href="<?php echo get_permalink($pages->ID) ?>"><?php echo $pages->post_title; ?></a>
					<?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section>
        <div class="container servicess-therapy">
            <div class="row">
                <div class="col-md-3"><span><?php echo get_post_meta( get_the_ID(), 'title_h_therapy_services_page', $single = true ); ?></span></div>
                <div class="col-md-9 therapy">
                    <?php $get_pages_h = get_field_object('links_h_therapy_services_page', get_the_ID()); ?>
                    <?php if($get_pages_h['value']){ ?>
					<?php foreach($get_pages_h['value'] as $pages){ ?>
						<a href="<?php echo get_permalink($pages->ID) ?>"><?php echo $pages->post_title; ?></a>
					<?php } ?>
                    <?php } ?>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3"><span><?php echo get_post_meta( get_the_ID(), 'title_i_orthopedics_services_page', $single = true ); ?></span></div>
                <div class="col-md-9 therapy">
                    <?php $get_pages_i = get_field_object('links_i_orthopedics_services_page', get_the_ID()); ?>
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