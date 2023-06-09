<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>CREEK</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="assets/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="assets/css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="" />
          </a>
          <div class="navbar-collapse" id="">
            <ul class="navbar-nav justify-content-between ">
              <div class="User_option">
                <li class="">
                  <a class="mr-4" href="">
                    Login
                  </a>
                  <a class="" href="">
                    Sign up
                  </a>
                </li>
              </div>
            </ul>
  
            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1">
  
                </span>
                <span class="s-2">
  
                </span>
                <span class="s-3">
  
                </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="index.html">HOME</a>
                <a href="about.html">ABOUT</a>
                <a href="house.html">HOUSE</a>
                <a href="price.html">PRICING</a>
                <a href="contact.html">CONTACT US</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4 offset-md-1">
            <div class="detail-box">
              <h1>
                <span> Modern</span> <br>
                Apartment <br>
                House
              </h1>
              <p>
                Welcome to our modern apartment homes limited we are dedicated to offer the best housing conditions at the cheapest prices
              </p>
              <div class="btn-box">
                <a href="" class="">
                  Read More
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- find section -->
  <section class="find_section ">
    <div class="container">
      <form action="">
        <div class=" form-row">
          <div class="col-md-5">
            <input type="text" class="form-control" placeholder="Search Your Categories ">
          </div>
          <div class="col-md-5">
            <input type="text" class="form-control" placeholder="Location ">
          </div>
          <div class="col-md-2">
            <button type="submit" class="">
              search
            </button>
          </div>
        </div>

      </form>
    </div>
  </section>

  <!-- end find section -->


  <!-- about section -->
   @include('frontend.about');
 
  <!-- end about section -->

  <!-- sale section -->

  <section class="sale_section layout_padding-bottom">
    <div class="container-fluid">
      <div class="heading_container">
        <h2>
          House For Sale
        </h2>
        <p>
          Our apartments has a wide range of modern features and beautiful surroundings
        </p>
      </div>
      <div class="sale_container">
        <div class="box">
          <div class="img-box">
            <img src="images/s-1.jpg" alt="">
          </div>
          <div class="detail-box">
            <h6>
              EXTERNAL VIEW
            </h6>
            <p>
              With our planted flowers the storey apartments has a beautiful appearance
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/s-2.jpg" alt="">
          </div>
          <div class="detail-box">
            <h6>
              WORKSTATIONS
            </h6>
            <p>
              The apartments have a spacious built in workstations with comfortable areas of relaxing
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/s-3.jpg" alt="">
          </div>
          <div class="detail-box">
            <h6>
              LIVING ROOMS
            </h6>
            <p>
              The furnitures on our living rooms provide luxurious coaches and modern televion stands,with HD smart TVs
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/s-4.jpg" alt="">
          </div>
          <div class="detail-box">
            <h6>
               AERIAL VIEW
            </h6>
            <p>
              The apartments have a beautiful aerial view that are beautifully painted
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/s-5.jpg" alt="">
          </div>
          <div class="detail-box">
            <h6>
              APARTMENT'S DINNER ROOM
            </h6>
            <p>
              Dinner rooms provide a full packaged environment with appropriate furnitures
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/s-6.jpg" alt="">
          </div>
          <div class="detail-box">
            <h6>
              APARTMENTS ROOFTOP
            </h6>
            <p>
              More secure rooftops provided with large view of the great Indian Ocean
            </p>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          Find More
        </a>
      </div>
    </div>
  </section>

  <!-- end sale section -->

  <!-- price section -->

  <section class="price_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Pricing
        </h2>
        <p>
          Prices range between the Basic,Standard and the premium depending on the quality and size of the apartments
        </p>
      </div>
      <div class="price_container">
        <div class="box">
          <div class="detail-box">
            <div class="heading-box">
              <h4>
                01
              </h4>
              <h6>
                Basic
              </h6>
            </div>
            <div class="text-box">
              <h2>
                $4500.00
              </h2>
              <ul>
                <li>
                 0ne bedroom apartments
                </li>
                <li>
                  one balcony
                </li>
                <li>
                  Spacious kitchen
                </li>
                <li>
                  Fully furnished living room
                </li>
                <li>
                  Dinner room
                </li>
                <li>
                 Workstation
                </li>
              </ul>
            </div>
          </div>
          <div class="btn-box">
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <div class="detail-box">
            <div class="heading-box">
              <h4>
                02
              </h4>
              <h6>
                Standard
              </h6>
            </div>
            <div class="text-box">
              <h2>
                $7500.00
              </h2>
              <ul>
                <li>
                  Two bedroom apartments,
                </li>
                <li>
                  2 washrooms ,
                </li>
                <li>
                 Fully furnished kitchen,
                </li>
                <li>
                  Workstation,
                </li>
                <li>
                  Dinner room,
                </li>
                <li>
                  Fully furnished living room
                </li>
              </ul>
            </div>
          </div>
          <div class="btn-box">
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <div class="detail-box">
            <div class="heading-box">
              <h4>
                03
              </h4>
              <h6>
                Premium
              </h6>
            </div>
            <div class="text-box">
              <h2>
                $9000.00
              </h2>
              <ul>
                <li>
                  Three bedrooms
                </li>
                <li>
                  Three washrooms for each bedroom
                </li>
                <li>
                  Spacious living room,
                </li>
                <li>
                Fully furnished kitchen
                </li>
                <li>
                  Spacious Workstation
                </li>
                <li>
                  Balcony with ocean view
                </li>
              </ul>
            </div>
          </div>
          <div class="btn-box">
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end price section -->

  <!-- deal section -->

  <section class="deal_section layout_padding-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Very Good Deal For House
              </h2>
            </div>
            <p>
              Discounts up to 8.5% are allowed on cash pay!
              Hurry, buy your apartment at the cheapest price now.
            </p>
            <a href="">
              Get A Quote
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <div class="box b1">
              <img src="images/d-1.jpg" alt="">
            </div>
            <div class="box b1">
              <img src="images/d-2.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end deal section -->


  <!-- us section -->
  <section class="us_section layout_padding2">

    <div class="container">
      <div class="heading_container">
        <h2>
          Why Choose Us
        </h2>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="box">
            <div class="img-box">
              <img src="images/u-1.png" alt="">
            </div>
            <div class="detail-box">
              <h3 class="price">
                1000+
              </h3>
              <h5>
                Years of House
              </h5>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="box">
            <div class="img-box">
              <img src="images/u-2.png" alt="">
            </div>
            <div class="detail-box">
              <h3>
                20000+
              </h3>
              <h5>
                Projects Delivered
              </h5>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="box">
            <div class="img-box">
              <img src="images/u-3.png" alt="">
            </div>
            <div class="detail-box">
              <h3>
                10000+
              </h3>
              <h5>
                Testmonials
              </h5>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="box">
            <div class="img-box">
              <img src="images/u-4.png" alt="">
            </div>
            <div class="detail-box">
              <h3>
                1500+
              </h3>
              <h5>
                Cheap Rates
              </h5>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          Get A Quote
        </a>
      </div>
    </div>
  </section>

  <!-- end us section -->

  <!-- client secction -->

  <section class="client_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container">
        <h2>
          What Our Customers Say
        </h2>
      </div>
      <div class="client_container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="box">
                <div class="img-box">
                  <img src="images/client.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    <span>Marcus Mastin</span>
                    <hr>
                  </h5>
                  <p>
                    The apartments have good conditions and its mysterious how the prices are extremely low.I would love to get several such apartments in the near future
                    
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="box">
                <div class="img-box">
                  <img src="images/client.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    <span>Majority</span>
                    <hr>
                  </h5>
                  <p>
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration
                    in some form, by injected humour, or randomised words which don't look even slightly believable.
                  </p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="box">
                <div class="img-box">
                  <img src="images/client.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    <span>Majority</span>
                    <hr>
                  </h5>
                  <p>
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration
                    in some form, by injected humour, or randomised words which don't look even slightly believable.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>

      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- contact section -->

 @include('frontend.Contact');
  <!-- end contact section -->



  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h5>
              About Apartment
            </h5>
            <div>
              <div class="img-box">
                <img src="images/location.png" width="18px" alt="">
              </div>
              <p>
                Address
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/phone.png" width="12px" alt="">
              </div>
              <p>
                +254795523526
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="images/mail.png" width="18px" alt="">
              </div>
              <p>
                poenga230@gmail.com
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_info">
            <h5>
              Contact Information
            </h5>
            <p>
             linkedin: Peter Oenga
             Github:Peter-Oenga
            </p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="info_links">
            <h5>
              Useful Link
            </h5>
            <ul>
              <li>
                <a href="">
                  >Downloads
                </a>
              </li>
              <li>
                <a href="">
                  >available houses
                </a>
              </li>
              <li>
                <a href="">
                  >location
                </a>
              </li>
              <li>
                <a href="">
                  >prices
                </a>
              </li>
              <li>
                <a href="">
                </a>
              </li>
              <li>
                <a href="">
                  >limited
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_form ">
            <h5>
              Newsletter
            </h5>
            <form action="">
              <input type="email" placeholder="Enter your email">
              <button>
                Subscribe
              </button>
            </form>
            <div class="social_box">
              <a href="">
                <img src="images/fb.png" alt="">
              </a>
              <a href="">
                <img src="images/twitter.png" alt="">
              </a>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
              <a href="">
                <img src="images/youtube.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->


  <!-- footer section -->
  <section class="container-fluid footer_section ">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Peter Oenga</a>
      </p>
    </div>
  </section>
  <!-- end  footer section -->


  <script type="assets/text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="assets/text/javascript" src="js/bootstrap.js"></script>
  <script type="assets/text/javascript" src="js/custom.js"></script>


</body>

</html>