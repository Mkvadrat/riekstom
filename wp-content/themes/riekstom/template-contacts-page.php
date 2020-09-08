<?php
/*
Template name: Contacts page
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
        <div class="container contacts">
            <div class="row">
                <div class="col-md-9">
                    <h1 class="title"><?php echo get_post_meta( get_the_ID(), 'title_contacts_page', $single = true ); ?></h1>
                    <div class="contacts-info">
                        <?php echo wpautop(get_post_meta( get_the_ID(), 'text_contacts_block_contacts_page', $single = true )); ?>
                    </div>
					<?php echo wpautop(get_post_meta( get_the_ID(), 'text_seo_block_contacts_page', $single = true )); ?>
					<?php
						$forms_a = get_field('form_block_contacts_page');
						
						if($forms_a){
						   echo do_shortcode('[contact-form-7 id=" ' . $forms_a . ' "]'); 
						}    
					?>   
					
                    <h2 class="sub-title"><?php echo get_post_meta( get_the_ID(), 'title_maps_block_contacts_page', $single = true ); ?></h2>  
                    <div class="map">
                        <div>
							<div id="maps" style="width:100%; height:100%"></div>
							<script type="text/javascript">
								var myMap;
								ymaps.ready(init);
								
								function init(){
									var myCoords = [<?php echo get_post_meta( get_the_ID(), 'title_coordinates_block_contacts_page', $single = true ); ?>];  
									var myGeocoder = ymaps.geocode(myCoords);
									myGeocoder.then(
									function (res){
										var firstGeoObject = res.geoObjects.get(0),
										myMap = new ymaps.Map
										("maps",{
											center: firstGeoObject.geometry.getCoordinates(),
											zoom: 17
										});
											var myPlacemark = new ymaps.Placemark(
											firstGeoObject.geometry.getCoordinates(),
										{
											iconContent: ''
										},
										{
											preset: 'twirl#blueStretchyIcon'
										});
											myMap.behaviors.disable('scrollZoom'); 
											myMap.geoObjects.add(myPlacemark);
											myMap.controls.add(new ymaps.control.ZoomControl()).add(new ymaps.control.ScaleLine()).add('typeSelector');
									},
									function (err){
										alert(err.message);
									});
								}
							</script>
                        </div>
                    </div>                  
                </div>
                <aside class="col-md-3 right-side-links">
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
  
<?php get_footer(); ?>