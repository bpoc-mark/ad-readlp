<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title');?></title>
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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/release/css/style.css">
    <!-- YakuHanJP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@3.4.1/dist/css/yakuhanjp.min.css">
    <!-- YakuHanJP -->

    <!-- INSERT HERE SCRIPT FOR ADOBE FONTS -->

    <!-- END ADOBE FONTS -->

    <?php wp_head();?>
</head>

<body <?php body_class(); ?>>
    <?php
            $filePath = get_template_directory_uri(); 
            $filePath = parse_url($filePath, PHP_URL_PATH);
        ?>
    <main>
        <!-- <div class="page__header">
            <div class="l-wrap">
                <div class="l-wrap__left">
                    <a href=""><img class="logo" src="<?php echo $filePath; ?>/release/image/header/logo.svg" alt=""></a>
                </div>
                <div class="l-wrap__right">
                    <nav class="nav">
                        <div class="menu_wrapper">
                            <ul class="nav__list menu_sp">
                                <li class="nav__list--item">
                                    <a class="nav__list--item__link" href="">ABOUT</a>
                                    <ul class="sub_menu">
                                        <li class="sub_menu_item">
                                            <a href="">TOPページ</a>
                                        </li>
                                        <li class="sub_menu_item">
                                            <a href="">リードについて</a>
                                        </li>
                                        <li class="sub_menu_item">
                                            <a href="">会社概要</a>
                                        </li>
                                        <li class="sub_menu_item">
                                            <a href="">お問い合せ</a>
                                        </li>
                                        <li class="sub_menu_item">
                                            <a href="">プライバシーポリシー</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav__list--item">
                                    <a class="nav__list--item__link" href="">BUSINESS</a>
                                </li>
                                <li class="nav__list--item">
                                    <a class="nav__list--item__link" href="">COMPANY</a>
                                </li>
                                <li class="nav__list--item">
                                    <a class="nav__list--item__link" href="">COLUMN</a>
                                </li>
                            </ul>
                        </div>
                        <ul class="nav__list iconlink">
                            <li class="nav__list--item">
                                <a href=""><img src="<?php echo $filePath?>/release/image/header/fb.svg" alt=""></a>
                            </li>
                            <li class="nav__list--item">
                                <a href=""><img src="<?php echo $filePath?>/release/image/header/insta.svg"
                                        alt=""></a>
                            </li>
                            <li class="nav__list--item">
                                <a href=""><img src="<?php echo $filePath?>/release/image/header/pintarest.svg"
                                        alt=""></a>
                            </li>
                            <li class="nav__list--item">
                                <a href=""><img src="<?php echo $filePath;?>/release/image/header/tel.svg"
                                        alt=""></a>
                            </li>
                            <li class="nav__list--item">
                                <a href=""><img src="<?php echo $filePath;?>/release/image/header/contact.svg"
                                        alt=""></a>
                            </li>
                            <li class="nav__list--item">
                                <div class="menu">
                                    <span class="menu__line line_t"></span>
                                    <span class="menu__line line_m"></span>
                                    <span class="menu__line line_b"></span>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div> -->
        <div class="page__banner">
            <div class="l-wrap">
                <h1 class="page__banner--ttl">集まらないと、<br>
                    はじまらない。</h1>
                <p class="page__banner--sub">集客カンパニー「リード」</p>
                <div class="floating_contact">
                    <img src="<?php echo $filePath;?>/release/image/contact_btn.svg" alt="">
                </div>
            </div>

        </div>
        <div class="page__content">