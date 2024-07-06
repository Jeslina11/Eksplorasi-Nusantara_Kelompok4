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
	<title>Kartu kredit</title>
	<link rel="stylesheet" type="text/css" href="css/Kartu kredit style.css">
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
      <h2>Panduan Penggunaan Kartu Kredit dan Debit di Indonesia.</h2>
    </div>
    <div class="container-teks">
      <p class="intro">
        Panduan lengkap tentang penggunaan kartu kredit dan debit di Indonesia. Mulai dari jenis kartu yang dapat diterima di ATM dan merchant, hingga tips untuk menarik uang tunai dengan mudah di kota-kota besar dan daerah wisata. Anda juga akan menemukan informasi tentang jumlah uang tunai yang disarankan untuk dibawa dan cara menjaga keamanan saat bertransaksi dengan kartu kredit. Dengan panduan ini, Anda dapat merencanakan perjalanan ke Indonesia tanpa khawatir tentang masalah keuangan.
      </p>

        <!-- text-container1 -->
        <div class="text-container1">
            <h1>Kartu Kredit atau Debit Apa yang dapat diterima di Indonesia?</h1>
            <p>
              Untuk menarik uang tunai di Indonesia, ATM tersebar luas di kota-kota besar dan daerah wisata. Kartu-kartu dengan jaringan Cirrus, Maestro, dan Plus umumnya diterima di sebagian besar ATM bank besar di Indonesia. Logo Cirrus dan Maestro terkait dengan kartu-kartu Mastercard, sedangkan logo Plus terkait dengan kartu-kartu Visa. Pastikan untuk memeriksa apakah logo Cirrus, Maestro, atau Plus ditampilkan di mesin ATM sebelum memasukkan kartu Anda. <br>
              <br> Selain itu, pemegang kartu JCB dapat menarik uang tunai di bank afiliasi di Indonesia seperti BNI (Bank Negara Indonesia), CIMB Niaga, Mandiri, dan BRI (Bank Rakyat Indonesia). Pastikan untuk memeriksa apakah logo JCB atau Cirrus terpampang di ATM sebelum melakukan penarikan.<br>
              <br>Pemegang kartu American Express dapat menggunakan fasilitas cash express dan menarik uang tunai di ATM Bank Danamon di seluruh Indonesia.<br>
              <br>Meskipun membawa kartu kredit atau debit adalah pilihan yang praktis saat bepergian, disarankan untuk memiliki uang tunai, terutama ketika berada di daerah terpencil atau saat mengunjungi pasar tradisional. Dengan memiliki uang tunai, Anda akan lebih siap untuk bertransaksi di tempat-tempat yang mungkin tidak menerima kartu kredit atau debit. Selamat menikmati liburan Anda di Indonesia!<br>
            </p>
        </div>
        <div class="text-container1">
          <h1>Dari ATM mana saya dapat menarik Uang Tunai?</h1>
          <p>
            Di Indonesia, sebagian besar jaringan kartu kredit internasional dapat diterima di kota-kota besar dan tempat wisata seperti Jakarta, Bandung, Bali, Surabaya, Medan, Yogyakarta, dan lainnya. Kartu-kartu seperti Visa dan Mastercard umumnya diterima di seluruh merchant. Selain itu, kartu-kartu seperti JCB (Japan Credit Bureau) juga dapat diterima karena berafiliasi dengan beberapa bank ternama di Indonesia seperti BNI (Bank Negara Indonesia), CIMB Niaga, Mandiri, BRI (Bank Rakyat Indonesia), dan lainnya. <br>
            <br>Meskipun American Express (Amex) juga dapat diterima, namun Amex memiliki lebih sedikit bank lokal yang terafiliasi di Indonesia. Saat ini, Bank Danamon merupakan salah satu bank lokal yang terafiliasi dengan Amex.<br>
            <br>Tetapi perlu diingat, ada kemungkinan bahwa toko-toko tertentu mungkin tidak menampilkan simbol kartu yang mereka terima, jadi penting untuk menanyakan kepada penjual di toko sebelum menggunakan kartu Anda apakah kartu Anda dapat diterima atau tidak.<br>
          </p>
      </div>
      <div class="text-container1">
        <h1>Berapa Banyak Uang Tunai yang Dapat Saya Bawa ke Indonesia?</h1>
        <p>
            Disarankan untuk membawa jumlah uang tunai yang sesuai dengan kebutuhan Anda selama perjalanan ke Indonesia, mengingat sulitnya menemukan ATM di kota-kota kecil atau daerah terpencil. Batas jumlah uang tunai yang dapat dibawa tanpa melaporkannya kepada Bea Cukai Indonesia adalah sebesar Rp100.000.000,00 (seratus juta rupiah) atau mata uang lain yang setara dengan jumlah tersebut. Namun lebih dari itu harus dilaporkan. Selain uang tunai, kartu prabayar mata uang asing juga bisa menjadi alternatif, tetapi pastikan untuk memahami kebijakan dan biayanya. Dengan persiapan yang matang terkait keuangan, Anda dapat menikmati liburan Anda tanpa khawatir tentang masalah pembayaran.
        </p>
    </div>
    <div class="text-container1">
      <h1>Bagaimana cara menjaga keamanan dan privasi informasi ketika menggunakan kartu kredit secara daring atau di tempat umum?</h1>
      <p>
        Untuk menjaga keamanan saat menggunakan kartu kredit, hindari membagikan informasi sensitif, periksa keamanan situs web saat bertransaksi daring, hindari menggunakan Wi-Fi publik, dan periksa tagihan secara berkala untuk mendeteksi transaksi yang mencurigakan.
      </p>
  </div>
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
<script src="js/Kartu kredit script.js"></script>
</body>
</html>