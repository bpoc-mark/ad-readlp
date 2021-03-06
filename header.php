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

    <main>
        <?php
            $filePath = get_template_directory_uri(); 
            $filePath = parse_url($filePath, PHP_URL_PATH);
        ?>
        <div class="page__header">
            <h1>header</h1>
        </div>
        <div class="page__content">