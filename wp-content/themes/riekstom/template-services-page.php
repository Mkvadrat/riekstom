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
                </div>
            </div>
            <div class="row help">
                <div class="col-md-3">
                    <div>
                        <img src="<?php echo getAttachment('image_a_tooth_hurts_services_page'); ?>" alt="<?php echo getAltImage('image_a_tooth_hurts_services_page'); ?>">
                    </div>
                    <span><?php echo get_post_meta( get_the_ID(), 'title_a_tooth_hurts_services_page', $single = true ); ?></span>
					<?php $get_pages_a = getLinks('links_a_tooth_hurts_services_page'); ?>
					<?php foreach($get_pages_a as $pages){ ?>
						<a href="<?php echo $pages['link']; ?>"><?php echo $pages['title']; ?></a>
					<?php } ?> 
                </div>
                <div class="col-md-3">
                    <div>
                        <img src="<?php echo getAttachment('image_b_tooth_destroyed_services_page'); ?>" alt="<?php echo getAltImage('image_b_tooth_destroyed_services_page'); ?>">
                    </div>
                    <span><?php echo get_post_meta( get_the_ID(), 'title_b_tooth_destroyed_services_page', $single = true ); ?></span>
					<?php $get_pages_b = getLinks('links_b_tooth_destroyed_services_page'); ?>
					<?php foreach($get_pages_b as $pages){ ?>
						<a href="<?php echo $pages['link']; ?>"><?php echo $pages['title']; ?></a>
					<?php } ?> 
                </div>
                <div class="col-md-3">
                    <div>
                        <img src="<?php echo getAttachment('image_c_tooth_not_hurt_services_page'); ?>" alt="<?php echo getAltImage('image_c_tooth_not_hurt_services_page'); ?>">
                    </div>
                    <span><?php echo get_post_meta( get_the_ID(), 'title_c_tooth_not_hurt_services_page', $single = true ); ?></span>
					<?php $get_pages_с = getLinks('links_c_tooth_not_hurt_services_page'); ?>
					<?php foreach($get_pages_с as $pages){ ?>
						<a href="<?php echo $pages['link']; ?>"><?php echo $pages['title']; ?></a>
					<?php } ?> 
                </div>
                <div class="col-md-3">
                    <div>
                        <img src="<?php echo getAttachment('image_d_special_care_services_page'); ?>" alt="<?php echo getAltImage('image_d_special_care_services_page'); ?>">
                    </div>
                    <span><?php echo get_post_meta( get_the_ID(), 'title_d_special_care_services_page', $single = true ); ?></span>
					<?php $get_pages_d = getLinks('links_d_special_care_services_page'); ?>
					<?php foreach($get_pages_d as $pages){ ?>
						<a href="<?php echo $pages['link']; ?>"><?php echo $pages['title']; ?></a>
					<?php } ?> 
                </div>
            </div>
            <div class="row help">
                <div class="col-md-3">
					<div>
                        <img src="<?php echo getAttachment('image_e_align_bite_services_page'); ?>" alt="<?php echo getAltImage('image_e_align_bite_services_page'); ?>">
                    </div>
                    <span><?php echo get_post_meta( get_the_ID(), 'title_e_align_bite_services_page', $single = true ); ?></span>
					<?php $get_pages_e = getLinks('links_e_align_bite_services_page'); ?>
					<?php foreach($get_pages_e as $pages){ ?>
						<a href="<?php echo $pages['link']; ?>"><?php echo $pages['title']; ?></a>
					<?php } ?> 
                </div>
                <div class="col-md-3">
					<div>
                        <img src="<?php echo getAttachment('image_f_temporomandibular_joint_hurts_services_page'); ?>" alt="<?php echo getAltImage('image_e_align_bite_services_page'); ?>">
                    </div>
                    <span><?php echo get_post_meta( get_the_ID(), 'title_f_temporomandibular_joint_hurts_services_page', $single = true ); ?></span>
					<?php $get_pages_f = getLinks('links_f_temporomandibular_joint_hurts_services_page'); ?>
					<?php foreach($get_pages_f as $pages){ ?>
						<a href="<?php echo $pages['link']; ?>"><?php echo $pages['title']; ?></a>
					<?php } ?> 
                </div>
                <div class="col-md-3">
					<div>
                        <img src="<?php echo getAttachment('image_g_plasmolifting_services_page'); ?>" alt="<?php echo getAltImage('image_g_plasmolifting_services_page'); ?>">
                    </div>
                    <span><?php echo get_post_meta( get_the_ID(), 'title_g_plasmolifting_services_page', $single = true ); ?></span>
					<?php $get_pages_g = getLinks('links_g_plasmolifting_services_page'); ?>
					<?php foreach($get_pages_g as $pages){ ?>
						<a href="<?php echo $pages['link']; ?>"><?php echo $pages['title']; ?></a>
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
					<?php $get_pages_h = getLinks('links_h_therapy_services_page'); ?>
					<?php foreach($get_pages_h as $pages){ ?>
						<a href="<?php echo $pages['link']; ?>"><?php echo $pages['title']; ?></a>
					<?php } ?> 
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3"><span><?php echo get_post_meta( get_the_ID(), 'title_i_orthopedics_services_page', $single = true ); ?></span></div>
                <div class="col-md-9 therapy">
					<?php $get_pages_i = getLinks('links_i_orthopedics_services_page'); ?>
					<?php foreach($get_pages_i as $pages){ ?>
						<a href="<?php echo $pages['link']; ?>"><?php echo $pages['title']; ?></a>
					<?php } ?> 
                </div>
            </div>
        </div>
    </section>
  
<?php get_footer(); ?>