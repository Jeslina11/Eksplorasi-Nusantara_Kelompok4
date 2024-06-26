<?php
if (file_exists('koneksi.php')) {
    include 'koneksi.php';
} else {
    echo "File koneksi.php tidak ditemukan!";
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ubud bali</title>
	<link rel="stylesheet" type="text/css" href="css/ubud bali style.css">
  <!-- link -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
</head>
<body>


<!--------------------- NAVBAR SECTION ------------------>
<header>
  <a href="#" class="logo">
    <img src="image/logo.png" alt="Logo" />
  </a>
    <ul class="navbar">
      <li><a href="Beranda.html" id="home">Beranda</a></li>
      <li><a href="#tentang" id="about">Tentang</a></li>
      <li><a href="Informasi umum.html" id="informasi">Informasi umum</a></li>
      <li><a href="Wisata.html" id="wisata">Wisata</a></li> 
      <li class="login"><p href="Beranda.html" id="loginButton">Keluar</p></li>
    </ul>
</header>
  
  
<!---------------------- BACKGROUND  ---------------------->
<div class="hero"></div>



<!---------------------- HOME 1 SECTION  ---------------------->
  <div class="home-section">
    <h1>Ubud</h1>
    <p>Ubud di Bali adalah destinasi wisata favorit yang terkenal dengan pemandangan alam asri, budaya kaya, dan suasana damai. Dikelilingi persawahan hijau dan kuil kuno, Ubud menawarkan galeri seni, toko kerajinan, dan tempat peristirahatan spiritual. Atraksi utama termasuk Suaka Hutan Monyet, Istana Ubud, Goa Gajah, dan Teras Sawah Tegallalang. Wisatawan dapat menikmati pertunjukan tari dan musik Bali, retret yoga, spa, serta restoran organik, menjadikan Ubud tempat yang sempurna untuk menikmati perpaduan alam, budaya, dan spiritualitas.</p>
    <!-- <a href="#" class="read-more">Baca selengkapnya</a> -->
</div>

<!---------------------- HOME 2 SECTION  ---------------------->
<div class="section">
    <div class="icon-title">
        <div class="icon">
            <i class="fas fa-lightbulb"></i>
        </div>
        <div>
            <h2>Mengenal Ubud</h2>
            <p>Ikuti tur ke tempat-tempat menarik di kota ini</p>
        </div>
    </div>
    <hr>
</div>

<!---------------------- HOME 3 SECTION  ---------------------->
<div class="container">
  <h1>Tempat Wisata Terbaik di Ubud</h1>
  <p>Beragam destinasi wisata di Ubud, mulai dari alam, sejarah, hingga top untuk Anda.</p>
  <div class="carousel">
    <button class="arrow left"><i class="fas fa-chevron-left"></i></button>
    <div class="carousel-wrapper">
      <a href="Pasar Seni Ubud.html" class="card">
        <img src="image/Pasar Seni Ubud.jpg" alt="Pasar Seni Ubud">
        <p>Pasar Seni Ubud</p>
      </a>
      <a href="#" class="card">
        <img src="image/jalan punggung bukit campuhan.jpg" alt="Jalan Punggung Bukit Campuhan">
        <p>Jalan Punggung Bukit Campuhan</p>
      </a>
      <a href="#" class="card">
        <img src="image/pura tirta empul.jpg" alt="Pura Tirta Empul">
        <p>Pura Tirta Empul</p>
      </a>
      <a href="#" class="card">
        <img src="image/museum seni agung rai.webp" alt="Museum Seni Agung Rai">
        <p>Museum Seni Agung Rai</p>
      </a>
      <a href="#" class="card">
        <img src="image/bg wisata..jpg" alt="Teras Sawah Tegallalang">
        <p>Teras Sawah Tegallalang</p>
      </a>
    </div>
    <button class="arrow right"><i class="fas fa-chevron-right"></i></button>
  </div>
</div>






<!--------------------- FOOTER SECTION ------------------->
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
  
<script src="js/ubud bali script.js"></script>
</body>
</html>