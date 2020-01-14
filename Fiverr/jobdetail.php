<?php
$version = time();
require_once 'auth.php';
//6cbcd6
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
        <link rel="stylesheet" type="text/css" href="css/jobdetail.css?<?php echo $version; ?>" media="all">
        <link rel="stylesheet" type="text/css" href="css/custom.css?<?php echo $version; ?>" media="all">
        <!--<link rel="stylesheet" type="text/css" href="css/slick.css"/>
        <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>-->

        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="js/slick.min.js"></script>
        <script type="text/javascript" src="https://npm-assets.fiverrcdn.com/assets/@fiverr/gig_page_perseus/apps/gig_page/index.8d049088d98595ed1d90.js?v=1"></script>
    </head>
    <body class="body-home responsive-grid pro-experience">
        <div id="main-wrapper" class="">
            <?php require_once 'detail/header.php'; ?>
            <div class="main-content js-main-content">
                <div class="mp-box gig_page_perseus">
                    <div id="perseus-app" class="gig-page-wrapper responsive pro-gig sidebar-sticky">
                        <div class="gig-page">
                            <?php require_once 'detail/sidebar.php'; ?>
                            <div class="main">
                                <?php require_once 'detail/overview.php'; ?>
                                <?php require_once 'detail/gallery.php'; ?>
                                <?php require_once 'detail/description1.php'; ?>
                                <?php require_once 'detail/description2.php'; ?>
                                <?php require_once 'detail/package.php'; ?>
                            </div>
                        </div>
                        <div class="logged-out-homepage">
                            <!--Product scroll items-->
                            <?php require_once 'body_slider2.php'; ?>

                            <!--Product scroll items-->
                            <?php require_once 'body_slider3.php'; ?>
                        </div>
                    </div>
                </div>
                <script>
                    $(document).ready(function () {
                        /*$('body').on('click', ':not(.mobilemenuicon)', function(){
                         console.log('OK');
                         });*/
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
                <?php require_once 'footer.php'; ?>
            </div>
    </body>
</html>
