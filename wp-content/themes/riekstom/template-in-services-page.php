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
                    <span>Если зуб болит</span>
                    <ul>
                        <li><p><a href="#">Пункт выехал</a></p></li>
                        <li><p><a href="#">Пункт выехал</a></p></li>
                    </ul>
                    <span>Если зуб разрушен</span>
                    <ul>
                        <li><p><a href="#">Пункт выехал</a></p></li>
                        <li><p><a href="#">Пункт выехал</a></p></li>
                    </ul>
                    <span>Чтобы зуб не болел</span>
                    <ul>
                        <li><p><a href="#">Пункт выехал</a></p></li>
                        <li><p><a href="#">Пункт выехал</a></p></li>
                    </ul>
                    <span>Особый уход</span>
                    <ul>
                        <li><p><a href="#">Пункт выехал</a></p></li>
                        <li><p><a href="#">Пункт выехал</a></p></li>
                    </ul>
                    <span>Сделать зубы ровными, выровнять прикус</span>
                    <ul>
                        <li><p><a href="#">Пункт выехал</a></p></li>
                        <li><p><a href="#">Пункт выехал</a></p></li>
                    </ul>
                    <span>Если болит височно-нижечелюстной сустав</span>
                    <ul>
                        <li><p><a href="#">Пункт выехал</a></p></li>
                        <li><p><a href="#">Пункт выехал</a></p></li>
                    </ul>
                    <span>Плазмолифтинг</span>
                    <ul>
                        <li><p><p><a href="#">Пункт выехал</a></p></p></li>
                        <li><p><a href="#">Пункт выехал</a></p></li>
                    </ul>
                    <span>Терапия</span>
                    <ul>
                        <li><p><a href="#">Лечение кариеса методом прямой реставрации</a></p></li>
                        <li><p><a href="#">Лечение осложнений кариеса – пульпиты, периодонтиты, путем эндодонтического лечения</a></p></li>
                        <li><p><a href="#">Профессиональная гигиена полости рта</a></p></li>
                        <li><p><a href="#">Профилактика кариеса с использованием фторсодержащих препаратов</a></p></li>
                        <li><p><a href="#">Лечение и профилактика заболеваний зубов у беременных</a></p></li>
                    </ul>
                    <span>Ортопедия</span>
                    <ul>
                        <li><p><a href="#">Пункт выехал</a></p></li>
                        <li><p><a href="#">Пункт выехал</a></p></li>
                    </ul>
                </aside>
                <article class="col-md-8 in-services">
                    <h1 class="title"><?php the_title(); ?></h1>
                    
                    <?php if (have_posts()): while (have_posts()): the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; endif; ?>
            
                    <a href="" class="greenbutton samebutton">Посмотреть примеры работ</a>
                    <a href="<?php echo get_permalink( 69 ); ?>" class="greenbutton samebutton"><?php echo getMeta('all_text_reviews_block_main_page'); ?></a>
                </article>
            </div>
        </div>
    </section>
  
<?php get_footer(); ?>