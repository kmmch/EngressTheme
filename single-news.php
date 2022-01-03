<?php get_header(); ?>  

<!--ここからメインコンテンツ-->
<main class="main">
    <div class="container">
        <section id="newsDetail">
            <article class="news">
            <?php if ( have_posts() ) : ?>
                <?php while( have_posts() ) : the_post(); ?>
                    <div class="news__head">
                        <h1 class="news__head_ttl"><?php the_title(); ?></h1>
                        <time class="news__head_time"><?php the_date(); ?></time>
                    </div>
                    <div class="news__body">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile;?>
            <?php endif; ?>
            </article>
        </section>
    </div>
</main>

<?php get_footer(); ?>