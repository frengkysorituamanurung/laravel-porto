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
    <!-- Contact  -->
    <section class="contact section-padding">
        <div class="container">
            <div class="row mb-45">
                <div class="col-md-12">
                    <h6>Hire me</h6>
                    <h1>Contact Details</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-45">
                    <div class="item">
                        <div class="wrap-block"> <span class="icon et-phone"></span>
                            <div class="text-block">
                                <h5>Phone</h5>
                                <p>+62 8562 7847 8765</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wrap-block"> <span class="icon et-map-pin"></span>
                            <div class="text-block">
                                <h5>Address</h5>
                                <p>Sitoluama - Laguboti, Kabupaten Toba</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="wrap-block"> <span class="icon et-notebook"></span>
                            <div class="text-block">
                                <h5>E-Mail</h5>
                                <p>agnesmarbun2311@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 offset-md-1">
                    <h5>Get in touch!</h5>
                        <form method="post" class="contact__form" action="https://duruthemes.com/demo/html/agnes/agnes-cicilia/mail.php" onsubmit="return validateForm()">

                        <!-- Form message -->
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your message was sent successfully. </div>
                            </div>
                        </div>
                        <!-- Form elements -->
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input name="name" type="text" placeholder="Name *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="email" type="email" placeholder="Email Address *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="phone" type="text" placeholder="Phone *" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <input name="subject" type="text" placeholder="Subject *" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea name="message" id="message" cols="30" rows="4" placeholder="How can we help you? Feel free to get in touch! *" required></textarea>
                            </div>
                            <div class="col-md-12">
                                <div class="btn-wrap">
                                    <div class="btn-link">
                                        <input type="submit" value="Get in touch"> <span class="btn-block color1 animation-bounce"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Maps -->
    <section id="map">
        <div class="full-width">
            <div class="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.367330226963!2d99.14605787568523!3d2.3832205573818155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e00fdad2d7341%3A0xf59ef99c591fe451!2sInstitut%20Teknologi%20Del!5e0!3m2!1sid!2sid!4v1697984342273!5m2!1sid!2sid" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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