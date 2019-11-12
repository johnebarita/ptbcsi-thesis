<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- =========================================
    Basic
    ========================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Home | Aflex Homes</title>
    <meta name="keywords" content="aflex, HTML5, CSS3, responsive, Template" />
    <meta name="author" content="Premium Tech Building Solution Construction inc." />
    <meta name="description" content="aflex- Responsive HTML5/CSS3 Template" />

    <!-- =========================================
    Mobile Configurations
    ========================================== -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-capable" content="yes" />

    <!-- =========================================
    Fonts
    ========================================== -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7COpen+Sans%3A300%2C300italic%2Cregular%2Citalic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%7COswald%3A200%2C300%2Cregular%2C500%2C600%2C700%7CPT+Serif%3Aregular%2Citalic%2C700%2C700italic&ver=5.2.3#038;subset=vietnamese,latin,latin-ext,cyrillic,greek,greek-ext,cyrillic-ext"/>
    <link href="<?=base_url()?>assets/css/font-awesome.min.css" rel="stylesheet"/>

    <!-- =========================================
    Owl carousel
    ========================================== -->
    <link href="<?=base_url()?>assets/css/owl.carousel.css" rel="stylesheet" media="screen"/>
    <link href="<?=base_url()?>assets/css/owl.theme.css" rel="stylesheet" media="screen"/>

    <!-- =========================================
    CSS
    ========================================== -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?=base_url()?>assets/css/offcanvas.css" rel="stylesheet"/>
    <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet"/>
    <link href="<?=base_url()?>assets/css/responsive.css" rel="stylesheet"/>

</head>
<body>
<?php
$uri = $this->uri->segment(1);
$active = 'class="active"';
?>
<!--================Header Area =================-->
<header class="main_header_area">
    <div class="header_top_area">
        <div class="container">
            <div class="pull-left">
                <a href="#"><i class="fa fa-phone"></i>(027) 714-7739</a>
                <a href="#"><i class="fa fa-map-marker"></i>Auckland,New Zealand</a>
                <a href="#"><i class="fa fa-clock-o"></i>08 AM - 10 PM</a>
            </div>
            <div class="pull-right">
                <ul class="header_social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>

                </ul>
            </div>
        </div>
    </div>
    <div class="main_menu_area">
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="home"><img src="<?=base_url()?>assets/img/aflogo.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="nav collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li <?=($uri == "home" ? $active : '')?> ><a href="home">Home</a></li>
                        <li <?=($uri == "services" ? $active : '')?> ><a href="services">Services</a></li>
                        <li <?=($uri == "about" ? $active : '')?> ><a href="about">about us</a></li>
                        <li <?=($uri == "contact" ? $active : '')?> ><a href="contact">Contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
</header>
<!--================Header Area =================-->
