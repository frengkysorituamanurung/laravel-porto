<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Agnes Cicilia Marbun</title>
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&amp;display=swap"
    />
    <link rel="stylesheet" href="css/plugins.css" />
    <link rel="stylesheet" href="css/style.css" />
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>

  <body>
    <!-- Preloader -->
    <div class="preloader-bg"></div>
    <div id="preloader">
      <div id="preloader-status">
        <div class="preloader-position loader"><span></span></div>
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
          <li>          @if(auth()->check())
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <a href="{{route('logout')}}" class="btn btn-primary">Logout</a>
            </form>
          @endif
</li>

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
              <a href="index.html">
                <div class="logo">
                  <img src="images/logo-light.png" alt="" />
                </div>
              </a>
            </div>
          </div>
          <!-- Menu Burger -->
          <div class="col-4 col-md-4 text-right agnes-menu-burger-wrap">
            <a href="#" class="agnes-nav-toggle agnes-js-nav-toggle"><i></i></a>
          </div>
        </div>
      </div>
    </header>
    <!-- Homepage -->
    <section id="home" class="header-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="header-section-wrap">
              <div class="header-view-on-mobile">
                <h1>Agnes Cicilia Marbun</h1>
                <h6>Data Analyst & Website Developer</h6>
              </div>
              <div class="transform-banner position-relative">
                <img
                  class="img header-img header-img-left wow imago"
                  src="images/agnesss.jpg"
                  alt=""
                />
              </div>
              <div class="header-cont header-cont-right">
                <div class="header-cont-absolute header-cont-absolute-right">
                  <div class="header-not-view-on-mobile">
                    <h1 class="wow" data-splitting>Agnes Cicilia Marbun</h1>
                    <h6 class="wow" data-splitting>
                      Quality Accurance & Quality Control
                    </h6>
                  </div>
                  <!-- <div class="header-cont-text">
                    <p class="wow" data-splitting>'I Design Your Dream'</p>
                  </div> -->
                  <div class="btn-wrap text-center">
                    <div class="btn-link">
                      <a href="cv/CV-Agnes Cicilia Marbun.pdf"
                        >Download CV <i class="ti-download"></i
                      ></a>
                      <span class="btn-block color1 animation-bounce"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About & Skills -->
    <section id="about" class="section-padding">
      <div class="container">
        <div class="row mb-45">
          <div class="col-md-7">
            <h6 class="wow" data-splitting>I make the future</h6>
            <h1 class="wow" data-splitting>
              I Develop & Create Digital Future.
            </h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5">
            <p class="wow fadeInUp" data-wow-delay=".2s">
              In this digital age, I Develop & Create the Digital Future with
              the latest technology and innovative solutions. With a strong
              passion for progress and a keen insight into emerging trends, I am
              committed to shaping the future of technology and business.
            </p>
            <p class="wow fadeInUp" data-wow-delay=".4s">
              With strategic thinking and an unwavering pursuit of excellence, I
              Develop & Create the Digital Future with a focus on sustainability
              and inclusivity. I believe that the digital future should not only
              advance but also be accessible to everyone, leaving no one behind.
            </p>
            <div
              class="btn-wrap text-left mt-45 wow fadeInUp"
              data-wow-delay=".6s"
            >
              <div class="btn-link">
                <a href="mailto:agnesmarbun2311@gmail.com"
                  >agnesmarbun2311@gmail.com</a
                >
                <span class="btn-block color1 animation-bounce"></span>
              </div>
            </div>
          </div>
          <div class="col-md-6 offset-md-1 wow fadeInUp" data-wow-delay=".8s">
            <p class="bar-title">
              Design<span class="percent align-right">90%</span>
            </p>
            <div class="bar">
              <div class="bar-fill bar-fill-design start"></div>
            </div>
            <p class="bar-title">
              Branding <span class="percent align-right">80%</span>
            </p>
            <div class="bar">
              <div class="bar-fill bar-fill-branding start"></div>
            </div>
            <p class="bar-title">
              Web Design<span class="percent align-right">95%</span>
            </p>
            <div class="bar">
              <div class="bar-fill bar-fill-webdesign start"></div>
            </div>
            <p class="bar-title">
              Social Media<span class="percent align-right">85%</span>
            </p>
            <div class="bar">
              <div class="bar-fill bar-fill-socialmedia start"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Portfolio -->
    <section id="portfolio" class="portfolio section-padding">
      <div class="container">
        <div class="row mb-45">
          <div class="col-md-4">
            <h6 class="wow" data-splitting>My Works</h6>
            <h1 class="wow" data-splitting>Portfolio</h1>
          </div>
          
          <div class="col-md-7 offset-md-1 mt-45">
            <p class="wow fadeInUp" data-wow-delay=".6s">
              Here are some portfolios I have created using the skills I
              acquired during my time at the Del Institute of Technology.
            </p>
          </div>
        </div>
      </div>
      <div class="full-width">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-carousel owl-theme">
              @foreach ($portofolios as $portfolio)
              <div class="item">
                <a href="{{ url ('/portofolio-page')}}">
                  <div class="img-block">
                    <div class="wrapper-img">
                      <img src="images/portfolio/1.jpg" class="img-fluid" />
                    </div>
                    <div class="title-block">
                      <h4>{{ $portfolio->judul }}</h4>
                      <p>{{ $portfolio->subjudul }}</p>
                    </div>
                  </div>
                </a>
              </div>
              @endforeach
              <div class="item">
                <a href="{{ url ('/portofolio-page')}}">
                  <div class="img-block">
                    <div class="wrapper-img">
                      <img src="images/portfolio/1.jpg" class="img-fluid" />
                    </div>
                    <div class="title-block">
                      <h4>Human--Computer Interaction</h4>
                      <p>Olis Website Redesign</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="{{ url ('/portofolio-page2')}}">
                  <div class="img-block">
                    <div class="wrapper-img">
                      <img src="images/portfolio/2.jpg" class="img-fluid" />
                    </div>
                    <div class="title-block">
                      <h4>Object-Oriented Programming</h4>
                      <p>Calculator Scientific</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="{{ url ('/portofolio-page3')}}">
                  <div class="img-block">
                    <div class="wrapper-img">
                      <img src="images/portfolio/3.jpg" class="img-fluid" />
                    </div>
                    <div class="title-block">
                      <h4>Object-Oriented Programming</h4>
                      <p>Financial Records</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="{{ url ('/portofolio-page4')}}">
                  <div class="img-block">
                    <div class="wrapper-img">
                      <img src="images/portfolio/4.jpg" class="img-fluid" />
                    </div>
                    <div class="title-block">
                      <h4>Human-Computer Interaction</h4>
                      <p>Del Institute of Technology Homepage Redesign</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="portfolio-page5.html">
                  <div class="img-block">
                    <div class="wrapper-img">
                      <img src="{{ url ('/portofolio-page5')}}" class="img-fluid" />
                    </div>
                    <div class="title-block">
                      <h4>Computer Networks</h4>
                      <p>Chatting Aplication</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="{{ url ('/portofolio-page6')}}">
                  <div class="img-block">
                    <div class="wrapper-img">
                      <img src="images/portfolio/6.jpg" class="img-fluid" />
                    </div>
                    <div class="title-block">
                      <h4>Artificial Inteligent</h4>
                      <p>Sudoku Solver using Heuristics Seacrh Backtracking</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Modal -->
    <section id="portfolios-modal">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Add Portfolio
      </button>

      <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Add Portfolio</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body (form content) -->
            <div class="modal-body">
              <form id="myForm" action="/portofolio" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" class="form-control" name="judul" id="judul">
                  @error('judul')
                  <div class="alert alert-danger">{{$message}}</div>
                  @enderror

                  <label for="subjudul">Sub Judul</label>
                  <input type="text" class="form-control" name="subjudul" id="subjudul">
                  @error('subjudul')
                  <div class="alert alert-danger">{{$message}}</div>
                  @enderror

                  <label for="subjudul">Content</label>
                  <input type="text" class="form-control" name="content" id="content">
                  @error('content')
                  <div class="alert alert-danger">{{$message}}</div>
                  @enderror

                  <label for="judul">Link</label>
                  <input type="text" class="form-control" name="link" id="link">
                  @error('link')
                  <div class="alert alert-danger">{{$message}}</div>
                  @enderror

                  <label for="gambar">Gambar</label>
                  <input type="file" class="form-control" name="gambar" id="gambar">
                  @error('gambar')
                  <div class="alert alert-danger">{{$message}}</div>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="testimonials">
      <div
        class="background bg-img bg-fixed section-padding pb-0"
        data-background="images/banner.jpg"
      >
        <div class="container">
          <div class="row">
            <div class="col-md-6 mb-30">
              <h4 class="wow" data-splitting>
                Need help with professional support? Let's work together!
              </h4>
              <div
                class="btn-wrap mt-30 text-left wow fadeInUp"
                data-wow-delay=".6s"
              >
                <div class="btn-link">
                  <a href="mailto:agnesmarbun2311@gmail.com"
                    >agnesmarbun2311@gmail.com</a
                  >
                  <span class="btn-block color3 animation-bounce"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        fo
      </div>
    </section>
    <!-- Footer -->
    <footer class="agnes-footer-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h5>Get in touch</h5>
            <a href="mailto:agnesmarbun2311@gmail.com"
              >agnesmarbun2311@gmail.com</a
            >
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

          <!-- @if(auth()->check())
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <a href="{{route('logout')}}" class="btn btn-primary">Logout</a>
            </form>
          @endif -->

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
