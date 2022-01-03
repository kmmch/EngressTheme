<!--ここからフッター-->
<footer class="footer">
    <section class="material_order">
        <div class="material_order__container">
            <div class="material_order__ttl">
                <h3>まずは無料で無料請求から</h3>
            </div>
            <div class="fv__btn">
                <a href="/contact" class="btn_round material">資料請求</a>
            </div>
            <div class="fv__link">
                <a href="/contact">お問合せ</a>
            </div>
        </div>
    </section>
    <section class="telcontact">
        <div class="telcontact__container">
            <p class="telcontact__txt">お電話でのお問い合わせはこちらから</p>
            <p class="telcontact__number">0123-456-7890</p>
            <p class="telcontact__time">平日　08:00〜20:00</p>    
        </div>
    </section>
    <section class="footer__menu">
        <div class="footer__menu_container">
            <div class="footer__menu_left">
                <nav class="footer__menu_nav">
                    <?php
                    wp_nav_menu (
                        array(
                            'theme_location' => 'place_footer_menu',
                            'container' => false,
                            'menu_class' => '',
                            'add_li_class' => '',
                            'add_a_class' => 'footer__menu_nav_link'
                        )
                    );
                    ?>
                </nav>
            </div>
            <div class="footer__menu_right">
                <div class="footer__menu_img">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo_2.png" alt="Engress">
                    </figure>
                </div>
                <div class="footer__menu_right_txt">
                    <p class="footer__menu_tel">0123-456-78990</p>
                    <p class="footer__menu_time">平日08:00〜20:00</p>    
                </div>
            </div>    
        </div>
    </section>
    <section class="footer__copyright">
        <div class="footer__copyright_container">
            <p>© 2020 Engress.</p>
        </div>
    </section>
</footer>
<!--//ここまでフッター-->
<?php wp_footer(); ?>
</body>
</html>