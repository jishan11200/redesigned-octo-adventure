
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Silk Container Lines Ltd</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon11.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1 class="text-light"><a href="/"><span><img src="assets/img/scl-logo@2x-1.png" alt="" srcset=""></span></a></h1>
        
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active " href="/">HOME</a></li>
          <li class="dropdown"><a href="{{ url('/about') }}"><span>ABOUT</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('/work') }}">OUR WORK</a></li>
              <li><a href="{{ url('/mission') }}">OUR MISSION</a></li>
              <li><a href="{{ url('/approch') }}">OUR APPROCH</a></li>
              <li><a href="{{ url('/executive-team') }}">EXECUTIVE TEAM</a></li>
              <li><a href="{{ url('/carriers') }}">CARRIERS</a></li>
              <li><a href="{{ url('/awards') }}">AWARDS & CERTIFICATE</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="{{ url('/services') }}"><span>SERVICES</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('/ocean-freight') }}">GLOBAL OCEAN FREIGHT</a></li>
              <li><a href="{{ url('/air-freight') }}">GLOBAL AIR FREIGHT </a></li>
              <li><a href="{{ url('/consolidation') }}">CONSOLIDATION</a></li>
              <li><a href="{{ url('/pomanagement') }}">P.O.MANAGEMENT</a></li>
              <li><a href="{{ url('/warehouse') }}">WAREHOUSE</a></li>
              <li><a href="{{ url('/inland-tracking') }}">INLAND TRACKING</a></li>
              <li><a href="{{ url('/custom-brokerage') }}">CUSTOM BROKERAGE</a></li>
              <li class="dropdown"><a href="{{ url('/specialized') }}"><span>SPECIALIZED SERVICES</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="{{ url('/door-delivery') }}">DOOR DELIVERY</a></li>
                  <li><a href="{{ url('/pharmaceutical') }}">PHARMACEUTICAL</a></li>
                  <li><a href="{{ url('/seafood') }}">SEA FOOD</a></li>
                  <li><a href="{{ url('/dg-goods') }}">DG GOODS</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>E-SERVICES</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('/easy') }}">EASY</a></li>
              <li><a href="{{ url('/stay-connected') }}">STAY CONNECTED</a></li>
              <li><a href="{{ url('/workflow') }}">WORKFLOW</a></li>
              <li><a href="{{ url('/visibility') }}">VISIBILITY</a></li>
              <li><a href="{{ url('/business-iq') }}">BUSINESS IQ</a></li>
              {{-- <li class="dropdown"><a href="#"><span>GET STARTED</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">CREATE AN A/C</a></li>
                  <li><a href="#">CUSTOMER LOGIN</a></li>
                </ul>
              </li> --}}
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>CUSTOMER TOOLS</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('/advisories') }}">ADVISORIES</a></li>
              {{-- <li><a href="#">TRACKING CENTER</a></li>
              <li><a href="#">BOOK A SHIPMENT</a></li> --}}
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>RESOURCE</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ url('/glossary') }}">GLOSSARY</a></li>
              <li><a href="{{ url('/faq') }}">F.A.Q</a></li>
            </ul>
          </li>
          <li><a href="{{url('/newsroom')}}">NEWSROOM</a></li>
          <li><a href="{{url('/contact')}}">CONTACT US</a></li>

          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Silk Container Lines Ltd</span></h2>
          <p class="animate__animated animate__fadeInUp">Welcome to Silk Container Ltd, your trusted partner in the world of freight forwarding and logistics. With a steadfast commitment to simplifying the complexities of global shipping, we have established ourselves as leaders in the industry. The organizational goal of Cosmos Logistics Ltd is to be regarded as the premier freight forwarding company in Bangladesh providing customers</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Get Instant
            Quote</a>
        </div>
      </div>

      <!-- Slide 2 -->
      {{-- <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Mission</h2>
          <p class="animate__animated animate__fadeInUp">Our mission is to empower your business by providing efficient, reliable, and cost-effective freight forwarding solutions. We understand that the smooth flow of goods is the lifeblood of international trade, and we are here to ensure your cargo reaches its destination seamlessly</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div> --}}

      <!-- Slide 3 -->
      {{-- <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Approach</h2>
          <p class="animate__animated animate__fadeInUp">To be a reputed and preferred name in the freight forwarding business by providing global logistics service having our own people, offices and infrastructure.</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div> --}}

      {{-- <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a> --}}

      {{-- <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a> --}}

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Ocean Freight</a></h4>
              <p class="description">The Silk Container Lines Ltd. ocean product range offers an assortment of administrations to meet your sea gracefully chain needs. Every item has been created to fulfill your high guidelines for door-to-door transport services, and everything in the middle.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Air Freight</a></h4>
              <p class="description">We provide extensive Air Freight Services, making the world smaller for all cargo requirements with space reserved on the world’s leading commercial airlines to and from major destinations worldwide.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Cargo Express</a></h4>
              <p class="description">Cargo Express Trailers, we are focused on being the best rather than the biggest. Given our focus on quality above all else, it’s easy to see why Cargo Express makes the best value-driven, high-quality cargo utility trailers.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Warehousing</a></h4>
              <p class="description">Warehousing is an important part of the freight forwarding process because it provides a safe and secure space for items to be stored before they are sent to their final destination.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="assets/img/8.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">AIR FREIGHT SOLUTIONS</a></h4>
              <p class="description">NO HASSLE. NO RUNAROUND. JUST LOGISTICS. WE MAKE AIR FREIGHT SIMPLE.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">INTERNATIONAL FREIGHT FORWARDER</a></h4>
              <p class="description">WORLD-CLASS, INTEGRATED, ALL-IN-ONE LOGISTICS FOR COMMERCIAL SHIPMENTS</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">

        <div class="section-title">
          <h2>Features</h2>
          <p>These features collectively contribute to a comprehensive and user-friendly freight forwarding </p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/features-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h3>Fashion and Lifestyle</h3>
            <p class="fst-italic">
              Discover and have a sneak peek at what SCL supply chain management solutions have to offer for the fashion and lifestyle sectors.
            </p>
            {{-- <ul>
              <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            </ul> --}}
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/features-2.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>Latest Technology</h3>
            <p>
              The Logistics industry makes good use of innovative technology for a better future. Faced with the challenges and opportunities of the digital age, it is imperative for enterprises, especially small and medium-sized enterprises, to make good use of innovation and technology.
            </p>
            <h3>Safe in Insured</h3>
            <p>
              The Logistics industry makes good use of innovative technology for a better future. Faced with the challenges and opportunities of the digital age, it is imperative for enterprises, especially small and medium-sized enterprises, to make good use of innovation and technology.
            </p>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/features-3.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5">
            <h3>Timely Delivery</h3>
            <p>The Logistics industry makes good use of innovative technology for a better future. Faced with the challenges and opportunities of the digital age, it is imperative for enterprises, especially small and medium-sized enterprises, to make good use of innovation and technology.</p>
            <ul>
              <li><i class="bi bi-check"></i> Real-Time Tracking and Visibility</li>
              <li><i class="bi bi-check"></i> Proactive Communication</li>
              <li><i class="bi bi-check"></i> Collaboration with Customs Authorities</li>
              <li><i class="bi bi-check"></i> Predictive Analytics</li>
              <li><i class="bi bi-check"></i> Warehouse Efficiency</li>
              <li><i class="bi bi-check"></i> Integrated Systems</li>
            </ul>
          </div>
        </div>

        

      </div>
    </section><!-- End Features Section -->

     <!-- ======= Features Section ======= -->
     <section class="features">
      <div class="container">

        <div class="section-title">
          <h2>Client</h2>
          {{-- <p>These features collectively contribute to a comprehensive and user-friendly freight forwarding </p> --}}
        </div>

        

        

      </div>
    </section><!-- End Features Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

   

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/about') }}">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/services') }}">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/ocean-freight') }}">Ocean Freight</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/air-freight') }}">Air Freight</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/consolidation') }}">Consolidation</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/pomanagement') }}">P. O. Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/warehouse') }}">Warehousing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/inland-tracking') }}">Inland Tracking</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ url('/custom-brokerage') }}">Custom Brokerage</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <h4>Dhaka Office</h4>
            <p>
              69/1,Bir Uttam Qazi Nuruzzaman Road Panthapath,11B,Chandrashila Suvastu Tower,Dhaka-1205</p>
              <strong>Phone:</strong>+880 2 9641244-5<br>
              <strong>Email:</strong> sorowar@silk-container.com<br><br>
            <h4>CHATTOGRAM OFFICE</h4>
            <p>
              Shafi Bhaban (2nd Floor) 1216/A, SK. Mujib Road Chattogram- 4100, Bangladesh</p>
              <strong>Phone:</strong>+8802333310054<br>
              <strong>Email:</strong> shankar@silk-container.com<br>
              <br>
            <h4>UK OFFICE</h4>
            <p>
              3rd floor,86-90 Paul Street,London EC2A4NE</p>
              <strong>Phone:</strong>+4407480876060<br>
              <strong>Email:</strong> sales.uk@silk-container.com<br>
            <br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About Silk Container Lines Ltd</h3>
            <p>Today Silk Container Lines Ltd. become a renowned and have placed among top ten leading local Freight Forwarding company in Bangladesh.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>silk-container.com</span></strong>. All Rights Reserved
      </div>
    
    </div>
  </footer>
 <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>