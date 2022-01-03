<?php
/**
 * Template Name: price_page
 */
// 料金体系ページのテンプレート
get_header();
?>

<main class="main">
        <div class="container">
            <section id="priceSystem">
                <h2 class="section__ttl">料金体系</h2>
                <div class="section__contents">
                    <div class="price__figure">
                        <p class="fee">入会金 39,800円</p>
                        <div class="addition_figure">
                            <span></span>
                            <span></span>
                        </div>
                        <p class="fee">月額費用</p>
                    </div>
                    <p class="price__description">Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。</p>
                </div>  
            </section>
            <section id="priceTable">
                <h2 class="section__ttl">料金表</h2>
                <div class="section__contents">
                    <div class="plan__scroll">
                        <ul class="plan__list">
                            <li class="plan">
                                <div class="plan__ttl__wrapper">
                                    <h3 class="plan__ttl">基礎プラン</h3>
                                </div>
                                <div class="plan__contents__wrapper">
                                    <div class="plan__contents">
                                        <p class="plan__price"><?php the_field('price_basic');?></p>
                                        <p class="plan__price_notice">*月額(税抜き価格)</p>
                                        <ul class="plan__details">
                                            <li class="plan__details_item">
                                                <p>カリキュラム作成</p>
                                            </li>
                                            <li class="plan__details_item">
                                                <p>TOEFL学習サポート</p>
                                            </li>
                                            <li class="plan__details_item">
                                                <p>週一回のビデオMTG</p>
                                            </li>
                                        </ul>
                                    </div>    
                                </div>
                            </li>
                            <li class="plan">
                                <div class="plan__ttl__wrapper">
                                    <h3 class="plan__ttl">演習プラン</h3>
                                </div>
                                <div class="plan__contents__wrapper">
                                    <div class="plan__contents">
                                        <p class="plan__price"><?php the_field('price_practice');?></p>
                                        <p class="plan__price_notice">*月額(税抜き価格)</p>
                                        <ul class="plan__details">
                                            <li class="plan__details_item">
                                                <p>カリキュラム作成</p>
                                            </li>
                                            <li class="plan__details_item">
                                                <p>TOEFL学習サポート</p>
                                            </li>
                                            <li class="plan__details_item">
                                                <p>週一回のビデオMTG</p>
                                            </li>
                                            <li class="plan__details_item">
                                                <p>月二回の模試付き（解説付き）</p>
                                            </li>
                                        </ul>
                                    </div>    
                                </div>
                            </li>
                            <li class="plan recommend">
                                <div class="plan__ttl__wrapper recommend">
                                    <p>おすすめ</p>
                                    <h3 class="plan__ttl">志望校対策プラン</h3>
                                </div>
                                <div class="plan__contents__wrapper recommend">
                                    <div class="plan__contents">
                                        <p class="plan__price"><?php the_field('price_recommend');?></p>
                                        <p class="plan__price_notice">*月額(税抜き価格)</p>
                                        <ul class="plan__details">
                                            <li class="plan__details_item">
                                                <p>カリキュラム作成</p>
                                            </li>
                                            <li class="plan__details_item">
                                                <p>TOEFL学習サポート</p>
                                            </li>
                                            <li class="plan__details_item">
                                                <p>週一回のビデオMTG</p>
                                            </li>
                                            <li class="plan__details_item">
                                                <p>月二回の模試付き（解説付き）</p>
                                            </li>
                                            <li class="plan__details_item">
                                                <p>週一の英語面接対策</p>
                                            </li>
                                        </ul>
                                    </div>    
                                </div>
                            </li>
                            <li class="plan">
                                <div class="plan__ttl__wrapper">
                                    <h3 class="plan__ttl">フレックスプラン</h3>
                                </div>
                                <div class="plan__contents__wrapper">
                                    <div class="plan__contents">
                                        <p class="plan__price"><?php the_field('price_flex');?></p>
                                        <p class="plan__price_notice">*月額(税抜き価格)</p>
                                        <ul class="plan__details">
                                            <li class="plan__details_item">
                                                <p class="no-check">※別途ご相談下さい</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>    
                    </div>
                </div>
            </section>
        </div>
    </main>

<?php get_footer(); ?>