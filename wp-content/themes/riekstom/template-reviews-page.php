<?php
/*
Template name: Reviews page
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
        <div class="container reviews-page">
            <div class="row">
                <div class="col-md-9">
                    <h1 class="title"><?php echo get_post_meta( get_the_ID(), 'title_reviews_page', $single = true ); ?></h1>
                    <?php 
                    
                        define( 'DEFAULT_COMMENTS_PER_PAGE', $GLOBALS['wp_query']->query_vars['comments_per_page']);
                    
                        $page = (get_query_var('page')) ? get_query_var('page') : 1;
                    
                        $limit = DEFAULT_COMMENTS_PER_PAGE;
                    
                        $offset = ($page * $limit) - $limit;
                    
                        $param = array(
                            'status'	=> 'approve',
                            'offset'	=> $offset,
                            'number'	=> $limit
                        );
                    
                        $total_comments = get_comments(array(
                            'orderby' => 'comment_date',
                            'order'   => 'ASC',
                            'status'  => 'approve',
                            'parent'  => 0
                    
                        ));
                    
                        $pages = ceil(count($total_comments)/DEFAULT_COMMENTS_PER_PAGE);
                    
                        $comments = get_comments( $param );
                    
                        $args = array(
                            'base'         => @add_query_arg('page','%#%'),
                            'format'       => '?page=%#%',
                            'total'        => $pages,
                            'current'      => $page,
                            'show_all'     => false,
                            'mid_size'     => 4,
                            'prev_next'    => false,
                            'prev_text'    => __('&laquo; В начало'),
                            'next_text'    => __('В конец &raquo;'),
                            //'type'         => 'comment'
                            'type' => 'array'
                        );
                        
                        if($comments){
                        foreach($comments as $comment){
                            $author = $comment->comment_author;
                            $descr = strip_tags( $comment->comment_content );
                            global $cnum;
                    
                            // определяем первый номер, если включено разделение на страницы
                    
                            $per_page = $limit;
                    
                            if( $per_page && !isset($cnum) ){
                                $com_page = $page;
                                if($com_page>1)
                                    $cnum = ($com_page-1)*(int)$per_page;
                            }
                            // считаем
                            $cnum = isset($cnum) ? $cnum+1 : 1;
                    ?>
                    <div class="reviews">
                        <div>
                            <p><?php echo $descr; ?></p>
                            <span><?php echo $author; ?></span><span><?php comment_date( 'd.m.y', $comment->comment_ID ); ?></span>
                        </div>
                    </div>
                    <?php } ?>
                    <?php } ?>
                    
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
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="paggination">
                        <?php $pagination = paginate_links($args);
                            
                        if($pagination){
                        ?>
                        <ul class="list-pages">
                            <?php foreach ($pagination as $pag){ ?>
                                <li><?php echo $pag; ?></li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="reviews-form">
        <div class="container">
            <div class="row">
                <div class="col-md-12 reviews-form">
                    <div>
                        <form id="commentform">
                            <h2 class="title"><?php echo get_post_meta( get_the_ID(), 'title_form_block_reviews_page', $single = true ); ?></h2>
                            <div class="text-inputs">
                                <label for="name"><?php echo get_post_meta( get_the_ID(), 'item_a_title_input_main_page', $single = true ); ?></label>
                                <input type="text" name="author" id="author" placeholder="<?php echo get_post_meta( get_the_ID(), 'item_a_title_placeholder_main_page', $single = true ); ?>">
                                <label for="telephone"><?php echo get_post_meta( get_the_ID(), 'item_b_title_input_main_page', $single = true ); ?></label>
                                <input type="text" name="phone" id="phone" class="phone" placeholder="<?php echo get_post_meta( get_the_ID(), 'item_b_title_placeholder_main_page', $single = true ); ?>">
                                <label for="mail"><?php echo get_post_meta( get_the_ID(), 'item_c_title_input_main_page', $single = true ); ?></label>
                                <input type="text" name="email" id="email" placeholder="<?php echo get_post_meta( get_the_ID(), 'item_c_title_placeholder_main_page', $single = true ); ?>">
                            </div>
                            <div class="text-field">
                                <label for="comment"><?php echo get_post_meta( get_the_ID(), 'item_d_title_input_main_page', $single = true ); ?></label>
                                <textarea name="comment" id="comment" rows="7" placeholder="<?php echo get_post_meta( get_the_ID(), 'item_d_title_placeholder_main_page', $single = true ); ?>"></textarea>
                            </div>
                            <?php echo comment_id_fields(); ?>
                            <div id="respond"></div>
                        </form>
                        
                        <div class="accept">
                            <input type="checkbox" name="" id="confirm">
                            <label for="confirm"><span class="check-arrow"></span><?php echo get_post_meta( get_the_ID(), 'confirm_reviews_page', $single = true ); ?></label>
                            <button type="submit" onclick="submit();" class="greenbutton" disabled><?php echo get_post_meta( get_the_ID(), 'item_e_title_input_main_page', $single = true ); ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script language="javascript">
        function submit(){
            $(".reviews-form").submit();
        }
    </script>
  
<?php get_footer(); ?>