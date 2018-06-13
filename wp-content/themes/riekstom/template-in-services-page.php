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
                    <span><?php echo getMeta('title_a_tooth_hurts_services_page'); ?></span>
                    <ul>
					<?php $get_pages_a = getLinks('links_a_tooth_hurts_services_page'); ?>
					<?php foreach($get_pages_a as $pages){ ?>
						 <li><p><a href="<?php echo $pages['link']; ?>"><?php echo $pages['title']; ?></a></p></li>
					<?php } ?> 
                    </ul>
                    <span><?php echo getMeta('title_b_tooth_destroyed_services_page'); ?></span>
                    <ul>
                    <?php $get_pages_b = getLinks('links_b_tooth_destroyed_services_page'); ?>
					<?php foreach($get_pages_b as $pages){ ?>
						<li><p><a href="<?php echo $pages['link']; ?>"><?php echo $pages['title']; ?></a></p></li>
					<?php } ?> 
                    </ul>
                    <span><?php echo getMeta('title_c_tooth_not_hurt_services_page'); ?></span>
                    <ul>
					<?php $get_pages_с = getLinks('links_c_tooth_not_hurt_services_page'); ?>
					<?php foreach($get_pages_с as $pages){ ?>
						<li><p><a href="<?php echo $pages['link']; ?>"><?php echo $pages['title']; ?></a></p></li>
					<?php } ?> 
                    </ul>
                    <span><?php echo getMeta('title_d_special_care_services_page'); ?></span>
                    <ul>
					<?php $get_pages_d = getLinks('links_d_special_care_services_page'); ?>
					<?php foreach($get_pages_d as $pages){ ?>
						<li><p><a href="<?php echo $pages['link']; ?>"><?php echo $pages['title']; ?></a></p></li>
					<?php } ?> 
                    </ul>
                    <span><?php echo getMeta('title_e_align_bite_services_page'); ?></span>
                    <ul>
					<?php $get_pages_e = getLinks('links_e_align_bite_services_page'); ?>
					<?php foreach($get_pages_e as $pages){ ?>
						<li><p><a href="<?php echo $pages['link']; ?>"><?php echo $pages['title']; ?></a></p></li>
					<?php } ?> 
                    </ul>
                    <span><?php echo getMeta('title_f_temporomandibular_joint_hurts_services_page'); ?></span>
                    <ul>
					<?php $get_pages_f = getLinks('links_f_temporomandibular_joint_hurts_services_page'); ?>
					<?php foreach($get_pages_f as $pages){ ?>
						<li><p><a href="<?php echo $pages['link']; ?>"><?php echo $pages['title']; ?></a></p></li>
					<?php } ?> 
                    </ul>
                    <span><?php echo getMeta('title_g_plasmolifting_services_page'); ?></span>
                    <ul>
					<?php $get_pages_g = getLinks('links_g_plasmolifting_services_page'); ?>
					<?php foreach($get_pages_g as $pages){ ?>
						<li><p><a href="<?php echo $pages['link']; ?>"><?php echo $pages['title']; ?></a></p></li>
					<?php } ?> 
                    </ul>
                    <span><?php echo getMeta('title_h_therapy_services_page'); ?></span>
                    <ul>
					<?php $get_pages_h = getLinks('links_h_therapy_services_page'); ?>
					<?php foreach($get_pages_h as $pages){ ?>
						<li><p><a href="<?php echo $pages['link']; ?>"><?php echo $pages['title']; ?></a></p></li>
					<?php } ?> 
                    </ul>
                    <span><?php echo getMeta('title_i_orthopedics_services_page'); ?></span>
                    <ul>
					<?php $get_pages_i = getLinks('links_i_orthopedics_services_page'); ?>
					<?php foreach($get_pages_i as $pages){ ?>
						<li><p><a href="<?php echo $pages['link']; ?>"><?php echo $pages['title']; ?></a></p></li>
					<?php } ?> 
                    </ul>
                </aside>
                <article class="col-md-8 in-services">
                    <h1 class="title"><?php the_title(); ?></h1>
                    
                    <?php if (have_posts()): while (have_posts()): the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; endif; ?>
            
                    <a href="<?php echo get_permalink( 284 ); ?>" class="greenbutton samebutton"><?php echo getMeta('view_examples_in_services_page'); ?></a>
                    <a href="<?php echo get_permalink( 69 ); ?>" class="greenbutton samebutton"><?php echo getMeta('all_text_reviews_block_main_page'); ?></a>
                </article>
            </div>
        </div>
    </section>
  
<?php get_footer(); ?>