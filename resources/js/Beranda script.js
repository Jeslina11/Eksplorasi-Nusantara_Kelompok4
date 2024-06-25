src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"


//<!-------------- ANIMASI HALAMAN ---------------->
// src="assets/js/scrollreveal.min.js"

//   const sr = ScrollReveal({
//       distance: '50px',
//       duration: 2000,
//       delay: 400,
//       reset: false
//   });

//   sr.reveal('.logo', { origin: 'left' });
//   sr.reveal('.navbar', { origin: 'top', interval: 100 });
//   sr.reveal('.Background', { origin: 'right' });
//   sr.reveal('.home', { origin: 'left' });
//   sr.reveal('.filters-home button', { origin: 'bottom', interval: 100 });
//   sr.reveal('.card-container-home .card', { origin: 'bottom', interval: 200 });
//   sr.reveal('.show-more-home button', { origin: 'top' });
//   sr.reveal('.servicess .textt', { origin: 'left' });
//   sr.reveal('.subtitlee', { origin: 'right' });
//   sr.reveal('.service-cardss .card9', { origin: 'bottom', interval: 200 });
//   sr.reveal('.recommendation .textt', { origin: 'left' });
//   sr.reveal('.recommendation .subtitlee', { origin: 'right' });
//   sr.reveal('.recommendation-cards .card10', { origin: 'bottom', interval: 200 });
//   sr.reveal('.explore .textt', { origin: 'left' });
//   sr.reveal('.explore .subtitlee', { origin: 'right' });
//   sr.reveal('.explore-cards .card1', { origin: 'bottom', interval: 200 });

//   document.addEventListener('DOMContentLoaded', () => {
//       const valueItems = document.querySelectorAll('.value-item');
//       const modal = document.createElement('div');
//       modal.className = 'modal';
//       modal.innerHTML = `
//           <div class="modal-content">
//               <span class="close-btn">&times;</span>
//               <h2 class="modal-title"></h2>
//               <div class="modal-description"></div>
//           </div>
//       `;
//       document.body.appendChild(modal);
//       const closeModal = () => modal.style.display = 'none';
//       modal.querySelector('.close-btn').addEventListener('click', closeModal);

//       valueItems.forEach(item => {
//           item.addEventListener('click', () => {
//               const title = item.getAttribute('data-title');
//               const description = item.getAttribute('data-description');
//               modal.querySelector('.modal-title').textContent = title;
//               modal.querySelector('.modal-description').innerHTML = description;
//               modal.style.display = 'block';
//           });
//       });

//       window.addEventListener('click', (event) => {
//           if (event.target === modal) closeModal();
//       });
//   });




//<!------------------- NAVBAR STICKY ---------------->
const header = document.querySelector("header");
window.addEventListener("scroll", function() {
  header.classList.toggle("sticky", window.scrollY > 60)
});




//<!------------------- HOME SECTION ---------------->
const cardsData = {
  popular: [
      { title: 'Candi Borobudur', location: 'Magelang, Jawa Tengah', rating: 4.7, imgSrc: 'image/borobudur.jpg', detailsUrl: 'Candi borobudur.html'},
      { title: 'Goa Gong Pacitan', location: 'Pacitan, Jawa Timur', rating: 4.4, imgSrc: 'image/goa.png', detailsUrl: 'Goa gong.html' },
      { title: 'Candi Prambanan', location: 'Yogyakarta, Jawa Tengah', rating: 4.7, imgSrc: 'image/candi.jpg', detailsUrl: 'candi prambanan.html'},
      { title: 'King Kong Hill', location: 'Malang, Jawa Timur', rating: 4.7, imgSrc: 'image/bromo bg.png', detailsUrl: 'King Kong Hill.html'},
      { title: 'Pulau Komodo', location: 'Pulau, NTT', rating: 4.4, imgSrc: 'image/komodo.jpg', detailsUrl: 'pulau komodo.html' },
      { title: 'Rammang Rammang', location: 'Maros, Sulawesi Selatan', rating: 4.7, imgSrc: 'image/rammang bg.jpg' , detailsUrl: 'rammang.html'},
      { title: 'Piaynemo', location: 'Sorong, Papua Barat Daya', rating: 4.4, imgSrc: 'image/raja\ ampat-bg.png', detailsUrl: 'piaynemo.html' },
      { title: 'Pura Luhur Uluwatu', location: 'Pecatu, Bali', rating: 4.6, imgSrc: 'image/pura luhur.jpg' , detailsUrl: 'pura uluwatu.html'},
      { title: 'Pink Beach', location: 'Manggarai Barat, NTT', rating: 4.6, imgSrc: 'image/pink beach bg.jpg', detailsUrl: 'pink beach.html'},
      { title: 'Banyumala', location: 'Buleleng, Bali', rating: 4.6, imgSrc: 'image/banyumala.jpg', detailsUrl: 'banyumala.html' },
      { title: 'Labuan Bajo', location: 'Manggarai Barat, NTT', rating: 4.7, imgSrc: 'image/labuan bajoo.jpg', detailsUrl: 'Labuan bajo.html' },
      { title: 'Sabana Ollon', location: 'Tana Toraja, Sulawesi Selatan', rating: 4.8, imgSrc: 'image/ollon.png', detailsUrl: 'Lembah ollon.html' },
      { title: 'Gunung Ijen', location: 'Banyuwangi, Jawa Timur', rating: 4.7, imgSrc: 'image/ijen.jpg', detailsUrl: 'ijen.html' },
      { title: 'Tumpak Sewu', location: 'Lumajang, Jawa Timur', rating: 4.6, imgSrc: 'image/sewu.jpg', detailsUrl: 'Tumpak sewu.html' },
      { title: 'Pulau Samosir', location: 'Pulau Samosir, Sumatera Utara', rating: 4.6, imgSrc: 'image/samosir bg.jpg', detailsUrl: 'Pulau samosir.html' },
      { title: 'Waerebo Village', location: 'Kepulauan Manggarai, NTT', rating: 4.7, imgSrc: 'image/waerebo.jpg', detailsUrl: 'waerebo.html' },
      { title: 'Kuburan Batu Lemo', location: 'Tana Toraja, Sulawesi Selatan', rating: 4.6, imgSrc: 'image/kuburan.jpg', detailsUrl: 'kuburan batu.html' },
      { title: 'Nglirip', location: 'Lumajang, Jawa Timur', rating: 4.6, imgSrc: 'image/Nglirip.png', detailsUrl: 'Nglirip.html' },
      { title: 'Nusa Penida', location: 'Klungkung, Bali', rating: 4.8, imgSrc: 'image/Nusa Penida.jpg', detailsUrl: 'nusa penida.html' },
      { title: 'Lorentz', location: 'Jayawijaya, Papua', rating: 4.4, imgSrc: 'image/Lorentz6.jpg', detailsUrl: 'Lorentz.html' },
  ],

  pulau: [
      { title: 'Pulau Komodo', location: 'Pulau, NTT', rating: 4.4, imgSrc: 'image/komodo.jpg' },
      { title: 'Labuan Bajo', location: 'Manggarai Barat, NTT', rating: 4.7, imgSrc: 'image/labuan bajoo.jpg' },
      { title: 'Nusa Penida', location: 'Klungkung, Bali', rating: 4.8, imgSrc: 'image/Nusa Penida.jpg' },
      { title: 'Piaynemo', location: 'Sorong, Papua Barat Daya', rating: 4.4, imgSrc: 'image/raja\ ampat-bg.png' },
      { title: 'Pulau Samosir', location: 'Pulau Samosir, Sumatera Utara', rating: 4.6, imgSrc: 'image/samosir bg.jpg' },
  ],

  danau: [
      { title: 'Lorentz', location: 'Jayawijaya, Papua', rating: 4.4, imgSrc: 'image/Lorentz6.jpg', detailsUrl: 'Lorentz.html' },
  ],
  pantai: [
      { title: 'Pink Beach', location: 'Manggarai Barat, NTT', rating: 4.6, imgSrc: 'image/pink beach bg.jpg', detailsUrl: 'pink beach.html'  },
  ],
  gunung: [
      { title: 'King Kong Hill', location: 'Malang, Jawa Timur', rating: 4.7, imgSrc: 'image/bromo bg.png' },
      { title: 'Lembah Ollon', location: 'Tana Toraja, Sulawesi Selatan', rating: 4.8, imgSrc: 'image/ollon.png' },
      { title: 'Gunung Ijen', location: 'Banyuwangi, Jawa Timur', rating: 4.7, imgSrc: 'image/ijen.jpg' },
      { title: 'Waerebo Village', location: 'Kepulauan Manggarai, NTT', rating: 4.7, imgSrc: 'image/waerebo.jpg', detailsUrl: 'waerebo.html' },
  ],
  budaya: [
      { title: 'Kuburan Batu Lemo', location: 'Tana Toraja, Sulawesi Selatan', rating: 4.6, imgSrc: 'image/kuburan.jpg' },
      { title: 'Candi Borobudur', location: 'Magelang, Jawa Tengah', rating: 4.7, imgSrc: 'image/borobudur.jpg', detailsUrl: 'Candi borobudur.html' },
      { title: 'Candi Prambanan', location: 'Yogyakarta, Jawa Tengah', rating: 4.7, imgSrc: 'image/candi.jpg', detailsUrl: 'candi prambanan.html'  },
      { title: 'Pura Luhur Uluwatu', location: 'Pecatu, Bali', rating: 4.6, imgSrc: 'image/pura luhur.jpg' , detailsUrl: 'pura uluwatu.html'  },
  ],
  AirTerjun: [
      { title: 'Nglirip', location: 'Lumajang, Jawa Timur', rating: 4.6, imgSrc: 'image/Nglirip.png', detailsUrl: 'Nglirip.html' },
      { title: 'Tumpak Sewu', location: 'Lumajang, Jawa Timur', rating: 4.6, imgSrc: 'image/sewu.jpg', detailsUrl: 'Tumpak sewu.html' },
      { title: 'Banyumala', location: 'Buleleng, Bali', rating: 4.6, imgSrc: 'image/banyumala.jpg', detailsUrl: 'banyumala.html' },
  ],
};

let currentIndex = 0;
let hiddenCards = [];

function showCategory(category) {
  const cardsContainer = document.getElementById('cards-home');
  cardsContainer.innerHTML = '';

  const categoryCards = cardsData[category];
  categoryCards.forEach(card => {
      const cardElement = document.createElement('div');
      cardElement.className = 'card-home';
      cardElement.innerHTML = `
          <img src="${card.imgSrc}" alt="${card.title}">
          <div class="card-content-home">
              <div class="rating-badge-home">
                  <i class="fas fa-star"></i>
                  <span>${card.rating}</span>
              </div>
              <h3>${card.title}</h3>
              <p class="location-home">
                  <i class="fas fa-map-marker-alt location-icon-home"></i>
                  ${card.location}
              </p>
              <a href="${card.detailsUrl}">
                  <button class="details-btn-home">Details</button>
              </a>
          </div>
      `;
      cardsContainer.appendChild(cardElement);
  });

  // Mengatur tombol "Show More"
  currentIndex = 4;
  hiddenCards = Array.from(cardsContainer.querySelectorAll('.card-home'));
  hiddenCards.forEach((card, index) => {
      if (index >= 4) {
          card.classList.add('hidden-home');
      }
  });

  if (hiddenCards.length > 4) {
      document.getElementById('show-more-btn-home').style.display = 'block';
  } else {
      document.getElementById('show-more-btn-home').style.display = 'none';
  }

  document.querySelectorAll('.filter-btn-home').forEach(btn => btn.classList.remove('active'));
  document.querySelector(`.filter-btn-home[onclick="showCategory('${category}')"]`).classList.add('active');
}

document.addEventListener("DOMContentLoaded", () => {
  const showMoreBtn = document.getElementById("show-more-btn-home");

  showMoreBtn.addEventListener("click", () => {
      for (let i = 0; i < 4 && currentIndex < hiddenCards.length; i++, currentIndex++) {
          hiddenCards[currentIndex].classList.remove("hidden-home");
      }

      if (currentIndex >= hiddenCards.length) {
          showMoreBtn.style.display = 'none';
      }
  });

  showCategory('popular');
});



//<!------------------- PANDUAN SECTION ---------------->
document.addEventListener('DOMContentLoaded', function () {
  var modal = document.getElementById("modal");
  var modalIcon = document.getElementById("modal-icon");
  var modalTitle = document.getElementById("modal-title");
  var modalDescription = document.getElementById("modal-description");
  var span = document.getElementsByClassName("close")[0];

  document.querySelectorAll('.value-item').forEach(function (item) {
    item.addEventListener('click', function () {
      var iconClass = this.getAttribute('data-icon');
      var title = this.getAttribute('data-title');
      var description = this.getAttribute('data-description');

      modalIcon.className = 'modal-icon ' + iconClass;
      modalTitle.innerText = title;
      modalDescription.innerHTML = description;

      modal.style.display = "block";
    });
  });

  span.onclick = function () {
    modal.style.display = "none";
  }

  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
});






//<!------------------- LOGIN/REGISTER BUTTON ---------------->
// Menggunakan JavaScript untuk menangani klik pada tombol login
document.getElementById('loginButton').addEventListener('click', function() {
  window.location.href = 'login.html';
});




//<!------------------- REKOMENDASI MODAL ---------------->
// JavaScript untuk mengatur modal
var modal = document.getElementById('infoModal-recommendation');
var btn = document.getElementById("infoButton-recommendation");
var span = document.getElementsByClassName("close-recommendation")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}