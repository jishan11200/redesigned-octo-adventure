
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact | Silk Container Lines Ltd</title>
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


  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
  alpha/css/bootstrap.css" rel="stylesheet">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" 
  href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex justify-content-between align-items-center">

      {{-- <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Moderna</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div> --}}

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
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <h3>DHAKA OFFICE</h3>
                  <p class=" m-2 p-2">69/1,Bir Uttam Qazi Nuruzzaman Road Panthapath,11B,Chandrashila Suvastu Tower,Dhaka-1205</p>
                  <h3>CHATTOGRAM OFFICE</h3>
                  <p class="p-2">Shafi Bhaban (2nd Floor) 1216/A, SK. Mujib Road Chattogram- 4100, Bangladesh</p>

                  <h3>UK OFFICE</h3>
                  <p class="p-2">3rd floor,86-90 Paul Street,London EC2A4NE</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <h3>DHAKA OFFICE</h3>
                  <p>sorowar@silk-container.com</p>
                  <h3>CHATTOGRAM OFFICE</h3>
                  <p>shankar@silk-container.com</p>
                  <h3>UK OFFICE</h3>
                  <p>sales.uk@silk-container.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <h3>DHAKA OFFICE</h3>
                  <p>+880 2 9641244-5</p>

                  <h3>CHATTOGRAM OFFICE</h3>
                  <p>+8802333310054,<br> 02333317431,<br>02333323218</p>

                  <h3>UK OFFICE</h3>
                  <p>+4407480876060</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">


            @if ($message = Session::get('error'))
            <div class="alert alert-danger">
            <p>{{ $message }}</p>
            </div>
            @endif
            <form action="{{ route('contactForm') }}" method="POST">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="10" placeholder="Message" required></textarea>
              </div>
              
              <br><br>
              <div class="text-center "><button type="submit" class="btn btn-info">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Map Section ======= -->
    <section class="map mt-2">
      <div class="container-fluid p-0">
        <h2 class="text-center">DHAKA OFFICE</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.9128854552937!2d90.38280347997635!3d23.750485733796967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bb33e4c78b%3A0x19640fe40f8513fc!2sSilk%20Container%20Lines%20Ltd.!5e0!3m2!1sen!2sbd!4v1700471791437!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <br><br><br>

        <h2 class="text-center">CHATTOGRAM OFFICE</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.814003828453!2d91.80920087514313!3d22.322872979670407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acdf0023d3ebcb%3A0xa8559c815e28d376!2sSILK%20CONTAINER%20LINES%20LTD%2CCHATTOGRAM%20OFFICE!5e0!3m2!1sen!2sbd!4v1704860895188!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<br> <br>
<br>

        <h2 class="text-center">UK OFFICE</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d620.5809256925737!2d-0.08484302410912342!3d51.52562239369696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761ca55fcfa5e5%3A0x18b5f6c296424be2!2zT0ZGSUNFIDg2LCA5MCBQYXVsIFN0LCBMb25kb24gRUMyQSA0TkUsIOCmr-CngeCmleCnjeCmpOCmsOCmvuCmnOCnjeCmrw!5e0!3m2!1sbn!2sbd!4v1704357582746!5m2!1sbn!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>




       

      </div>
    </section><!-- End Map Section -->

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
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script>
    @if(Session::has('message'))
    toastr.options =
    {
      "closeButton" : true,
      "progressBar" : true
    }
        toastr.success("{{ session('message') }}");
    @endif
  
   
  </script>

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

   <!-- Toaster Alert CDN-->
   

   
   
</body>

</html>
