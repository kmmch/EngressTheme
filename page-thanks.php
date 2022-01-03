<?php 
// お問合せ完了ページのテンプレート
get_header(); 
?> 

<!--ここからメインコンテンツ-->
<main class="main">
    <div class="container_contact">
        <section id="contactForm">
            <?php
            $page_data = get_page_by_path('contact');
            $page = get_post($page_data);
            $content = $page -> post_content;
            echo apply_filters( 'the_content', $page->post_content );
            ?>
        </section>
    </div>
</main>

<?php get_footer(); ?>