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
	<title>Cuaca</title>
	<link rel="stylesheet" type="text/css" href="css/cuaca style.css">
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
      <h2>Panduan Cuaca Indonesia: Memahami Iklim dan Musim di Indonesia</h2>
    </div>
    <div class="container-teks">
      <p class="intro">
        Panduan ini memberikan informasi lengkap tentang cuaca di Indonesia, yang dipengaruhi oleh iklim tropis dengan dua musim utama. Anda akan memahami perbedaan antara musim hujan dan kemarau, serta bagaimana pola angin muson mempengaruhi distribusi hujan di berbagai wilayah. Dengan pemahaman ini, Anda dapat merencanakan perjalanan dengan lebih baik, mengetahui kapan musim hujan atau kemarau terjadi, dan bagaimana cuaca dapat memengaruhi aktivitas Anda di Indonesia.
      </p>

        <!-- text-container1 -->
        <div class="text-container1">
          <h1>Bagaimana cuaca di Indonesia?</h1>
          <p>
            Cuaca di Indonesia umumnya dipengaruhi oleh iklim tropis. Terdapat dua musim utama, yaitu musim hujan (Oktober-Maret) dengan curah hujan tinggi dan musim kemarau (April-September) dengan cuaca lebih kering dan panas. Pola angin muson, seperti angin barat laut dan timur laut, juga memengaruhi distribusi hujan di wilayah Indonesia. Karena Indonesia terdiri dari banyak pulau, terdapat variasi iklim di berbagai wilayah, dengan beberapa daerah rentan terhadap cuaca ekstrem seperti banjir dan tanah longsor selama musim hujan.          </p>
      </div>
    <div class="text-container1">
      <h1>Apakah cuaca umumnya hujan?</h1>
      <p>
        Cuaca di Indonesia umumnya sering hujan, terutama selama musim hujan yang berlangsung dari <strong>Oktober</strong>  hingga <strong>Maret</strong>. Pada periode ini, curah hujan tinggi terjadi di banyak wilayah Indonesia, disebabkan oleh pengaruh angin muson barat laut. Namun, selama musim kemarau yang berlangsung dari April hingga September, cuaca cenderung lebih kering dan panas, terutama di wilayah timur Indonesia.
      </p>
  </div>
    <div class="text-container1">
        <h1>Bagaimana perbedaan iklim di berbagai wilayah Indonesia?</h1>
        <p>
          Karena Indonesia terdiri dari ribuan pulau, terdapat perbedaan iklim di berbagai wilayah. Misalnya, Pulau Jawa cenderung lebih panas dan lembab, sementara Papua cenderung lebih basah dan tropis. Beberapa daerah juga rentan terhadap cuaca ekstrem seperti banjir, tanah longsor, dan kekeringan.
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
<script src="js/cuaca script.js"></script>
</body>
</html>