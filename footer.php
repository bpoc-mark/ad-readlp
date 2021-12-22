</div>
<footer class="page__footer">
    <div class="page__footer__wrap">
        <div class="page__footer--row-1">
            <a href="">
                <img class="logo" src="<?php echo get_template_directory_uri(); ?>/release/image/header/logo.svg"
                    alt="">
            </a>
        </div>
        <div class="page__footer--row-2">
            <div class="page__footer--links">
                <div class="page__footer--links__items">
                    <div class="accordion active">
                        <p>COMPANY</p>
                        <img class="plus"
                            src="http://localhost:3000/wp-content/themes/ad-readlp/release/image/plus_sign.png" alt="">
                    </div>
                    <ul class="accordion_content hidden">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">TOPページ</a></li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('')) ?>">リードについて</a></li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('')) ?>">会社概要</a></li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('')) ?>">お問い合せ</a></li>
                    </ul>
                </div>
                <div class="page__footer--links__items">
                    <div class="accordion active">
                        <p>BUSINESS</p>
                        <img class="plus" src="<?php echo get_template_directory_uri();?>/release/image/plus_sign.png"
                            alt="">
                    </div>
                    <ul class="accordion_content hidden">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">ブランディング</a></li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('')) ?>">ダイレクトマーケティング</a></li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('')) ?>">デジタルプロモーション</a></li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('')) ?>">メディアプランニング</a></li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('')) ?>">映像クリエイティブ</a></li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('')) ?>">実績</a></li>
                    </ul>
                </div>
                <div class="page__footer--links__items">
                    <div class="accordion active">
                        <p>COLUMN</p>
                        <img class="plus" src="<?php echo get_template_directory_uri();?>/release/image/plus_sign.png"
                            alt="">
                    </div>
                    <ul class="accordion_content hidden">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">ポスティング</a></li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('')) ?>">WEBマーケティング</a></li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('')) ?>">OOH</a></li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('')) ?>">TVCM</a></li>
                    </ul>
                </div>
                <div class="page__footer--links__items">
                    <div class="accordion active">
                        <p>SNS</p>
                        <img class="plus" src="<?php echo get_template_directory_uri();?>/release/image/plus_sign.png"
                            alt="">
                    </div>
                    <ul class="accordion_content hidden">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">Facebook</a></li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('')) ?>">Instagram</a></li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('')) ?>">Pinterest</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="l-wrap">
        <div class="page__footer--copyright">
            <p>© READ CO.,LTD. &nbsp;&nbsp;&nbsp;|<span><a href="">　プライバシーポリシー</a></span></p>
        </div>
        <a href="" class="backtop">
            <img src="<?php echo get_template_directory_uri();?>/release/image/baktotap.svg" alt="">
        </a>
    </div>
</footer>
</main>
<!-- INSERT SCRIPTS HERE -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/release/js/custom.js"></script>
<!-- END OF SCRIPTS -->
<?php wp_footer(); ?>
</body>

</html>