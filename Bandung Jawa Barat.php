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
	<title>Bandung Jawa Barat</title>
	<link rel="stylesheet" type="text/css" href="css/Bandung Jawa Barat style.css">
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



<!---------------------- HOME 1 SECTION  ---------------------->
  <div class="home-section">
    <h1>Bandung</h1>
    <p>
        Bandung, kota di Jawa Barat, terkenal dengan alamnya yang memesona, warisan budaya kolonial Belanda, dan kekayaan kuliner. Dikelilingi pegunungan, Bandung menawarkan destinasi wisata seperti Gunung Tangkuban Perahu dan Kawah Putih. Juga terkenal dengan belanja dan jajanan khas seperti batagor dan siomay. Bandung adalah perpaduan yang menarik antara alam, sejarah, dan kuliner yang membuatnya populer di kalangan wisatawan.    </p>
    <!-- <a href="#" class="read-more">Baca selengkapnya</a> -->
</div>

<!---------------------- HOME 2 SECTION  ---------------------->
<div class="section">
    <div class="icon-title">
        <div class="icon">
            <i class="fas fa-lightbulb"></i>
        </div>
        <div>
            <h2>Mengenal Bandung</h2>
            <p>Ikuti tur ke tempat-tempat menarik di kota ini</p>
        </div>
    </div>
    <hr>
</div>


<!---------------------- HOME 3 SECTION  ---------------------->
<div class="container">
    <h1>Tempat Wisata Terbaik di Bandung</h1>
    <p>Beragam destinasi wisata di Bandung, mulai dari alam, sejarah, hingga top untuk Anda.</p>
    <div class="carousel">
        <button class="arrow left"><i class="fas fa-chevron-left"></i></button>
        <div class="carousel-wrapper">
            <div class="card">
                <img src="image/Dusun Bambu.webp">
                <p>Dusun Bambu</p>
            </div>
            <div class="card">
                <img src="image/Negeri ajaib lembang.png">
                <p>Negeri ajaib lembang</p>
            </div>
            <div class="card">
                <img src="image/Saung angklung udjo.jpg">
                <p>Saung angklung udjo</p>
            </div>
            <div class="card">
                <img src="image/Taman Wisata Bougenville.jpeg">
                <p>Taman Wisata Bougenville</p>
            </div>
            <div class="card">
                <img src="image/Amazing Art World Bandung.jpg">
                <p>Amazing Art World Bandung</p>
            </div>
            <div class="card">
                <img src="image/tangkuban perahu.jpg">
                <p>Tangkuban Perahu</p>
            </div>
            <div class="card">
                <img src="image/Taman & Kebun Binatang Lembang.jpg">
                <p>Taman & Kebun Binatang Lembang</p>
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
<script src="js/Bandung Jawa Barat script.js"></script>
</body>
</html>