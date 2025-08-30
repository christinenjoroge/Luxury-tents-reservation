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
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
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
            <a class="nav-link" href="index.php">Home</a>
          </li>

          <!-- Safari dropdown -->
          <li class="nav-item dropdown">
            <button class="btn" data-bs-toggle="dropdown">
              Safari <i class="bi bi-chevron-down"></i>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#safari-section">Wild Encounters</a></li>
            </ul>
          </li>

          <!-- Camping dropdown -->
          <div class="nav-item dropdown">
            <button class="btn" data-bs-toggle="dropdown">
              Camping <i class="bi bi-chevron-down"></i>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="luxurytents.php">Luxury Tents </a></li>
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


