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
    <!-- Portfolio -->
    <section class="portfolio section-padding">
        <div class="container">
            <div class="row mb-45">
                <div class="col-md-4">
                    <h6 class="wow" data-splitting>My Works</h6>
                    <h1 class="wow" data-splitting>Portfolio</h1>
                </div>

                
                <div class="col-md-7 offset-md-1 mt-45">
                    <p class="wow fadeInUp" data-wow-delay=".6s">Here are some portfolios I have created using the skills I acquired during my time at the Del Institute of Technology..</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="item mb-30">
                        <a href="{{ url ('/portofolio-page')}}">
                            <div class="img-block">
                                <div class="wrapper-img"> <img src="images/portfolio/1.jpg" class="img-fluid"> </div>
                                <div class="title-block">
                                    <h4>Human-Computer Interaction</h4>
                                    <p>Olis website redesign</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item mb-30">
                        <a href="{{ url ('/portofolio-page2')}}">
                            <div class="img-block">
                                <div class="wrapper-img"> <img src="images/portfolio/2.jpg" class="img-fluid"> </div>
                                <div class="title-block">
                                    <h4>Object-Oriented Programing</h4>
                                    <p>Calculator Scientific</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item mb-30">
                        <a href="{{ url ('/portofolio-page3')}}">
                            <div class="img-block">
                                <div class="wrapper-img"> <img src="images/portfolio/3.jpg" class="img-fluid"> </div>
                                <div class="title-block">
                                    <h4>Object-Oriented Programming</h4>
                                    <p>Financial Records</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item mb-30">
                        <a href="{{ url ('/portofolio-page4')}}">
                            <div class="img-block">
                                <div class="wrapper-img"> <img src="images/portfolio/4.jpg" class="img-fluid"> </div>
                                <div class="title-block">
                                    <h4>Human-Computer Interaction</h4>
                                    <p>Del Institute of Technology Homepage Redesign</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item mb-30">
                        <a href="{{ url ('/portofolio-page5')}}">
                            <div class="img-block">
                                <div class="wrapper-img"> <img src="images/portfolio/5.jpg" class="img-fluid"> </div>
                                <div class="title-block">
                                    <h4>Computer Networks</h4>
                                    <p>Chatting Aplication</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item mb-30">
                        <a href="{{ url ('/portofolio-page6')}}">
                            <div class="img-block">
                                <div class="wrapper-img"> <img src="images/portfolio/6.jpg" class="img-fluid"> </div>
                                <div class="title-block">
                                    <h4>Artificial Inteligent</h4>
                                    <p>Sudoku Solver using Heuristics Search Backtracking</p>
                                </div>
                            </div>
                        </a>
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
                            <div class="btn-link"> <a href="mailto:agnesmarbun2311@gmail.com">agnesmarbun2311@gmail.com</a> <span class="btn-block color3 animation-bounce"></span> </div>
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