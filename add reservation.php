<?php
include "includes/header.php";
?>

<nav class="navbar navbar-dark bg-dark pt-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Luxury Tents Admin</a>
       <a href="admin-dashboard.php" class="btn btn-primary btn-sm">Back To Dashboard</a>
    <a href="admin_logout.php" class="btn btn-danger btn-sm">Logout</a>
   
  </div>
</nav>

<div class="container py-5">
  <h4 class="mb-3">Confirm Your Guest Information</h4>
  <p>Please confirm the primary guest’s information below.</p>

  <div class="row">
    <!-- Left Column: Guest Form -->
    <div class="col-lg-6">
      <div id="guest-container">
        <div class="card p-4 mb-3" id="primary-guest">
          <h5>Primary Guest</h5>
          <div class="row g-3">
            <div class="col-md-6">

             <form action="confirmation.php" method="POST" id="reservationForm">
              <label for="firstname" class="form-label">First Name</label>
              <input type="text" class="form-control" name="firstname" id="firstName" placeholder="First name">
            </div>
            <div class="col-md-6">
              <label for="lastname" class="form-label">Last Name</label>
              <input type="text" class="form-control" name="lastname" id="lastName" placeholder="Last name">
            </div>
            <div class="col-md-6">
              <label for="idnumber" class="form-label">ID / Passport Number</label>
              <input type="text" class="form-control" name="idnumber"id="idnumber" placeholder="ID/Passport">
            </div>
            <div class="col-md-6">
              <label for="dob" class="form-label">Date of Birth</label>
              <input type="date" class="form-control" name="dob" id="dob">
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control"name="email" id="email" placeholder="you@example.com">
            </div>
            <div class="col-md-6">
              <label for="phone" class="form-label">Phone Number</label>
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="0700123456">
            </div>

            <div class="col-md-6">
            <label for="checkin" class="form-label">Check-in</label>
            <input type="date"  name="checkin" class="form-control" required>
          </div>
          


           <div class="col-12">
            <label for="tentType" class="form-label">Select Tent Type</label>
            <select  class="form-select" name="tenttype" required>
              <option value="" disabled selected>Select</option>
              <option value="honeymoon">Honeymoon Tent</option>
              <option value="bush">Bush Tent</option>
              <option value="glamping">Glamping</option>
              <option value="family">Family Tent</option>
            </select>
          </div>

          <div class="col-md-6">
            <label for="tents" class="form-label">Number of Tents</label>
            <input type="number" id="tents" name="tents" class="form-control" min="1" value="1" required>
          </div>

           <div class="col-md-6">
            <label for="guests" class="form-label">Number of Guests</label>
            <input type="number" id="guests" name="guests" class="form-control" min="1" value="1" required>
          </div>

          </div>
        </div>
      </div>
      

      <div class="d-flex gap-3">
        <button class="btn btn-danger" id="completeReservation">Reserve</button>
        <button class="btn btn-outline-danger" id="addGuest">+ Add Another Guest</button>
      </div>

      </form>
    </div>