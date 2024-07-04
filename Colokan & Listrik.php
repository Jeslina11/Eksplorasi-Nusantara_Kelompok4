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
	<title>Colokan & Listrik</title>
	<link rel="stylesheet" type="text/css" href="css/Colokan & Listrik style.css">
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
      <h2>Kelistrikan di Indonesia: Panduan Lengkap untuk Wisatawan</h2>
    </div>
      <div class="container-teks">
      <p class="intro">
        Panduan ini memberikan informasi detail tentang standar tegangan dan colokan listrik yang umum digunakan di Indonesia. Dengan tegangan 230 volt dan frekuensi 50 Hz, Anda akan belajar tentang pentingnya konverter tegangan bagi pengguna perangkat elektronik dari negara lain. Panduan ini juga mengulas jenis-jenis colokan yang umum di Indonesia, serta memberikan saran tentang kestabilan listrik dan aturan penggunaan di hotel atau akomodasi. Dapatkan tips mengenai tempat-tempat di mana Anda dapat mengisi daya gadget Anda dengan mudah selama berada di Indonesia.
      </p>

        <!-- text-container1 -->
        <div class="text-container1">
            <h1>Bagaimana standar tegangan dan kelistrikan di Indonesia?</h1>
            <p>
              Tegangan standar di Indonesia umumnya adalah 230 volt dengan frekuensi 50 Hz. Untuk pengguna perangkat elektronik dari negara dengan standar tegangan yang berbeda, seperti Amerika Serikat atau Kanada, diperlukan konverter tegangan untuk menghindari kerusakan perangkat. Meskipun beberapa perangkat dapat diisi daya dengan risiko minimal, lebih baik memilih opsi yang lebih aman dengan menggunakan konverter tegangan yang sesuai. Anda dapat menemukan konverter ini di toko listrik lokal di Indonesia atau secara online melalui platform seperti Amazon.
            </p>
        </div>
        <div class="text-container1">
          <h1>Apa jenis colokan listrik yang umum digunakan di Indonesia?</h1>
          <p>
            Kebanyakan colokan listrik di Indonesia menggunakan <strong>Tipe C dan F</strong>. Kedua jenis ini merupakan standar Eropa dengan soket 2 pin. Jika Anda datang dari negara yang menggunakan jenis soket yang berbeda, disarankan untuk membeli adaptor. Selain tersedia di Amazon, adaptor juga dapat ditemukan di sebagian besar minimarket lokal di seluruh Indonesia. <br>Berikut ini adalah contoh colokan listrik yang umum digunakan di Indonesia:         
          </p>
          <img src="image/plug1.png" class="plug-img">
          <img src="image/plug2.png" class="plug-img">
      </div>
      <div class="text-container1">
        <h1>Bagaimana kestabilan listrik di Indonesia?</h1>
        <p>
          Meskipun listrik di Indonesia umumnya stabil, terdapat daerah-daerah yang mungkin mengalami pemadaman listrik atau fluktuasi tegangan. Sebaiknya Anda selalu siap dengan peralatan cadangan seperti power bank atau lilin jika terjadi pemadaman listrik.
        </p>
    </div>
    <div class="text-container1">
      <h1>Apakah ada aturan tertentu terkait penggunaan listrik di hotel atau akomodasi di Indonesia?
      </h1>
      <p>
        Beberapa hotel atau akomodasi mungkin memiliki aturan tertentu terkait penggunaan listrik, seperti mematikan AC atau lampu saat tidak digunakan untuk menghemat energi. Pastikan untuk mematuhi aturan yang berlaku di tempat Anda menginap.
      </p>
  </div>
  <div class="text-container1">
    <h1>Dimana saya bisa mengisi daya gadget saya di Indonesia?</h1>
    <p>
      Anda dapat menemukan stopkontak hampir di semua restoran di Indonesia, terutama di tempat-tempat wisata. Semua hotel dan bandara menyediakan stopkontak dan colokan yang dapat Anda gunakan secara gratis. Di kereta, stopkontak listrik tersedia untuk semua kelas (ekonomi dan bisnis), dan sebagian besar sarana transportasi umum juga dilengkapi dengan port USB untuk mengisi daya ponsel Anda.
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
<script src="js/Colokan & Listrik script.js"></script>
</body>
</html>