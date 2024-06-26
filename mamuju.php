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
	<title>Mamuju</title>
	<link rel="stylesheet" type="text/css" href="css/Mamuju style.css">
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
  <h1>Kota Mamuju</h1>
  <p class="intro">
    Mamuju, ibu kota Provinsi Sulawesi Barat, adalah kota yang mempesona dengan keindahan alam dan kekayaan budayanya. Terletak di tepi Selat Makassar, Mamuju menawarkan panorama laut yang memukau dan pantai-pantai eksotis seperti Pantai Manakarra yang terkenal dengan pemandangan matahari terbenamnya yang spektakuler. Pegunungan dan perbukitan yang mengelilingi kota ini juga menambah pesona alamnya, menjadikannya surga bagi para pecinta alam dan petualangan. Budaya Mamuju yang kaya tercermin dalam berbagai tradisi dan upacara adat yang masih dijaga dengan baik oleh masyarakatnya. Festival-festival lokal yang meriah, seperti Festival Sandeq, menampilkan keunikan seni dan budaya suku Mandar, termasuk perahu tradisional yang menjadi ikon daerah ini. <span id="dots">...</span><span class="more-content"> Selain itu, Mamuju juga terkenal dengan kuliner khasnya, seperti Jepa dan Bau Peapi, yang menggugah selera. Dengan kombinasi keindahan alam, budaya yang kaya, dan keramahan penduduknya, Mamuju adalah destinasi yang menawarkan pengalaman autentik dan tak terlupakan di Sulawesi Barat.</span>
  </p>
  <a href="#" class="read-more" onclick="toggleReadMore(event)">Read More</a>
  <div class="section">
  </div>
  <hr>
  <h2>Tempat Populer di Mamuju</h2>
</div>

<!-- Card Tempat Populer di Mamuju -->
<div class="container-2">
  <div class="cards-2">
    <!-- Card 1 -->
    <div class="card-2">
      <img src="image/Salinan pulau karampuang.jpg">
      <div class="card-content-2">
        <h2>Pulau <br>Karampuang</h2>
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
      <img src="image/Salinan hero cafe.jpg">
      <div class="card-content-2">
        <h2>Cafe <br>Hero</h2>
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
      <img src="image/Salinan manakarra.jpg" >
      <div class="card-content-2">
        <h2>Pantai <br>Manakarra</h2>
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
      <img src="image/Salinan malute.png">
      <div class="card-content-2">
        <h2>Air terjun <br>Malute</h2>
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
    <h1>Kunjungi Wisata di Mamuju</h1>
    <p class="sub-text">Beragam destinasi wisata di Mamuju, mulai dari wisata alam, sejarah, sampai yang lagi hits.</p>
  </div>
    <div id="cards" class="card-container">
      <div class="card">
        <img src="image/pulau karampuang.jpg">
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
        <img src="image/manakarra.jpg">
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
        <img src="image/malute.webp">
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
<script src="js/Mamuju script.js"></script>
</body>
</html>