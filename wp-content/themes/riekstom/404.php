<?php
/*
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
        <div class="container">
            <div class="row">
                <div class="col-md-12 page-404">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/404.png" alt="">
                    <h1 class="title">Ошибка 404</h1>
                    <p>Запрашиваемая страница не найдена</p>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Вернуться на главную</a>
                </div>
            </div>
        </div>
    </section>
    
<?php get_footer(); ?>