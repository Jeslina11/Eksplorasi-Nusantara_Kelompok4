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
	<title>Informasi Umum</title>
	<link rel="stylesheet" type="text/css" href="css/Informasi Umum style.css">
  <!-- link -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
</head> 
<body>

<!--------------------- NAVBAR SECTION ------------------>
<header>
  <a href="#" class="logo">
    <img src="image/logo.png" alt="Logo" />
  </a>
    <ul class="navbar">
      <li><a href="Beranda-Berhasil Login.php" id="home">Beranda</a></li>
      <li><a href="#tentang" id="about">Tentang</a></li>
      <li><a href="Informasi umum.php" id="informasi">Informasi umum</a></li>
      <li><a href="Wisata.php" id="wisata">Wisata</a></li> 
      <li class="login"><p href="Beranda.php" id="loginButton">Keluar</p></li>
    </ul>
</header>


<!---------------------- BACKGROUND --------------------->
<div class="Background"></div>



<!--------------------- HEAD SECTION --------------------->
<div class="content">
  <h1>Informasi Umum Tentang Indonesia</h1>
</div>



<!--------------------- HOME SECTION --------------------->
<div class="center-text2">
  <h2>Selamat menjelajahi Indonesia!</h2>
  <p>Panduan ini akan membantu Anda mengenal Indonesia lebih dekat dan <br> mempersiapkan kunjungan Anda ke negara yang penuh pesona ini.</p>
</div>

<div id="card-area">
  <div class="wrapper">
    <div class="box-area">
      <div class="box">
        <div class="teks-4">
          <h1>Jam Kerja <br> & Hari Libur</h1>
        </div>
        <img alt="" src="image/weekend.png">
        <div class="overlay">
          <h3>Jam Kerja &Hari Libur</h3>
          <p>Jam kerja Senin-Jumat, 8 pagi-5/6 sore. Hari libur nasional: 17 Agustus & hari besar agama.</p>
          <a href="Jam kerja & Hari Libur.php">Details</a>
        </div>
      </div>

      <div class="box">
        <div class="teks">
          <h1>Jenis <br> Visa Indonesia</h1>
        </div>
        <img alt="" src="image/visa.jpg">
        <div class="overlay">
          <h3>Visa</h3>
          <p>Visa Indonesia adalah izin bagi warga asing untuk masuk dan tinggal.</p>
          <a href="visa.php">Details</a>
        </div>
      </div>

      <div class="box">
        <div class="teks">
          <h1>Sejarah Indonesia</h1>
        </div>
        <img alt="" src="image/history.jpg">
        <div class="overlay">
          <h3>Sejarah</h3>
          <p>Kerajaan, kolonialisme, kemerdekaan 1945 & negara modern.</p>
          <a href="sejarah.php">Details</a>
        </div>
      </div>

      <div class="box">
        <div class="teks-2">
          <h1>Menuju <br>Indonesia</h1>
        </div>
        <img alt="" src="image/tour.png">
        <div class="overlay">
          <h3>Menuju Indonesia</h3>
          <p>Panduan Perjalanan ke Indonesia.</p>
          <a href="Menuju Indonesia.php">Details</a>
        </div>
      </div>

      <div class="box">
        <div class="teks-3">
          <h1>Bahasa</h1>
        </div>
        <img alt="" src="image/language.png">
        <div class="overlay">
          <h3>Bahasa</h3>
          <p>Bahasa Indonesia, menggunakan <br>alfabet Latin.</p>
          <a href="bahasa.php">Details</a>
        </div>
      </div>

      <div class="box">
        <div class="teks-4">
          <h1>Orang <br>& Budaya</h1>
        </div>
        <img alt="" src="image/tarian.png">
        <div class="overlay">
          <h3>Orang <br>& Budaya</h3>
          <p>Indonesia memiliki beragam etnis, budaya, dan agama.</p>
          <a href="orang & budaya.php">Details</a>
        </div>
      </div>

      <div class="box">
        <div class="teks">
          <h1>WiFi & Konektivitas</h1>
        </div>
        <img alt="" src="image/wifi.png">
        <div class="overlay">
          <h3>Jaringan</h3>
          <p>WiFi dan 4G meluas di kota besar Indonesia; akses di pedesaan masih terbatas.</p>
          <a href="WiFi & Konektivitas.html">Details</a>
        </div>
      </div>

      <div class="box">
        <div class="teks">
          <h1>Colokan & Listrik</h1>
        </div>
        <img alt="" src="image/plug.png">
        <div class="overlay">
          <h3>Colokan & Listrik</h3>
          <p>Colokan listrik yang umum digunakan adalah tipe C dan F dengan tegangan 220V dan frekuensi 50Hz.</p>
          <a href="Colokan & Listrik.php">Details</a>
        </div>
      </div>

      <div class="box">
        <div class="teks-4">
          <h1>Panggilan <br>Darurat</h1>
        </div>
        <img alt="" src="image/112.jpg">
        <div class="overlay">
          <h3>Panggilan Darurat</h3>
          <p>Dapat dihubungi untuk keadaan darurat darat, udara, atau laut.</p>
          <a href="panggilan darurat.php">Details</a>
        </div>
      </div>

      <div class="box">
        <div class="teks">
          <h1>Perbedaan waktu</h1>
        </div>
        <img alt="" src="image/time.jpg">
        <div class="overlay">
          <h3>Perbedaan waktu</h3>
          <p>Waktu di Indonesia memiliki 3 zona: WIB, WITA, dan WIT, masing-masing berbeda sekitar satu jam.</p>
          <a href="perbedaan waktu.php">Details</a>
        </div>
      </div>

      <div class="box">
        <div class="teks-4">
          <h1>Cuaca, Iklim <br> & Musim</h1>
        </div>
        <img alt="" src="image/weather.jpg">
        <div class="overlay">
          <h3>Cuaca</h3>
          <p>Indonesia adalah iklim tropis dengan musim hujan dan kemarau.</p>
          <a href="cuaca.php">Details</a>
        </div>
      </div>

      <div class="box">
        <div class="teks-4">
          <h1>Kartu Kredit</h1>
        </div>
        <img alt="" src="image/kredit.png">
        <div class="overlay">
          <h3>Kartu Kredit</h3>
          <p>Alat pembayaran yang memungkinkan transaksi belanja dengan kredit dari bank.</p>
          <a href="Kartu Kredit.php">Details</a>
        </div>
      </div>

      <div class="box">
        <div class="teks-4">
          <h1>Mata uang</h1>
        </div>
        <img alt="" src="image/rupiah.png">
        <div class="overlay">
          <h3>Mata uang</h3>
          <p>Mata uang di Indonesia adalah Rupiah (IDR), dengan simbol "Rp".</p>
          <a href="Mata uang.php">Details</a>
        </div>
      </div>

      <div class="box">
        <div class="teks">
          <h1>Hukum Indonesia</h1>
        </div>
        <img alt="" src="image/law.jpg">
        <div class="overlay">
          <h3>Hukum</h3>
          <p>Hukum di Indonesia mengatur perilaku masyarakat dengan Mahkamah Agung sebagai otoritas tertinggi.</p>
          <a href="hukum.php">Details</a>
        </div>
      </div>
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

<script src="js/Informasi Umum script.js"></script>

</body>
</html>