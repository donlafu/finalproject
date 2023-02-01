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
                <h2 class="animate__animated animate__fadeInDown">Shop this look</h2>
                <p class="animate__animated animate__fadeInUp">Get inspired and make our interior designs your own.</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/8.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">February Sale!</h2>
                <p class="animate__animated animate__fadeInUp">Hurry and choose your favorite designs!</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/9.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Shop this look</h2>
                <p class="animate__animated animate__fadeInUp">Get inspired and make our interior designs your own.</p>
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

    @include('homepage.includes.services')

    @include('homepage.includes.hotsales')

    @include('homepage.products.products')

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
          {{--   <div class="row wesome-project-1 fix">
            <!-- Start Portfolio -page -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">Ancient Pillows</li>
                <li data-filter=".filter-card">Spring Mattress</li>
                <li data-filter=".filter-web">Sofas</li>
                <li data-filter=".filter-web">Fiber Pillows</li>
                <li data-filter=".filter-web">Wall Shelves + Brackets</li>
                <li data-filter=".filter-web">Accent Tables</li>
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
                      <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/1.png">
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
                      <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/2.png">
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
                      <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/3.png">
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
                      <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/4.png">
                        <h4>Fiber Pillows</h4>

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
                      <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/5.png">
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
                      <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/6.png">
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



      @include('homepage.includes.about')








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

  @include('homepage.includes.peopleandplanet')

  @include('homepage.includes.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@endsection
