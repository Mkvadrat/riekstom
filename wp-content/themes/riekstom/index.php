<?php
/*
Theme Name: Riekstom
Theme URI: http://riekstom.com/
Author: Thebarber
Author URI: http://mkvadrat.com/
Description: Тема для сайта http://riekstom.com/
Version: 1.0
*/

get_header(); ?>

	<?php if (have_posts()): while (have_posts()): the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>
