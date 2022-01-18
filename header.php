<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title><?php bloginfo('title'); ?></title>
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="<?php echo get_site_url(); ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="" />
    <meta property="fb:app_id" content="">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>" />
    <link rel="shortcut icon" type="image/jpg" href="<?php echo get_template_directory_uri(); ?>" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/release/css/style.css">
    <!-- YakuHanJP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@3.4.1/dist/css/yakuhanjp.min.css">
    <!-- YakuHanJP -->
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!-- INSERT HERE SCRIPT FOR ADOBE FONTS -->

    <!-- END ADOBE FONTS -->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php
    $filePath = get_template_directory_uri();
    $filePath = parse_url($filePath, PHP_URL_PATH);
    ?>
    <main>
        <div id="page-top"></div>
        <div class="page__header">
            <div class="l-wrap">
                <div class="l-wrap__left">
                    <a href="<?php echo esc_url(home_url('/')); ?>"><img class="logo" src="<?php echo $filePath; ?>/release/image/header/logo.svg" alt=""></a>
                </div>
                <div class="l-wrap__right">
                    <nav class="nav">
                        <div class="menu_wrapper">
                            <ul class="nav__list menu_sp">
                                <li class="nav__list--item">
                                    <a class="nav__list--item__link" href="<?php echo esc_url(home_url('/')); ?>">TOP</a>
                                    <!-- <ul class="sub_menu">
                                        <li class="sub_menu_item">
                                            <a href="">ポスティング</a>
                                        </li>
                                        <li class="sub_menu_item">
                                            <a href="">WEBマーケティング</a>
                                        </li>
                                        <li class="sub_menu_item">
                                            <a href="">OOH</a>
                                        </li>
                                        <li class="sub_menu_item">
                                            <a href="">TVCM</a>
                                        </li>
                                    </ul> -->
                                </li>
                                <li class="nav__list--item">
                                    <a class="nav__list--item__link" href="<?php echo get_permalink(get_page_by_path('About')) ?>">ABOUT</a>
                                </li>
                                <li class="nav__list--item">
                                    <a class="nav__list--item__link spLink" href="<?php echo get_permalink(get_page_by_path('Business')) ?>">BUSINESS</a>
                                    <ul class="sub_menu">
                                        <li class="sub_menu_item">
                                            <a href="<?php echo esc_url(home_url('/')); ?>/#branding">ブランディング</a>
                                        </li>
                                        <li class="sub_menu_item">
                                            <a href="<?php echo esc_url(home_url('/')); ?>/#marketing">ダイレクトマーケティング</a>
                                        </li>
                                        <li class="sub_menu_item">
                                            <a href="<?php echo esc_url(home_url('/')); ?>/#promotion">デジタルプロモーション</a>
                                        </li>
                                        <li class="sub_menu_item">
                                            <a href="<?php echo esc_url(home_url('/')); ?>/#planning">メディアプランニング</a>
                                        </li>
                                        <li class="sub_menu_item">
                                            <a href="<?php echo esc_url(home_url('/')); ?>/#creative">映像クリエイティブ</a>
                                        </li>
                                        <!-- <li class="sub_menu_item">
                                            <a href="">実績</a>
                                        </li> -->
                                    </ul>
                                </li>
                                <li class="nav__list--item">
                                    <a class="nav__list--item__link spLink" href="<?php echo get_permalink(get_page_by_path('Company')) ?>">COMPANY</a>
                                    <ul class="sub_menu">
                                        <li class="sub_menu_item">
                                            <a href="<?php echo get_permalink(get_page_by_path('Company')) ?>">会社概要</a>
                                        </li>
                                        <li class="sub_menu_item">
                                            <a href="<?php echo get_permalink(get_page_by_path('Company')) ?>#sect-2" onclick="navCompany()">企業理念</a>
                                        </li>
                                        <li class="sub_menu_item">
                                            <a href="<?php echo get_permalink(get_page_by_path('Company')) ?>#sect-3" onclick="navCompany()">企業ビジョン</a>
                                        </li>
                                        <li class="sub_menu_item">
                                            <a href="<?php echo get_permalink(get_page_by_path('Company')) ?>#sect-4" onclick="navCompany()">アクセス情報</a>
                                        </li>
                                        <li class="sub_menu_item">
                                            <a href="<?php echo get_permalink(get_page_by_path('Company')) ?>#sect-5" onclick="navCompany()">沿革</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- <li class="nav__list--item">
                                    <a class="nav__list--item__link spLink" href="<?php echo get_permalink(get_page_by_path('Column')) ?>">COLUMN</a>
                                    <ul class="sub_menu">
                                        <li class="sub_menu_item">
                                            <a href="">ポスティング</a>
                                        </li>
                                        <li class="sub_menu_item">
                                            <a href="">WEBマーケティング</a>
                                        </li>
                                        <li class="sub_menu_item">
                                            <a href="">OOH</a>
                                        </li>
                                        <li class="sub_menu_item">
                                            <a href="">TVCM</a>
                                        </li>
                                    </ul>
                                </li> -->
                                <li class="nav__list--item">
                                    <a href="https://www.facebook.com/read.official/" target="_blank"><img src="<?php echo $filePath ?>/release/image/header/fb.svg" alt=""></a>
                                </li>
                                <li class="nav__list--item">
                                    <a href="https://www.instagram.com/read_shukyaku/" target="_blank"><img src="<?php echo $filePath ?>/release/image/header/insta.svg" alt=""></a>
                                </li>
                                <li class="nav__list--item">
                                    <a href="https://www.pinterest.jp/re_ad/" target="_blank"><img src="<?php echo $filePath ?>/release/image/header/pintarest.svg" alt=""></a>
                                </li>
                            </ul>
                        </div>
                        <ul class="m_nav__list">
                            <li class="nav__list--item">
                                <a href="tel:03-6418-2475">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35.96" height="35.94" viewBox="0 0 35.96 35.94">
                                        <g id="e2523a6d-3528-49e5-b5e7-e5945c6adb8b" data-name="Layer 2">
                                            <g id="ebe919d9-8c59-4e07-bc9c-35d5311ec3f2" data-name="Layer 1">
                                                <path d="M36,23a.68.68,0,0,0,0-.14,1.94,1.94,0,0,0,0-.24,1.21,1.21,0,0,0-.05-.18l-.06-.19-.09-.18-.09-.16c0-.06-.08-.1-.12-.15s-.08-.11-.12-.15a.81.81,0,0,0-.14-.12l-.15-.13-.18-.1a.83.83,0,0,0-.16-.09l-.24-.08-.12,0h0l-8.95-2a2,2,0,0,0-1.85.53l-2.62,2.6A24.91,24.91,0,0,1,17,19a2,2,0,1,0-2.82,2.84,28.43,28.43,0,0,0,5.94,4.52h0l.11.07.08,0a1.33,1.33,0,0,0,.33.13l.13,0a1.52,1.52,0,0,0,.42.06h0a1.76,1.76,0,0,0,.46-.06l.13,0a2.15,2.15,0,0,0,.32-.13l.12-.06a2,2,0,0,0,.37-.28v0l3-2.92L32,24.6v7.34A29.4,29.4,0,0,1,4,4h7.34l1.43,6.38-2.91,3a2,2,0,0,0,0,2.83,2,2,0,0,0,2.83,0l3.66-3.79a2,2,0,0,0,.51-1.83l-2-9h0v0s0-.08,0-.12,0-.16-.08-.24-.06-.1-.08-.15L14.6.86,14.48.72a.93.93,0,0,0-.13-.15L14.21.46a.91.91,0,0,0-.16-.13,1.29,1.29,0,0,0-.16-.09L13.71.15l-.2-.06-.17,0-.27,0H3L2.78,0h-.2L2.3.12C.71.58-.18,2.17,0,4.23A33.31,33.31,0,0,0,31.84,35.94H32c1.76,0,3.63-.78,3.93-2.47A1.84,1.84,0,0,0,36,33Z" fill="#010101" />
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            <li class="nav__list--item">
                                <a href="<?php echo get_permalink(get_page_by_path('contact')) ?>"><img src="<?php echo $filePath; ?>/release/image/header/contact.svg" alt=""></a>
                            </li>
                            <li class="nav__list--item">
                                <div class="menu" id="toggle">
                                    <span class="menu__line line_t"></span>
                                    <span class="menu__line line_m"></span>
                                    <span class="menu__line line_b"></span>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="page__content">