<?php
include "includes/header.php";
?>

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

    <!-- Right Column: Camps / Pricing -->
    <div class="col-lg-6">
      <div class="card p-4">
        <div class="d-flex align-items-center mb-3">
          <img src="images/honeymoontent.jpg" alt="Tent" class="rounded me-3" style="width:60px; height:60px; object-fit:cover;">
          <div>
            <h6 class="mb-0">Camps</h6>
            <small>Luxury Tents</small>
          </div>
        </div>

        <form id="priceCalcForm" class="row g-3">
          <!-- Tent Type -->
          <div class="col-12">
            <label for="tentType" class="form-label">Select Tent Type</label>
            <select id="tentType" class="form-select" required>
              <option value="" disabled selected>Select</option>
              <option value="honeymoon">Honeymoon Tent</option>
              <option value="bush">Bush Tent</option>
              <option value="glamping">Glamping</option>
              <option value="family">Family Tent</option>
            </select>
          </div>

          <!-- Dates -->
          <div class="col-md-6">
            <label for="checkin" class="form-label">Check-in</label>
            <input type="date" id="checkin" name="checkin" class="form-control" required>
          </div>
          <div class="col-md-6">
            <label for="checkout" class="form-label">Check-out</label>
            <input type="date" id="checkout" name="checkout" class="form-control" required>
          </div>

          <!-- Guests and Tents -->
          <div class="col-md-6">
            <label for="tents" class="form-label">Number of Tents</label>
            <input type="number" id="tents" name="tents" class="form-control" min="1" value="1" required>
          </div>
          <div class="col-md-6">
            <label for="guests" class="form-label">Number of Guests</label>
            <input type="number" id="guests" name="guests" class="form-control" min="1" value="1" required>
          </div>

          <!-- Result -->
          <div class="col-12">
            <h6>Total: <span id="result">KES 0</span></h6>
          </div>

          <!-- Submit Button -->
          <div class="col-12">
            <button type="submit" class="btn btn-danger w-100">Calculate Price</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>



  <?php
include "includes/footer.php";
?>
