<?php 
// ブログ詳細ページのテンプレート
get_header();
?>

<!--ここからメインコンテンツ-->
<main class="main">
    <div class="container">
        <section id="blogDetail">
            <article class="blog">
                <?php
                if( have_posts() ):
                    while( have_posts() ):the_post();
                ?>
                    <div class="blog__head">
                        <?php
                        $category = get_the_category();
                        if($category[0]):
                        ?>
                            <p class="blog__head_category"><?php echo $category[0]->name; ?></p>
                        <?php
                        endif;
                        ?>
                        <h1 class="blog__head_ttl"><?php the_title(); ?></h1>
                        <div class="blog__head_info">
                            <?php wp_social_bookmarking_light_output_e(null, get_permalink(), the_title("", "", false)); ?>
                            <time class="blog__head_time"><?php the_time('Y-m-d'); ?></time>
                        </div>
                    </div>
                    <div class="blog__eyecatch">
                        <figure>
                            <img src="<?php 
                                if(get_the_post_thumbnail_url()){
                                    the_post_thumbnail_url();
                                }else{
                                    echo get_template_directory_uri()."/images/noimage.png";
                                } 
                            ?>" alt="<?php the_title(); ?>">
                        </figure>
                    </div>
                    <div class="blog__body">
                        <?php the_content(); ?>
                    </div>
                <?php
                    endwhile;
                endif;
                ?>
                <div class="blog__recommend_post">
                    <h2 class="blog__recommend_post_ttl">おすすめの記事</h2>
                    <ul class="blog__recommend_post_list">
                    <?php
                        $args = array(
                            'posts_per_page' => 3,
                            'tag' => 'pickup',
                        );
                        $posts = new WP_Query($args);

                        if ($posts->have_posts()):
                            while ($posts->have_posts()):$posts->the_post();
                        ?>
                        <li class="recommend_post">
                            <div class="recommend_post__thumbnail">
                                <figure>
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                                </figure>
                                <span class="recommend_post__category"><?php echo get_the_category()[0]->name; ?></span>
                            </div>
                            <div class="recommend_post__txt">
                                <time class="recommend_post__dt"><?php the_time('Y-m-d'); ?></time>
                                <a href="<?php echo the_permalink(); ?>" class="recommend_post__link"><?php the_title(); ?></a>
                            </div>
                        </li>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </ul>
                </div>
            </article>

            <?php get_sidebar('blog'); ?>
            
        </section>
    </div>
</main>

<?php get_footer(); ?>