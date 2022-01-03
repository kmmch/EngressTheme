<div class="sidebar__area">
    <aside class="sidebar">
        <h2 class="sidebar__ttl">関連記事</h2>
        <div class="sidebar__contents">
            <ul class="related_post__list">
                <?php
                $args = array(
                    'posts_per_page' => 3,
                    'category_name' => get_the_category()[0]->slug,
                    'post__not_in' => array(get_the_ID()),
                );
                $posts = new WP_Query($args);

                if ($posts->have_posts()):
                    while ($posts->have_posts()):$posts->the_post();
                ?>
                    <li class="related_post__item">
                        <div class="related_post__thumbnail">
                            <figure>
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                            </figure>
                        </div>
                        <div class="related_post__ttl">
                            <a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
                        </div>
                    </li>
                <?php
                    endwhile;
                else:
                ?>
                    <p style="margin-bottom:20px;">関連する記事はありません。</p>
                <?php
                endif;
                wp_reset_postdata();
                ?>
            </ul>
        </div>
    </aside>
    <aside class="sidebar">
        <h2 class="sidebar__ttl">カテゴリー</h2>
        <div class="sidebar__contents">
            <ul class="category__list">
                <?php
                $categories = get_categories();
                foreach( $categories as $category ):
                ?>
                <li class="category__item">
                    <a href="<?php echo get_category_link($category->term_id) ?>" class="category__ttl">・<?php echo $category->name; ?></a>
                </li>
                <?php
                endforeach;
                ?>
            </ul>
        </div>
    </aside>
</div>
