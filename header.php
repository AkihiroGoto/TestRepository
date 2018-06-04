<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css" type="text/css" />
<!--[if lt IE 9]>
<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="https://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->
<title><?php bloginfo('name'); ?></title>
</head>
<body <?php body_class(); ?>>
    <header class="globalHeader">
        <div class="inner">
            <h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo01.png" height="40" width="300" alt="ホテル・技評リゾート石垣島"></a></h1>
            <p class="description"><?php bloginfo('description'); ?></p>
            <form action="" method="get" class="searchform">
                <input type="text" value="" name="s" id="s" placeholder="サイト内検索">
                <input type="submit" id="searchSubmit" value="">
            </form>
        </div>
    </header><!-- /.globalHeader -->

    <div class="homeVisual"><span>石垣島でのんびりゆったりと。</span></div>

    <nav class="globalNavi">
        <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="about.html">ホテル紹介</a></li>
            <li><a href="access.html">アクセス</a></li>
            <li><a href="contact.html">お問い合わせ</a></li>
        </ul>
    </nav><!-- /.globalNavi -->
