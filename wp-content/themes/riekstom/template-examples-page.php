<?php
/*
Template name: Examples page
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
        <div class="container examples-page">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title"><?php the_title(); ?></h1>
                    <div class="row examples">
					<?php
                        global $nggdb;
                        $slider_id = getNextGallery(get_the_ID(), 'gallery_examples_page');
                        $slider_image = $nggdb->get_gallery($slider_id[0]["ngg_id"], 'sortorder', 'ASC', false, 0, 0);
                        if($slider_image){
                            foreach($slider_image as $image) {
                    ?>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <a data-fancybox="gallery" data-caption="<?php echo htmlspecialchars_decode($image->alttext); ?>" href="<?php echo nextgen_esc_url($image->imageURL); ?>" data-fancybox style="background-image: url('<?php echo nextgen_esc_url($image->imageURL); ?>')"></a>
                            <p><a data-fancybox="gallery-2" data-caption="<?php echo htmlspecialchars_decode($image->alttext); ?>" href="<?php echo nextgen_esc_url($image->imageURL); ?>"><?php echo htmlspecialchars_decode($image->alttext); ?></a></p>
                        </div>
                    <?php
                            }
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
  
<?php get_footer(); ?>