<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Scuffs - Essex based car body repairs. Dent removal, bumper repairs, alloy wheel refurbishment.">
    <meta name="author" content="">

    <title>Scuffs - Mobile Cosmetic Auto Repairs</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="css/user.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php $number = '07734 052798'; ?>
    <?php $email = 'stevefulcher@btinternet.com'; ?>

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<div id="wrapper" class="toggled">

    <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <img src="images/sidebar-close.png" class="sidebar-close menu-toggle" />
            <div class="sidebar-text">
                <p>Tel:<br/>
                <a href="tel:<?php echo $number; ?>"><?php echo $number; ?></a></p>
                <p>Email:<br/>
                <a href="mailto:stevefuilcher@btinternet.com"><?php echo $email; ?></a></p>
            </div>
            <ul class="sidebar-nav">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="about.php">About Us</a>
                </li>
                <li>
                    <a href="services.php">Services</a>
                </li>
                <li>
                    <a href="gallery.php">Gallery</a>
                </li>
                <li>
                    <a href="contact.php">Contact Us</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

    <div id="page-content-wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="page-scroll">
                        <div class="col-xs-6 col-sm-3 col-md-2">
                            <a class="navbar-brand" href="index.php">
                                <img src="images/logo.png" alt="Scuffs - Mobile Cosmetic Auto Repairs" class="img-responsive" />
                            </a>
                        </div>
                        <div class="col-sm-5">
                            <p class="tagline">Over 30 Years Experience...</p>
                        </div>
                        <div class="col-xs-6 col-sm-1 col-xs-offset-0 col-sm-offset-3 col-md-offset-4">
                            <button href="#menu-toggle" type="button" class="navbar-toggle menu-toggle">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </nav>