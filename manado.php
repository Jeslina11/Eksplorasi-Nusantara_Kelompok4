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
	<title>Manado</title>
	<link rel="stylesheet" type="text/css" href="css/Manado style.css">
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
      <li><a href="Beranda.php" id="home">Beranda</a></li>
      <li><a href="#tentang" id="about">Tentang</a></li>
      <li><a href="Informasi umum.php" id="informasi">Informasi umum</a></li>
      <li><a href="Wisata.php" id="wisata">Wisata</a></li> 
      <li class="login"><p href="Beranda.php" id="loginButton">Keluar</p></li>
    </ul>
</header>


<!---------------------- BACKGROUND  -------------------->
<div class="background"></div>


<!---------------------- HOME SECTION  ---------------------->
<div class="home-section">
  <h1>Kota Manado</h1>
  <p>
    Manado, ibu kota Provinsi Sulawesi Utara, terkenal dengan keindahan alam bawah lautnya dan keanekaragaman hayati laut yang luar biasa di Taman Laut Bunaken. Kota ini juga dikenal dengan masakan pedasnya seperti tinutuan dan rica-rica. Festival budaya seperti Festival Bunaken merayakan kekayaan tradisi dan seni lokal. Gereja-gereja bersejarah dan bangunan kolonial menambah pesona kota ini, menciptakan perpaduan menarik antara alam, budaya, dan sejarah. Manado adalah destinasi ideal bagi wisatawan yang mencari pengalaman unik di Sulawesi Utara.
  </p>
  <!-- <a href="#" class="read-more">Baca selengkapnya</a> -->
</div>

<!---------------------- HOME2 SECTION  ---------------------->
<div class="section">
  <div class="icon-title">
      <div class="icon">
          <i class="fas fa-lightbulb"></i>
      </div>
      <div>
          <h2>Mengenal Manado</h2>
          <p>Ikuti tur ke tempat-tempat menarik di kota ini</p>
      </div>
  </div>
  <hr>
</div>

<!---------------------- HOME3 SECTION  ---------------------->
<div class="container">
  <h1>Tempat Wisata Terbaik di Manado</h1>
  <p>Beragam destinasi wisata di Manado, mulai dari alam, sejarah, hingga hits untuk Anda.</p>
  <div class="carousel">
    <button class="arrow left"><i class="fas fa-chevron-left"></i></button>
    <div class="carousel-wrapper">
      <a href="Taman nasional bunaken.html" class="card">
        <img src="image/bunaken bg.jpg">
        <p>Taman Nasional Bunaken</p>
      </a>
      <a href=".html" class="card">
        <img src="image/Salinan citraland waterpark manado.png">
        <p>Citraland Waterpark</p>
      </a>
      <a href=".html" class="card">
        <img src="image/Salinan melayang beach.png">
        <p>Pantai Melayang</p>
      </a>
      <a href=".html" class="card">
        <img src="image/Salinan pulau manadotua.png">
        <p>Pulau Manadotua</p>
      </a>
    </div>
    <button class="arrow right"><i class="fas fa-chevron-right"></i></button>
  </div>
</div>



<!------------------ KUNJUNGI WISATA -------------------->
<section class="explore-more-home">
  <hr>
  <div class="home">
    <h1>Kunjungi Wisata di Manado</h1>
    <p class="sub-text-home">Beragam destinasi wisata di Palu, mulai dari wisata alam, sejarah, sampai yang lagi hits.</p>
  </div>
  <div id="cards-home" class="card-container-home">
    <div class="card" data-image="image/Salinan citraland waterpark manado.png" data-title="Citraland Waterpark"></div>
    <div class="card" data-image="image/Salinan pulau manadotua.png" data-title="Pulau Manadotua"></div>
    <div class="card" data-image="image/Salinan melayang beach.png" data-title="Melayang Beach"></div>
    <div class="card" data-image="image/bunaken bg.jpg" data-title="Bunaken"></div>
  </div>
  <div class="show-more-home">
    <button id="show-more-btn-home">Menampilkan lebih banyak</button>
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
<script src="js/Manado script.js"></script>
</body>
</html>