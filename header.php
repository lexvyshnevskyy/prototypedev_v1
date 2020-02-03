<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title><?=bloginfo( 'name' )?></title>

    <meta name="keywords" content="" />

    <meta name="description" content="" />

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="author" content="http://www.galaikonazar.com.ua/ and Prototype Development team, Lex from https://instagram.com/prototype_mechanic">

    <meta property="og:image" content="<?=esc_url( get_template_directory_uri() )?>/img/logo_dev.png">

    <meta property="og:image:type" content="image/png">

    <meta property="og:image:width" content="299">

    <meta property="og:image:height" content="121">

    <!-- <link rel="icon" type="image/png" href="img/favicon.png"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="<?=esc_url( get_template_directory_uri() )?>/css/fonts.css" rel="stylesheet">

    <link href="<?=esc_url( get_template_directory_uri() )?>/css/style.css" rel='stylesheet' type='text/css'>

    <link href="<?=esc_url( get_template_directory_uri() )?>/css/media.css" rel='stylesheet' type='text/css'>
    <script type="text/javascript">
        var nonce = '<?php echo session_id();?>';
    </script>
</head>

<body class="home">

<header>

    <div class="button_menu ">

        <span></span>

        <span></span>

        <span></span>

    </div>



    <ul class="socials">
        <li>
            <a href="<?=get_theme_mod('prototypedev_link_instagram','https://www.instagram.com/')?>">
                <i class="fa fa-instagram"></i>
            </a>
        </li>
        <li>
            <a href="<?=get_theme_mod('prototypedev_link_be','https://www.behance.net/')?>">
                <i class="fa fa-behance"></i>
            </a>

        </li>

        <li>
            <a href="<?=get_theme_mod('prototypedev_link_fb','https://www.facebook.com/')?>">
                <i class="fa fa-facebook"></i>
            </a>
        </li>

        <li>
            <a href="<?=get_theme_mod('prototypedev_link_twi','https://twitter.com/')?>">
                <i class="fa fa-twitter"></i>
            </a>
        </li>

    </ul>



    <ul class="lang">
<!--    <li>
            <a href="/">
                укр
            </a>
        </li>

        <li class="active">
            <a href="/">
                eng
            </a>
        </li>-->
    </ul>

</header>

<div class="menu_content">

    <img src="<?=esc_url( get_template_directory_uri() )?>/img/logo.png" class="dev_logo">

    <ul class="language">

<!--        <li class="active">укр</li>

        <li>eng</li>-->

    </ul>

    <ul class="menu" id="menu">

        <li  data-anchor="slide1">

            <a href="#slide1">home</a>

        </li>

        <li  data-anchor="slide2" class="about_us">

            <a href="#slide2">about us</a>

        </li>

        <li  data-anchor="slide3">

            <a href="#slide3">

                services

            </a>

        </li>



        <li  data-anchor="slide4">

            <a href="#slide4">

                portfolio

            </a>

        </li>



        <li  data-anchor="slide5">

            <a href="#slide5">

                contact

            </a>

        </li>

    </ul>



    <ul class="socials">
        <li>
            <a href="<?=get_theme_mod('prototypedev_link_instagram','https://www.instagram.com/')?>">
                <i class="fa fa-instagram"></i>
            </a>
        </li>

        <li>
            <a href="<?=get_theme_mod('prototypedev_link_be','https://www.behance.net/')?>">
                <i class="fa fa-behance"></i>
            </a>
        </li>

        <li>
            <a href="<?=get_theme_mod('prototypedev_link_fb','https://www.facebook.com/')?>">
                <i class="fa fa-facebook"></i>
            </a>
        </li>

        <li>

            <a href="<?=get_theme_mod('prototypedev_link_twi','https://twitter.com/')?>">

                <i class="fa fa-twitter"></i>

            </a>

        </li>

    </ul>

</div>