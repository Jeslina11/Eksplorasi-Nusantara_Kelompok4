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
	<title>Palu</title>
	<link rel="stylesheet" href="{{ asset('css/palu style.css') }}">
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
  <h1>Kota Palu</h1>
  <p>
    Palu, sebuah kota yang terletak di Provinsi Sulawesi Tengah, Indonesia, menawarkan kombinasi unik antara keindahan alam dan kekayaan budaya. Dikelilingi oleh pegunungan dan memiliki pantai yang menakjubkan, Palu menarik perhatian dengan lanskapnya yang memukau dan keberagaman budaya penduduknya. Kota ini juga dikenal dengan kegiatan perdagangan yang berkembang pesat, serta potensi ekonomi yang didukung oleh sektor pertanian dan pariwisata yang semakin berkembang.
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
          <h2>Mengenal Palu</h2>
          <p>Ikuti tur ke tempat-tempat menarik di destinasi ini</p>
      </div>
  </div>
  <hr>
</div>

<!---------------------- HOME3 SECTION  ---------------------->
<div class="container">
  <h1>Tempat Wisata Terbaik di Palu</h1>
  <p>Beragam destinasi wisata di Palu, mulai dari alam, sejarah, hingga hits untuk Anda.</p>
  <div class="carousel">
    <button class="arrow left"><i class="fas fa-chevron-left"></i></button>
    <div class="carousel-wrapper">
      <a href=".html" class="card">
        <img src="image/lore lindu.jpeg">
        <p>Lore Lindu</p>
      </a>
      <a href=".html" class="card">
        <img src="image/pusat laut donggala.webp">
        <p>Pusat Laut Donggala</p>
      </a>
      <a href=".html" class="card">
        <img src="image/pantai tanjung karang.webp">
        <p>Pantai Tanjung Karang</p>
      </a>
      <a href=".html" class="card">
        <img src="image/saluopa.jpg">
        <p>Saluopa</p>
      </a>
    </div>
    <button class="arrow right"><i class="fas fa-chevron-right"></i></button>
  </div>
</div>





<!------------------ KUNJUNGI WISATA -------------------->
<section class="explore-more-home">
  <hr>
  <div class="home">
    <h1>Kunjungi Wisata di Palu</h1>
    <p class="sub-text-home">Beragam destinasi wisata di Palu, mulai dari wisata alam, sejarah, sampai yang lagi hits.</p>
  </div>
  <div id="cards-home" class="card-container-home">
    <div class="card" data-image="image/lore lindu.jpeg" data-title="Taman Mattirotasi"></div>
    <div class="card" data-image="image/pantai tanjung karang.webp" data-title="Tonrangeng River Side"></div>
    <div class="card" data-image="image/pusat laut donggala.webp" data-title="Paputo Beach"></div>
    <div class="card" data-image="image/saluopa.jpg" data-title="Anjungan Cempae"></div>
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
<script src="js/palu script.js"></script>
</body>
</html>