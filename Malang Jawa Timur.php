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
	<title>Malang Jawa Timur</title>
	<link rel="stylesheet" type="text/css" href="css/Malang Jawa Timur style.css">
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
  
  
<!---------------------- BACKGROUND  ---------------------->
<div class="hero"></div>



<!---------------------- HOME SECTION  ---------------------->
  <div class="home-section">
    <h1>Malang</h1>
    <p>
        Malang, Jawa Timur, terkenal dengan keindahan alamnya dan sejarah yang kaya. Kota ini dikelilingi pegunungan dengan iklim sejuk, menawarkan destinasi wisata seperti Gunung Bromo yang spektakuler saat matahari terbit. Malang juga memiliki Batu Night Spectacular untuk hiburan malam yang seru. Di samping itu, wisatawan dapat menikmati bangunan bersejarah di Jalan Ijen dan kuliner khas seperti bakso Malang. Kombinasi alam yang menakjubkan, warisan sejarah, dan kuliner lezat membuat Malang menjadi destinasi wisata yang menarik di Jawa Timur.
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
            <h2>Mengenal Malang</h2>
            <p>Ikuti tur ke tempat-tempat menarik di kota ini</p>
        </div>
    </div>
    <hr>
</div>


<!---------------------- HOME3 SECTION  ---------------------->
<div class="container">
    <h1>Tempat Wisata Terbaik di Malang</h1>
    <p>Beragam destinasi wisata di Malang, mulai dari alam, sejarah, hingga top untuk Anda.</p>
    <div class="carousel">
        <button class="arrow left"><i class="fas fa-chevron-left"></i></button>
        <div class="carousel-wrapper">
            <div class="card">
                <img src="image/Batu Night Spectacular.jpg" alt="Batu Night Spectacular">
                <p>Batu Night Spectacular</p>
            </div>
            <div class="card">
                <img src="image/Gunung Kawi.jpg" alt="Gunung Kawi">
                <p>Gunung Kawi</p>
            </div>
            <div class="card">
                <img src="image/Pantai Balekambang.png" alt="Pantai Balekambang">
                <p>Pantai Balekambang</p>
            </div>
            <div class="card">
                <img src="image/Candi Singosari.jpeg" alt="Candi Singosari">
                <p>Candi Singosari</p>
            </div>
            <div class="card">
                <img src="image/Jalan Ijen.jpg" alt="Jalan Ijen">
                <p>Jalan Ijen</p>
            </div>
            <div class="card">
                <img src="image/bromo bg.png" alt="Gunung Bromo">
                <p>Gunung Bromo</p>
            </div>
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
<script src="js/Malang Jawa Timur script.js"></script>
</body>
</html>