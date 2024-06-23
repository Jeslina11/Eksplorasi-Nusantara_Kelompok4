<!DOCTYPE html>
<html>
<head>
    <title>wisata</title>
    <link rel="stylesheet" href="css/wisata style.css">
    <!---------------------------- Google Fonts Link ------------------------------>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    <!---------------------------- Font Awesome Icons Link ------------------------------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
</head>
</body>
<!--------------------- NAVBAR SECTION ------------------>
<header>
  @include('komponen.navbar')
</header>
  
<!---------------------- BACKGROUND  ---------------------->
  <div class="hero">
  </div>


<!--------------------- HEAD SECTION --------------------->
<div class="content">
    <h1>Jelajahi Wisata Nusantara dan Nikmati <br>Pengalaman tak terlupakan</h1>
    </div>



<!------------------- SEARCH SECTION --------------------->
<div class="search-bar">
<div class="search-item">
    <i class="fas fa-map-marked-alt icon"></i>
    <select id="provinsiSelect">
        <option value="" disabled selected hidden>Pilih Provinsi</option>
        <option value="Sulawesi Selatan">Sulawesi Selatan</option>
        <option value="Sulawesi Barat">Sulawesi Barat</option>
        <option value="Jawa Timur">Jawa Timur</option>
        <option value="Jawa Barat">Jawa Barat</option>
        <option value="Bali">Bali</option>
        <option value="NTT">NTT</option>
    </select>
</div>
<div class="separator"></div>
<div class="search-item">
    <i class="fas fa-building icon"></i>
    <select id="kotaSelect">
        <option value="" disabled selected hidden>Pilih Kota</option>
    </select>
</div>
<div class="separator"></div>
<div class="search-item">
    <i class="fas fa-list icon"></i>
    <select id="kategoriSelect">
        <option value="" disabled selected hidden>Kategori</option>
        <option value="Pulau">Pulau</option>
        <option value="Air Terjun">Air Terjun</option>
        <option value="Gunung">Gunung</option>
        <option value="Pantai">Pantai</option>
    </select>
</div>
<button class="search-button" id="searchButton">Cari</button>
</div>



<!--------------------- TEKS SECTION --------------------->
    <!-- <div class="center-text2">
        <h2>Indonesia adalah surga alam yang wajib dijelajahi</h2>
        <span class="line"></span>
        <p>
            Indonesia, dengan ribuan gunung berapi & pulau-pulau indah, adalah rumah bagi berbagai kelompok etnis yang menjaga budaya dan bahasa mereka. Keberagaman ini menambah keindahan alam dan budaya Indonesia, menjadikannya destinasi yang tak terlupakan bagi wisatawan.
        </p>
    </div> -->



<!--------------------- HOME 1 SECTION --------------------->
<section class="explore-more">
    <div class="header">
      <h1>Temukan Tujuan Wisatamu</h1>
      <p class="sub-text">Nikmati liburan dan wisata lengkap di Indonesia, serta berbagai destinasi menarik lainnya. Mari kita jelajahi sekarang!</p>
    </div>
    <hr>
    <div id="cards" class="card-container">
      <div class="card">
        <img src="image/habibie bg.png" alt="Parepare">
        <div class="card-content">
          <p class="location">
            <i class="fas fa-map-marker-alt location-icon"></i>
          </p>
          <p><a href="parepare.html"><button class="details-btn">Details</button></a></p>
        </div>
      </div>
      <div class="card">
        <img src="image/mks.jpg" alt="Makassar">
        <div class="card-content">
          <p class="location">
            <i class="fas fa-map-marker-alt location-icon"></i>
          </p>
          <p><a href="makassar.html"><button class="details-btn">Details</button></a></p>
        </div>
      </div>
      <div class="card">
        <img src="image/polewali_bg.png" alt="Polewali">
        <div class="card-content">
          <div class="rating-badge">
            <i class="fas fa-star"></i>
          </div>
          <p class="location">
            <i class="fas fa-map-marker-alt location-icon"></i>
          </p>
          <p><a href="polewali.html"><button class="details-btn">Details</button></a></p>
        </div>
      </div>
      <div class="card">
        <img src="image/pinrang_bg.jpg" alt="Pinrang">
        <div class="card-content">
          <div class="rating-badge">
            <i class="fas fa-star"></i>
          </div>
          <p class="location">
            <i class="fas fa-map-marker-alt location-icon"></i>
          </p>
          <p><a href="pinrang.html"><button class="details-btn">Details</button></a></p>
        </div>
      </div>
      <div class="card">
        <img src="image/mamuju.png" alt="Mamuju">
        <div class="card-content">
          <div class="rating-badge">
            <i class="fas fa-star"></i>
          </div>
          <p class="location">
            <i class="fas fa-map-marker-alt location-icon"></i>
          </p>
          <p><a href="mamuju.html"><button class="details-btn">Details</button></a></p>
        </div>
      </div>
      <div class="card hidden">
        <img src="image/palu.png" alt="Palu">
        <div class="card-content">
          <div class="rating-badge">
            <i class="fas fa-star"></i>
          </div>
          <p class="location">
            <i class="fas fa-map-marker-alt location-icon"></i>
          </p>
          <p><a href="palu.html"><button class="details-btn">Details</button></a></p>
        </div>
      </div>
      <div class="card hidden">
        <img src="image/kendari.png" alt="Kendari">
        <div class="card-content">
          <div class="rating-badge">
            <i class="fas fa-star"></i>
          </div>
          <p class="location">
            <i class="fas fa-map-marker-alt location-icon"></i>
          </p>
          <p><a href="kendari.html"><button class="details-btn">Details</button></a></p>
        </div>
      </div>
      <div class="card hidden">
        <img src="image/toraja.png" alt="Toraja">
        <div class="card-content">
          <div class="rating-badge">
            <i class="fas fa-star"></i>
          </div>
          <p class="location">
            <i class="fas fa-map-marker-alt location-icon"></i>
          </p>
          <p><a href="toraja.html"><button class="details-btn">Details</button></a></p>
        </div>
      </div>
      <div class="card hidden">
        <img src="image/gowa.jpg">
        <div class="card-content">
          <div class="rating-badge">
            <i class="fas fa-star"></i>
          </div>
          <p class="location">
            <i class="fas fa-map-marker-alt location-icon"></i>
          </p>
          <p><a href="Gowa.html"><button class="details-btn">Details</button></a></p>
        </div>
      </div>
      <div class="card hidden">
        <img src="image/barru.png" alt="Barru">
        <div class="card-content">
          <div class="rating-badge">
            <i class="fas fa-star"></i>
          </div>
          <p class="location">
            <i class="fas fa-map-marker-alt location-icon"></i>
          </p>
          <p><a href="barru.html"><button class="details-btn">Details</button></a></p>
        </div>
      </div>
      <div class="card hidden">
        <img src="image/manado.png" alt="Manado">
        <div class="card-content">
          <div class="rating-badge">
            <i class="fas fa-star"></i>
          </div>
          <p class="location">
            <i class="fas fa-map-marker-alt location-icon"></i>
          </p>
          <p><a href="manado.html"><button class="details-btn">Details</button></a></p>
        </div>
      </div>
      <div class="card hidden">
        <img src="image/maros.png" alt="Maros">
        <div class="card-content">
          <div class="rating-badge">
            <i class="fas fa-star"></i>
          </div>
          <p class="location">
            <i class="fas fa-map-marker-alt location-icon"></i>
          </p>
          <p><a href="maros.html"><button class="details-btn">Details</button></a></p>
        </div>
      </div>
    </div>
    <div class="show-more">
      <button id="show-more-btn">Menampilkan lebih banyak</button>
    </div>
  </section>
  




<!------------------- FOOTER SECTION ------------------->
<section class="Footer">
<div class="footer-box">
    <h3>Services</h3>
    <a href="#">Email Marketing</a>
    <a href="">Campaigns</a>
    <a href="#">Brandings</a>
    <a href="#">Offline</a>
</div>

<div class="footer-box">
    <h3>Services</h3>
    <a href="#">Our story</a>
    <a href="">Benefits</a>
    <a href="#">Team</a>
    <a href="#">Careers</a>
</div>

<div class="footer-box">
    <h3>Services</h3>
    <a href="#">Help</a>
    <a href="">FAQ</a>
    <a href="#">Contact us</a>
</div>

<div class="footer-box">
    <h3>Social</h3>
    <div class="Social">
    <a href="#"><i class="ri-instagram-fill"></i></a>
    <a href="#"><i class="ri-twitter-fill"></i></a>
    <a href="#"><i class="ri-facebook-fill"></i></a>
    <a href="#"><i class="ri-Github-fill"></i></a>
    <a href="#"><i class="ri-Snpachat-fill"></i></a>
    <a href="#"><i class="ri-WhatsApp-fill"></i></a>
    </div>
</div>
</section>
<!-- <div class="copyright">
<p>Copyright 2024 By Tours</p>
</div> -->


<!------------------------------- JAVASCRIPT --------------------------------->


<!------------------- NAVBAR STICKY ---------------->
<script>
  // Kode JavaScript untuk membuat header tetap
  const header = document.querySelector("header");
  window.addEventListener("scroll", function() {
    header.classList.toggle("sticky", window.scrollY > 60)
  });
</script>



<!-------------------- HOME SECTION ---------------->
<script>
  const cardsData = {
    popular: [
        { title: 'Parepare', location: 'Sulawesi Selatan', imgSrc: 'image/habibie bg.png', detailsUrl: 'parepare.html' },
        { title: 'Makassar', location: 'Sulawesi Selatan', imgSrc: 'image/mks.jpg', detailsUrl: 'makassar.html'  },
        { title: 'Polewali', location: 'Sulawesi Barat', imgSrc: 'image/polewali bg.png', detailsUrl: 'polewali.html'  },
        { title: 'Pinrang', location: 'Sulawesi Selatan', imgSrc: 'image/pinrang bg.jpg', detailsUrl: 'pinrang.html'  },
        { title: 'Mamuju', location: 'Sulawesi Barat', imgSrc: 'image/mamuju.png', detailsUrl: 'mamuju.html'  },
        { title: 'Palu', location: 'Sulawesi Tengah', imgSrc: 'image/palu.png', detailsUrl: 'palu.html'  },
        { title: 'Kendari', location: 'Sulawesi Tenggara', imgSrc: 'image/kendari.png', detailsUrl: 'kendari.html'  },
        { title: 'Toraja', location: 'Sulawesi Selatan', imgSrc: 'image/toraja.png', detailsUrl: 'toraja.html'  },
        { title: 'Gowa', location: 'Sulawesi Selatan', imgSrc: 'image/gowa.jpg', detailsUrl: 'Gowa.html'  },
        { title: 'Barru', location: 'Sulawesi Selatan', imgSrc: 'image/barru.png', detailsUrl: 'barru.html'  },
        { title: 'Manado', location: 'Sulawesi Utara', imgSrc: 'image/manado.png', detailsUrl: 'manado.html'  },
        { title: 'Maros', location: 'Sulawesi Selatan', imgSrc: 'image/maros.png', detailsUrl: 'maros.html'  },
    ],
};

let currentIndex = 0;
let hiddenCards = [];

function showCategory(category) {
    const cardsContainer = document.getElementById('cards');
    cardsContainer.innerHTML = '';

    const categoryCards = cardsData[category];
    categoryCards.forEach(card => {
        const cardElement = document.createElement('div');
        cardElement.className = 'card';
        cardElement.innerHTML = `
            <img src="${card.imgSrc}" alt="${card.title}">
            <div class="card-content">
                <h3>${card.title}</h3>
                <p class="location">
                    <i class="fas fa-map-marker-alt location-icon"></i>
                    ${card.location}
                </p>
                <a href="${card.detailsUrl}">
                    <button class="details-btn">Details</button>
                </a>            
            </div>
        `;
        cardsContainer.appendChild(cardElement);
    });

    // Mengatur tombol "Show More"
    currentIndex = 4;
    hiddenCards = Array.from(cardsContainer.querySelectorAll('.card'));
    hiddenCards.forEach((card, index) => {
        if (index >= 4) {
            card.classList.add('hidden');
        }
    });

    if (hiddenCards.length > 4) {
        document.getElementById('show-more-btn').style.display = 'block';
    } else {
        document.getElementById('show-more-btn').style.display = 'none';
    }

    document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
    document.querySelector(`.filter-btn[onclick="showCategory('${category}')"]`).classList.add('active');
}

document.addEventListener("DOMContentLoaded", () => {
    const showMoreBtn = document.getElementById("show-more-btn");

    showMoreBtn.addEventListener("click", () => {
        for (let i = 0; i < 4 && currentIndex < hiddenCards.length; i++, currentIndex++) {
            hiddenCards[currentIndex].classList.remove("hidden");
        }

        if (currentIndex >= hiddenCards.length) {
            showMoreBtn.style.display = 'none';
        }
    });

    showCategory('popular');
});
</script>




<!--------------------- SEARCH SECTION --------------------->
<script>
  const citiesByProvince = {
      "Sulawesi Selatan": ["Parepare", "Pinrang", "Makassar", "Maros", "Barru", "Tana Toraja"],
      "Sulawesi Barat": ["Majene", "Mamuju", "Polewali"],
      "Jawa Timur": ["Surabaya", "Malang", "Kediri"],
      "Jawa Barat": ["Bandung", "Bogor", "Bekasi"],
      "Bali": ["Denpasar", "Ubud", "Kuta"],
      "NTT": ["Kupang", "Ende", "Maumere"]
  };

  document.getElementById('provinsiSelect').addEventListener('change', function() {
      const selectedProvince = this.value;
      const kotaSelect = document.getElementById('kotaSelect');
      kotaSelect.innerHTML = '<option value="" disabled selected hidden>Pilih Kota</option>'; // Hapus opsi sebelumnya

      if (selectedProvince in citiesByProvince) {
          citiesByProvince[selectedProvince].forEach(function(city) {
              const option = document.createElement('option');
              option.value = city;
              option.textContent = city;
              kotaSelect.appendChild(option);
          });
      }
  });

  document.getElementById('searchButton').addEventListener('click', function() {
      const selectedProvince = document.getElementById('provinsiSelect').value;
      const selectedCity = document.getElementById('kotaSelect').value;
      const selectedCategory = document.getElementById('kategoriSelect').value;

      if (selectedProvince && selectedCity && selectedCategory) {
          let url;
          // Menentukan halaman tujuan berdasarkan opsi yang dipilih
          if (selectedProvince === "Sulawesi Selatan" && selectedCity === "Parepare" && selectedCategory === "Pantai") {
              url = "parepare.html";
          } else if (selectedProvince === "Sulawesi Selatan" && selectedCity === "Mamasa" && selectedCategory === "Gunung") {
              url = "halaman_gunung_mamasa.html";
          } else if (selectedProvince === "Sulawesi Barat" && selectedCity === "Mamasa" && selectedCategory === "Gunung") {
              url = "halaman_gunung_mamasa.html";
          }
          
          if (url) {
              window.location.href = url;
          } else {
              alert("Halaman belum tersedia untuk pilihan yang Anda buat.");
          }
      } else {
          alert("Silakan pilih provinsi, kota, dan kategori.");
      }
  });
</script>
</body>
</html>