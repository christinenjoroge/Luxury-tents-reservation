
const campBtn = document.getElementById('campBtn');
const safariBtn = document.getElementById('safariBtn');
const campSection = document.getElementById('camp-section');
const safariSection = document.getElementById('safari-section');

campBtn.addEventListener('click', () => {
  campSection.classList.remove('d-none');
  safariSection.classList.add('d-none');
  campBtn.classList.add('active');
  safariBtn.classList.remove('active');
});

safariBtn.addEventListener('click', () => {
  safariSection.classList.remove('d-none');
  campSection.classList.add('d-none');
  safariBtn.classList.add('active');
  campBtn.classList.remove('active');
});


