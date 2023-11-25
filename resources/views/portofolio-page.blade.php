<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agnes Cicilia Marbun</title>
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&amp;display=swap">
    <link rel="stylesheet" href="css/plugins.css" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Preloader -->
	<div class="preloader-bg"></div>
	<div id="preloader">
		<div id="preloader-status">
			<div class="preloader-position loader"> <span></span> </div>
		</div>
	</div>
    <!-- Cursor -->
    <div class="cursor js-cursor"></div>
    <!-- Menu -->
    <nav class="agnes-menu" id="agnes-navbar-spy">
        <div class="agnes-menu-inner" id="agnes-navbar">
        <ul class="list-unstyled">
          <li><a href="{{ url ('/a')}}">Home</a></li>
          <li class="active"><a href="{{ url ('/about')}}">Resume</a></li>
          <li><a href="{{ url ('/certificate')}}">Certificate</a></li>
          <li><a href="{{ url ('/portofolio')}}">Portfolio</a></li>
          <li><a href="{{ url ('/contact')}}">Contact</a></li>
        </ul>
        </div>
    </nav>
    <!-- Header -->
    <header class="agnes-header">
        <div class="container">
            <div class="row align-items-center">
                <!-- Logo -->
                <div class="col-8 col-md-8">
                    <div class="logo-wrap">
                        <a href="index.html" class="logo"> <img src="images/logo-light.png" alt=""> </a>
                    </div>
                </div>
                <!-- Menu Burger -->
                <div class="col-4 col-md-4 text-right agnes-menu-burger-wrap"> <a href="#" class="agnes-nav-toggle agnes-js-nav-toggle"><i></i></a> </div>
            </div>
        </div>
    </header>
    <!-- Portfolio Page  -->
    <section class="section-padding portfolio-page">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <!-- Images -->
                    <div class="row">
                        <div class="col-md-12 gallery-item">
                            <div class="owl-carousel owl-theme text-center">
                                <div class="item">
                                    <div class="gallery-item-inner">
                                        <a href="images/portfolio/1.jpg" title="" class="img-zoom">
                                            <div class="gallery-box">
                                                <div class="gallery-img"> <img src="images/portfolio/1.jpg" class="img-fluid mx-auto d-block" alt=""> </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 offset-md-1">
                    <h6 class="wow" data-splitting>Human-Computer Interaction</h6>
                    <h1 class="wow" data-splitting>Olis website redesign1</h1>
                    <p class="mt-45 wow fadeInUp" data-wow-delay=".1s">The human-computer interaction course focuses on good user experience. A good user experience if it meets good usability and the important components in it. In this project, I carried out an Olis website redesign using the figma tools. I put the application of the learning I have received on this website</p>
                    <p class="mt-45 wow fadeInUp" data-wow-delay=".2s"><span>Date :</span> 9 march 2023</p>
                    <p class="wow fadeInUp" data-wow-delay=".3s"><span>Category :</span> Design-Figma tools </p>
                    <div class="btn-wrap wow fadeInUp text-left mt-45" data-wow-delay=".9s">
                        <div class="btn-link"> <a href="https://www.figma.com/file/Hrrj2PzesSYEfb1pPJuuJF/Del-E-Library?type=design&node-id=0%3A1&mode=design&t=UEnFD0eaoEePjcQ1-1">Live website <i class="ti-arrow-top-right"></i> </a> <span class="btn-block color1 animation-bounce"></span> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Next & Prev -->
    <section class="nex-prv">
        <div class="container">
            <div class="row">
                <div class="col-md-5 rest">
                    <div class="prv">
                    
                    </div>
                </div>
                <div class="col-md-2 text-center rest">
                    <a href="{{ url ('/portofolio')}}" class="all-works d-flex align-items-center"> <span class="icon full-width ti-layout-grid3"></span> </a>
                </div>
                <div class="col-md-5 rest">
                    <div class="nxt">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testiominals -->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="images/banner.jpg">
            <div class="container">
                <div class="row">
                    <!-- Work together -->
                    <div class="col-md-6 mb-30">
                        <h4 class="wow" data-splitting>Need help with professional support? Let's work together!</h4>
                        <div class="btn-wrap mt-30 text-left wow fadeInUp" data-wow-delay=".6s">
                            <div class="btn-link"> <a href="#">agnesmarbun2311@gmail.com</a> <span class="btn-block color3 animation-bounce"></span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <!-- Footer -->
    <footer class="agnes-footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Get in touch</h5>
                    <a href="mailto:agnesmarbun2311@gmail.com">agnesmarbun2311@gmail.com</a>
                </div>
                <div class="col-md-4">
                    <h5>Locations</h5>
                    <p>Sitoluama — Laguboti</p>
                </div>
                <div class="col-md-4">
                    <ul class="agnes-footer-social-link">
                        <li><a href="{{ url ('https://www.instagram.com/ccccccmln_/')}}"><i class="ti-instagram"></i></a></li>
                        <li><a href="{{ url ('https://www.linkedin.com/in/agnes-cicilia-marbun-3606b6238/')}}"><i class="ti-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="js/plugins/jquery-3.6.0.min.js"></script>
    <script src="js/plugins/bootstrap.min.js"></script>
    <script src="js/plugins/owl.carousel.min.js"></script>
    <script src="js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins/YouTubePopUp.js"></script>
    <script src="js/plugins/jquery.easing.1.3.js"></script>
    <script src="js/plugins/smooth-scroll.min.js"></script>
    <script src="js/plugins/wow.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>