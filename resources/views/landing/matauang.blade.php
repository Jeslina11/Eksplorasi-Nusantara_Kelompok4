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
	<title>Mata Uang</title>
	<link rel="stylesheet" href="{{ asset('css/Mata Uang style.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
</head> 
<body>

<!--------------------- NAVBAR SECTION ------------------>
<header>
  @include('komponen.halog')
</header>


<!---------------------- BACKGROUND  -------------------->
<div class="background"></div>



<!--------------------------- HOME --------------------------->
<div class="center-text2">
  <h2>Informasi Mengenai Mata Uang dan Akses Keuangan di Indonesia</h2>
</div>
<div class="container-teks">
  <p class="intro">
    Panduan ini menjelaskan pecahan uang kertas dan logam Rupiah yang berlaku di Indonesia, mulai dari uang kertas Rp1000 hingga Rp100.000, serta uang logam seperti Rp1000, Rp500, Rp200, Rp100, dan Rp50. Selain itu, Anda akan menemukan informasi tentang tempat dan cara menukar mata uang asing di bank, money changer, atau resor wisata yang menyediakan layanan tersebut. Juga dibahas ketersediaan ATM internasional di kota-kota besar dan daerah wisata untuk memudahkan akses keuangan Anda selama berlibur di Indonesia.
  </p>

  <!-- text-container1 -->
  <div class="text-container1">
    <h1>Bagaimana pecahan uang kertas dan logam Rupiah di Indonesia?</h1>
    <p>
      Uang kertas Indonesia tersedia dalam pecahan Rp1000, Rp2000, Rp5000, Rp10.000, Rp20.000, Rp50.000, dan Rp100.000. Sementara itu, uang logam beredar dalam pecahan Rp1000, Rp500, Rp200, Rp100, dan Rp50.
    </p>
  </div>

  <div class="text-container1">
    <h1>Dimana saya bisa menukar mata uang asing di Indonesia?</h1>
    <p>
      Anda bisa menukar mata uang asing di bank, money changer, atau resor wisata yang menyediakan layanan penukaran uang. Namun, disarankan untuk menukarkan uang terlebih dahulu jika Anda bepergian ke daerah terpencil.
    </p>
  </div>

  <div class="text-container1">
    <h1> Apakah ATM mudah diakses di Indonesia?</h1>
    <p>
      ATM pada jaringan internasional Plus/Cirrus atau Alto umumnya tersedia di semua kota besar dan tempat wisata di Indonesia. Namun, batasan penarikan dan ketersediaan pecahan uang dapat bervariasi tergantung pada banknya. Disarankan untuk menarik sejumlah uang di ATM di kota besar sebelum pergi ke daerah terpencil.
    </p>
  </div>
</div>



<!----------------------------- FOOTER SECTION ----------------------------->
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
<script src="js/Mata Uang script.js"></script>
</body>
</html>