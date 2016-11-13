<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <!--
    Kool Store Template
    http://www.templatemo.com/preview/templatemo_428_kool_store
    -->
    <meta charset="utf-8">
    <title>Kool Store - Responsive eCommerce Template</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">




    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href=<?php bloginfo(template_url); echo "/css/bootstrap.css"?>>
    <link rel="stylesheet" href=<?php bloginfo(template_url); echo "/css/normalize.min.css"?>>
    <link rel="stylesheet" href=<?php bloginfo(template_url); echo "/css/font-awesome.min.css"?>>
    <link rel="stylesheet" href=<?php bloginfo(template_url); echo "/css/animate.css"?>>
    <link rel="stylesheet" href=<?php bloginfo(template_url); echo "/css/templatemo-misc.css"?>>
    <link rel="stylesheet" href=<?php bloginfo(template_url); echo "/css/templatemo-style.css"?>>

    <script src=<?php bloginfo(template_url); echo "/js/vendor/modernizr-2.6.2.min.js"; ?>></script>


</head>
<body>


<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->


<header class="site-header">
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="top-header-left">
                        <a href=<?php echo site_url(); echo "/wp-login.php"?>>Sign Up</a>
                        <a href=<?php echo site_url(); echo "/wp-login.php"?>>Log In</a>
                    </div> <!-- /.top-header-left -->
                </div> <!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6">
                    <div class="social-icons">
                        <ul>
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-dribbble"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div> <!-- /.social-icons -->
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.top-header -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-8">
                    <div class="logo">
                        <h1><a href=<?php echo site_url(); echo "/index.php";?>>Kool Store</a></h1>
                    </div> <!-- /.logo -->
                </div> <!-- /.col-md-4 -->
                <div class="col-md-8 col-sm-6 col-xs-4">
                    <div class="main-menu">






                        <a href="#" class="toggle-menu">
                            <i class="fa fa-bars"></i>
                        </a>
                        <ul class="menu">
                            <li><a href=<a href=<?php echo site_url(); echo "/index.php"?>>Home</a></li>
                            <li><a href="#">Catalogs</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Policies</a></li>
                            <li><a href="#">About</a></li>
                        </ul>
                    </div> <!-- /.main-menu -->
                </div> <!-- /.col-md-8 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.main-header -->

    <div class="main-nav">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-7">
                    <div class="list-menu">
                        <nav>
                            <?php wp_nav_menu(array(
                                'primary' => 'my_menu_location',
                                'items_wrap' => my_nav_wrap()
                            )); ?>
                        </nav>
                    </div> <!-- /.list-menu -->
                </div> <!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-5">
                    <div class="notification">
                        <span>Free Shipping on any order above $50</span>
                    </div>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.main-nav -->

</header> <!-- /.site-header -->