<?php
/*
Template name: Main page
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
        <div class="container-fluid">
            <div class="row">
                <div class="owl-carousel baner">
                    <?php
                        global $nggdb;
                        $slider_id = getNextGallery(get_the_ID(), 'banners_main_page');
                        $slider_image = $nggdb->get_gallery($slider_id[0]["ngg_id"], 'sortorder', 'ASC', false, 0, 0);
                        if($slider_image){
                            foreach($slider_image as $image) {
                    ?>
                    <div>
                        <div class="container">
                            <div class="col-md-4 col-sm-5 col-xs-10 baner-carousel">
                                <?php echo htmlspecialchars_decode($image->alttext); ?>
                                <?php echo htmlspecialchars_decode($image->description); ?>
                            </div>
                        </div>
                        <img src="<?php echo nextgen_esc_url($image->imageURL); ?>">
                    </div>
                    <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="container underbanner">
            <div class="big">
                <h3><?php echo get_post_meta( get_the_ID(), 'title_statistic_block_main_page', $single = true ); ?></h3>
            </div>
            <div class="small">
                <?php echo get_post_meta( get_the_ID(), 'item_a_statistic_block_main_page', $single = true ); ?>
            </div>
            <div class="small">
                <?php echo get_post_meta( get_the_ID(), 'item_b_statistic_block_main_page', $single = true ); ?>   
            </div>
            <div class="small">
                <?php echo get_post_meta( get_the_ID(), 'item_c_statistic_block_main_page', $single = true ); ?>
            </div>
        </div>
    </section>
    <hr>
    <section>
        <div class="container servicess">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title"><?php echo get_post_meta( get_the_ID(), 'title_help_block_main_page', $single = true ); ?></h3>
                </div>
            </div>
            <div class="row help">
                <div class="col-md-3">
                    <div>
                        <?php $a_image = get_field('image_a_tooth_hurts_main_page', get_the_ID()); ?>
                        <img src="<?php echo $a_image['url']; ?>" alt="<?php echo $a_image['alt']; ?>">
                    </div>
                    <span><?php echo get_post_meta( get_the_ID(), 'title_a_tooth_hurts_main_page', $single = true ); ?></span>

					<?php $get_pages_a = get_field_object('links_a_tooth_hurts_main_page', get_the_ID()); ?>
                    <?php if($get_pages_a['value']){ ?>
					<?php foreach($get_pages_a['value'] as $pages){ ?>
						<a href="<?php echo get_permalink($pages->ID) ?>"><?php echo $pages->post_title; ?></a>
					<?php } ?>
                    <?php } ?>
                </div>
                <div class="col-md-3">
                    <div>
                        <?php $b_image = get_field('image_b_tooth_destroyed_main_page', get_the_ID()); ?>
                        <img src="<?php echo $b_image['url']; ?>" alt="<?php echo $b_image['alt']; ?>">
                    </div>
                    <span><?php echo get_post_meta( get_the_ID(), 'title_b_tooth_destroyed_main_page', $single = true ); ?></span>
                    
                    <?php $get_pages_b = get_field_object('links_b_tooth_destroyed_main_page', get_the_ID()); ?>
                    <?php if($get_pages_b['value']){ ?>
					<?php foreach($get_pages_b['value'] as $pages){ ?>
						<a href="<?php echo get_permalink($pages->ID) ?>"><?php echo $pages->post_title; ?></a>
					<?php } ?>
                    <?php } ?>
                </div>
                <div class="col-md-3">
                    <div>
                        <?php $c_image = get_field('image_c_tooth_not_hurt_main_page', get_the_ID()); ?>
                        <img src="<?php echo $c_image['url']; ?>" alt="<?php echo $c_image['alt']; ?>">
                    </div>
                    <span><?php echo get_post_meta( get_the_ID(), 'title_c_tooth_not_hurt_main_page', $single = true ); ?></span>
                    
                    <?php $get_pages_c = get_field_object('links_c_tooth_not_hurt_main_page', get_the_ID()); ?>
                    <?php if($get_pages_c['value']){ ?>
					<?php foreach($get_pages_c['value'] as $pages){ ?>
						<a href="<?php echo get_permalink($pages->ID) ?>"><?php echo $pages->post_title; ?></a>
					<?php } ?>
                    <?php } ?>
                </div>
                <div class="col-md-3">
                    <div>
                        <?php $d_image = get_field('image_d_special_care_main_page', get_the_ID()); ?>
                        <img src="<?php echo $d_image['url']; ?>" alt="<?php echo $d_image['alt']; ?>">
                    </div>
                    <span><?php echo get_post_meta( get_the_ID(), 'title_d_special_care_main_page', $single = true ); ?></span>
                    
                    <?php $get_pages_d = get_field_object('links_d_special_care_main_page', get_the_ID()); ?>
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
                        <?php $e_image = get_field('image_e_align_bite_main_page', get_the_ID()); ?>
                        <img src="<?php echo $e_image['url']; ?>" alt="<?php echo $e_image['alt']; ?>">
                    </div>
                    <span><?php echo get_post_meta( get_the_ID(), 'title_e_align_bite_main_page', $single = true ); ?></span>
                    
                    <?php $get_pages_e = get_field_object('links_e_align_bite_main_page', get_the_ID()); ?>
                    <?php if($get_pages_e['value']){ ?>
					<?php foreach($get_pages_e['value'] as $pages){ ?>
						<a href="<?php echo get_permalink($pages->ID) ?>"><?php echo $pages->post_title; ?></a>
					<?php } ?>
                    <?php } ?>
                </div>
                <div class="col-md-3">
                    <div>
                        <?php $f_image = get_field('image_f_temporomandibular_joint_hurts_main_page', get_the_ID()); ?>
                        <img src="<?php echo $f_image['url']; ?>" alt="<?php echo $f_image['alt']; ?>">
                    </div>
                    <span><?php echo get_post_meta( get_the_ID(), 'title_f_temporomandibular_joint_hurts_main_page', $single = true ); ?></span>
                    
                    <?php $get_pages_f = get_field_object('links_f_temporomandibular_joint_hurts_main_page', get_the_ID()); ?>
                    <?php if($get_pages_f['value']){ ?>
					<?php foreach($get_pages_f['value'] as $pages){ ?>
						<a href="<?php echo get_permalink($pages->ID) ?>"><?php echo $pages->post_title; ?></a>
					<?php } ?>
                    <?php } ?>
                </div>
                <div class="col-md-3">
                    <div>
                        <?php $g_image = get_field('image_g_plasmolifting_main_page', get_the_ID()); ?>
                        <img src="<?php echo $g_image['url']; ?>" alt="<?php echo $g_image['alt']; ?>">
                    </div>
                    <span><?php echo get_post_meta( get_the_ID(), 'title_g_plasmolifting_main_page', $single = true ); ?></span>
                    
                    <?php $get_pages_g = get_field_object('links_g_plasmolifting_main_page', get_the_ID()); ?>
                    <?php if($get_pages_g['value']){ ?>
					<?php foreach($get_pages_g['value'] as $pages){ ?>
						<a href="<?php echo get_permalink($pages->ID) ?>"><?php echo $pages->post_title; ?></a>
                    <?php } ?>
					<?php } ?>
                </div>
                <div class="col-md-3">
                    <div>
                        <?php $h_image = get_field('image_h_additional_main_page', get_the_ID()); ?>
                        <img src="<?php echo $h_image['url']; ?>" alt="<?php echo $h_image['alt']; ?>">
                    </div>
                    <span><?php echo get_post_meta( get_the_ID(), 'title_h_additional_main_page', $single = true ); ?></span>
                    
                    <?php $get_pages_h = get_field_object('links_h_additional_main_page', get_the_ID()); ?>
                    <?php if($get_pages_h['value']){ ?>
					<?php foreach($get_pages_h['value'] as $pages){ ?>
						<a href="<?php echo get_permalink($pages->ID) ?>"><?php echo $pages->post_title; ?></a>
                    <?php } ?>
					<?php } ?>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section>
        <div class="container">
            <div class="row proud">
                <div class="col-md-6 col-sm-6">
                    <div class="proud-photo">
                        <?php $image_clinic = get_field('image_clinic_block_main_page', get_the_ID()); ?>
                        <img src="<?php echo $image_clinic['url']; ?>" alt="<?php echo $image_clinic['alt']; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="proud-text">
                        <?php echo get_post_meta( get_the_ID(), 'short_descr_clinic_block_main_page', $single = true ); ?>
                        <?php echo wpautop(get_post_meta( get_the_ID(), 'full_descr_clinic_block_main_page', $single = true )); ?>
                        <?php echo get_post_meta( get_the_ID(), 'link_clinic_block_main_page', $single = true ); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php
        $args = array(
            'status' => 'approve',
            'number' => 4,
            'post_id' => 69,
        );
    
        $comments = get_comments( $args );
    
        if($comments){
    ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="reviews-slider">
                        <h2 class="title"><?php echo get_post_meta( get_the_ID(), 'title_reviews_block_main_page', $single = true ); ?></h2>
                        <div class="reviews">
                            <?php
                                foreach ($comments as $comment) {
                                    $author = $comment->comment_author;
                                    $descr = mb_substr( strip_tags( $comment->comment_content ), 0, 152 );
                            ?>
                            <div>
                                <p><?php echo $descr; ?></p>
                                <span><?php echo $author; ?></span><span><?php comment_date( 'd.m.y', $comment->comment_ID ); ?></span>
                            </div>
                            <?php wp_reset_postdata(); ?>
                            <?php } ?>
                        </div>
                        <div class="review-me">
                            <a href="<?php echo get_permalink( 69 ); ?>" class="greenbutton samebutton"><?php echo get_post_meta( get_the_ID(), 'all_text_reviews_block_main_page', $single = true ); ?></a>
                            <a href="<?php echo get_permalink( 69 ); ?>#reviews-form" class="greenbutton samebutton"><?php echo get_post_meta( get_the_ID(), 'write_text_reviews_block_main_page', $single = true ); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
    
    <section>
        <div class="container seo-text">
            <div class="row">
                <div class="col-md-12">
                    <?php echo wpautop(get_post_meta( get_the_ID(), 'text_seo_block_main_page', $single = true )); ?>
                </div>
            </div>
        </div>
    </section>
  
<?php get_footer(); ?>