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
	<title>Panggilan Darurat</title>
	<link rel="stylesheet" type="text/css" href="css/Panggilan Darurat style.css">
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
      <h2>Panduan Panggilan Darurat dan Telepon Rumah di Indonesia</h2>
    </div>
    <!-- TEKS -->
    <div class="container-teks">
      <p class="intro">
        Panduan lengkap tentang cara melakukan panggilan darurat dan panggilan menggunakan telepon rumah di Indonesia. Anda akan belajar cara menggunakan kode area untuk panggilan lokal, serta langkah" yang tepat untuk menelepon dari luar negeri. Selain itu, kami juga menyediakan daftar nomor darurat utama seperti polisi, pemadam kebakaran & ambulans yang perlu Anda simpan. Dengan informasi ini, Anda siap menghadapi keadaan darurat dan memastikan akses cepat ke bantuan yang diperlukan di Indonesia.
      </p>

        <!-- text-container1 -->
        <div class="text-container1">
            <h1>Bagaimana cara melakukan panggilan di Indonesia menggunakan telepon rumah?</h1>
            <p>
              Untuk melakukan panggilan di Indonesia dengan telepon rumah, tambahkan '0' dan kode area di depan nomor telepon. Misalnya, untuk Jakarta, gunakan 021 di depan nomor telepon. Jika menelepon dari luar negeri, gunakan +62, hapus '0' dari kode area, dan tambahkan nomor telepon. Contoh: +62 21 untuk Jakarta. Untuk menelepon ponsel dari luar negeri, gunakan +62 diikuti nomor ponsel tanpa '0'. Contoh: +62 8123456789.
            </p>
        </div>
        
        <!-- text-container2 -->
        <div class="text-container2">
          <h1>Apa nomor darurat utama yang perlu saya ketahui?</h1>
          <div class="calling-section">
            <h2>1.  ⁠Panggilan Darurat Umum:</h2>
              <ul>
                  <li>- ⁠Panggilan Darurat <strong>Polisi</strong>: 110</li>
                  <li>- Panggilan Darurat<strong> Pemadam Kebakaran</strong>: 113</li>
                  <li>- ⁠Panggilan Darurat<strong> Ambulans</strong>: 118</li>
              </ul>
              <h3>2. Layanan Darurat Tambahan:</h3>
              <ul>
                  <li>- Panggilan Darurat <strong>SAR (Search and Rescue)</strong> : 115</li>
                  <li>- ⁠Panggilan Darurat <strong>Listrik</strong>: 123</li>
                  <li>- ⁠Panggilan Darurat <strong>Telepon Genggam</strong>: 112</li>
              </ul>
          </div>
    </div>

    <!-- text-container1 -->
    <div class="text-container1">
      <h1>Mengapa perlu menyimpan nomor-nomor panggilan darurat di ponsel atau tempat yang mudah diakses?</h1>
      <p>
        Nomor-nomor panggilan darurat perlu disimpan di ponsel atau tempat yang mudah diakses karena dalam situasi darurat, akses cepat ke layanan darurat dapat menyelamatkan nyawa. Dengan menyimpan nomor-nomor ini, seseorang dapat dengan cepat menghubungi bantuan saat diperlukan tanpa harus mencari-cari nomor tersebut.
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
<script src="js/Panggilan Darurat script.js"></script>
</body>
</html>