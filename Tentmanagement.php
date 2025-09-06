<?php
include "dbconnection.php";
?>

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
            <a class="nav-link" href="#">Home</a>
          </li>

          <!-- Safari dropdown -->
          <li class="nav-item dropdown">
            <button class="btn" data-bs-toggle="dropdown">
              Safari <i class="bi bi-chevron-down"></i>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Wild Encounters</a></li>
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
            <a class="nav-link" href="#contact-location">Contact</a>
          </li>
        </ul>
</div>

    </div>
  </nav>
</header>

<nav class="navbar navbar-dark bg-dark pt-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Luxury Tents Admin</a>
       <a href="admin-dashboard.php" class="btn btn-primary btn-sm">Back To Dashboard</a>
    <a href="admin_logout.php" class="btn btn-danger btn-sm">Logout</a>
   
  </div>
</nav>

<!-- Tent Management Form -->
<div class="container mt-5">
  <div class="card shadow">
    <div class="card-header bg-primary text-white">
      <h4 class="mb-0">Manage Tents</h4>
    </div>
    <div class="card-body">

      <form action="savetent.php" method="POST" id="tent-management">
        <div class="row mb-3">
          <div class="col-md-6">
            <label for="tent_name" class="form-label">Tent Name/Type</label>
            <input type="text" class="form-control" id="tent_name" name="tent_type" required>
          </div>
          <div class="col-md-6">
            <label for="capacity" class="form-label">Capacity (Number of Guests)</label>
            <input type="number" class="form-control" id="capacity" name="capacity" required>
          </div>
        </div>

        <div class="col-md-6">
  <label for="quantity" class="form-label">Number of Tents Available</label>
  <input type="number" class="form-control" id="quantity" name="total" min="1" required>
  </div>

        <div class="row mb-3">
          <div class="col-md-6">
    <label for="price_min" class="form-label">Minimum Price (per night)</label>
    <input type="number" step="0.01" class="form-control" id="price_min" name="price_min" required>
  </div>
  <div class="col-md-6">
    <label for="price_max" class="form-label">Maximum Price (per night)</label>
    <input type="number" step="0.01" class="form-control" id="price_max" name="price_max" required>
  </div> 
          <div class="col-md-6">
            <label for="availability" class="form-label">Availability</label>
            <select class="form-select" id="availability" name="availability" required>
              <option value="available">Available</option>
              <option value="unavailable">Unavailable</option>
            </select>
          </div>
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Tent Description</label>
          <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter description..."></textarea>
        </div>

       <div class="d-flex justify-content-end">
  <button type="submit" class="btn btn-success">Save Tent</button>
</div>

      </form>
    </div>
  </div>
</div>

<?php
include "includes/footer.php";
?>
