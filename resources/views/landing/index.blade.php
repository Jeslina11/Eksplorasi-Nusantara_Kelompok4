<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="css/halaman style.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
</head> 
<body>

<!--------------------- NAVBAR SECTION ------------------>
<header>
  @include('komponen.navbar')
</header>


<!------------------- BACKGROUND VIDEO --------------------->
{{--  <div class="hero">
  <video autoplay muted id="myVideo">
    <source src="vidio/3.mp4" type="vidio/mp4">
  </video>
</div>  --}}

<div class="hero">
  <video autoplay muted id="myVideo" controls>
    <source src="{{ asset('vidio/3.mp4') }}" type="video/mp4">
    Your browser does not support the video tag.
  </video>
</div>


<!--------------------- HEAD SECTION --------------------->
<!-- <div class="content">
  <h1>Selamat Datang</h1>
</div> -->

<div class="home2">
  <div class="content">
      <h2>Selamat Datang</h2>
      <h1>Visit <span class="changecontent"></span></h1>
      <p>Jelajahi pesona destinasi wisata Indonesia dari sabang sampai merauke!</p>
      <!-- <p>Indonesi memiliki kepulauan megah dengan budaya & alam yang kaya.</p> -->
  </div>
</div>


<!--------------------- HOME SECTION --------------------->
<section class="explore-more">
  <div class="header">
    <h1>Jelajahi lebih lanjut</h1>
    <p class="sub-text">Nikmati liburan dan wisata lengkap di Indonesia, serta berbagai destinasi menarik lainnya. Mari kita jelajahi sekarang!</p>
  </div>
  <div class="filters">
    <button class="filter-btn active" onclick="showCategory('popular')">Destinasi Popular</button>
    <button class="filter-btn" onclick="showCategory('pulau')">Pulau</button>
    <button class="filter-btn" onclick="showCategory('danau')">Danau</button>
    <button class="filter-btn" onclick="showCategory('pantai')">Pantai</button>
    <button class="filter-btn" onclick="showCategory('gunung')">Gunung</button>
    <button class="filter-btn" onclick="showCategory('budaya')">Budaya & Sejarah</button>
    <button class="filter-btn" onclick="showCategory('AirTerjun')">Air Terjun</button>
    <!-- <button class="filter-btn" onclick="openModal()"><i class="fas fa-sliders-h"></i> Filters</button> -->
  </div>
  <div id="cards" class="card-container">
    <div class="card">
      <img src="image/borobudur.jpg" alt="Candi Borobudur">
      <div class="card-content">
        <div class="rating-badge">
          <i class="fas fa-star"></i>
        </div>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
        </p>
        <p><a href="Candi borobudur.html"><button class="details-btn">Details</button></a></p>
      </div>
    </div>
    <div class="card">
      <img src="image/pink beach bg.jpg" alt="Pink Beach">
      <div class="card-content">
        <div class="rating-badge">
          <i class="fas fa-star"></i>
        </div>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
        </p>
        <p><a href="pink beach.html"><button class="details-btn">Details</button></a></p>
      </div>
    </div>
    <div class="card">
      <img src="image/pura luhur.jpg" alt="Pura Luhur Uluwatu">
      <div class="card-content">
        <div class="rating-badge">
          <i class="fas fa-star"></i>
        </div>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
        </p>
        <p><a href="pura uluwatu.html"><button class="details-btn">Details</button></a></p>
      </div>
    </div>
    <div class="card">
      <img src="image/candi.jpg" alt="Candi Prambanan">
      <div class="card-content">
        <div class="rating-badge">
          <i class="fas fa-star"></i>
        </div>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
        </p>
        <p><a href="candi prambanan.html"><button class="details-btn">Details</button></a></p>
      </div>
    </div>
    <div class="card">
      <img src="image/komodo.jpg" alt="Pulau Komodo">
      <div class="card-content">
        <div class="rating-badge">
          <i class="fas fa-star"></i>
        </div>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
        </p>
        <p><a href="pulau komodo.html"><button class="details-btn">Details</button></a></p>
      </div>
    </div>
    <div class="card hidden">
      <img src="image/rammang bg.jpg" alt="Rammang Rammang">
      <div class="card-content">
        <div class="rating-badge">
          <i class="fas fa-star"></i>
        </div>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
        </p>
        <p><a href="rammang.html"><button class="details-btn">Details</button></a></p>
      </div>
    </div>
    <div class="card hidden">
      <img src="image/Piaynemo Raja Ampat.jpg" alt="Raja Ampat">
      <div class="card-content">
        <div class="rating-badge">
          <i class="fas fa-star"></i>
        </div>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
        </p>
        <button href="piaynemo.html" class="details-btn">Details</button>
      </div>
    </div>
    <div class="card hidden">
      <img src="image/banyumala.jpg" alt="Banyumala">
      <div class="card-content">
        <div class="rating-badge">
          <i class="fas fa-star"></i>
        </div>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
        </p>
        <button href="banyumala.html" class="details-btn">Details</button>
      </div>
    </div>
    <div class="card hidden">
      <img src="image/bromo bg.png" alt="King Kong Hill">
      <div class="card-content">
        <div class="rating-badge">
          <i class="fas fa-star"></i>
        </div>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
        </p>
        <button href="Bromo.html" class="details-btn">Details</button>
      </div>
    </div>
    <div class="card hidden">
      <img src="image/labuan bajoo.jpg" alt="Labuan Bajo">
      <div class="card-content">
        <div class="rating-badge">
          <i class="fas fa-star"></i>
        </div>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
        </p>
        <button href="Labuan bajo.html" class="details-btn">Details</button>
      </div>
    </div>
    <div class="card hidden">
      <img src="image/ollon.png" alt="Sabana Ollon">
      <div class="card-content">
        <div class="rating-badge">
          <i class="fas fa-star"></i>
        </div>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
        </p>
        <button href="Bromo.html" class="details-btn">Details</button>
      </div>
    </div>
    <div class="card hidden">
      <img src="image/ijen.jpg" alt="Gunung Ijen">
      <div class="card-content">
        <div class="rating-badge">
          <i class="fas fa-star"></i>
        </div>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
        </p>
        <button href="ijen.html" class="details-btn">Details</button>
      </div>
    </div>
    <div class="card hidden">
      <img src="image/sewu.jpg" alt="Tumpak Sewu">
      <div class="card-content">
        <div class="rating-badge">
          <i class="fas fa-star"></i>
        </div>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
        </p>
        <button href="Tumpak sewu.html" class="details-btn">Details</button>
      </div>
    </div>
    <div class="card hidden">
      <img src="image/samosir bg.jpg" alt="Pulau samosir">
      <div class="card-content">
        <div class="rating-badge">
          <i class="fas fa-star"></i>
        </div>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
        </p>
        <button href="Pulau samosir.html" class="details-btn">Details</button>
      </div>
    </div>
    <div class="card hidden">
      <img src="image/waerebo.jpg" alt="Waerebo Village">
      <div class="card-content">
        <div class="rating-badge">
          <i class="fas fa-star"></i>
        </div>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
        </p>
        <button href="waerebo.html" class="details-btn">Details</button>
      </div>
    </div>
    <div class="card hidden">
      <img src="image/goa.png" alt="Goa Gong Pacitan">
      <div class="card-content">
        <div class="rating-badge">
          <i class="fas fa-star"></i>
        </div>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
        </p>
        <button href="Goa gong.html" class="details-btn">Details</button>
      </div>
    </div>
    <div class="card hidden">
      <img src="image/kuburan.jpg" alt="Kuburan Batu Lemo">
      <div class="card-content">
        <div class="rating-badge">
          <i class="fas fa-star"></i>
        </div>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
        </p>
        <button href="kuburan batu.html" class="details-btn">Details</button>
      </div>
    </div>
    <div class="card hidden">
      <img src="image/Nglirip.png" alt="Nglirip">
      <div class="card-content">
        <div class="rating-badge">
          <i class="fas fa-star"></i>
        </div>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
        </p>
        <button href="Nglirip.html" class="details-btn">Details</button>
      </div>
    </div>
    <div class="card hidden">
      <img src="image/Nusa Penida.jpg" alt="Nusa Penida">
      <div class="card-content">
        <div class="rating-badge">
          <i class="fas fa-star"></i>
        </div>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
        </p>
        <button href="nusa penida.html" class="details-btn">Details</button>
      </div>
    </div>
    <div class="card hidden">
      <img src="image/Lorentz6.jpg" alt="Lorentz">
      <div class="card-content">
        <div class="rating-badge">
          <i class="fas fa-star"></i>
        </div>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
        </p>
        <button href="Lorentz.html" class="details-btn">Details</button>
      </div>
    </div>
  </div>
  <div class="show-more">
    <button id="show-more-btn">Menampilkan lebih banyak</button>
  </div>
</section>



<!------------------ WISATA TERKENAL ------------------>
<div class="container-2">
  <div class="header-2">
    <h1>Wisata Terkenal di Sulawesi</h1>
  </div>
  <div class="cards-2">
    <div class="card-2">
      <img src="image/patung toraja.jpeg">
      <div class="card-content-2">
        <h2>Patung Yesus Buntu <br>Burake</h2>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
          Tana Toraja, Sulawesi Selatan
        </p>
        <a href="patung yesus buntu burake.html"><button class="details-btn">Details</button></a>
      </div>
      <div class="rating-badge2">
        <i class="fas fa-star"></i>
        <span>4.5</span>
      </div>
    </div>
    <div class="card-2">
      <img src="image/bunaken bg.jpg">
      <div class="card-content-2">
        <h2>Taman Nasional <br>Bunaken</h2>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
          Manado, Sulawesi Utara
        </p>
        <a href="Taman nasional bunaken.html"><button class="details-btn">Details</button></a>
      </div>
      <div class="rating-badge2">
        <i class="fas fa-star"></i>
        <span>4.6</span>
      </div>
    </div>
    <div class="card-2">
      <img src="image/rammang2.jpg">
      <div class="card-content-2">
        <h2>Karst Rammang <br>Rammang</h2>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
          Maros, Sulawesi Selatan
        </p>
        <a href="rammang.html"><button class="details-btn">Details</button></a>
      </div>
      <div class="rating-badge2">
        <i class="fas fa-star"></i>
        <span>4.7</span>
      </div>
    </div>
    <div class="card-2">
      <img src="image/ora.jpeg">
      <div class="card-content-2">
        <h2>Pantai <br>Ora</h2>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
          Maluku Tengah, Maluku
        </p>
        <a href="pantai ora.html"><button class="details-btn">Details</button></a>
      </div>
      <div class="rating-badge2">
        <i class="fas fa-star"></i>
        <span>4.6</span>
      </div>
    </div>
    <div class="card-2">
      <img src="image/99 kubah.jpg">
      <div class="card-content-2">
        <h2>Masjid Kubah <br>99 Asmaul Husna</h2>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
          Makassar, Sulawesi Selatan
        </p>
        <a href="Masjid kubah.html"><button class="details-btn">Details</button></a>
      </div>
      <div class="rating-badge2">
        <i class="fas fa-star"></i>
        <span>4.7</span>
      </div>
    </div>
    <div class="card-2">
      <img src="image/laona.png">
      <div class="card-content-2">
        <h2>Lappa <br>Laona</h2>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
          Barru, Sulawesi Selatan
        </p>
        <a href="lappa laona.html"><button class="details-btn">Details</button></a>
      </div>
      <div class="rating-badge2">
        <i class="fas fa-star"></i>
        <span>4.6</span>
      </div>
    </div>
    <div class="card-2">
      <img src="image/karawa2.png">
      <div class="card-content-2">
        <h2>Air Terjun <br>Karawa</h2>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
          Pinrang, Sulawesi Selatan
        </p>
        <a href="air terjun karawa.html"><button class="details-btn">Details</button></a>
      </div>
      <div class="rating-badge2">
        <i class="fas fa-star"></i>
        <span>4.6</span>
      </div>
    </div>
    <div class="card-2">
      <img src="image/padang indah.png">
      <div class="card-content-2">
        <h2>Padang Indah</h2>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
          Barru, Sulawesi Selatan
        </p>
        <a href="padang indah.html"><button class="details-btn">Details</button></a>
      </div>
      <div class="rating-badge2">
        <i class="fas fa-star"></i>
        <span>4.7</span>
      </div>
    </div>
    <div class="card-2">
      <img src="image/dato.png">
      <div class="card-content-2">
        <h2>Pantai <br>Dato</h2>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
          Majene, Sulawesi Barat
        </p>
        <a href="pantai dato.html"><button class="details-btn">Details</button></a>
      </div>
      <div class="rating-badge2">
        <i class="fas fa-star"></i>
        <span>4.5</span>
      </div>
    </div>
    <div class="card-2">
      <img src="image/samalona.png">
      <div class="card-content-2">
        <h2>Pulau <br>Samalona</h2>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
          Makassar, Sulawesi Selatan
        </p>
        <a href="pulau samalona.html"><button class="details-btn">Details</button></a>
      </div>
      <div class="rating-badge2">
        <i class="fas fa-star"></i>
        <span>4.6</span>
      </div>
    </div>
    <div class="card-2">
      <img src="image/karomba.png">
      <div class="card-content-2">
        <h2>Puncak <br>Karomba</h2>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
          Pinrang, Sulawesi Selatan
        </p>
        <a href="puncak karomba.html"><button class="details-btn">Details</button></a>
      </div>
      <div class="rating-badge2">
        <i class="fas fa-star"></i>
        <span>4.4</span>
      </div>
    </div>
    <div class="card-2">
      <img src="image/Rumede3.png">
      <div class="card-content-2">
        <h2>Kampung <br>Rumede</h2>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
          Polewali, Sulawesi Barat
        </p>
        <a href="rumede.html"><button class="details-btn">Details</button></a>
      </div>
      <div class="rating-badge2">
        <i class="fas fa-star"></i>
        <span>5.0</span>
      </div>
    </div>
    <div class="card-2">
      <img src="image/kali.png">
      <div class="card-content-2">
        <h2>Wisata Alam <br>Kalibiru</h2>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
          Polewali, Sulawesi Barat
        </p>
        <a href="kali biru.html"><button class="details-btn">Details</button></a>
      </div>
      <div class="rating-badge2">
        <i class="fas fa-star"></i>
        <span>4.4</span>
      </div>
    </div>
  </div>
</div>




<!--------------------- PANDUAN SECTION --------------------->
<section class="services" id="services">
  <div class="heading">
    <h3>Panduan Perjalanan</h3>
    <p>Semua yang harus Anda ketahui & persiapkan sebelum melangkah ke Petualangan Anda!</p>
  </div>
  <div class="card-content">
    <div class="row">
      <i class="fas fa-map-marked-alt"></i>
      <div class="card-body">
        <h3>Rencanakan Destinasi</h3>
        <p>Pilih dan rencanakan perjalanan Anda di antara ribuan pulau di Indonesia yang menakjubkan, sesuai dengan minat dan preferensi Anda.</p>
      </div>
    </div>
    <div class="row">
      <i class="fas fa-monument"></i>
      <div class="card-body">
        <h3>Eksplor <br> Budaya Indonesia</h3>
        <p>Rasakan keberagaman budaya Indonesia dengan mengunjungi desa tradisional, pameran seni, dan festival lokal untuk pengalaman autentik.</p>
      </div>
    </div>
    <div class="row">
      <i class="fas fa-hand-holding-heart"></i>
      <div class="card-body">
        <h3>Menghargai <br> Tradisi Lokal</h3>
        <p>Hormati alam & budaya dengan menjaga kebersihan tempat wisata, hindari merusak lingkungan, dan patuhi aturan setempat.</p>
      </div>
    </div>
    <div class="row">
      <i class="fas fa-suitcase-rolling"></i>
      <div class="card-body">
        <h3>Kebutuhan <br> Perjalanan</h3>
        <p>Pastikan membawa perlengkapan yang tepat, seperti pakaian sesuai dengan cuaca, obat-obatan pribadi & perlengkapan keamanan untuk kegiatan luar ruangan.</p>
      </div>
    </div>
  </div>
</section>



<!--------------------------- ABOUT SECTION ------------------------------>
<section id="tentang" class="About">
  <div class="About-img">
    <img src="image/about-img.png">
  </div>
  <div class="About-text">
    <h5>Let's</h5>
    <!-- <h5>Mari</h5> -->
    <h2>Learn more about Tours</h2>
    <!-- <h2>Belajar lebih<br>tentang Tours</h2> -->
    <p>Menikmati keindahan alam dan kekayaan budaya dunia merupakan pengalaman yang tak terlupakan. Setiap perjalanan wisata adalah kesempatan untuk menemukan keajaiban baru, menjelajahi tempat-tempat ikonik, dan merasakan keunikan setiap destinasi. </p>
  </div>
</section>



<!----------------------------- FOOTER SECTION ---------------------------->
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

<!-- JQuery Link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<!-- Testimonial js Link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


<!-------------- ANIMASI HALAMAN ---------------->
<!-- <script src="assets/js/scrollreveal.min.js"></script>
<script>
  const sr = ScrollReveal({
    origin: 'top',
    distance:'60px',
    duration: 3000,
    delay: 400,
  });
  sr.reveal(`.container-2`,{delay: 600, distance: '100px', interval: 100});
  sr.reveal(`.container`,{delay: 600, distance: '100px', interval: 100});
  sr.reveal(`.image-caption, .background-image, .search-bar2`, {origin: 'left'});
  sr.reveal(`.card-container, .show-more `, {origin: 'bottom',});
  sr.reveal(`.tour`, {origin: 'bottom',});
  sr.reveal(`.content`, {origin: 'bottom',});
  sr.reveal(`.card-content`, {origin: 'bottom',});
  sr.reveal(`.heading`,{delay: 600, distance: '100px', interval: 100});
  sr.reveal(`.search-container`, {origin: 'bottom',});
  sr.reveal(`.Footer`, {origin: 'bottom',});
  sr.reveal(`.holiday-img`, {origin: 'left',});
  sr.reveal(`.holiday-text`, {origin: 'right',});
</script> -->



<!------------------- BACKGROUND VIDEO ---------------->
<script>
function playVideo() {
    var video = document.getElementById("hero-video");
    video.play();
}

window.onload = playVideo;
</script>



<!------------------- NAVBAR STICKY ---------------->
<script>
const header = document.querySelector("header");
window.addEventListener("scroll", function() {
  header.classList.toggle("sticky", window.scrollY > 60)
});
</script>




<!------------------- HOME SECTION ---------------->
<script>
const cardsData = {
  popular: [
      { title: 'Candi Borobudur', location: 'Magelang, Jawa Tengah', rating: 4.7, imgSrc: 'image/borobudur.jpg', detailsUrl: 'Candi borobudur.html'},
      { title: 'Pink Beach', location: 'Manggarai Barat, NTT', rating: 4.6, imgSrc: 'image/pink beach bg.jpg', detailsUrl: 'pink beach.html'},
      { title: 'Candi Prambanan', location: 'Yogyakarta, Jawa Tengah', rating: 4.7, imgSrc: 'image/candi.jpg', detailsUrl: 'candi prambanan.html'},
      { title: 'King Kong Hill', location: 'Malang, Jawa Timur', rating: 4.7, imgSrc: 'image/bromo bg.png', detailsUrl: 'Bromo.html'},
      { title: 'Pulau Komodo', location: 'Pulau, NTT', rating: 4.4, imgSrc: 'image/komodo.jpg', detailsUrl: 'pulau komodo.html' },
      { title: 'Rammang Rammang', location: 'Maros, Sulawesi Selatan', rating: 4.7, imgSrc: 'image/rammang bg.jpg' , detailsUrl: 'rammang.html'},
      { title: 'Pura Luhur Uluwatu', location: 'Pecatu, Bali', rating: 4.6, imgSrc: 'image/pura luhur.jpg' , detailsUrl: 'pura uluwatu.html'},
      { title: 'Piaynemo', location: 'Sorong, Papua Barat Daya', rating: 4.4, imgSrc: 'image/raja\ ampat-bg.png', detailsUrl: 'piaynemo.html' },
      { title: 'Banyumala', location: 'Buleleng, Bali', rating: 4.6, imgSrc: 'image/banyumala.jpg', detailsUrl: 'banyumala.html' },
      { title: 'Labuan Bajo', location: 'Manggarai Barat, NTT', rating: 4.7, imgSrc: 'image/labuan bajoo.jpg', detailsUrl: 'Labuan bajo.html' },
      { title: 'Sabana Ollon', location: 'Tana Toraja, Sulawesi Selatan', rating: 4.8, imgSrc: 'image/ollon.png', detailsUrl: 'Lembah ollon.html' },
      { title: 'Gunung Ijen', location: 'Banyuwangi, Jawa Timur', rating: 4.7, imgSrc: 'image/ijen.jpg', detailsUrl: 'ijen.html' },
      { title: 'Tumpak Sewu', location: 'Lumajang, Jawa Timur', rating: 4.6, imgSrc: 'image/sewu.jpg', detailsUrl: 'Tumpak sewu.html' },
      { title: 'Pulau Samosir', location: 'Pulau Samosir, Sumatera Utara', rating: 4.6, imgSrc: 'image/samosir bg.jpg', detailsUrl: 'Pulau samosir.html' },
      { title: 'Waerebo Village', location: 'Kepulauan Manggarai, NTT', rating: 4.7, imgSrc: 'image/waerebo.jpg', detailsUrl: 'waerebo.html' },
      { title: 'Goa Gong Pacitan', location: 'Pacitan, Jawa Timur', rating: 4.4, imgSrc: 'image/goa.png', detailsUrl: 'Goa gong.html' },
      { title: 'Kuburan Batu Lemo', location: 'Tana Toraja, Sulawesi Selatan', rating: 4.6, imgSrc: 'image/kuburan.jpg', detailsUrl: 'kuburan batu.html' },
      { title: 'Nglirip', location: 'Lumajang, Jawa Timur', rating: 4.6, imgSrc: 'image/Nglirip.png', detailsUrl: 'Nglirip.html' },
      { title: 'Nusa Penida', location: 'Klungkung, Bali', rating: 4.8, imgSrc: 'image/Nusa Penida.jpg', detailsUrl: 'nusa penida.html' },
      { title: 'Lorentz', location: 'Jayawijaya, Papua', rating: 4.4, imgSrc: 'image/Lorentz6.jpg', detailsUrl: 'Lorentz.html' },
  ],

  pulau: [
      { title: 'Pulau Komodo', location: 'Pulau, NTT', rating: 4.4, imgSrc: 'image/komodo.jpg' },
      { title: 'Labuan Bajo', location: 'Manggarai Barat, NTT', rating: 4.7, imgSrc: 'image/labuan bajoo.jpg' },
      { title: 'Nusa Penida', location: 'Klungkung, Bali', rating: 4.8, imgSrc: 'image/Nusa Penida.jpg' },
      { title: 'Piaynemo', location: 'Sorong, Papua Barat Daya', rating: 4.4, imgSrc: 'image/Piaynemo Raja Ampat.jpg' },
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
  const cardsContainer = document.getElementById('cards');
  cardsContainer.innerHTML = '';

  const categoryCards = cardsData[category];
  categoryCards.forEach(card => {
      const cardElement = document.createElement('div');
      cardElement.className = 'card';
      cardElement.innerHTML = `
          <img src="${card.imgSrc}" alt="${card.title}">
          <div class="card-content">
              <div class="rating-badge">
                  <i class="fas fa-star"></i>
                  <span>${card.rating}</span>
              </div>
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

</body>
</html>