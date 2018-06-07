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
                        $slider_id = getNextGallery('7', 'banners_main_page');
                        $slider_image = $nggdb->get_gallery($slider_id[0]["ngg_id"], 'sortorder', 'ASC', false, 0, 0);
                        if($slider_image){
                            foreach($slider_image as $image) {
                    ?>
                    <div>
                        <div class="container">
                            <div class="col-md-4 baner-carousel">
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
                        <img src="<?php echo getAttachment('image_a_help_block_main_page'); ?>" alt="<?php echo getAltImage('image_a_help_block_main_page'); ?>">
                    </div>
                    <?php echo get_post_meta( get_the_ID(), 'text_a_help_block_main_page', $single = true ); ?>
                </div>
                <div class="col-md-3">
                    <div>
                        <img src="<?php echo getAttachment('image_b_help_block_main_page'); ?>" alt="<?php echo getAltImage('image_b_help_block_main_page'); ?>">
                    </div>
                    <?php echo get_post_meta( get_the_ID(), 'text_b_help_block_main_page', $single = true ); ?>
                </div>
                <div class="col-md-3">
                    <div>
                        <img src="<?php echo getAttachment('image_c_help_block_main_page'); ?>" alt="<?php echo getAltImage('image_c_help_block_main_page'); ?>">
                    </div>
                    <?php echo get_post_meta( get_the_ID(), 'text_c_help_block_main_page', $single = true ); ?>
                </div>
                <div class="col-md-3">
                    <div>
                        <img src="<?php echo getAttachment('image_d_help_block_main_page'); ?>" alt="<?php echo getAltImage('image_d_help_block_main_page'); ?>">
                    </div>
                    <?php echo get_post_meta( get_the_ID(), 'text_d_help_block_main_page', $single = true ); ?>
                </div>
            </div>
            <div class="row help">
                <div class="col-md-3">
                    <div>
                        <img src="<?php echo getAttachment('image_e_help_block_main_page'); ?>" alt="<?php echo getAltImage('image_e_help_block_main_page'); ?>">
                    </div>
                    <?php echo get_post_meta( get_the_ID(), 'text_e_help_block_main_page', $single = true ); ?>
                </div>
                <div class="col-md-3">
                    <div>
                        <img src="<?php echo getAttachment('image_f_help_block_main_page'); ?>" alt="<?php echo getAltImage('image_f_help_block_main_page'); ?>">
                    </div>
                    <?php echo get_post_meta( get_the_ID(), 'text_f_help_block_main_page', $single = true ); ?>
                </div>
                <div class="col-md-3">
                    <div>
                        <img src="<?php echo getAttachment('image_g_help_block_main_page'); ?>" alt="<?php echo getAltImage('image_g_help_block_main_page'); ?>">
                    </div>
                    <?php echo get_post_meta( get_the_ID(), 'text_g_help_block_main_page', $single = true ); ?>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section>
        <div class="container">
            <div class="row proud">
                <div class="col-md-6">
                    <div class="proud-photo">
                        <img src="<?php echo getAttachment('image_clinic_block_main_page'); ?>" alt="<?php echo getAltImage('image_clinic_block_main_page'); ?>">
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