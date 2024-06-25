<?php
if (file_exists('koneksi.php')) {
    include 'koneksi.php';
} else {
    echo "File koneksi.php tidak ditemukan!";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bali-Ubud-Pantai</title>
    <link rel="stylesheet" href="{{ asset('css/Bali-Ubud-Pantai style.css') }}">
    <!-- Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
</head>
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
      <li class="login"><p href="Login.html" id="loginButton">Login/Register</p></li>
    </ul>
</header>

  
<!------------------- SEARCH SECTION --------------------->
<section class="box-shadow">
<div class="teks-head">
<h1>Temukan surga tersembunyi dan petualangan epik!</h1>
<p>Rencanakan liburan impian Anda mulai sekarang. Mari mulai perjalanan tak terlupakan bersama kami!</p>
</div>
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
          <option value="Semua">Semua</option>
          <option value="Pulau">Pulau</option>
          <option value="Air Terjun">Air Terjun</option>
          <option value="Gunung">Gunung</option>
          <option value="Pantai">Pantai</option>
      </select>
  </div>
  <button class="search-button" id="searchButton">Cari</button>
</div>
</section>


<!------------------- HOME SECTION --------------------->
<div class="container">
    <h1>Pantai Bali di Ubud</h1>
    <p>Bali menawarkan pantai-pantai yang memukau dengan pasir putih dan <br>ombak besar.  Pantai di Bali  adalah surga bagi semua pengunjung.</p>
    <div class="carousel">
        <button class="arrow left"><i class="fas fa-chevron-left"></i></button>
        <div class="carousel-wrapper">
            <div class="card">
                <img src="image/Pantai Sanur.jpg">
                <p>Pantai Sanur</p>
            </div>
            <div class="card">
                <img src="image/Pantai Kuta.jpg">
                <p>Pantai Kuta</p>
            </div>
            <div class="card">
                <img src="image/pantai saba.jpg">
                <p>Pantai Saba</p>
            </div>
            <div class="card">
                <img src="image/Pantai Lembeng.jpeg">
                <p>Pantai Lembeng</p>
            </div>
            <div class="card">
                <img src="image/Pantai Lebih.jpg">
                <p>Pantai Lebih</p>
            </div>
            <div class="card">
                <img src="image/Pantai Purnama.jpg">
                <p>Pantai Purnama</p>
            </div>

            <!-- <div class="card">
                <img src="image/Pasar Seni Ubud.jpg">
                <p>Pantai Purnama</p>
            </div>
            <div class="card">
                <img src="image/Pasar Seni Ubud.jpg">
                <p>Pantai Purnama</p>
            </div>
            <div class="card">
                <img src="image/Pasar Seni Ubud.jpg">
                <p>Pantai Purnama</p>
            </div> -->
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
<script src="js/Bali-Ubud-Pantai script.js"></script>
</body>
</html>
