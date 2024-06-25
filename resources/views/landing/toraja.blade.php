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
	<title>Toraja</title>
	<link rel="stylesheet" href="{{ asset('css/toraja style.css') }}">
  <!-- link -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
</head> 
<body>

<!--------------------- NAVBAR SECTION ------------------>
<header>
  @include('komponen.navbar')
</header>


<!---------------------- BACKGROUND --------------------->
<div class="hero">
</div>


<!--------------------- HOME SECTION --------------------->
<div class="container">
  <h1>Kota Toraja</h1>
  <p class="intro">
    Toraja, yang terletak di pegunungan Sulawesi Selatan, adalah sebuah daerah yang mempesona dengan budaya unik dan lanskap alam yang menakjubkan. Dikenal luas dengan tradisi dan ritual pemakamannya yang kaya, Toraja menawarkan pengalaman budaya yang tak terlupakan. Rumah adat Tongkonan dengan atap melengkung khas dan ukiran kayu yang indah adalah simbol arsitektur Toraja yang ikonik. Selain budayanya, Toraja juga memiliki pemandangan alam yang luar biasa. Sawah bertingkat yang hijau subur, lembah yang dalam, dan pegunungan yang menjulang tinggi menciptakan panorama yang memukau. Wisatawan dapat menjelajahi Londa dan Lemo, situs pemakaman batu yang misterius dan mengesankan.  <span id="dots">...</span><span class="more-content">  Pasar tradisional Rantepao juga menawarkan kesempatan untuk melihat kehidupan sehari-hari masyarakat Toraja dan membeli kerajinan tangan lokal. Dengan perpaduan antara keindahan alam dan budaya yang kaya, Toraja adalah destinasi yang wajib dikunjungi bagi pencinta petualangan dan budaya.</span>
  </p>
  <a href="#" class="read-more" onclick="toggleReadMore(event)">Read More</a>
  <div class="section">
    <!-- <div class="icon-title">
      <div class="icon">
        <i class="fas fa-lightbulb"></i>
      </div>
      <div>
        <h2>Kenali Toraja</h2>
        <p>Temukan pesona uniknya yang tidak boleh Anda lewatkan</p>
      </div>
    </div> -->
  </div>
  <hr>
  <h2>Tempat Populer di Toraja</h2>
</div>

<!-- Card Tempat Populer di Toraja -->
<div class="container-2">
  <div class="cards-2">
    <!-- Card 1 -->
    <div class="card-2">
      <img src="image/patung yesus.jpeg">
      <div class="card-content-2">
        <h2>Patung <br>Yesus</h2>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
          Jl. Bau Massepe, Labukkang
        </p>
        <p><button class="details-btn">Details</button></p>
      </div>
      <div class="rating-badge2">
        <i class="fas fa-star"></i>
        <span>4.9</span>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="card-2">
      <img src="image/Salinan kete kesu.png">
      <div class="card-content-2">
        <h2>Kete <br>Kesu</h2>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
          Cappa Galung, Bacukiki
        </p>
        <p><button class="details-btn">Details</button></p>
      </div>
      <div class="rating-badge2">
        <i class="fas fa-star"></i>
        <span>4.9</span>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="card-2">
      <img src="image/sabana ollon.jpeg">
      <div class="card-content-2">
        <h2>Sabana <br>Ollon</h2>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
          Jl. Jendral Sudirman, Bacukiki
        </p>
        <p><button class="details-btn">Details</button></p>
      </div>
      <div class="rating-badge2">
        <i class="fas fa-star"></i>
        <span>4.9</span>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="card-2">
      <img src="image/To tombi lolai.jpeg">
      <div class="card-content-2">
        <h2>To'tombi Lolai</h2>
        <p class="location">
          <i class="fas fa-map-marker-alt location-icon"></i>
          Jl. Balana, Cappa Galung
        </p>
        <p><button class="details-btn">Details</button></p>
      </div>
      <div class="rating-badge2">
        <i class="fas fa-star"></i>
        <span>4.9</span>
      </div>
    </div>
  </div>
</div>



<!------------------ KUNJUNGI WISATA -------------------->
<section class="explore-more">
  <div class="header">
    <h1>Kunjungi Wisata di Maros</h1>
    <p class="sub-text">Beragam destinasi wisata di Maros, mulai dari wisata alam, sejarah, sampai yang lagi hits.</p>
  </div>
    <div id="cards" class="card-container">
      <div class="card">
        <img src="image/To tombi lolai.jpeg">
        <div class="card-content">
          <div class="rating-badge">
            <i class="fas fa-star"></i>
          </div>
          <p class="location">
            <i class="fas fa-map-marker-alt location-icon"></i>
          </p>
          <p><a href="rumede.html"><button class="details-btn">Details</button></a></p>
        </div>
      </div>
      <div class="card">
        <img src="image/Salinan kete kesu.png">
        <div class="card-content">
          <div class="rating-badge">
            <i class="fas fa-star"></i>
          </div>
          <p class="location">
            <i class="fas fa-map-marker-alt location-icon"></i>
          </p>
          <p><a href="kali biru.html"><button class="details-btn">Details</button></a></p>
        </div>
      </div>
      <div class="card">
        <img src="image/sabana ollon.jpeg">
        <div class="card-content">
          <div class="rating-badge">
            <i class="fas fa-star"></i>
          </div>
          <p class="location">
            <i class="fas fa-map-marker-alt location-icon"></i>
          </p>
          <p><a href="pura uluwatu.html"><button class="details-btn">Details</button></a></p>
        </div>
      </div>
      <div class="card">
        <img src="image/patung yesus.jpeg">
        <div class="card-content">
          <div class="rating-badge">
            <i class="fas fa-star"></i>
          </div>
          <p class="location">
            <i class="fas fa-map-marker-alt location-icon"></i>
          </p>
          <p><a href="pura uluwatu.html"><button class="details-btn">Details</button></a></p>
        </div>
      </div>
  </div>
  <div class="show-more">
    <button id="show-more-btn">Menampilkan lebih banyak</button>
  </div>
</section>



<!----------------- FOOTER SECTION --------------------->
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

<script src="js/toraja script.js"></script>
</body>
</html>