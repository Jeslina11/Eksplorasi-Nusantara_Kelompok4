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
	<title>Menuju Indonesia</title>
	<link rel="stylesheet" type="text/css" href="css/Menuju Indonesia style.css">
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



<!---------------------- HOME 1  -------------------->
<div class="home1">
  <div class="header-home1">
      <h1>Panduan Sederhana untuk Transportasi Menuju Indonesia dan di Dalam Indonesia</h1>
      <p>Pernahkah Anda mengalami situasi di mana Anda ingin berlibur ke Indonesia tetapi bingung dengan cara apa transportasi yang paling mudah? Jangan khawatir! Berikut adalah panduan sederhana untuk membantu Anda merencanakan perjalanan Anda dengan mudah. </p><br>
      <p> <br>Panduan sederhana ini akan membantu Anda menentukan transportasi terbaik dengan mudah, meskipun Anda mungkin pernah merasa ragu saat ingin berkunjung ke sana.</p>
  </div>
  </div>



<!-------------------- HOME 2  ------------------->
<div class="home2-teks">
  <div class="info-section"></div>
      <div class="text-container1">
          <h1>Apa cara termudah bagi saya untuk pergi ke Indonesia melalui udara?</h1>
          <p>
            Salah satu cara termudah untuk pergi ke Indonesia melalui udara adalah dengan menggunakan salah satu dari beberapa bandara internasional utama yang tersebar di seluruh Indonesia. Bandara utama termasuk Bandara Internasional Soekarno-Hatta di Tangerang (dekat Jakarta), Bandara Internasional Ngurah Rai di Bali, Bandara Juanda di Surabaya, Bandara Hasanudin di Makassar, dan Kuala Namu di Medan. <br>

            <br>Perjalanan ke Indonesia dari berbagai belahan dunia dapat memakan waktu yang bervariasi tergantung pada lokasi asal. Misalnya, perjalanan dari benua Amerika dapat memakan waktu minimal 20 jam dengan setidaknya satu transit di Asia Timur, Eropa, atau Timur Tengah. Sementara itu, perjalanan dari Eropa umumnya memakan waktu kurang dari 20 jam, terutama jika terdapat penerbangan langsung ke Jakarta dari kota-kota seperti Amsterdam, London, dan Istanbul. <br>

            <br>Bagi pelancong dari Australia, perjalanan ke Indonesia hanya memakan waktu 4–7 jam. Selain itu, terdapat juga beberapa penerbangan dari Timur Tengah menuju Indonesia. Di samping itu, terdapat penerbangan jarak pendek dari kota-kota di Indonesia ke kota-kota terdekat di Malaysia, seperti Pontianak ke Kuching, Tarakan ke Tawau, dan Pekanbaru ke Malaka. <br>

            <br>Garuda Indonesia, sebagai maskapai penerbangan utama Indonesia, melayani layanan penerbangan ke berbagai kota di Asia Tenggara, Asia Timur, Australia, Arab Saudi, Amsterdam, dan London. Selain itu, terdapat maskapai internasional lainnya seperti AirAsia, Cathay Pacific Airways, Emirates, dan lainnya, yang menawarkan berbagai rute ke dan dari Indonesia. Dengan banyaknya pilihan maskapai dan rute, Anda dapat menyesuaikan perjalanan udara Anda sesuai kebutuhan dan preferensi. <br>
          </p>
      </div>
      <div class="text-container1">
        <h1>Apa saja opsi transportasi laut yang tersedia untuk menuju Indonesia?</h1>
        <p>
          Opsi transportasi laut yang tersedia untuk menuju Indonesia meliputi feri, kapal pesiar, dan yacht. Feri adalah opsi transportasi yang umum digunakan, menghubungkan Indonesia dengan negara tetangga seperti Singapura, Malaysia, dan Filipina. Kapal pesiar juga merupakan alternatif populer untuk menikmati perjalanan ke Indonesia dengan kenyamanan dan fasilitas mewah. Selain itu, bagi para pelaut yang memiliki kapal pribadi, menggunakan yacht juga merupakan pilihan untuk menikmati perjalanan ke Indonesia dengan fleksibilitas dan kebebasan lebih dalam menjelajahi destinasi yang diinginkan.
        </p>
    </div>
    <div class="text-container1">
      <h1>Bagaimana dengan transportasi laut antar-pulau di dalam Indonesia sendiri?</h1>
      <p>
        Transportasi laut antar-pulau di Indonesia dilayani melalui feri yang menghubungkan pulau-pulau besar seperti Jawa, Sumatera, Kalimantan, Sulawesi, dan Bali dengan pulau-pulau kecil di sekitarnya. Feri adalah pilihan utama bagi penduduk lokal dan wisatawan untuk menjelajahi keindahan alam dan keanekaragaman budaya Indonesia. Dengan berbagai jadwal pelayaran yang tersedia, Anda dapat menikmati perjalanan yang menyenangkan di laut sambil mengunjungi berbagai destinasi menarik.
      </p>
  </div>
  <div class="text-container1">
    <h1>Bagaimana Saya dapat mengatur perjalanan darat ketika berada di perbatasan Indonesia dengan negara-negara tetangga?</h1>
    <p>
      Di perbatasan Indonesia dengan Timor Leste, terdapat pos perbatasan utama di Mota'ain, Atambua. Dari Malaysia, terdapat bus reguler antara Kuching (Sarawak) dan Pontianak (Kalimantan Barat) yang melalui pos perbatasan di Entikong. Di Sambas Regency, terdapat Pos Lintas Batas Aruk yang menghubungkan Kalimantan Barat, Indonesia dengan Sarawak, Malaysia. Sementara itu, Pos Lintas Batas Skouw di Papua adalah satu-satunya penyeberangan darat antara Provinsi Papua dan Papua Nugini.
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
<script src="js/Menuju Indonesia script.js"></script>
</body>
</html>