<!DOCTYPE html>
<?php include 'baza.php'; ?>
<!-- ==============================
    Project:        Aedificator - rad s poduzetnicima za 3. godinu računarstva u Dubrovniku
    Version:        0.9
    Author:         aedificator
    Primary use:    Corporate, Business Themes.
    Email:          support@aedificator.com
    Follow:         http://www.twitter.com/aedificator
    Like:           http://www.facebook.com/aedificator
    Website:        http://www.aedificator.com
    Premium:        Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=aedificator
================================== -->
<html lang="hr" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
         <title>Aedificator d.o.o ovlašteni inženjer građevinarstva
		 stručni nadzor nad građenjem (i projektiranjem) 
		 ovlašteni voditelj građenja
		 ovlašteni energetski certifikator
		 </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="Aedificator" name="description"/>
        <meta content="BluCyb" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="css/animate.css" rel="stylesheet">
        <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body>

        <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>


                        <!-- logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="index.php">
                                <img class="logo-img logo-img-main" src="img/logo.png" alt="Aedificator logo">
                                <img class="logo-img logo-img-active" src="img/logo-dark.png" alt="Aedificator logo">
                            </a>
                        </div>
                        <!-- End logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="navbar-nav navbar-nav-right">
                                <li class="nav-item"><a class="nav-item-child nav-item-hover active" href="index.php">Početna</a></li>
                           <!--     <li class="nav-item"><a class="nav-item-child nav-item-hover" href="pricing.php">Usluga/Cjenik</a></li>-->
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="about.php">O nama</a></li>
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="products.php">Usluge</a></li>
                           <!--     <li class="nav-item"><a class="nav-item-child nav-item-hover" href="faq.php">Česta Pitanja</a></li>  -->
                                <li class="nav-item"><a class="nav-item-child nav-item-hover" href="contact.php">Kontakt</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== PARALLAX ==========-->
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/1920x1080/01.jpg">
            <div class="parallax-content container">
                <h5 class="carousel-title">Usluge</h5>
                <p>Obratite nam se s povjerenjem!</p>
            </div>
        </div>

        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="footer">
            <!-- Links -->
            <div class="footer-seperator">
                <div class="content-lg container">
                    <div class="row">
                        <div class="col-sm-2 sm-margin-b-50">
                         <!-- Contact List -->
                             <ul class="list-unstyled footer-list">

                                <li class="footer-list-item"><a class="footer-list-link" href="#">Dubrovnik</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">Močići 39,
																									Čilipi
																									Konavle
																									20213
																									HR</a></li>
                                <li class="footer-list-item"><a class="footer-list-link" href="#">+385 99 8274-571</a></li>

                                <li class="footer-list-item"><a class="footer-list-link" href="#">miroslav.bego.aedif@gmail.com</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-4 sm-margin-b-30">
                         <!-- Contact List -->
                            <!-- End List -->
                        </div>
                        <div class="col-sm-5 sm-margin-b-30">
                            <form action="form_process.php" method="POST" enctype="multipart/form-data">
                                <h2 class="color-white">Pošaljite nam upit</h2>
                                <input name="name" type="text" class="form-control footer-input margin-b-20" placeholder="Name" required>
                                <input name="email" type="email" class="form-control footer-input margin-b-20" placeholder="Email" required>
                                <input name="phone" type="text" class="form-control footer-input margin-b-20" placeholder="Phone" required>
                                <textarea name="message" class="form-control footer-input margin-b-30" rows="6" placeholder="Message" required></textarea>
                                <button type="submit" class="btn-theme btn-theme-sm btn-base-bg text-uppercase" href="form_process">Submit</button>
                            </form>
                        </div>
                    </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
            <!-- End Links -->

            <!-- Copyright -->
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                        <img class="footer-logo" src="img/logo.png" alt="Aedificator logo">
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="margin-b-0"><a class="color-base fweight-700" href="http://aedificator.hr">Aedificator</a> Theme Powered by: <a class="color-base fweight-700" href="http://www.keenthemes.com">keenthemes</a></p>
                    </div>
                </div>
                <!--// end row -->
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="vendor/jquery.parallax.min.js" type="text/javascript"></script>
        <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/components/swiper.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>
