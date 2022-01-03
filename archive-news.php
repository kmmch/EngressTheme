<?php 
// お知らせ一覧ページのテンプレート
get_header(); 
?> 

<!--ここからメインコンテンツ-->
<main class="main">
    <div class="container">
        <section id="newsList">
            <h2 class="section__ttl">お知らせ一覧</h2>
            <div class="section__contents">
                <ul class="news__list">
                    <?php
                    // お知らせ一覧
                    $news_args = get_posts(array(
                        'posts_per_page' => -1,
                        'post_type' => 'news',
                        'orderby' => 'date',
                        'order' => 'DESC'
                    ));
                    foreach ($news_args as $post) : setup_postdata($post);
                    ?>
                        <li class="news__item">
                            <time class="news__item_date"><?php the_time('Y-m-d') ?></time>
                            <a href="<?php echo get_permalink($post->ID); ?>" class="news__item_link"><?php echo get_the_title($post->ID); ?></a>
                        </li>
                    <?php
                    endforeach;
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
                </div>
            </div>  
        </section>
    </div>
</main>

<?php get_footer(); ?>