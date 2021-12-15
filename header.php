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
                    <img class="logo" src="<?php echo $filePath; ?>/release/image/header/logo.svg" alt="">
                </div>
                <div class="l-wrap__right">
                    <nav class="nav">
                        <ul class="nav__list">
                            <li class="nav__list--item">
                                <a href="">ABOUT</a>
                            </li>
                            <li class="nav__list--item">
                                <a href="">BUSINESS</a>
                            </li>
                            <li class="nav__list--item">
                                <a href="">COMPANY</a>
                            </li>
                            <li class="nav__list--item">
                                <a href="">COLUMN</a>
                            </li>
                            <ul class="nav__links">
                                <li class="nav__links--item">
                                    <a href=""><img src="<?php echo $filePath?>/release/image/header/fb.png" alt=""></a>
                                </li>
                                <li class="nav__links--item">
                                    <a href=""><img src="<?php echo $filePath?>/release/image/header/insta.png"
                                            alt=""></a>
                                </li>
                                <li class="nav__links--item">
                                    <a href=""><img src="<?php echo $filePath?>/release/image/header/pintarest.png"
                                            alt=""></a>
                                </li>
                                <li class="nav__links--item">
                                    <a href=""><img src="<?php echo $filePath;?>/release/image/header/tel.png"
                                            alt=""></a>
                                </li>
                            </ul>
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