<?php
/**
 * Template Name: 記事一覧用
 */
?>
<?php 
// お知らせ一覧ページのテンプレート
get_header(); 
?> 

<?php
$paged = (int) get_query_var('paged');
?>

<!--ここからメインコンテンツ-->
<main class="main">
    <div class="container">
        <section id="blogList">
            <h2 class="section__ttl">新着一覧</h2>
            <div class="section__contents">
                <ul class="blog__list">
                    <?php
                    $args = array(
                        'posts_per_page' => 10,
                        'paged' => $paged,
                        'orderby' => 'post_date',
                        'order' => 'DESC',
                        'post_type' => 'post',
                        'post_status' => 'publish'
                    );
                    $query = new WP_Query($args);
                    if ($query->have_posts()) : 
                        while ($query->have_posts()) : $query->the_post();
                    ?>
                        <li class="blog__item">
                            <div class="blog__item_thumbnail">
                                <figure>
                                    <img src="<?php 
                                        if(get_the_post_thumbnail_url()){
                                            the_post_thumbnail_url();
                                        }else{
                                            echo get_template_directory_uri()."/images/noimage.png";
                                        } 
                                        ?>" alt="<?php the_title(); ?>">
                                </figure>
                                <span class="blog__item_category"><?php echo get_the_category()[0]->name; ?></span>
                            </div>
                            <div class="blog__item_txt">
                                <time class="blog__item_time"><?php the_time('Y-m-d'); ?></time>
                                <h3 class="blog__item_ttl">
                                    <a href="<?php echo the_permalink(); ?>"><?php
                                                                                $title = get_the_title(); 
                                                                                $title = wp_strip_all_tags( $title );
                                                                                $title = strip_shortcodes( $title );
                                                                                $title = get_content_defined_count(30,$title);
                                                                                echo $title;
                                                                            ?>
                                    </a>
                                </h3>
                                <p class="blog__item_description">
                                    <?php
                                    $content = get_the_content();
                                    $content = wp_strip_all_tags( $content );
                                    $content = strip_shortcodes( $content );
                                    $content = get_content_defined_count(90,$content);
                                    echo $content;
                                    ?>
                                </p>
                            </div>
                        </li>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </ul>
                <div class="page_nation__container">
                    <ul class="page_nation">
                        <?php
                        if ($query->max_num_pages > 1) {
	                        echo paginate_links(array(
		                        'base' => get_pagenum_link(1) . '%_%',
		                        'format' => 'page/%#%/',
		                        'current' => max(1, $paged),
		                        'total' => $query->max_num_pages,
                                'prev_text' => '<<',
                                'next_text' => '>>'
	                        ));
                        }
                        ?>
                    </ul>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>  
        </section>
    </div>
</main>

<?php get_footer(); ?>