</div>
<footer class="page__footer">
    <div class="c-buttonContact u-d-n-sp">
        <a href="<?php echo get_permalink(get_page_by_path('contact')) ?>" class="c-buttonContact__link">
            <img src="<?php echo get_template_directory_uri(); ?>/release/image/contact_btn_arrow.svg" alt="">
            Contact
        </a>
    </div>
    <div class="page__footer__wrap">
        <div class="page__footer--row-1">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img class="logo" src="<?php echo get_template_directory_uri(); ?>/release/image/header/logo.svg" alt="">
            </a>
        </div>
        <div class="page__footer--row-2">
            <div class="page__footer--links">
                <div class="page__footer--links__items">
                    <div class="accordion active">
                        <p>COMPANY</p>
                    </div>
                    <ul class="accordion_content hidden">
                        <li> <a href="<?php echo get_permalink(get_page_by_path('Company')) ?>">会社概要</a></li>
                        <li> <a href="#sect-2">企業理念</a></li>
                        <li> <a href="#sect-3">企業ビジョン</a></li>
                        <li> <a href="#sect-4">アクセス情報</a></li>
                        <li> <a href="#sect-5">沿革</a></li>
                    </ul>
                </div>
                <div class="page__footer--links__items">
                    <div class="accordion active">
                        <p>BUSINESS</p>
                    </div>
                    <ul class="accordion_content hidden">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>/#branding">ブランディング</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>/#marketing">ダイレクトマーケティング</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>/#promotion">デジタルプロモーション</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>/#planning">メディアプランニング</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>/#creative">映像クリエイティブ</a></li>
                        <!-- <li><a href="<?php echo get_permalink(get_page_by_path('')) ?>">実績</a></li> -->
                    </ul>
                </div>
                <!-- <div class="page__footer--links__items">
                    <div class="accordion active">
                        <p>COLUMN</p>
                    </div>
                    <ul class="accordion_content hidden">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">ポスティング</a></li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('')) ?>">WEBマーケティング</a></li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('')) ?>">OOH</a></li>
                        <li><a href="<?php echo get_permalink(get_page_by_path('')) ?>">TVCM</a></li>
                    </ul>
                </div> -->
                <div class="page__footer--links__items">
                    <div class="accordion active">
                        <p>SNS</p>
                    </div>
                    <ul class="accordion_content hidden">
                        <li><a href="https://www.facebook.com/read.official/" target="_blank">Facebook</a></li>
                        <li><a href="https://www.instagram.com/read_shukyaku/" target="_blank">Instagram</a></li>
                        <li><a href="https://www.pinterest.jp/re_ad/" target="_blank">Pinterest</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="l-wrap">
        <div class="page__footer--copyright">
            <p>© READ CO.,LTD. &nbsp;&nbsp;&nbsp;|<span><a href="<?php echo get_permalink(get_page_by_path('Privacy')) ?>">　プライバシーポリシー</a></span></p>
        </div>
        <a href="#page-top" class="backtop">
            <img src="<?php echo get_template_directory_uri(); ?>/release/image/baktotap.svg" alt="">
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