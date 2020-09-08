<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?>
    
<div class="slider-main-block owl-carousel owl-theme">
    <?php foreach ( $images as $image ){ ?>
    <div class="item"><img src="<?php echo nextgen_esc_url($image->imageURL); ?>"></div>
    <?php } ?>
</div>
