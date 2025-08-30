<?php
include "includes/header.php";
?>


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

  <?php
include "includes/footer.php";
?>
