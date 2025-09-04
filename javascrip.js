document.addEventListener("DOMContentLoaded", () => {
  // --- Section Toggle ---
  const campBtn = document.getElementById("campBtn");
  const safariBtn = document.getElementById("safariBtn");
  const campSection = document.getElementById("camp-section");
  const safariSection = document.getElementById("safari-section");

  if (campBtn && safariBtn && campSection && safariSection) {
    campBtn.addEventListener("click", () => {
      campSection.classList.remove("d-none");
      safariSection.classList.add("d-none");
      campBtn.classList.add("active");
      safariBtn.classList.remove("active");
    });

    safariBtn.addEventListener("click", () => {
      safariSection.classList.remove("d-none");
      campSection.classList.add("d-none");
      safariBtn.classList.add("active");
      campBtn.classList.remove("active");
    });
  }

  // --- Add Additional Guest ---
  const addGuestBtn = document.getElementById("addGuest");
  if (addGuestBtn) {
    addGuestBtn.addEventListener("click", () => {
      const guestContainer = document.getElementById("guest-container");

      const newGuest = document.createElement("div");
      newGuest.classList.add("guest");

      newGuest.innerHTML = `
        <h5>Additional Guest</h5>
        <label>Name</label>
        <input type="text" name="guest_name[]" class="form-control">
        <label>Email</label>
        <input type="email" name="guest_email[]" class="form-control">
        <label>Phone</label>
        <input type="tel" name="guest_phone[]" class="form-control">
      `;

      guestContainer.appendChild(newGuest);
    });
  }

  // --- Tent Selection from Button ---
  const reserveButtons = document.querySelectorAll(".reserve-btn");
  const tentTypeInput = document.getElementById("tent-type-input");
  const tentImageDisplay = document.getElementById("tent-image-display");
  const tentNameDisplay = document.getElementById("tent-name-display");

  reserveButtons.forEach(button => {
    button.addEventListener("click", (e) => {
      e.preventDefault();
      const selectedTent = button.getAttribute("data-tent");
      const tentImage = button.getAttribute("data-tent-img");

      if (selectedTent && tentTypeInput && tentImageDisplay && tentNameDisplay) {
        tentTypeInput.value = selectedTent;
        tentImageDisplay.src = tentImage;
        tentNameDisplay.textContent = selectedTent;
        document.getElementById("reservation-form").scrollIntoView({ behavior: "smooth" });
      }
    });
  });

  // --- Price Calculator ---
  const form = document.getElementById('priceCalcForm');
  const result = document.getElementById('result');

  if (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();

      const tentPrices = {
        honeymoon: { min: 18000, max: 25000 },
        bush: { min: 11000, max: 22000 },
        glamping: { min: 18000, max: 25000 },
        family: { min: 11000, max: 22000 }
      };

      const tentType = document.getElementById('tentType').value;
      const checkin = new Date(document.getElementById('checkin').value);
      const checkout = new Date(document.getElementById('checkout').value);
      const tents = parseInt(document.getElementById('tents').value);
      const guests = parseInt(document.getElementById('guests').value);

      if (!tentType || isNaN(checkin) || isNaN(checkout) || tents <= 0 || guests <= 0 || checkin >= checkout) {
        result.textContent = 'Please fill out all fields correctly.';
        result.classList.remove('text-success');
        result.classList.add('text-danger');
        return;
      }

      const timeDiff = checkout - checkin;
      const nights = timeDiff / (1000 * 60 * 60 * 24);

      const price = tentPrices[tentType];
      const totalMin = price.min * nights * tents;
      const totalMax = price.max * nights * tents;

      result.innerHTML = `KES ${totalMin.toLocaleString()} – ${totalMax.toLocaleString()} 
        for ${nights} night(s), ${guests} guest(s), and ${tents} tent(s).`;
      result.classList.remove('text-danger');
      result.classList.add('text-success');
    });
  }

  // --- Check Availability Form ---
  const availabilityForm = document.getElementById('availabilityForm');
  if (availabilityForm) {
    availabilityForm.addEventListener('submit', function (e) {
      e.preventDefault();

      const tentType = document.getElementById('tent_type').value;
      const checkin = document.getElementById('checkin').value;
      const checkout = document.getElementById('checkout').value;
      const guests = document.getElementById('guests').value;

      const resultsDiv = document.getElementById('formResults');
      resultsDiv.innerHTML = `
        <h4>Search Details</h4>
        <p><strong>Tent Type:</strong> ${tentType}</p>
        <p><strong>Check-in:</strong> ${checkin}</p>
        <p><strong>Check-out:</strong> ${checkout}</p>
        <p><strong>Guests:</strong> ${guests}</p>
      `;
    });
  }

  // --- Reservation Form Modal ---
  const reservationForm = document.getElementById("reservationForm");
  const modal = document.getElementById("confirmationModal");
  const closeModal = document.getElementById("closeModal");

  if (reservationForm && modal) {
    reservationForm.addEventListener("submit", function (e) {
      e.preventDefault(); // Prevent form redirect

      // ✅ Show modal
      modal.style.display = "block";
    });

    closeModal?.addEventListener("click", () => {
      modal.style.display = "none";
    });

    window.addEventListener("click", (e) => {
      if (e.target === modal) {
        modal.style.display = "none";
      }
    });

    dashboardBtn?.addEventListener("click", () => {
      window.location.href = "reservation.php"; // Change as needed
    });
  }
});
