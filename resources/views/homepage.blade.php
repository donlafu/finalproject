@extends('homepage.layouts.app')

{{-- @section('title','page title') --}}

@section('content')


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="index.html">Mandaue<span>Foam</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      @include('homepage.includes.nav')

    </div>
  </header><!-- End Header -->

  <!-- ======= hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/0.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">The Best Business Information </h2>
                <p class="animate__animated animate__fadeInUp">We're In The Business Of Helping You Start Your Business</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/8.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">At vero eos et accusamus</h2>
                <p class="animate__animated animate__fadeInUp">Helping Business Security & Peace of Mind for Your Family</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/9.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Temporibus autem quibusdam</h2>
                <p class="animate__animated animate__fadeInUp">Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem</p>
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
              <h2>About Us</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img src="assets/img/about/1.jpg" alt="">
                </a>
              </div>
            </div>
          </div>
          <!-- single-well end-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
                <a href="#">
                  <h4 class="sec-head">BEGINNINGS AND HISTORY</h4>
                </a>
                <p>
                    Started in 1971 by Mrs. Rosita T. Uy as a foam manufacturer in Cebu, Mandaue Foam has rapidly grown over the past 50 years because of its commitment to provide its customers with quality and value for money products. Today, Mandaue Foam is one of the country’s top 1000 corporations and has over 30 factories and showrooms nationwide. Its trademark products include its signature Flex Foam and Hotel Quality Gala Bed Mattress.

                    Soon after it started, Mandaue Foam sensed a need in the market for a more complete home store and it began to expand and diversify its product lines to include pillows, sofas, dining tables, bed frames, and other small home items. Today, Mandaue Foam continues to augment its product lines and innovate by offering customized furniture among others.
                </p>
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
                  <a href="#">
                    <img src="assets/img/services/1.png" alt="">
                  </a>
                  <h4>For Everyday Living</h4>
                  <p>
                    We are more than just a foam company. Our products range from furniture to houseware, and many more.
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
                    <a href="#">
                        <img src="assets/img/services/2.png" alt="">
                      </a>
                  <h4>We Customize</h4>
                  <p>
                    Can’t find the perfect furniture you? We help you personalize furniture so you always get the perfect one.
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
                    <a href="#">
                        <img src="assets/img/services/3.png" alt="">
                      </a>
                  <h4>Return Policy</h4>
                  <p>
                    Not satisfied? We guarantee a 30-day return and exchange so you can get the best out of our products.
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
                    <a href="#">
                        <img src="assets/img/services/4.png" alt="">
                      </a>
                  <h4>We Deliver</h4>
                  <p>
                    From our store straight to your door, we deliver our products to you for a hassle-free shopping experience.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->

            <!-- end col-md-4 -->
          {{--   <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-brightness-high"></i>
                  </a>
                  <h4>Seo Expart</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
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
                  <h4>24/7 Support</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Services Section --> --}}

     <!-- ======= Team Section ======= -->
    <div id="team" class="our-team-area area-padding">
        <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
                <h2>Hot Sales</h2>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
                <div class="team-img">
                <a href="#">
                    <img src="assets/img/team/5.png" alt="">
                 </a>
                <div class="team-social-icon text-center">
                    {{--<ul>
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
                    </ul>--}}
                </div>
                </div>
                <div class="team-content text-center">
                <h4>Arlington Sofa</h4>
                <h6>Recliner</h6>
                <p>₱22,500.00</p>
                </div>
            </div>
            </div>
            <!-- End column -->
            <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
                <div class="team-img">
                <a href="#">
                    <img src="assets/img/team/6.png" alt="">
                </a>
                <div class="team-social-icon text-center">
                  {{--  <ul>
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
                    </ul>--}}
                </div>
                </div>
                <div class="team-content text-center">
                <h4>Armina Sofa</h4>
                <h6>Homethearter Sofa</h6>
                <p>₱120,200.00</p>
                </div>
            </div>
            </div>
            <!-- End column -->
            <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
                <div class="team-img">
                <a href="#">
                    <img src="assets/img/team/8.png" alt="">
                </a>
                <div class="team-social-icon text-center">
                    {{--<ul>
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
                    </ul> --}}
                </div>
                </div>
                <div class="team-content text-center">
                <h4>Carlow Sofa</h4>
                <h6>2 Seater Recliner</h6>
                <p>₱35,400.00</p>
                </div>
            </div>
            </div>
            <!-- End column -->
            <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
                <div class="team-img">
                <a href="#">
                    <img src="assets/img/team/9.png" alt="">
                </a>
                <div class="team-social-icon text-center">
                  {{--   <ul>
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
                    </ul> --}}
                </div>
                </div>
                <div class="team-content text-center">
                <h4>Chino Sofa</h4>
                <h6>L-Shape</h6>
                <p>₱29,700.00</p>
                </div>
            </div>
            </div>
            <!-- End column -->
        </div>
        </div>

    </div>

    <!-- End Team Section -->



    <!-- ======= Portfolio Section ======= -->
    <div id="portfolio" class="portfolio-area area-padding fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Breathe New Life to Your Home</h2>
            </div>
          </div>
        </div>
        {{-- <div class="row wesome-project-1 fix">
          <!-- Start Portfolio -page -->
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div> --}}

        <div class="row awesome-project-content portfolio-container">

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app portfolio-item">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="assets/img/portfolio/1.png" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/1.jpg">
                      <h4>Anciet Pillows</h4>

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
                <a href="#"><img src="assets/img/portfolio/2.png" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/2.jpg">
                      <h4>Spring Mattress</h4>

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
                <a href="#"><img src="assets/img/portfolio/3.png" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/3.jpg">
                      <h4>Sofas</h4>

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
                <a href="#"><img src="assets/img/portfolio/4.png" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/4.jpg">
                      <h4>Fiber Pillow</h4>

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
                <a href="#"><img src="assets/img/portfolio/5.png" alt="" /></a>
                <div class="add-actions text-center text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/5.jpg">
                      <h4>Wall Shelves + Brackets</h4>

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
                <a href="#"><img src="assets/img/portfolio/6.png" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/6.jpg">
                      <h4>Accent Tables</h4>

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





    {{--  <!-- ======= Suscribe Section ======= -->
    <div class="suscribe-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
            <div class="suscribe-text text-center">
              <h3>Welcome to our eBusiness company</h3>
              <a class="sus-btn" href="#">Get A quote</a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Suscribe Section -->  --}}

    <!-- ======= Contact Section ======= -->
    <div id="contact" class="contact-area">
      <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Location</h2>
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
                    Call: +1 5589 55488 55<br>
                    <span>Sunday-Saturday (10am-8pm)</span>
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
                    Email: mandauefoam@gmail.com<br>
                    <span>mandauefoam.com.ph</span>
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
                    Location: JC Aquino AVE<br>
                    <span>Butan City, Agusan Del Norte</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">

            <!-- Start Google Map -->
            <div class="col-md-12">
              <!-- Start Map -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3941.3098364725743!2d125.522712514786!3d8.943570193580152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3301c0475f60110b%3A0xc011eb1a725faa40!2sMandaue%20Foam!5e0!3m2!1sen!2sph!4v1672936431215!5m2!1sen!2sph" width="1300
              " height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              <!-- End Map -->
            </div>
            <!-- End Google Map -->

             {{--    <!-- Start  contact -->
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
            <!-- End Left contact -->   --}}
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->
  </main><!-- End #main -->

  @include('homepage.includes.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@endsection
