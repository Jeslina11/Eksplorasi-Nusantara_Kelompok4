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
	<title>Pinrang</title>
	<link rel="stylesheet" href="{{ asset('css/pinrang style.css') }}">
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
  <h1>Kota Pinrang</h1>
  <p class="intro">
    Pinrang adalah kota memikat di Sulawesi Selatan yang menawarkan pesona alam dan budaya yang kaya. Dikenal sebagai "Kota Palem," Pinrang memanjakan mata dengan pemandangan deretan pohon palem, sawah hijau, dan sungai jernih. Pantai-pantainya yang alami, seperti Pantai Ujung Tape dan Pantai Lowita, menyuguhkan panorama matahari terbenam yang menakjubkan. Budaya lokal yang kental, dengan festival berwarna-warni seperti Festival Budaya Pinrang, <span id="dots">...</span><span class="more-content"> memperlihatkan tradisi yang hidup dan seni yang memikat. Ditambah dengan kuliner lezat seperti Nasu Palekko dan Pallu Basa, Pinrang adalah destinasi yang sempurna untuk menikmati keindahan dan kekayaan budaya Sulawesi Selatan.</span>
  </p>
  <a href="#" class="read-more" onclick="toggleReadMore(event)">Read More</a>
  <div class="section">
    <!-- <div class="icon-title">
      <div class="icon">
        <i class="fas fa-lightbulb"></i>
      </div>
      <div>
        <h2>Kenali Pinrang</h2>
        <p>Temukan pesona uniknya yang tidak boleh Anda lewatkan</p>
      </div>
    </div> -->
  </div>
  <hr>
  <h2>Tempat Populer di Pinrang</h2>
</div>

<!-- Card Tempat Populer di Pinrang -->
<div class="container-2">
  <div class="cards-2">
    <!-- Card 1 -->
    <div class="card-2">
      <img src="image/karawa2.png">
      <div class="card-content-2">
        <h2>Karawa</h2>
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
      <img src="image/karomba.png">
      <div class="card-content-2">
        <h2>Puncak <br>Karomba</h2>
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
      <img src="image/manrelo.png">
      <div class="card-content-2">
        <h2>Manrelo</h2>
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
      <img src="image/salimbongan.jpg">
      <div class="card-content-2">
        <h2>Lembah salimbongan</h2>
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
    <h1>Kunjungi Wisata di Pinrang</h1>
    <p class="sub-text">Beragam destinasi wisata di Pinrang, mulai dari wisata alam, sejarah, sampai yang lagi hits.</p>
  </div>
      <div id="cards" class="card-container">
        <div class="card">
          <img src="image/waterboom pinrang.jpeg">
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
          <img src="image/salimbongan.jpg">
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
          <img src="image/karawa2.png">
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
          <img src="image/manrelo.png">
          <div class="card-content">
            <div class="rating-badge">
              <i class="fas fa-star"></i>
            </div>
            <p class="location">
              <i class="fas fa-map-marker-alt location-icon"></i>
            </p>
            <p><a href="candi prambanan.html"><button class="details-btn">Details</button></a></p>
          </div>
        </div>
        <div class="card">
          <img src="image/karomba.png">
          <div class="card-content">
            <div class="rating-badge">
              <i class="fas fa-star"></i>
            </div>
            <p class="location">
              <i class="fas fa-map-marker-alt location-icon"></i>
            </p>
            <p><a href="pulau komodo.html"><button class="details-btn">Details</button></a></p>
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
<script src="js/pinrang script.js"></script>
</body>
</html>