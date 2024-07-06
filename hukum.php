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
	<title>Hukum</title>
	<link rel="stylesheet" type="text/css" href="css/hukum style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
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



<!---------------------- HOME SECTION ------------------->
<div class="center-text2">
    <h2>Panduan Hukum di Indonesia: Sistem, Peraturan, dan Akses Layanan.</h2>
    </div>
      <div class="container-teks">
      <p class="intro">
        Telusuri sistem hukum Indonesia dari hukum civil law hingga perlindungan hak asasi manusia. Temukan cara akses advokat, pengadilan, dan bantuan hukum untuk menjaga kepatuhan dan menghindari masalah hukum selama tinggal di Indonesia.
      </p>
        
        <!-- text-container1 -->
        <div class="text-container1">
          <h1>Apa hukuman bagi kepemilikan dan peredaran narkoba di Indonesia?</h1>
          <p>
            Di Indonesia, kepemilikan narkotika dapat dihukum 4-12 tahun penjara dan denda Rp 800 juta hingga Rp 8 miliar, sedangkan perdagangan orang dapat mengakibatkan hukuman 5-15 tahun penjara dan denda Rp 1 miliar hingga Rp 10 miliar, dengan ancaman pidana mati jika melebihi 1 kg untuk obat mentah atau 5 gram untuk obat olahan.
          </p>
      </div>
      <div class="text-container1">
        <h1>Apakah alkohol legal di Indonesia dan berapa usia minimum untuk mengonsumsinya?</h1>
        <p>
          Di Indonesia, alkohol secara hukum adalah bahan yang legal, namun ada regulasi yang mengatur penggunaannya. Untuk dapat mengonsumsi alkohol secara sah, seseorang harus berusia minimal 21 tahun. Regulasi ini bertujuan untuk mengendalikan dan mengawasi konsumsi alkohol guna melindungi kesehatan masyarakat dan memastikan penggunaannya sesuai dengan norma-norma sosial yang berlaku di Indonesia.
        </p>
    </div>
    <div class="text-container1">
      <h1>Apa Jadinya Jika Anda Overstay di Indonesia?</h1>
      <p>
        Undang-undang keimigrasian Indonesia bagi pelaku perjalanan yang overstay tidak lebih dari 60 hari. Bagi yang melebihi batas waktu 60 hari, dikenakan denda harian sebanyak-banyaknya Rp 1 juta per hari. Mereka yang tinggal melebihi 60 hari akan menghadapi deportasi dan kemungkinan masuk daftar hitam.
      </p>
  </div>
  <div class="text-container1">
    <h1>Bolehkah Orang Asing Mengemudi di Indonesia?</h1>
    <p>
      Orang asing dapat mengemudi menggunakan surat izin mengemudi internasional yang telah dikeluarkan di Indonesia, serta surat izin mengemudi dari negara asal orang tersebut. Alternatifnya, orang asing bisa mendapatkan surat ijin mengemudi internasional yang diterbitkan di negara asal mereka sebelum mereka berangkat, namun hal ini mungkin perlu mendapat persetujuan dari kantor perizinan Indonesia di Jakarta begitu mereka tiba.
    </p>
</div>
<div class="text-container1">
  <h1>Berapa Batas Usia Mengemudi di Indonesia?</h1>
  <p>
    Batasan usia mengemudi di Indonesia setelah mendapatkan Surat Izin Mengemudi Indonesia yang dikeluarkan oleh Kepolisian Negara Republik Indonesia (Polri) adalah 17 tahun.
  </p>
</div>
<div class="text-container1">
  <h1>Berapa batas kecepatan di Indonesia?</h1>
  <p>
    Di Indonesia, orang mengemudi di sisi kiri jalan, dan berlaku hukum standar mengemudi internasional. Batas kecepatannya adalah 50 km/jam di wilayah perkotaan di Indonesia, dan 100 km/jam di jalan raya, namun satu-satunya jalan raya yang layak di negara ini adalah di Pulau Jawa.
  </p>
</div>
<div class="text-container1">
  <h1>Apakah Perjudian Legal di Indonesia?</h1>
  <p>
    Perjudian dilarang di Indonesia, dianggap sepenuhnya ilegal baik bagi penduduk lokal maupun orang asing. Tidak ada kasino yang layak di negara ini, dan mereka yang melakukan praktik perjudian mungkin akan mendapat hukuman berat dari pihak berwenang dan dijebloskan ke penjara.
  </p>
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
<script src="js/hukum script.js"></script>
</body>
</html>