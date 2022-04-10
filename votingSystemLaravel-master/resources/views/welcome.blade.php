<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HomePage</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ URL::asset('/asset/home/assets/img/favicon.png')}}" rel="icon">
  <link href="{{ URL::asset('/asset/home/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ URL::asset('/asset/home/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('/asset/home/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('/asset/home/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('/asset/home/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('/asset/home/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('/asset/home/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ URL::asset('/asset/home/assets/css/style.css')}}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="index.html"><span>Voting</span>System</a></h1>
        
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a href="#blog">Partner</a></li>
          <li class="dropdown"><a href="#"><span>LogIn</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/voterLogin">Login Voter</a></li>
              <li><a href="/login">Login Candidate</a></li>
              <li><a href="/commissionerLogin">Login Commissioner</a></li>
              <li class="dropdown"><a href="#"><span>registration</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="/voterSignUp">Voter</a></li>
                  <li><a href="/register">Candidate</a></li>
                 
                </ul>
              </li>
             
              
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(asset/home/assets/img/hero-carousel/1.png)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Harry Emerson Fosdick </h2>
                <p class="animate__animated animate__fadeInUp">Democracy is based upon the conviction there are extraordinary possibilities in ordinary people</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(asset/home/assets/img/hero-carousel/2.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Sharon Salzberg</h2>
                <p class="animate__animated animate__fadeInUp">Voting is the expression of our commitment to ourselves, one another, this country, and this world</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(asset/home/assets/img/hero-carousel/3.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Monica Crowley</h2>
                <p class="animate__animated animate__fadeInUp">Voting is as much an emotional act as it is an intellectual one</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <div id="about" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>About Voting System</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img src="asset/home/assets/img/about/1.jpg" alt="">
                </a>
              </div>
            </div>
          </div>
          <!-- single-well end-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
                <a href="#">
                  <h4 class="sec-head">voting System Management</h4>
                </a>
                <p>
                    An online voting system is a software platform that allows groups to securely conduct votes and elections. High-quality online voting systems balance ballot security, accessibility and the overall requirements of an organization's voting event
                </p>
                <ul>
                  <li>
                    <i class="bi bi-check"></i> Cost Savings and Efficiency
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Voter Accessibility
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Auditability and Verifiability
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Security, Confidence, and Trust in Election Results
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Organizational leader
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- End col-->
        </div>
      </div>
    </div><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <div id="services" class="services-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2>Our Services</h2>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <!-- Start Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-briefcase"></i>
                  </a>
                  <h4>A reliable voting tool for groups</h4>
                  <p>
                    Run online elections among groups for a single important event. Or manage consistent, recurring votes.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-card-checklist"></i>
                  </a>
                  <h4>Key electronic voting features</h4>
                  <p>
                    Never again worry about people voting twice or other forms of vote manipulation. Get results instantly. Dive deeper into vote statistics
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-bar-chart"></i>
                  </a>
                  <h4>App-based voting platform</h4>
                  <p>
                    Send eligible voters to a personalized voting website, no online voting app download required
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-binoculars"></i>
                  </a>
                  <h4>A pleasant way to cast votes </h4>
                  <p>
                    Your voters deserve a fair and easy to use voting website, accessible from any device.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-brightness-high"></i>
                  </a>
                  <h4>Flexible implementation options</h4>
                  <p>
                    Choose how involved you want to be. Self-administer your vote or let us manage the voting experience
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-calendar4-week"></i>
                  </a>
                  <h4>Online election system integrations</h4>
                  <p>
                    Each vote is unique. Customization options include technical integrations, paper ballots, vote consulting, and more
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Services Section -->

    <!-- ======= Team Section ======= -->
    <div id="team" class="our-team-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Our Team Members</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                  <img src="asset/home/assets/img/team/1.jpg" alt="">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="bi bi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Super Admin</h4>
                <p>Admin</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                  <img src="asset/home/assets/img/team/2.jpg" alt="">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="bi bi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Andrew Arnold</h4>
                <p>Web Developer</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                  <img src="asset/home/assets/img/team/3.jpg" alt="">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="bi bi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Lellien Linda</h4>
                <p>Web Design</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                  <img src="asset/home/assets/img/team/4.jpg" alt="">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="bi bi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Jhon Powel</h4>
                <p>Seo Expert</p>
              </div>
            </div>
          </div>
          <!-- End column -->
        </div>
      </div>
    </div><!-- End Team Section -->

    <!-- ======= Rviews Section ======= -->
    <div class="reviews-area">
      <div class="row g-0">
        <div class="col-lg-6">
          <img src="asset/home/assets/img/about/2.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6 work-right-text d-flex align-items-center">
          <div class="px-5 py-5 py-lg-0">
            <h2>Connecting with us</h2>
            <h5>To Make sure your decision-making process modern, secure, and effective</h5>
            <a href="#contact" class="ready-btn scrollto">Contact us</a>
          </div>
        </div>
      </div>
    </div><!-- End Rviews Section -->

    <!-- ======= Portfolio Section ======= -->
    <div id="portfolio" class="portfolio-area area-padding fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Our Portfolio</h2>
            </div>
          </div>
        </div>
        <div class="row wesome-project-1 fix">
          <!-- Start Portfolio -page -->
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row awesome-project-content portfolio-container">

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app portfolio-item">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="asset/home/assets/img/portfolio/1.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="asset/home/assets/img/portfolio/1.jpg">
                      <h4>Vote</h4>
                      <span>Mobile app</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="asset/home/assets/img/portfolio/2.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="asset/home/assets/img/portfolio/2.jpg">
                      <h4>Vote</h4>
                      <span>Web</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-card">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="asset/home/assets/img/portfolio/3.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="asset/home/assets/img/portfolio/3.jpg">
                      <h4>Vote</h4>
                      <span>Card</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="asset/home/assets/img/portfolio/4.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="asset/home/assets/img/portfolio/4.jpg">
                      <h4>Vote</h4>
                      <span>Web</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="asset/home/assets/img/portfolio/5.jpg" alt="" /></a>
                <div class="add-actions text-center text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="asset/home/assets/img/portfolio/5.jpg">
                      <h4>Vote</h4>
                      <span>Mobile App</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="asset/home/assets/img/portfolio/6.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="asset/home/assets/img/portfolio/6.jpg">
                      <h4>Vote</h4>
                      <span>Web</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

        </div>
      </div>
    </div><!-- End Portfolio Section -->

    <!-- ======= Pricing Section ======= -->
    <div id="pricing" class="pricing-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Pricing Table</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list">
              <h3>basic <br /> <span>$80 / month</span></h3>
              <ol>
                <li class="check"><i class="bi bi-check"></i><span>Online system</span></li>
                <li class="check"><i class="bi bi-x"></i><span>Full access</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Free apps</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Multiple Voters</span></li>
                <li class="cross"><i class="bi bi-x"></i><span>Multiple candidates</span></li>
                <li class="cross"><i class="bi bi-x"></i><span>Support unlimited</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Payment online</span></li>
                <li class="check"><i class="bi bi-x"></i><span>Cash back</span></li>
              </ol>
              <button>sign up now</button>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list active">
              <span class="saleon">top sale</span>
              <h3>standard <br /> <span>$110 / month</span></h3>
              <ol>
                <li class="check"><i class="bi bi-check"></i><span>Online system</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Full access</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Free apps</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Multiple voters</span></li>
                <li class="cross"><i class="bi bi-x"></i><span>Multiple candidates</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Support unlimited</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Payment online</span></li>
                <li class="cross"><i class="bi bi-x"></i><span>Cash back</span></li>
              </ol>
              <button>sign up now</button>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list">
              <h3>premium <br /> <span>$150 / month</span></h3>
              <ol>
                <li class="check"><i class="bi bi-check"></i><span>Online system</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Full access</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Free apps</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Multiple voters</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Multiple candidates</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Support unlimited</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Payment online</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Cash back</span></li>
              </ol>
              <button>sign up now</button>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Pricing Section -->

    <!-- ======= Testimonials Section ======= -->
    <div id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="asset/home/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="asset/home/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="asset/home/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="asset/home/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="asset/home/assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </div><!-- End Testimonials Section -->

    <!-- ======= Blog Section ======= -->
    <div id="blog" class="blog-area">
      <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Our Partner</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="asset/home/assets/img/blog/1.jpg" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#"></a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="http://www.nidw.gov.bd/index.php">Bangladesh Election commission</a>
                  </h4>
                  <p>
                    Bangladesh elects on national level a legislature with one house or chamber. The unicameral Jatiyo Sangshad, meaning national parliament, has 350 members
                   
                  </p>
                </div>
                <span>
                  <a href="http://www.nidw.gov.bd/index.php" class="ready-btn">Learn more</a>
                </span>
              </div>
              <!-- Start single blog -->
            </div>
            <!-- End Left Blog-->
            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="asset/home/assets/img/blog/2.jpg" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#"></a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="https://daffodilvarsity.edu.bd/">Daffodil International University</a>
                  </h4>
                  <p>
                    Daffodil International University is a private university located in Dhaka, Bangladesh. The original campus is located at Dhanmondi and the permanent campus is located in Daffodil Smart City, Khagan, Ashulia, Savar which is in Dhaka District.
                  </p>
                </div>
                <span>
                  <a href="https://daffodilvarsity.edu.bd/" class="ready-btn">Learn more</a>
                </span>
              </div>
              <!-- Start single blog -->
            </div>
            <!-- End Left Blog-->
            <!-- Start Right Blog-->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="asset/home/assets/img/blog/3.jpg" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#"></a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>
                  </span>
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="https://www.simplyvoting.com/">Simply Voting</a>
                  </h4>
                  <p>
                    Over 4000 organizations from 67 countries rely on Simply Voting for their election needs.Our secure protocols, ease-of-use and flexible solutions transform elections across industries. Get in touch with us to learn how we can run your next election together.
                  </p>
                </div>
                <span>
                  <a href="https://www.simplyvoting.com/" class="ready-btn">Learn more</a>
                </span>
              </div>
            </div>
            <!-- End Right Blog-->
          </div>
        </div>
      </div>
    </div><!-- End Blog Section -->

    <!-- ======= Suscribe Section ======= -->
    <div class="suscribe-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
            <div class="suscribe-text text-center">
              <h3>Welcome to our Online Voting System</h3>
              <a class="sus-btn" href="#">Login</a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Suscribe Section -->

    <!-- ======= Contact Section ======= -->
    <div id="contact" class="contact-area">
      <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Contact us</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-phone"></i>
                  <p>
                    Call: +8801773076775<br>
                    <span>Monday-Friday (9am-8pm)</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-envelope"></i>
                  <p>
                    Email: votingsystem@gmail.com<br>
                    <span>Web: www.votingsystem.com</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-geo-alt"></i>
                  <p>
                    102 Sukrabad, Mirpur Road<br>
                    <span>Dhaka 1207 Bangladesh</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">

            <!-- Start Google Map -->
            <div class="col-md-6">
              <!-- Start Map -->
           

              <iframe src="https://www.google.com/maps/d/embed?mid=1DA3oU1bJLKevmpUej54D9NJYOhg&ehbc=2E312F" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
              <!-- End Map -->
            </div>
            <!-- End Google Map -->

            <!-- Start  contact -->
            <div class="col-md-6">
              <div class="form contact-form">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                  </div>
                  <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                  </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
              </div>
            </div>
            <!-- End Left contact -->
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>Voting</span>System</h2>
                </div>

                <p>Our online election security measures protect you, your data, and your organization against risk</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="bi bi-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-instagram"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <p>
                    102 Sukrabad, Mirpur Road Dhaka 1207 Bangladesh
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> +8801773076775</p>
                  <p><span>Email:</span> votingsystem@gmail.com</p>
                  <p><span>Working Hours:</span> 9am-8pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Instagram</h4>
                <div class="flicker-img">
                  <a href="#"><img src="asset/home/assets/img/portfolio/1.jpg" alt=""></a>
                  <a href="#"><img src="asset/home/assets/img/portfolio/2.jpg" alt=""></a>
                  <a href="#"><img src="asset/home/assets/img/portfolio/3.jpg" alt=""></a>
                  <a href="#"><img src="asset/home/assets/img/portfolio/4.jpg" alt=""></a>
                  <a href="#"><img src="asset/home/assets/img/portfolio/5.jpg" alt=""></a>
                  <a href="#"><img src="asset/home/assets/img/portfolio/6.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>VotingSystem</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              
              Designed for <a href="#">DIU</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ URL::asset('/asset/home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ URL::asset('/asset/home/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ URL::asset('/asset/home/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ URL::asset('/asset/home/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ URL::asset('/asset/home/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ URL::asset('/asset/home/assets/js/main.js')}}"></script>

</body>

</html>