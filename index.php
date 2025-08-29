<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Safari Camps</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

  <!-- Bootstrap Icons (only include once!) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@400..700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"rel="stylesheet"/>

  <!-- Your custom CSS (must come last!) -->
  <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- start or nav -->
  
<header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <!-- Logo -->
      <a class="navbar-brand" href="#">
        <img src="images/logo.png" alt="logo" width="70" height="70" class="d-inline-block align-text-top">
      </a>

      <!-- Mobile toggler -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar items -->
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <!-- Home -->
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>

          <!-- Safari dropdown -->
          <li class="nav-item dropdown">
            <button class="btn" data-bs-toggle="dropdown">
              Safari <i class="bi bi-chevron-down"></i>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Camps</a></li>
            </ul>
          </li>

          <!-- Camping dropdown -->
          <div class="nav-item dropdown">
            <button class="btn" data-bs-toggle="dropdown">
              Camping <i class="bi bi-chevron-down"></i>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Luxury Tents </a></li>
            </ul>
</div>

          <!-- Contact -->
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>

      <!-- Sign in / Book now buttons -->
     <div class="d-none d-lg-flex gap-2">
  <a class="btn btn-outline-danger custom-nav-btn" href="reservation.html">
    <i class="bi bi-person-circle text-secondary me-2"></i> Sign In
  </a>
  <a class="btn btn-danger custom-nav-btn d-flex align-items-center gap-2" href="reservation.html">
     <img src="images/vector.png" alt="Trip icon" width="18" height="18">
    Plan your trip
  </a>
</div>

    </div>
  </nav>
</header>

  <!-- end of nav -->

  <!-- main content -->
    <section class="tents-container">
      <div class="hero-content">
        <h1 class=" hero-title fw-bold  mt-5">Camps. Safaris. Connect. </h1>
        <p class="lead  d-block d-lg-none text-center">
  Escape the ordinary and discover the wild beauty of nature like never before
</p>

       


          <!-- search form -->
  <div class="container-form my-4 d-none d-md-block">
     <div class="d-flex justify-content-center gap-3 mb-3">
    <a class="btn btn-outline-danger d-flex aling-items-center gap-2" href="reservation.html">
       <img src="images/icon2.png" alt="Trip icon" width="18" height="18">

 <span class="btn-text text-black" style="font-family: 'Ubuntu', sans-serif; font-weight: 700; line-height: 100%; font-size: 13px;">
  Stay With Us
</span>
    </a>

     <a class="btn btn-outline-secondary d-flex align-items-center gap-2" href="reservation.html">
       <span class="btn-text text-secondary" style="font-family: 'Ubuntu', sans-serif; font-weight: 700; line-height: 100%; font-size: 13px;">
  <img src="images/Binoculars.png" alt="Trip icon" width="18" height="18">
   Join a Safari
</span>
</a>

       <a class="btn btn-outline-secondary d-flex align-items-center gap-2" href="reservation.html">
        <span class="btn-text text-secondary" style="font-family: 'Poppins', sans-serif; font-weight: 600; line-height: 100%; font-size: 13px;">
          <img src="images/people.png" alt="Trip icon" width="18" height="18">
       Restourant
      </span>  
      </a>
  </div>

<form class="search-form">
        <div class="form-group">
          <label>Camps</label>
          <select style="border: none;">
            <option>Luxury Tents</option>
            <option>Available Tents</option>
          </select>
        </div>

        <div class="form-group" style="border: none";>
          <label>Check in</label>
          <input type="date" style="border: none; outline: none;">
        </div>

        <div class="form-group">
          <label>Check out</label>
          <input type="date"style="border: none; outline: none;">
        </div>

        <div class="form-group">
          <label>Guests</label>
          <select style="border: none";>
            <option>Guests</option>
            <option>1 Guest</option>
            <option>2 Guests</option>
          </select>
        </div>
       <button type="submit" class="search-btn">Search</button>
      </form>
    </div>
  </div>
  </section>
<!-- end of main content  -->


<!-- The pattern -->
<span>
     <img src="images/bunduz-thick-pattern 3.png" class="img-fluid w-100" alt="Pattern">
</span>





<!-- gallery section -->

<section class="py-5">
  <div class="container">
    <!-- Buttons -->
    <div class="activity-container d-flex justify-content-start gap-4">
      <h2 id="campBtn" class="text-start mb-4">Camp</h2>
      <h2 id="safariBtn" class="text-start mb-4">Safari</h2>
    </div>

    <!-- Camp Section -->
    <div id="camp-section" class="row g-4">
      <!-- Card 1 -->
      <div class="col-md-4 col-sm-6">
        <div class="card card-overlay text-white">
          <img src="images/cabin.jpg" class="card-img" alt="Luxury Tent">
          <div class="card-img-overlay d-flex align-items-end p-3">
            <h5 class="card-title">Pap's Cabin House</h5>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="card card-overlay text-white">
          <img src="images/luxury-tent12.png" class="card-img" alt="Luxury Tent">
          <div class="card-img-overlay d-flex align-items-end p-3">
            <h5 class="card-title">Luxury Tents</h5>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="card card-overlay text-white">
          <img src="images/grounds1.png" class="card-img" alt="Grounds">
          <div class="card-img-overlay d-flex align-items-end p-3">
            <h5 class="card-title">Grounds</h5>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="card card-overlay text-white">
          <img src="images/glamping.jpg" class="card-img" alt="Glamping">
          <div class="card-img-overlay d-flex align-items-end p-3">
            <h5 class="card-title">Glamping</h5>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="card card-overlay text-white">
          <img src="images/restaurant-banner.png" class="card-img" alt="Restaurant">
          <div class="card-img-overlay d-flex align-items-end p-3">
            <h5 class="card-title">Restaurant</h5>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="card card-overlay text-white">
          <img src="images/activity3.png" class="card-img" alt="Activities">
          <div class="card-img-overlay d-flex align-items-end p-3">
            <h5 class="card-title">Activities</h5>
          </div>
        </div>
      </div>
    </div>

    <!-- Safari Section (hidden at first) -->
    <div id="safari-section" class="row g-4 d-none">
      <div class="col-md-4 col-sm-6">
        <div class="card card-overlay text-white">
          <img src="images/safari-camp.jpg" class="card-img" alt="Safari Luxury Tent">
          <div class="card-img-overlay d-flex align-items-end p-3">
            <h5 class="card-title">Experience the thrill of the wild as you journey through breathtaking 
              landscapes filled with elephants, lions, and giraffes.</h5>
          </div>
        </div>
      </div>

     <div class="col-md-4 col-sm-6">
        <div class="card card-overlay text-white">
          <img src="images/about.jpg" class="card-img" alt="Safari Luxury Tent">
          <div class="card-img-overlay d-flex align-items-end p-3">
            <h5 class="card-title">Every safari is a chance to connect with nature, witness untamed beauty,
               and create unforgettable memories in the heart of the wild.</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- About section -->

<section class="about-tents-section text-white  d-flex align-items-center fw-normal fs-6 lh-base font-ubuntu">
  <div class="container py-5">
    <div class="row">
      <div class="col-12 col-md-6">
        <h2 class=" mb-4 heading-underline">About <span>Our Tents</span></h2>

        <p class="aboutus">
          Our luxury tents offer an unforgettable blend of comfort and nature. Designed for travelers seeking unique experiences,
          each tent is fully furnished, spacious, and set in stunning natural surroundings. Whether you're glamping in the wild
          or relaxing under the stars, our tents provide the perfect escape.
        </p>

        <!-- Toggle Button -->
        <div class="mt-3" data-bs-toggle="collapse" data-bs-target="#tentDetails" style="cursor: pointer;">
          <button class="btn btn-danger">Read more <i class="bi bi-chevron-down"></i></button>
        </div>

        <!-- Collapsible Content -->
        <div id="tentDetails" class="collapse mt-2">
          <ul>
            <li>Spacious interiors with queen-sized beds</li>
            <li>Private bathrooms and eco-friendly amenities</li>
            <li>Solar-powered lighting and fans</li>
            <li>Deck with scenic views of nature</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end of About  -->


<!-- start experiences -->

<section class="py-5 bg-light">
  <div class="container">
    <!-- Section Title -->
    <div class="text-center mb-5">
      <h2 class="Experiences fw-bold">Our Most Booked Experiences</h2>
    </div>

    <!-- Card Row -->
    <div class="row g-4 ">
      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="card experiences shadow-sm h-100 text-white">
        <img src="images/luxury-tent12.png" class="card-img-top  h-200" alt="Luxury Tented Retreat">
          <div class="card-img-overlay d-flex flex-column justify-content-end p-3">
            <h5 class="card-title">Luxury Tented Retreat</h5>
            <p class="card-text mb-1"><strong>Duration:</strong> 2 - 3 Nights</p>
            <p class="card-text"><strong>Price Range:</strong> KES 18,000–25,000 per night</p>
             <a href="#" class="btn btn-sm btn-danger mt-2 w-auto align-self-start">View Package</a>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
     <div class="col-md-4">
        <div class="card experiences shadow-sm h-100 text-white">
        <img src="images/glamping.jpg" class="card-img-top  h-350" alt="Luxury Tented Retreat">
          <div class="card-img-overlay d-flex flex-column justify-content-end p-3">
            <h5 class="card-title">Luxury Tented Retreat</h5>
            <p class="card-text mb-1"><strong>Duration:</strong> 2 - 3 Nights</p>
            <p class="card-text"><strong>Price Range:</strong> KES 18,000–25,000 per night</p>
         <a href="#" class="btn btn-sm btn-danger mt-2 w-auto align-self-start">View Package</a>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
     <div class="col-md-4">
  <div class="card experiences shadow-sm h-100 text-white">
    <img src="images/hero.jpg" class="card-img-top h-350" alt="Overland Safari Adventure">
    <div class="card-img-overlay d-flex flex-column justify-content-end p-3">
      <h5 class="card-title">Overland Safari Adventure</h5>
      <p class="card-text mb-1"><strong>Duration:</strong> 2 - 3 Nights</p>
      <p class="card-text"><strong>Price Range:</strong> KES 18,000–25,000 per night</p>
      <a href="#" class="btn btn-sm btn-danger mt-2 w-auto align-self-start">View Package</a>
    </div>
  </div>
</div>
      
    </div>
  </div>
</section> 


<!-- end -->

<!-- plan a trip start -->
<div>

</div>

<!-- plan a trip end -->

<!-- start of reviews -->
  <section class="p-5 mt-4" id="reviews">
  <h2 class="text-center mb-4">Real stories from Bunduz Compfire</h2>
  <div class="row g-4">

    <!-- Testimonial 1 -->
    <div class="col-md-4">
      <div class="card h-100 shadow-sm border-0">
        <div class="card-body text-center">
          <div class="d-flex justify-content-start gap-2 text-danger">
         <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          </div>
          <p class="review">The perfect balance of nature and comfort.
             Woke up to sunrise views in a plush bed — unforgettable.</p>

       <div class="d-flex align-items-center gap-2 mt-3">
          <img src="images/Ellipse 97.png" alt="Reviewer 1" class="rounded-circle" style="width: 40px; height: 40px;">
          <h6 class="fw-bold mb-0">Mary.M</h6>
         </div>
        </div>
      </div>
    </div>

    <!-- Testimonial 2 -->
   <div class="col-md-4">
      <div class="card h-100 shadow-sm border-0">
        <div class="card-body text-center">
          <div class="d-flex justify-content-start gap-2 text-danger">
         <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
</div>
          <p class="review">The perfect balance of nature and comfort. 
            Woke up to sunrise views in a plush bed — unforgettable.</p>

          <div class="d-flex align-items-center gap-2 mt-3">
           <img src="images/Ellipse 97.png" alt="Reviewer 1" class="rounded-circle" style="width: 40px; height: 40px;">
          <h6 class="fw-bold mb-0">Mary.M</h6>
          </div>
        </div>
      </div>
    </div>

    <!-- Testimonial 3 -->
    <div class="col-md-4">
      <div class="card h-100 shadow-sm border-0">
        <div class="card-body text-center">
          <div class="d-flex justify-content-start gap-2 text-danger">
         <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
</div>
          <p class="review">The perfect balance of nature and comfort. 
            Woke up to sunrise views in a plush bed — unforgettable.</p>

          <div class="d-flex align-items-center gap-2 mt-3">
          <img src="images/Ellipse 97.png" alt="Reviewer 1" class="rounded-circle" style="width: 40px; height: 40px;">
          <h6 class="fw-bold mb-0">Mary.M</h6>
           </div>
        </div>
      </div>
    </div>
</section>

<!-- end of reviews -->


 <footer class="w-full p-5  bg-dark text-white position-relative">
     <div class="text-md-start">
        <img src="images/logo.png" alt="logo" width="70" height="70" class="d-inline-block align-text-top">
          </div>

          <div class="container pe-5">
            <h5>Safari</h5>
        
          </div>

          <div class="container text-center">
            <p class="lead mb-0">Copyright &copy; 2025 Christine Njoroge</p>
            <a href="#" class=" text-white bottom-0 end-0 p-5">
              <i class="bi bi-arrow-up-circle h1"></i>
            </a>
          </div>
         
        </footer>

        
<script src ="javascrip.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

