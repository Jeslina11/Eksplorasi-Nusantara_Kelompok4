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
	<title>Orang & Budaya</title>
	<link rel="stylesheet" href="{{ asset('css/Orang & Budaya style.css') }}">
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
    <h2>Informasi mengenai Budaya dan Keragaman Etnis di Indonesia: Dari Agama Hingga Tradisi Adat</h2>
    </div>
    <div class="container-teks">
      <p class="intro">
        Ingin memahami kekayaan budaya Indonesia yang beragam? informasi ini mengajak Anda menelusuri bagaimana budaya dan tradisi di Indonesia mencerminkan keragaman etnisnya. Dari Tari Pendet di Bali hingga Batik dari Jawa, serta upacara adat Rambu Solo di Toraja, setiap suku bangsa memiliki kekhasan seni, ritual, dan bahasa daerahnya sendiri. Temukan informasi tentang suku bangsa yang mendiami lebih dari 13.400 pulau di Indonesia dan bagaimana perpaduan etnis telah membentuk masyarakat yang kohesif sejak kemerdekaan pada tahun 1945. 
        </p>
        <div class="text-container1">
            <h1>Bagaimana budaya dan tradisi di Indonesia mencerminkan keragaman etnisnya?</h1>
            <p>
                Budaya dan tradisi di Indonesia mencerminkan keragaman etnisnya melalui berbagai bentuk seni, upacara adat, pakaian tradisional, dan bahasa daerah. Setiap suku memiliki tarian, musik, dan ritual yang unik, seperti Tari Pendet dari Bali, Batik dari Jawa, dan upacara Rambu Solo dari Toraja. Keragaman ini menciptakan mosaik budaya yang kaya dan beragam.
            </p>
        </div>
        <div class="text-container1">
            <h1>Apa saja suku bangsa yang ada di Indonesia?</h1>
            <p>
                Tinggal di lebih dari 13.400 pulau, bangsa Indonesia saat ini memiliki sekitar 200 juta penduduk yang terdiri dari lebih dari 200 kelompok etnis dengan bahasa dan dialek masing-masing. Populasinya bervariasi, mulai dari suku Jawa (sekitar 70 juta) dan Sunda (sekitar 30 juta) di Jawa hingga masyarakat adat. berjumlah ribuan di pulau-pulau terpencil. Setelah memperoleh Kemerdekaan pada tahun 1945, perkawinan antar kelompok etnis yang berbeda telah menyatukan masyarakat menjadi bangsa Indonesia yang lebih kohesif.
            </p>
        </div>
        <div class="text-container1">
            <h1>Apa agama yang dominan dianut di Indonesia?</h1>
            <p>
                Mayoritas penduduknya beragama Islam, sedangkan di Bali mayoritas beragama Hindu. Sedangkan di daerah seperti Minahasa di Sulawesi Utara, dataran tinggi Toraja di Sulawesi Selatan, di kepulauan Nusatenggara Timur dan sebagian besar Papua, di dataran tinggi Batak serta di pulau Nias di Sumatera Utara, mayoritas beragama Katolik atau Protestan. . Secara umum masyarakat Indonesia bersifat religius.
            </p>
        </div>
        <div class="text-container1">
            <h1>Apa keyakinan utama orang Indonesia?</h1>
            <p>
                Dan sesuai dengan Pancasila, lima sila kebangsaan, – yaitu Ketuhanan Yang Maha Esa, Kemanusiaan yang Adil dan Beradab, Persatuan Indonesia, Demokrasi melalui permusyawaratan bulat, dan Keadilan Sosial bagi semua – masyarakat Indonesia bersifat terbuka dan tetap bersikap toleran terhadap agama, adat istiadat, dan tradisi satu sama lain, dengan tetap setia berpegang pada agama masing-masing. Lambang negara Indonesia juga menyandang semboyan: Bhinneka Tunggal Ika, “Bhinneka Tunggal Ika”.
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
<script src="js/Orang & Budaya script.js"></script>
</body>
</html>