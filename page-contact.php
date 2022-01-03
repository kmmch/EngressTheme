<?php 
// お問合せページのテンプレート
get_header(); 
?> 

<!--ここからメインコンテンツ-->
<main class="main">
    <div class="container_contact">
        <section id="contactForm">
            <div class="contactform__context__wrapper">
                <p class="contactform__context">弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。</p>
            </div>
            <div class="contactform__wrapper">
                <?php
                $page_data = get_page_by_path('contact');
                $page = get_post($page_data);
                $content = $page -> post_content;
                echo apply_filters( 'the_content', $page->post_content );
                ?>
            </div>
        </section>
    </div>
</main>

<?php get_footer(); ?>