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
	<title>Sejarah</title>
	<link rel="stylesheet" href="{{ asset('css/Sejarah style.css') }}">
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



<!---------------------- HOME SECTION ------------------->
<div class="center-text2">
    <h2>Pengantar Sejarah Indonesia: Jejak Perjalanan Umat Manusia di Nusantara</h2>
    </div>
         <div class="container-teks">
      <p class="intro">

        Seputar informasi sejarah Indonesia yang memukau, Anda akan menelusuri jejak evolusi manusia sejak zaman prasejarah dengan temuan arkeologis yang mengungkap keberadaan Homo erectus di Jawa dan Homo floresiensis di Flores, memperkaya pemahaman tentang asal-usul manusia modern.        <div class="text-container1">
            <h1>Kapan awal mula umat manusia ada di indonesia?</h1>
            <p>
              Awal mula umat manusia ada di Indonesia dapat ditelusuri melalui temuan arkeologis yang menunjukkan keberadaan manusia purba di wilayah ini sejak zaman prasejarah. Salah satu penemuan paling terkenal adalah fosil "Homo erectus" atau "Manusia Jawa" yang ditemukan oleh Eugene Dubois pada tahun 1891 di Trinil, Jawa Timur. Fosil ini diperkirakan berusia sekitar 1,5 juta tahun. Selain itu, terdapat juga penemuan fosil Homo floresiensis atau "Manusia Flores" yang ditemukan di Liang Bua, Pulau Flores, yang diperkirakan hidup sekitar 50.000 hingga 100.000 tahun yang lalu. Pulau Flores juga diyakini sebagai salah satu nenek moyang manusia modern, menambahkan kompleksitas dalam pemahaman kita tentang asal usul dan perjalanan manusia di wilayah Indonesia.
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
<script src="js/Sejarah script.js"></script>
</body>
</html>