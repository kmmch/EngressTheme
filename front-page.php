<?php 
// トップページのテンプレート
get_header();
?>

<!--ここからメインコンテンツ-->
<main class="main">
    
    <!--ここからファーストビュー -->
    <section class="fv">
        <div class="fv__inner">
            <div class="fv__ttl">
                <h2>TOEFL対策はEngress</h2>
            </div>
            <div class="fv__description">
                <p>日本人へのTOEFL指導歴豊かな講師陣のコーチング型TOEFLスクール</p>
            </div>
            <div class="fv__btn">
                <a href="/contact" class="btn_round material">資料請求</a>
            </div>
            <div class="fv__link">
                <a href="/contact">お問合せ</a>
            </div>
        </div>
    </section>
    <!--//ここまでファーストビュー -->
    
    <!--ここからアバウト -->
    <section class="about">
        <div class="about__inner">
            <div class="about__ttl">
                <h2>TOEFL学習でこんな<br class="mobile">悩みありませんか？</h2>
            </div>
            <div class="about__question_wrapper">
                <div class="about__question">
                    <p>勉強の習慣が<br>身についていない</p>
                </div>
                <div class="about__question">
                    <p>勉強しているはずなのに<br>点数が伸びない</p>
                </div>
                <div class="about__question">
                    <p>正しい勉強方法が<br>わからない</p>
                </div>
            </div>
            <div class="about__catchcopy">
                <div class="about__catchcopy__wrapper">
                    <div class="about__catchcopy__inner">
                        <div class="about__catchcopy__ttl">
                            <h2>Engressは<br><span>TOEFLに特化したスクール</span>です</h2>
                        </div>
                        <div class="about__catchcopy__description">
                            <p>完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br>TOEFLの苦手分野を克服します。</p>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ここまでアバウト -->

    <!-- ここから特徴 -->
    <section class="features">
        <div class="container">
            <div class="features__ttl">
                <h2>TOEFL対策に特化したEngress3つの強み</h2>
            </div>
            <div class="features__list__wrapper">
                <div class="feature">
                    <div class="feature__left">
                        <div class="feature__index">
                            <span>特長 １</span>
                        </div>
                        <div class="feature__ttl">
                            <h3>TOEFLに最適化された<br>無駄のないカリキュラム</h3>
                        </div>
                        <div class="feature__description">
                            <p>TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</p>
                        </div>    
                    </div>
                    <div class="feature__right">
                        <div class="feature__thumbnail">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/feature01.png" alt="特長1">
                            </figure>
                        </div>    
                    </div>
                </div>
                <div class="feature">
                    <div class="feature__left">
                        <div class="feature__index">
                            <span>特長 ２</span>
                        </div>
                        <div class="feature__ttl">
                            <h3>日本人指導歴10年以上の<br>経験豊富な講師陣</h3>
                        </div>
                        <div class="feature__description">
                            <p>Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。</p>
                        </div>    
                    </div>
                    <div class="feature__right">
                        <div class="feature__thumbnail">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/feature02.png" alt="特長2">
                            </figure>
                        </div>                            
                    </div>
                </div>
                <div class="feature">
                    <div class="feature__left">
                        <div class="feature__index">
                            <span>特長 ３</span>
                        </div>
                        <div class="feature__ttl">
                            <h3>平均3ヶ月でTOEFL iBT20点アップ</h3>
                        </div>
                        <div class="feature__description">
                            <p>Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。</p>
                        </div>    
                    </div>
                    <div class="feature__right">
                        <div class="feature__thumbnail">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/feature03.png" alt="特長3">
                            </figure>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <div class="price_link__box">
            <div class="price_link__box__container">
                <div class="price_link__box__ttl">
                    <h3>Engressの料金プランはこちら</h3>
                </div>
                <div class="price_link__box__btn">
                    <a href="/price">料金を見てみる</a>
                </div>    
            </div>
        </div>
    </section>
    <!-- ここまで特徴 -->

    <!-- ここから事例 -->
    <section class="cases">
        <div class="container">
            <div class="cases__ttl">
                <h2>TOEFL成功事例</h2>
            </div>
            <div class="case__wrapper">
            <?php
            // トップページ事例
            $CASE_DISP_NUM = 3;
            for($i = 0; $i < $CASE_DISP_NUM; $i++){
                $comment = 'case'.($i+1).'_comment';
                $image = 'case'.($i+1).'_image';
                $name = 'case'.($i+1).'_name';
                $job = 'case'.($i+1).'_job';
                $point = 'case'.($i+1).'_point';
            ?>
                <div class="case">
                    <div class="case__description">
                        <p><?php the_field($comment); ?></p>
                    </div>
                    <div class="case__img">
                        <figure>
                            <img src="<?php the_field($image); ?>" alt="<?php the_field($name); ?>">
                        </figure>
                    </div>
                    <div class="case__profile">
                        <div class="case__job">
                            <p><?php the_field($job); ?></p>
                        </div>
                        <div class="case__name">
                            <p><?php the_field($name); ?></p>
                        </div>
                    </div>
                    <div class="case__point">
                        <p><?php the_field($point); ?></p>
                    </div>
                </div>
            <?php
            }
            ?>
            </div>
        </div>
    </section>
    <!-- ここまで事例 -->

    <!-- ここからご利用の流れ -->
    <section class="useflow">
        <div class="container">
            <div class="useflow__ttl">
                <h2>ご利用の流れ</h2>
            </div>
            <div class="useflow__inner">
                <ul>
                    <li>
                        <div class="useflow__number">
                            <p>01</p>
                        </div>
                        <div class="useflow__txts">
                            <p class="useflow__item">お問い合せ</p>
                            <p class="useflow__description">まずはフォームまたはお電話からお申し込みください。</p>    
                        </div>
                    </li>
                    <li>
                        <div class="useflow__number">
                            <p>02</p>
                        </div>
                        <div class="useflow__txts">
                            <p class="useflow__item">ヒアリング</p>
                            <p class="useflow__description">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</p>
                        </div>    
                    </li>
                    <li>
                        <div class="useflow__number">
                            <p>03</p>
                        </div>
                        <div class="useflow__txts">
                            <p class="useflow__item">学習プランの提供</p>
                            <p class="useflow__description">目標達成のために最適な学習プランをご提案致します。</p>    
                        </div>
                    </li>
                    <li>
                        <div class="useflow__number">
                            <p>04</p>
                        </div>
                        <div class="useflow__txts">
                            <p class="useflow__item">ご入会</p>
                            <p class="useflow__description">お申し込み完了後、レッスンがスタートします。</p>    
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ここまでご利用の流れ -->

    <!-- ここからよくある質問 -->
    <section class="top_questions">
        <div class="container">
            <div class="top_questions__ttl">
                <h2>よくある質問</h2>
            </div>
            <ul class="top_questions__area">
                <li class="top_question">
                    <section>
                        <h4 class="top_question__ttl">Engressはサラリーマンでも学習を続けられるでしょうか？</h4>
                        <div class="top_question__box">
                            <p>Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
                        </div>
                    </section>
                </li>
                <li class="top_question">
                    <section>
                        <h4 class="top_question__ttl">教材はオリジナルのものを使用しているのでしょうか？</h4>
                        <div class="top_question__box">
                            <p>教材はオリジナルのものを使用している</p>
                        </div>
                    </section>
                </li>
                <li class="top_question">
                    <section>
                        <h4 class="top_question__ttl">講師に日本人はいますか？</h4>
                        <div class="top_question__box">
                            <p>講師に日本人はいる。</p>
                        </div>
                    </section>
                </li>
                <li class="top_question">
                    <section>
                        <h4 class="top_question__ttl">TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</h4>
                        <div class="top_question__box">
                            <p>TOEFL以外の海外大学合格のサポートもする。</p>
                        </div>
                    </section>
                </li>
            </ul>
        </div>
    </section>

    <!-- ここからブログ・お知らせ -->
    <section class="top_update">
        <div class="container">
            <div class="top_update__wrapper">
                <div class="top_update__ttl">
                    <h3>ブログ</h3>
                </div>
                <?php
                $args = array(
                    'posts_per_page' => 3,
                    'order' =>'DESC',
                    'orderby' => 'date',
                );
                $posts = new WP_Query($args);

                $cnt = 0;
                if ($posts->have_posts()):
                    while ($posts->have_posts() && $cnt < 3):$posts->the_post();
                ?>
                <div class="top_blog">
                    <div class="top_blog__img">
                        <figure>
                            <img src="<?php 
                                        if(get_the_post_thumbnail_url()){
                                            the_post_thumbnail_url();
                                        }else{
                                            echo get_template_directory_uri()."/images/noimage.png";
                                        } 
                                        ?>" alt="<?php the_title(); ?>">
                        </figure>
                        <span class="top_blog__category"><?php echo get_the_category()[0]->name; ?></span>
                    </div>
                    <div class="top_blog__info">
                        <h4><a href="<?php echo the_permalink(); ?>" class="top_blog__ttl"><?php the_title(); ?></a></h4>
                        <time class="top_blog__time"><?php the_time('Y-m-d') ?></time>
                    </div>
                </div>
                <?php
                        $cnt++;
                    endwhile;
                endif;
                ?>
            </div>
            <div class="top_update__wrapper">
                <div class="top_update__ttl">
                    <h3>お知らせ</h3>
                </div>
                <?php
                $top_news_args = get_posts(array(
                    'posts_per_page' => 3,
                    'post_type' => 'news',
                    'orderby' => 'date',
                    'order' => 'DESC'
                ));
                foreach ($top_news_args as $post) : setup_postdata($post);
                ?>
                <div class="top_info">
                    <time class="top_info__time"><?php the_time('Y-m-d') ?></time>
                    <h4><a href="<?php echo get_permalink($post->ID); ?>" class="top_info__ttl"><?php echo get_the_title($post->ID); ?></a></h4>
                </div>
                <?php
                endforeach;
                ?>
            </div>
        </div>
    </section>
    <!-- ここまでブログ・お知らせ -->
</main>
<?php get_footer(); ?>