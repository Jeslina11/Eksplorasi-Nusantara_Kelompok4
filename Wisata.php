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
    <title>Wisata</title>
    <link rel="stylesheet" type="text/css" href="css/Wisata style.css">
    <!-- link -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
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


<!---------------------- HEAD SECTION --------------------->
<section>
  <div class="head">
    <h1>Jelajahi Wisata Nusantara</h1>
    <p>Nikmati keindahan alam dan budaya Wisata Nusantara serta pengalaman tak terlupakan yang menanti Anda di setiap sudutnya.</p>
</div>
  <div class="trip_bx">
    <div class="search-bar">
      <div class="search-item">
          <i class="fas fa-map-marked-alt icon"></i>
          <select id="provinsiSelect">
              <option value="" disabled selected hidden>Pilih Provinsi</option>
              <option value="Sulawesi Selatan">Sulawesi Selatan</option>
              <option value="Sulawesi Tengah">Sulawesi Tengah</option>
              <option value="Sulawesi Barat">Sulawesi Barat</option>
              <option value="Sulawesi Utara">Sulawesi Utara</option>
              <option value="Bali">Bali</option>
          </select>
      </div>
      <div class="separator"></div>
      <div class="search-item">
          <i class="fas fa-building icon"></i>
          <select id="kotaSelect">
              <option value="" disabled selected hidden>Pilih Kota</option>
          </select>
      </div>
      <div class="separator"></div>
      <div class="search-item">
          <i class="fas fa-list icon"></i>
          <select id="kategoriSelect">
              <option value="" disabled selected hidden>Kategori</option>
              <option value="Semua">Semua</option>
              <option value="Pulau">Pulau</option>
              <option value="Air Terjun">Air Terjun</option>
              <option value="Gunung">Gunung</option>
              <option value="Pantai">Pantai</option>
          </select>
      </div>
      <button class="search-button" id="searchButton">Cari</button>
  </div>
  
  <div class="travel_bx">
    <h4>Kota untuk bepergian</h4>
    <div class="cards">
        <div class="card">
            <h3>PAREPARE</h3>
            <img src="image/habibie bg.png" alt="">
            <div class="btn_city">
                <a href="parepare.html">Detail</a>
                <h5>Sulawesi Selatan</h5>
            </div>
        </div>
        <div class="card">
            <h3>PALU</h3>
            <img src="image/palu.png" alt="">
            <div class="btn_city">
                <a href="palu.html">Detail</a>
                <h5>Sulawesi Tengah</h5>
            </div>
        </div>
        <div class="card">
            <h3>POLEWALI</h3>
            <img src="image/polewali bg.png" alt="">
            <div class="btn_city">
                <a href="polewali.html">Detail</a>
                <h5>Sulawesi Barat</h5>
            </div>
        </div>
        <div class="card">
            <h3>MANADO</h3>
            <img src="image/manado.png" alt="">
            <div class="btn_city">
                <a href="manado.html">Detail</a>
                <h5>Sulawesi Utara</h5>
            </div>
        </div>
    </div>
</div>
</div>
</section>



<!---------------------- HOME SECTION --------------------->
<div class="offers">
  <h1>Daerah Liburan Terbaik untuk Anda</h1>
  <p>Pilih tujuan Anda selanjutnya</p>
  <div class="cards">
      <div class="card">
          <h3>Ubud, Bali</h3>
          <div class="img_text">
              <img src="image/ubud bali.jpg" alt="">
              <h4>Ubud: terkenal dengan pusat seni, sawah hijau, dan ketenangan.</h4>
          </div>
          <div class="cont_bx">
              <div class="box">
                  <div class="heart_chat">
                      <i class="bi bi-heart-fill"><span>86415</span></i>
                      <i class="bi bi-chat-fill"><span>4586</span></i>
                  </div>
                  <div class="info">
                      <a href="ubud bali.php">More Info</a>
                  </div>
              </div>
          </div>
      </div>
      <div class="card">
          <h3>Malang, Jawa Timur</h3>
          <div class="img_text">
              <img src="image/malang jawa.jpg" alt="">
              <h4>Malang: kota sejuk, pemandangan indah, dan budaya yang kaya.</h4>
          </div>
          <div class="cont_bx">
              <div class="box">
                  <div class="heart_chat">
                      <i class="bi bi-heart-fill"><span>86415</span></i>
                      <i class="bi bi-chat-fill"><span>4586</span></i>
                  </div>
                  <div class="info">
                      <a href="Malang Jawa Timur.php">More Info</a>
                  </div>
              </div>
          </div>
      </div>
      <div class="card">
          <h3>Bandung, Jawa Barat</h3>
          <div class="img_text">
              <img src="image/bandung jawa.jpg" alt="">
              <h4>
                Bandung: kota sejuk dengan kuliner lezat dan beragam destinasi wisata.</h4>
          </div>
          <div class="cont_bx">
              <div class="box">
                  <div class="heart_chat">
                      <i class="bi bi-heart-fill"><span>86415</span></i>
                      <i class="bi bi-chat-fill"><span>4586</span></i>
                  </div>
                  <div class="info">
                      <a href="Bandung Jawa Barat.php">More Info</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>


<!------------------- FOOTER SECTION ------------------->
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

<script src="js/Wisata script.js"></script>

</body>
</html>
