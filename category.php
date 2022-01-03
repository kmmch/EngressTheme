<?php 
// お知らせ一覧ページのテンプレート
get_header(); 
?> 

<!--ここからメインコンテンツ-->
<main class="main">
    <div class="container">
        <section id="blogList">
            <h2 class="section__ttl"><?php single_cat_title(); ?>一覧</h2>
            <div class="section__contents">
                <ul class="blog__list">
                    <?php
                    $blog_args = new WP_Query(array(
                        'orderby' => 'date',
                        'order' => 'DESC'
                    ));
                    if (have_posts()) : 
                        while (have_posts()) : the_post();
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
                                    <a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
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
                    <?php
                    // ページャー
                    if(function_exists('page_navi')){
                        $arg = array(
                            'elm_class' => 'page_nation',
                            'li_class' => 'page_nation__item',
                        );
                        page_navi($arg);
                    }
                    ?>
                    <!-- <ul class="page_nation">
                        <li class="page_nation__item current">
                            <a href="#" class="page_nation__item_num">1</a>
                        </li>
                        <li class="page_nation__item">
                            <a href="#" class="page_nation__item_num">2</a>
                        </li>
                        <li class="page_nation__item">
                            <a href="#" class="page_nation__item_num">3</a>
                        </li>
                        <li class="page_nation__item dot">
                            <span class="page_nation__item_dot">…</span>
                        </li>
                        <li class="page_nation__item">
                            <a href="#" class="page_nation__item_num">5</a>
                        </li>
                    </ul> -->
                </div>
            </div>  
        </section>
    </div>
</main>


<?php get_footer(); ?>