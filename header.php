<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <?php wp_head(); ?>
</head>
<body>
    <!--ここからヘッダー-->
    <header class="header">
        <div class="header__inner">
            <div class="header__left">
                <h1 class="header__ttl">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Engress">
                </h1>
                <!--ナビゲーション-->
                <nav class="nav">
                    <?php
                    wp_nav_menu (
                        array(
                            'theme_location' => 'place_header_menu',
                            'container' => false,
                            'menu_class' => 'nav__lists',
                            'add_li_class' => 'nav__list',
                        )
                    );
                    ?>
                </nav>    
            </div>
            <div class="header__right">
                <div class="header__tel">
                    <p class="header__tel_time">平日08:00〜20:00</p>
                    <p class="header__tel_number">0123-456-7890</p>
                </div>
                <div class="header__btn">
                    <a href="/contact" class="btn_square material">資料請求</a>
                </div>
                <div class="header__btn">
                    <a href="/contact" class="btn_square contact">お問合せ</a>
                </div>
            </div>
            <!--hamburgerボタンー-->
            <div class="hamburger-btn">
                <span class="hamburger-btn__parts -top"></span>
                <span class="hamburger-btn__parts -middle"></span>
                <span class="hamburger-btn__parts -bottom"></span>
            </div>
            <!--hamburgerメニュー-->
            <nav class="hamburger">
                <?php
                    wp_nav_menu (
                        array(
                            'theme_location' => 'place_header_menu',
                            'container' => false,
                            'menu_class' => 'hamburger__lists',
                            'add_li_class' => 'hamburger__list',
                            'add_a_class' => 'hamburger__link bold'
                        )
                    );
                ?>
                <div class="hamburger__info">
                    <div class="header__tel">
                        <p class="header__tel_time">平日08:00〜20:00</p>
                        <p class="header__tel_number">0123-456-7890</p>
                    </div>
                    <div class="flex flex__center">
                        <div class="header__btn">
                            <a href="/contact" class="btn_square material">資料請求</a>
                        </div>
                        <div class="header__btn">
                            <a href="/contact" class="btn_square contact">お問合せ</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!--//ここまでナビゲーション-->
        </div>
    </header>
    <div class="header__dummy"></div>
    <!--//ここまでヘッダー-->  

    <!-- CTA -->
    <?php
    if(preg_match('/price/',$_SERVER['REQUEST_URI'])):
    ?>
    <div id="price" class="page_head">
        <div class="page_head__container">
                <h1 class="page__ttl">コース・料金</h1>
        </div>
    </div>
    <?php
    elseif(preg_match('/news/',$_SERVER['REQUEST_URI']) && is_archive()):
    ?>
    <div id="news" class="page_head">
        <div class="page_head__container">
                <h1 class="page__ttl">お知らせ一覧</h1>
        </div>
    </div>
    <?php
    elseif(preg_match('/blog/',$_SERVER['REQUEST_URI'])):
    ?>
    <div id="blog" class="page_head">
        <div class="page_head__container">
                <h1 class="page__ttl">ブログ</h1>
        </div>
    </div>
    <?php
    elseif(preg_match('/contact/',$_SERVER['REQUEST_URI'])):
    ?>
    <div id="contact" class="page_head">
        <div class="page_head__container">
                <h1 class="page__ttl">お問い合わせ</h1>
        </div>
    </div>
    <?php
    endif;
    ?>


    
    <!-- パンくず -->
    <?php
    if($_SERVER['REQUEST_URI'] != '/'):
    ?>
        <div class="breadcrumb">
            <div class="breadcrumb__container">
                <nav class="breadcrumb__nav">
                    <ul>
                        <?php 
                        if(function_exists('bcn_display')){
                            bcn_display();
                        }
                        ?>
                    </ul>
                </nav>    
            </div>
        </div>
    <?php
    endif;
    ?>