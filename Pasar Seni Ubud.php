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
	<title>Pasar Seni Ubud</title>
	<link rel="stylesheet" type="text/css" href="css/Pasar Seni Ubud style.css">
  <!-- link -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
</head>
<body>


<!--------------------- NAVBAR SECTION ------------------>
<header>
  <a href="#" class="logo">
    <img src="image/logo.png" alt="Logo" />
  </a>
    <ul class="navbar">
      <li><a href="Beranda.html" id="home">Beranda</a></li>
      <li><a href="#tentang" id="about">Tentang</a></li>
      <li><a href="Informasi umum.html" id="informasi">Informasi umum</a></li>
      <li><a href="Wisata.html" id="wisata">Wisata</a></li> 
      <li class="login"><p href="Beranda.html" id="loginButton">Keluar</p></li>
    </ul>
</header>


<!---------------------- BACKGROUND  -------------------->
<div class="background"></div>


<!--------------------- HEAD SECTION ------------------->
<div class="container-head1">
  <h1>Pasar Seni Ubud</h1>
  <p class="text-head1">
    Pasar Seni Ubud adalah pasar tradisional yang terkenal di pusat kota Ubud, Bali. Tempat ini menawarkan berbagai barang seni dan kerajinan tangan lokal, seperti lukisan, ukiran kayu, tekstil, dan perhiasan. Pengunjung dapat menikmati pengalaman berbelanja yang unik sambil menjelajahi kekayaan seni dan budaya Bali yang autentik. Pasar Seni Ubud juga merupakan tempat bertemunya seniman lokal dan wisatawan, menciptakan atmosfer kreatif dan ramai di sekitar kawasan ini.
  </p>
</div>


<!------------------- GALLERY SECTION -------------------------> 
<div class="gallery">
  <i id="left" class="fa-solid fa-angle-left"></i>
  <div class="carousel" id="carousel">
      <img src="image/Pasar Seni Ubud1.webp" alt="img" draggable="false">
      <img src="image/Pasar Seni Ubu6.webp" alt="img" draggable="false">
      <img src="image/Pasar Seni Ubu5.jpg" alt="img" draggable="false">
      <img src="image/Pasar Seni Ubud7.jpg" alt="img" draggable="false">
      <img src="image/Pasar Seni Ubu3.avif" alt="img" draggable="false">
      <img src="image/Pasar Seni Ubu8.jpg" alt="img" draggable="false">
      <img src="image/Pasar Seni Ubud9.jpg" alt="img" draggable="false">
      <img src="image/Pasar Seni Ubu2.jpg" alt="img" draggable="false">
      <img src="image/Pasar Seni Ubud10.jpg" alt="img" draggable="false">
      <img src="image/Pasar Seni Ubud11.jpg" alt="img" draggable="false">
      <img src="image/Pasar Seni Ubud12.jpg" alt="img" draggable="false">
  </div>
  <i id="right" class="fa-solid fa-angle-right"></i>
</div>

<!-- Modal gallery -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="modal-img">
</div>


<!----------------- LOCATION SECTION ---------------------> 
<div class="location">
  <div class="section">
      <div class="icon-title">
          <div class="icon">
              <i class="fas fa-lightbulb"></i>
          </div>
          <div>
              <h2>Kenali Landmark</h2>
              <p>Temukan pesonanya yang tak tertandingi di sini!</p>
          </div>
      </div>
  </div>
  <div class="content-location">
      <div class="card address">
          <div class="icon-container">
              <i class="fas fa-map-marked-alt"></i>
          </div>
          <div class="info1">
              <h3>Alamat</h3>
              <p>Jl. Raya Ubud No.35, Ubud, Kecamatan Ubud, Kabupaten Gianyar, Bali.</p>
              <a href="https://maps.app.goo.gl/uPQEWdUA1qoRWry4A">Lihat Peta ></a>
          </div>
      </div>
      <div class="card hours">
          <div class="icon-container">
              <i class="fas fa-clock"></i>
          </div>
          <div class="info">
              <h3>Jam Buka</h3>
              <p>Berdasarkan waktu setempat : <span id="status" class="status">Buka</span></p>
              <ul>
                  <li>Minggu: <span>10:00 - 17:00</span></li>
                  <li>Senin: <span>10:00 - 17:00</span></li>
                  <li>Selasa: <span>10:00 - 17:00</span></li>
                  <li>Rabu: <span>10:00 - 17:00</span></li>
                  <li>Kamis: <span>10:00 - 17:00</span></li>
                  <li>Jumat: <span>10:00 - 17:00</span></li>
                  <li>Sabtu: <span>10:00 - 17:00</span></li>
              </ul>
          </div>
      </div>
      <div class="card more-info">
          <div class="icon-container">
              <i class="fas fa-info-circle"></i>
          </div>
          <div class="info">
            <h3>Informasi Lebih Lanjut</h3>
            <p>Belum memiliki informasi</p>
        </div>
    </div>
</div>
<div class="information">
    Informasi di atas dapat berubah sewaktu-waktu tanpa pemberitahuan sebelumnya.
</div>
<hr>
</div>


<!---------------------- FASILITAS SECTION --------------------->
<div class="facilities">
  <h2>Fasilitas di Pasar Seni Ubud Bali</h2>
  <div class="facility-list">
      <div class="facility-item">
          <i class="fas fa-shopping-basket"></i>
          <span>Toko Souvenir</span>
      </div>
      <div class="facility-item">
        <i class="fas fa-paint-brush"></i>
        <span>Seni dan Kerajinan Lokal</span>
    </div>
      <div class="facility-item">
          <i class="fas fa-utensils"></i>
          <span>Warung Makan</span>
      </div>
      <div class="facility-item">
          <i class="fas fa-info-circle"></i>
          <span>Loket Informasi</span>
      </div>
      <div class="facility-item">
        <i class="fas fa-camera"></i>
        <span>Spot Fotografi</span>
    </div>
      <div class="facility-item">
          <i class="fas fa-parking"></i>
          <span>Tempat Parkir</span>
      </div>
      <div class="facility-item">
          <i class="fas fa-chair"></i>
          <span>Area Tempat Duduk dan Santai</span>
      </div>
      <div class="facility-item">
          <i class="fas fa-restroom"></i>
          <span>Toilet</span>
      </div>
  </div>
</div>



<!---------------------- INFO SECTION -------------------->
<section>
  <hr>
  <div class="info-box5">
    <h2>Info Penting & Tips</h2>
    <p> Kunjungi Pasar Seni Ubud untuk pengalaman belanja yang tak terlupakan dan nikmati keindahan seni Bali yang otentik. Buka setiap hari mulai pukul 08.00 - 18.00 WITA.</p>
    <a href="#modal-info" class="modal-open5">Baca selengkapnya</a>
  </div>
  <div id="modal-info5" class="modal5">
    <div class="modal-content5">
      <span class="modal-close5">&times;</span>
      <div id="InfoPenting" class="tabcontent2" style="display: block;">
        <h3>Info Penting</h3>
          <ul class="info-list2">
            <li><i class="fas fa-calendar-alt"></i>Pasar Seni Ubud buka setiap hari mulai pukul 08.00 - 18.00 WITA untuk pengunjung yang ingin menikmati keindahan seni dan kerajinan lokal.</li>
            <li><i class="fas fa-calendar-times"></i>Toko-toko di sekitar pasar mungkin memiliki jam operasional yang berbeda, pastikan untuk memeriksa sebelum berkunjung.</li>
          </ul>
        </div>
        <div id="InfoPenting" class="tabcontent2" style="display: block;">
          <hr>
          <div class="tips-section5">
            <ol class="tips-list5">
              <h3>Tips dan Saran Berkunjung ke Pasar Seni Ubud</h3>
              <li><i class="fas fa-clock"></i>Periksa jam buka toko sebelumnya untuk mengatur waktu kunjungan Anda dengan baik.</li>
              <li><i class="fas fa-money-bill-wave"></i>Pastikan untuk membawa uang tunai, karena beberapa pedagang mungkin tidak menerima kartu.</li>
              <li><i class="fas fa-camera"></i>Jangan lupa membawa kamera untuk mengabadikan kerajinan tangan dan seni unik yang ditawarkan pasar.</li>
              <li><i class="fas fa-walking"></i>Siapkan sepatu yang nyaman karena Anda akan berjalan-jalan di sekitar area pasar yang luas.</li>
              <li><i class="fas fa-coffee"></i>Nikmati makanan lokal di warung atau kafe di sekitar pasar untuk pengalaman kuliner yang lengkap.</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
</section>



<!--------------- TESTIMONIAL SECTION -------------------> 
<section id="Testimonial">
  <div class="testimonials-section">
    <div class="text-review">
      <div class="header-review-teks">
        <p>Testimonials & Reviews</p>
        <h2>Apa yang Mereka Katakan?</h2>
      </div>
    </div>

    <!-- Testimonial 1 -->
    <div class="owl-carousel owl-theme testimonials-container">
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"Pasar Seni Ubud adalah surga bagi para pencinta seni dan kerajinan. Saya sangat terkesan dengan keunikan kerajinan tangan dan lukisan-lukisan Bali yang ditawarkan di sini. Tempat yang harus dikunjungi bagi mereka yang ingin membawa pulang kenang-kenangan khas Bali."</p>
          <div class="ratings">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
        </main>
        <div class="profile">
          <div class="profile-image"></div>
          <div class="profile-desc">
            <span>Adam</span>
            <span>adams3@gmail.com</span>
          </div>
        </div>
      </div>

      <!-- Testimonial 2 -->
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"Pengalaman belanja di Pasar Seni Ubud sangat memuaskan. Saya menemukan lukisan yang luar biasa dan patung-patung unik. Sangat direkomendasikan untuk mereka yang ingin merasakan keindahan seni Bali secara langsung."</p>
          <div class="ratings">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
        </main>
        <div class="profile">
          <div class="profile-image"></div>
          <div class="profile-desc">
            <span>Anita</span>
            <span>Anitaa90@gmail.com</span>
          </div>
        </div>
      </div>

      <!-- Testimonial 3 -->
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"Pasar Seni Ubud adalah tempat yang sangat inspiratif. Saya menikmati kreativitas dan keindahan seni yang tersaji di setiap sudut pasar. Tidak sabar untuk kembali ke sini lagi!"</p>
          <div class="ratings">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
        </main>
        <div class="profile">
          <div class="profile-image"></div>
          <div class="profile-desc">
            <span>Bambang</span>
            <span>Bambanguhuy@gmail.com</span>
          </div>
        </div>
      </div>

      <!-- Testimonial 4 -->
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"Pasar Seni Ubud menawarkan pengalaman belanja yang istimewa. Saya menemukan banyak kerajinan tangan yang unik dan mengagumkan. Sangat direkomendasikan untuk para pecinta seni."</p>
          <div class="ratings">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
        </main>
        <div class="profile">
          <div class="profile-image"></div>
          <div class="profile-desc">
            <span>Anisa</span>
            <span>Anisay@gmail.com</span>
          </div>
        </div>
      </div>

      <!-- Testimonial 5 -->
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"Pasar Seni Ubud adalah surganya kerajinan tangan Bali. Saya sangat terkesan dengan kualitas dan keragaman barang-barang yang ditawarkan di sini. Tempat yang wajib dikunjungi bagi siapa pun yang mengunjungi Bali."</p>
          <div class="ratings">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
        </main>
        <div class="profile">
          <div class="profile-image"></div>
          <div class="profile-desc">
            <span>Jessica</span>
            <span>Jessik@gmail.com</span>
          </div>
        </div>
      </div>

      <!-- Testimonial 6 -->
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"Pasar Seni Ubud adalah tempat yang sangat istimewa. Saya sangat menikmati suasana yang tenang dan penuh inspirasi di sini. Terima kasih atas pengalaman yang luar biasa!"</p>
          <div class="ratings">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
        </main>
        <div class="profile">
          <div class="profile-image"></div>
          <div class="profile-desc">
            <span>Dani</span>
            <span>Daniii@gmail.com</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<!------------------ ULASAN SECTION --------------------->
<div class="center-text-ulasan">
  <h2>Tuliskan <br>pendapatmu disini!</h2>
  <p>Beri Ulasan tentang Destinasi Wisata yang kamu kunjungi dan bantu Traveler lain untuk memilih
    <strong>Tempat Liburan Terbaik!</strong></p>
</div>

<!-- RATING -->
<div class="feedback-background2">
  <div class="feedback-container2">
    <form class="feedback-form2">
      <h2>Berikan Ulasan Anda</h2>
      <p>Apa pendapat Anda tentang pengalaman Anda mengunjungi destinasi wisata ini?</p>
      <div class="star-widget2">
        <input type="radio" name="rate" id="rate-5">
        <label for="rate-5" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-4">
        <label for="rate-4" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-3">
        <label for="rate-3" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-2">
        <label for="rate-2" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-1">
        <label for="rate-1" class="fas fa-star"></label>
      </div>
      <textarea placeholder="Tulisan pendapatmu disini...."></textarea>
      <div class="buttons2">
        <button type="submit">Kirim</button>
        <button type="button">Batalkan</button>
      </div>
    </form>
  </div>
</div>


<!------------------- QUESTIONS SECTION -------------------> 
<section>
  <hr>
  <h1>Pertanyaan Seputar Pasar Seni Ubud</h1>
  <div class="Questions">
    <div class="faq">
      <div class="faq-item">
        <div class="faq-question">Apakah Pasar Seni Ubud terbuka setiap hari?</div>
        <div class="faq-answer">Ya, Pasar Seni Ubud buka setiap hari dan menjadi salah satu destinasi wisata terpopuler di Bali.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Apa yang bisa saya temukan di Pasar Seni Ubud?</div>
        <div class="faq-answer">Anda dapat menemukan berbagai kerajinan tangan lokal seperti lukisan, patung, pakaian tradisional, dan barang-barang unik lainnya di Pasar Seni Ubud.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Adakah biaya masuk untuk mengunjungi Pasar Seni Ubud?</div>
        <div class="faq-answer">Tidak, Pasar Seni Ubud tidak mengenakan biaya masuk. Anda bisa masuk dan menikmati suasana pasar dengan bebas.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Apakah di Pasar Seni Ubud tersedia fasilitas parkir?</div>
        <div class="faq-answer">Ya, di sekitar Pasar Seni Ubud terdapat area parkir untuk kendaraan pribadi atau tur.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Apakah di Pasar Seni Ubud tersedia restoran atau tempat makan?</div>
        <div class="faq-answer">Ya, di sekitar Pasar Seni Ubud terdapat berbagai warung dan restoran yang menyajikan makanan lokal dan internasional.</div>
      </div>
    </div>
  </div>
</section>




<!--------------------- FOOTER SECTION ------------------->
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

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script src="js/Pasar Seni Ubud script.js"></script>
</body>
</html>