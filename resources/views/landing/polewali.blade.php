{{--  <?php
if (file_exists('koneksi.php')) {
    include 'koneksi.php';
} else {
    echo "File koneksi.php tidak ditemukan!";
    exit;
}  --}}
?>
<!DOCTYPE html>
<html>
<head>
	<title>polewali</title>
	<link rel="stylesheet" href="{{ asset('css/polewali style.css') }}">
  <!-- link -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
</head> 
<body>

  
<!--------------------- NAVBAR SECTION ------------------>
<header>
  @include('komponen.navbar')
</header>


<!---------------------- BACKGROUND  -------------------->
<div class="background"></div>



<!---------------------- HOME SECTION  ---------------------->
<div class="home-section">
  <h1>Kota Polewali</h1>
  <p>
    Polewali adalah sebuah kota yang terletak di Provinsi Sulawesi Barat, Indonesia. Kota ini memiliki luas wilayah yang cukup luas dan beragam destinasi wisata, mulai dari keindahan alam, situs sejarah, hingga tempat-tempat yang sedang populer dikunjungi. Mayoritas penduduknya bermata pencaharian sebagai petani dan nelayan. Polewali memiliki iklim tropis dengan dua musim utama, yaitu musim kemarau dan musim hujan. Kota ini terletak di daerah pesisir dengan pantai yang menawarkan panorama yang menakjubkan.
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
          <h2>Mengenal Polewali</h2>
          <p>Ikuti tur ke tempat-tempat menarik di destinasi ini</p>
      </div>
  </div>
  <hr>
</div>


<!---------------------- HOME3 SECTION  ---------------------->
<div class="container">
  <h1>Tempat Wisata Terbaik di Polewali</h1>
  <p>Beragam destinasi wisata di Polewali, mulai dari alam, sejarah, hingga hits untuk Anda.</p>
  <div class="carousel">
    <button class="arrow left"><i class="fas fa-chevron-left"></i></button>
    <div class="carousel-wrapper">
      <a href="rumede.html" class="card">
        <img src="image/rumede2 bg.png">
        <p>Kampung Rumede</p>
      </a>
      <a href="kali biru.html" class="card">
        <img src="image/kali biru bg.avif">
        <p>Wisata Alam Kalibiru</p>
      </a>
      <a href=".html" class="card">
        <img src="image/gusung toraja.webp">
        <p>Pulau Gusung Toraja</p>
      </a>
      <a href=".html" class="card">
        <img src="image/palippis.jpg">
        <p>Pantai Palippis</p>
      </a>
    </div>
    <button class="arrow right"><i class="fas fa-chevron-right"></i></button>
  </div>
</div>




  
<!------------------ KUNJUNGI WISATA -------------------->
<section class="explore-more-home">
  <hr>
  <div class="home">
    <h1>Kunjungi Wisata di Polewali</h1>
    <p class="sub-text-home">Beragam destinasi wisata di Polewali, mulai dari wisata alam, sejarah, sampai yang lagi hits.</p>
  </div>
  <div id="cards-home" class="card-container-home">
    <div class="card" data-image="image/rumede2 bg.png" data-title="Rumede"></div>
    <div class="card" data-image="image/kali biru bg.avif" data-title="Kali Biru"></div>
    <div class="card" data-image="image/indorannuang bg.jpg" data-title="Indorannuang"></div>
    <div class="card" data-image="image/palippis.jpg" data-title="Palippis"></div>
    <div class="card" data-image="image/rawa bangun.jpg" data-title="Rawa Bangun"></div>
    <div class="card hidden" data-image="image/limbong kamanda.webp" data-title="Limbong Kamanda"></div>
    <div class="card hidden" data-image="image/gusung toraja.webp" data-title="Gusung Toraja"></div>
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
<script src="js/polewali script.js"></script>
</body>
</html>