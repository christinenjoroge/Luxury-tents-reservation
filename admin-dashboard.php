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

  <!-- end of nav -->




<nav class="navbar navbar-dark bg-dark pt-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Luxury Tents Admin</a>
    <a href="admin_logout.php" class="btn btn-danger btn-sm">Logout</a>
  </div>
</nav>

<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-md-2 bg-light p-3">
      <ul class="nav flex-column">
        <li class="nav-item"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="reservations.php">Reservations</a></li>
        <li class="nav-item"><a class="nav-link" href="add reservation.php">Add Reservation</a></li>
        <li class="nav-item"><a class="nav-link" href="Tentmanagement.php">Manage Tents</a></li>
      </ul>
    </div>

    <!-- Main Content -->
<div class="col-md-10 p-4">
  <h2 class="mb-4">Reservations</h2>

  <div class="card shadow-sm">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
          <thead class="table-dark">
            <tr>
              <th>#</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>ID Number</th>
              <th>Date of Birth</th>
              <th>Email</th>
              <th>Phone Number</th>
              <th>Tent Type</th>
              <th>Check-in</th>
              <th>Check-out</th>
              <th>Tents</th>
              <th>Guests</th>
              <th>Created At</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include 'dbconnection.php';

            $query = "SELECT * FROM reservation";
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["id"] . "</td>
                            <td>" . htmlspecialchars($row["firstname"]) . "</td>
                            <td>" . htmlspecialchars($row["lastname"]) . "</td>
                            <td>" . htmlspecialchars($row["idnumber"]) . "</td>
                            <td>" . htmlspecialchars($row["dob"]) . "</td>
                            <td>" . htmlspecialchars($row["email"]) . "</td>
                            <td>" . htmlspecialchars($row["phone"]) . "</td>
                            <td>" . htmlspecialchars($row["tenttype"]) . "</td>
                            <td>" . htmlspecialchars($row["checkindate"]) . "</td>
                            <td>" . htmlspecialchars($row["checkoutdate"]) . "</td>
                            <td>" . htmlspecialchars($row["tents"]) . "</td>
                            <td>" . htmlspecialchars($row["guests"]) . "</td>
                            <td>" . htmlspecialchars($row["created_at"]) . "</td>
                            <td>
                           <a href='delete.php?id=" . $row["id"] . "' class='btn btn-sm btn-danger' onclick='return confirm(\"Are you sure you want to delete this reservation?\")'>
  <i class='bi bi-trash'></i> Delete
</a>

                            </td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='14' class='text-center'>No reservations found</td></tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


<?php include "includes/footer.php"; ?>
