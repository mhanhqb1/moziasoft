<?php
$version = time();
require_once 'auth.php';
?>
<html lang="en" class="">
    <head>
        <link rel="shortcut icon" href="images/favicon.png" type="image/png">
        <meta charset="utf-8">
        <title>
            GIG8
        </title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=0" name="viewport">
        <style>
            #new-menu .t-menu li.saving_day_css a {
                color: red!important;
                font-weight: bold!important;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="css/app_shared.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/app_desktop.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/categories_menu.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/homepage_header.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/sidebar.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/homepage.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/product_item.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/video_item.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/guild_item.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/sell_skills.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/footer.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/custom.css?<?php echo $version;?>" media="all">
        <!--<link rel="stylesheet" type="text/css" href="css/slick.css"/>
        <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>-->

        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="js/slick.min.js"></script>
    </head>
    <body class="body-home responsive-grid pro-experience">
        <div id="main-wrapper" class="">
            <?php require_once 'header.php'; ?>
            <div class="main-content js-main-content">
                <div id="js-bomba-message" class="js-bomba-message"><!-- react-empty: 1 --></div>
                <div class="mp-box logged_out_homepage_perseus">
                    <div id="perseus-app" class="logged_out_homepage_perseus">
                        <div class="logged-out-homepage">
                            <?php require_once 'body_hero.php'; ?>
                            <!--Product scroll items-->
                            <?php require_once 'body_slider1.php'; ?>

                            <!--Categories grids-->
                            <?php require_once 'body_categories.php'; ?>

                            <!--Guilds-->
                            <?php require_once 'body_guild.php'; ?>

                            <!--Videos-->
                            <?php require_once 'body_video.php'; ?>
                            
                            <!--Product scroll items-->
                            <?php require_once 'body_slider2.php'; ?>
                            
                            <!--Product scroll items-->
                            <?php require_once 'body_slider3.php'; ?>
                            
                            
                            <!--Sell skills-->
                            <div class="signup">
                                <img alt="A notebook and a cellular phone" src="https://fiverr-res.cloudinary.com/q_auto,f_auto,w_1400,dpr_1.0/general_assets/logged_out_homepage/assets/signup/1440-cta2x.jpg" loading="lazy">
                                <div class="content">
                                    <h2>Start sell your skills</h2>
                                    <p>We've got you covered for all your business needs</p>
                                    <a class="fit-button fit-button-color-green fit-button-fill-full fit-button-size-medium js-open-popup-join" href="#">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    $(document).ready(function () {
                        /*$('body').on('click', ':not(.mobilemenuicon)', function(){
                         console.log('OK');
                         });*/
                        $(window).scroll(function () {
                            if ($(window).scrollTop() >= 10) {
                                $(".base-header").removeClass("transparent-header");
                                $(".js-category-nav").addClass("shown");
                            } else {
                                $(".base-header").addClass("transparent-header");
                                $(".js-category-nav").removeClass("shown");
                            }
                        });
                        $("body").click(function (e) {
                            if ($(e.target).attr('class') == 'mobilemenuicon') {
                                $(".site-sidebar").css({"left": "0px"});
                            } else {
                                $(".site-sidebar").css({"left": "-272px"});
                            }
                        });
                        $('.filtering').slick({
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            prevArrow: '<button class="slick-prev slick-arrow" aria-label="" type="button" style="display: block;"></button>',
                            nextArrow: '<button class="slick-next slick-arrow" aria-label="" type="button" style="display: block;"></button>',
                            responsive: [
                                {
                                    breakpoint: 1024,
                                    settings: {
                                        slidesToShow: 4,
                                        slidesToScroll: 4,
                                    }
                                },
                                {
                                    breakpoint: 600,
                                    settings: {
                                        slidesToShow: 2,
                                        slidesToScroll: 2
                                    }
                                },
                                {
                                    breakpoint: 480,
                                    settings: {
                                        slidesToShow: 2,
                                        slidesToScroll: 2
                                    }
                                },
                                {
                                    breakpoint: 320,
                                    settings: {
                                        slidesToShow: 1,
                                        slidesToScroll: 1
                                    }
                                }]
                        });
                    });
                </script>
                <!-- Footer -->
                <?php require_once 'footer.php';?>
            </div>
    </body>
</html>
