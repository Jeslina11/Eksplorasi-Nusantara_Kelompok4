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
	<title>Maros</title>
	<link rel="stylesheet" type="text/css" href="css/Maros style.css">
  <!-- link -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
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


<!---------------------- BACKGROUND --------------------->
<div class="hero">
</div>


<!--------------------- HOME SECTION --------------------->
<div class="container">
  <h1>Kota Maros</h1>
  <p class="intro">
    Maros adalah sebuah kabupaten di Provinsi Sulawesi Selatan yang terkenal dengan keindahan alam dan situs arkeologinya. Terletak tidak jauh dari Makassar, Maros menawarkan pemandangan spektakuler dari Taman Nasional Bantimurung Bulusaraung, yang dikenal dengan air terjunnya yang memukau dan gua-gua kapur yang mengesankan. Bantimurung juga dikenal sebagai "Kerajaan Kupu-Kupu" karena ribuan spesies kupu-kupu yang hidup di sana, menjadikannya destinasi favorit bagi pecinta alam dan fotografi. Selain itu, Maros memiliki situs prasejarah yang luar biasa di Leang-Leang, dengan lukisan gua yang berusia ribuan tahun. Lukisan tangan dan babi rusa di dinding gua ini memberikan wawasan mendalam tentang kehidupan manusia purba di wilayah ini. Maros juga terkenal dengan kuliner khasnya, seperti coto Maros dan pisang ijo, yang menggugah selera. <span id="dots">...</span><span class="more-content"> Kombinasi antara keindahan alam, kekayaan sejarah, dan budaya menjadikan Maros destinasi menarik bagi wisatawan yang ingin mengeksplorasi pesona Sulawesi Selatan.</span>
  </p>
  <a href="#" class="read-more" onclick="toggleReadMore(event)">Read More</a>
  <div class="section">
    <!-- <div class="icon-title">
      <div class="icon">
        <i class="fas fa-lightbulb"></i>
      </div>
      <div>
        <h2>Kenali Maros</h2>
        <p>Temukan pesona uniknya yang tidak boleh Anda lewatkan</p>
      </div>
    </div> -->
  </div>
  <hr>
  <h2>Tempat Populer di Maros</h2>
</div>

<!-- Card Tempat Populer di Maros -->
<div class="container-2">
  <div class="cards-2">
    <!-- Card 1 -->
    <div class="card-2">
      <img src="image/rammang2.jpg">
      <div class="card-content-2">
        <h2>Karst <br>Rammang-rammang</h2>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
          Jl. Bau Massepe, Labukkang
        </p>
        <p><button class="details-btn">Details</button></p>
      </div>
      <div class="rating-badge2">
        <i class="fas fa-star"></i>
        <span>4.9</span>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="card-2">
      <img src="image/maros highland.jpeg">
      <div class="card-content-2">
        <h2>Maros <br>Highland</h2>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
          Cappa Galung, Bacukiki
        </p>
        <p><button class="details-btn">Details</button></p>
      </div>
      <div class="rating-badge2">
        <i class="fas fa-star"></i>
        <span>4.9</span>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="card-2">
      <img src="image/bantimurung.jpg">
      <div class="card-content-2">
        <h2>Taman Nasional <br>Bantimurung</h2>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
          Jl. Jendral Sudirman, Bacukiki
        </p>
        <p><button class="details-btn">Details</button></p>
      </div>
      <div class="rating-badge2">
        <i class="fas fa-star"></i>
        <span>4.9</span>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="card-2">
      <img src="image/Taman arkeologi leang-leang.jpeg" alt="Hi,ray">
      <div class="card-content-2">
        <h2>Taman Arkeologi <br>Leang-leang</h2>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
          Jl. Balana, Cappa Galung
        </p>
        <p><button class="details-btn">Details</button></p>
      </div>
      <div class="rating-badge2">
        <i class="fas fa-star"></i>
        <span>4.9</span>
      </div>
    </div>
  </div>
</div>



<!------------------ KUNJUNGI WISATA -------------------->
<section class="explore-more">
  <div class="header">
    <h1>Kunjungi Wisata di Maros</h1>
    <p class="sub-text">Beragam destinasi wisata di Maros, mulai dari wisata alam, sejarah, sampai yang lagi hits.</p>
  </div>
    <div id="cards" class="card-container">
      <div class="card">
        <img src="image/Taman arkeologi leang-leang.jpeg">
        <div class="card-content">
          <div class="rating-badge">
            <i class="fas fa-star"></i>
          </div>
          <p class="location">
            <i class="fas fa-map-marker-alt location-icon"></i>
          </p>
          <p><a href="rumede.html"><button class="details-btn">Details</button></a></p>
        </div>
      </div>
      <div class="card">
        <img src="image/rammang2.jpg">
        <div class="card-content">
          <div class="rating-badge">
            <i class="fas fa-star"></i>
          </div>
          <p class="location">
            <i class="fas fa-map-marker-alt location-icon"></i>
          </p>
          <p><a href="kali biru.html"><button class="details-btn">Details</button></a></p>
        </div>
      </div>
      <div class="card">
        <img src="image/bantimurung.jpg">
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
        <img src="image/maros highland.jpeg">
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
  </div>
  <div class="show-more">
    <button id="show-more-btn">Menampilkan lebih banyak</button>
  </div>
</section>



<!----------------- FOOTER SECTION --------------------->
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

<script src="js/Maros script.js"></script>
</body>
</html>