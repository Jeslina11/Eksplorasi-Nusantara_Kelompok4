<?php
session_start();

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
	<title>Candi borobudur</title>
	<link rel="stylesheet" type="text/css" href="css/Candi borobudur style.css">
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
      <li><a href="Beranda.php" id="home">Beranda</a></li>
      <li><a href="#tentang" id="about">Tentang</a></li>
      <li><a href="Informasi umum.php" id="informasi">Informasi umum</a></li>
      <li><a href="Wisata.php" id="wisata">Wisata</a></li> 
      <li class="login"><p href="Beranda.php" id="loginButton">Keluar</p></li>
    </ul>
</header>


<!---------------------- BACKGROUND  -------------------->
<div class="background"></div>


<!--------------------- HEAD SECTION ------------------->
<div class="container-head1">
  <h1>Candi Borobudur</h1>
  <p class="text-head1">
    Candi Borobudur, sebuah keajaiban arsitektur Buddha di Magelang, Jawa Tengah, dengan kemegahannya yang luar biasa. Dikelilingi oleh panorama pegunungan yang memukau & hutan hijau, candi ini menjadi simbol spiritualitas dan warisan sejarah yang tak ternilai. Sebagai salah satu keajaiban dunia kuno, Borobudur menawarkan perjalanan yang mendalam ke dalam kebudayaan dan keagungan masa lalu. Dengan akses mudah dari Yogyakarta, pengunjung dapat menikmati pengalaman eksplorasi yang menyeluruh di kompleks candi ini.
  </p>
</div>


<!------------------- GALLERY SECTION -------------------------> 
<div class="gallery">
  <i id="left" class="fa-solid fa-angle-left"></i>
  <div class="carousel" id="carousel">
      <img src="image/borobudur1.jpg" alt="img" draggable="false">
      <img src="image/borobudur3.jpg" alt="img" draggable="false">
      <img src="image/borobudur4.jpg" alt="img" draggable="false">
      <img src="image/borobudur5.jpg" alt="img" draggable="false">
      <img src="image/borobudur6.jpg" alt="img" draggable="false">
      <img src="image/borobudur2.jpg" alt="img" draggable="false">
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
              <p>Jl. Badrawati, Kw. Candi Borobudur, Borobudur, Kec. Borobudur, Kabupaten Magelang, Jawa Tengah.</p>
              <a href="https://maps.app.goo.gl/FzDHSdrPTsywgRaj7">Lihat Peta ></a>
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
                  <li>Minggu: <span>06:30 - 16:30</span></li>
                  <li>Senin: <span>06:30 - 16:30</span></li>
                  <li>Selasa: <span>06:30 - 16:30</span></li>
                  <li>Rabu: <span>06:30 - 16:30</span></li>
                  <li>Kamis: <span>06:30 - 16:30</span></li>
                  <li>Jumat: <span>06:30 - 16:30</span></li>
                  <li>Sabtu: <span>06:30 - 16:30</span></li>
              </ul>
          </div>
      </div>
      <div class="card more-info">
          <div class="icon-container">
              <i class="fas fa-info-circle"></i>
          </div>
          <div class="info">
            <h3>Informasi Lebih Lanjut</h3>
            <div class="customer-service">
                <div class="whatsapp-icon">
                </div>
                <div class="whatsapp-info">
                    <h2>Layanan Pelanggan (Obrolan WhatsApp):</h2>
                    <span><i class="fab fa-whatsapp"></i> <a href="https://wa.me/6281110588333" target="_blank">+6281110588333</a></span>
                  </div>
            </div>
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
    <h2>Fasilitas yang ditawarkan</h2>
    <div class="facility-list">
        <div class="facility-item">
            <i class="fas fa-landmark"></i>
            <span>Wisata Sejarah</span>
        </div>
        <div class="facility-item">
            <i class="fas fa-camera"></i>
            <span>Spot Fotografi</span>
        </div>
        <div class="facility-item">
            <i class="fas fa-tree"></i>
            <span>Alam Terbuka</span>
        </div>
        <div class="facility-item">
            <i class="fas fa-parking"></i>
            <span>Area Parkir</span>
        </div>
        <div class="facility-item">
            <i class="fas fa-utensils"></i>
            <span>Warung Makan</span>
        </div>
        <div class="facility-item">
          <i class="fas fa-shopping-basket"></i>
          <span>Toko Souvenir</span>
      </div>
    </div>
    <div class="facility-list">
        <div class="facility-item">
            <i class="fas fa-info-circle"></i>
            <span>Pusat Informasi</span>
        </div>
        <div class="facility-item">
            <i class="fas fa-binoculars"></i>
            <span>Pemandu Wisata</span>
        </div>
        <div class="facility-item">
          <i class="fas fa-hotel"></i>
          <span>Penginapan Terdekat</span>
      </div>
        <div class="facility-item">
            <i class="fas fa-toilet"></i>
            <span>Fasilitas Toilet</span>
        </div>
    </div>
</div>



<!---------------------- INFO SECTION -------------------->
<section>
  <hr>
  <div class="info-box5">
    <h2>Info Penting & Tips</h2>
    <p> Setiap Selasa-Minggu, pengunjung dapat mengunjungi Zona 1 Candi Borobudur (pelataran/halaman candi) pukul 08.30 - 15.30 WIB. Tidak diperbolehkan untuk memasuki bilik / menaiki bangunan candi.</p>
    <a href="#modal-info" class="modal-open5">Baca selengkapnya</a>
  </div>
  <div id="modal-info5" class="modal5">
    <div class="modal-content5">
      <span class="modal-close5">&times;</span>
      <div id="InfoPenting" class="tabcontent2" style="display: block;">
        <h3>Info Penting</h3>
          <ul class="info-list2">
            <li><i class="fas fa-calendar-alt"></i>Setiap Selasa-Minggu, pengunjung dapat mengunjungi Zona 1 Candi Borobudur (pelataran/halaman candi) pukul 08.30 - 15.30 WIB. Tidak diperbolehkan untuk memasuki bilik / menaiki bangunan candi.</li>
            <li><i class="fas fa-calendar-times"></i>Setiap hari Senin, zona 1 (halaman / pelataran candi) tutup untuk kunjungan. Tamu dapat mengunjungi zona 2 (taman-taman sekitar candi) pukul 07.30 - 17.00 WIB.</li>
          </ul>
        </div>
        <div id="InfoPenting" class="tabcontent2" style="display: block;">
          <hr>
          <div class="tips-section5">
            <ol class="tips-list5">
              <h3>Tips dan Saran Berkunjung ke Candi Borobudur</h3>
              <li><i class="fas fa-calendar-alt"></i>Waktu terbaik untuk berkunjung ke Candi Borobudur adalah pagi hari saat cuaca masih sejuk.</li>
              <li><i class="fas fa-clock"></i>Disarankan tiba di lokasi sebelum jam 6 pagi untuk menikmati sunrise dari puncak candi.</li>
              <li><i class="fas fa-ticket-alt"></i>Beli tiket masuk secara online untuk menghindari antrean panjang.</li>
              <li><i class="fas fa-camera"></i>Jangan lupa membawa kamera untuk mengabadikan momen di salah satu situs bersejarah terbesar di Indonesia ini.</li>
              <li><i class="fas fa-walking"></i>Kenakan pakaian dan alas kaki yang nyaman karena Anda akan banyak berjalan kaki.</li>
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
          <p>"Candi Borobudur adalah keajaiban arsitektur yang memukau. Detail ukirannya luar biasa dan pemandangan dari atas candi sangat indah. Saya sangat merekomendasikan kunjungan ke sini untuk semua pencinta sejarah dan budaya."</p>
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
          <p>"Kunjungan ke Candi Borobudur sangat mengesankan. Struktur candi yang megah dan suasana yang tenang memberikan pengalaman yang tak terlupakan. Waktu terbaik untuk berkunjung adalah saat matahari terbit."</p>
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
          <p>"Pengalaman di Candi Borobudur sangat luar biasa. Saya bisa merasakan sejarah yang kental dari setiap sudut candi ini. Pemandangan dari puncak candi saat matahari terbenam adalah salah satu yang terbaik yang pernah saya lihat."</p>
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
          <p>"Candi Borobudur menawarkan pengalaman yang sangat berharga. Selain keindahan arsitekturnya, keramahan masyarakat sekitar juga menambah kenyamanan kunjungan saya. Tempat yang wajib dikunjungi saat berada di Yogyakarta."</p>
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
          <p>"Borobudur adalah situs sejarah yang luar biasa. Saya sangat terkesan dengan keindahan dan keagungan candi ini. Banyak pelajaran sejarah yang dapat dipelajari di sini. Sangat direkomendasikan untuk semua orang yang berkunjung ke Indonesia."</p>
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
          <p>"Candi Borobudur adalah tempat yang sangat spesial. Struktur bangunan yang mengesankan dan suasana yang damai membuat saya betah berlama-lama di sini. Pengalaman yang sangat berkesan dan saya pasti akan kembali lagi."</p>
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
    <form action="simpan_ulasan.php" method="POST" class="feedback-form2">
      <h2>Berikan Ulasan Anda</h2>
      <p>Apa pendapat Anda tentang pengalaman Anda mengunjungi destinasi wisata ini?</p>
      <div class="star-widget2">
        <input type="text" name="id_tempat_wisata" value="1">
        <input type="radio" name="rate" value="5" id="rate-5">
        <label for="rate-5" class="fas fa-star"></label>
        <input type="radio" name="rate" value="4" id="rate-4">
        <label for="rate-4" class="fas fa-star"></label>
        <input type="radio" name="rate" value="3" id="rate-3">
        <label for="rate-3" class="fas fa-star"></label>
        <input type="radio" name="rate" value="2" id="rate-2">
        <label for="rate-2" class="fas fa-star"></label>
        <input type="radio" name="rate" value="1" id="rate-1">
        <label for="rate-1" class="fas fa-star"></label>
      </div>
      <textarea name="review" placeholder="Tulisan pendapatmu disini...."></textarea>
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
  <h1>Pertanyaan Seputar Candi Borobudur</h1>
  <div class="Questions">
    <div class="faq">
      <div class="faq-item">
        <div class="faq-question">Apakah Candi Borobudur terbuka untuk pengunjung?</div>
        <div class="faq-answer">Ya, Candi Borobudur terbuka untuk pengunjung dan menarik ribuan wisatawan setiap tahunnya dari berbagai belahan dunia.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Berapa harga tiket masuk ke Candi Borobudur saat ini?</div>
        <div class="faq-answer">Berdasarkan informasi terbaru, harga tiket masuk ke Candi Borobudur adalah sekitar Rp376.600 untuk turis asing dan Rp48.000 untuk turis domestik. Harga dapat berubah, jadi sebaiknya periksa situs resmi atau hubungi langsung untuk informasi terbaru.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Bolehkah pengunjung naik ke Candi Borobudur?</div>
        <div class="faq-answer">Ya, pengunjung diperbolehkan naik ke Candi Borobudur, tetapi ada beberapa pembatasan untuk menjaga kelestarian situs ini. Area tertentu mungkin tertutup dan pengunjung diharapkan mengikuti panduan yang ada.</div>
      </div>
        <div class="faq-item">
        <div class="faq-question">Jam berapa Candi Borobudur buka?</div>
        <div class="faq-answer">Candi Borobudur biasanya buka dari pukul 06.30 - 16.30 setiap hari. Namun, sebaiknya periksa jadwal terbaru sebelum merencanakan kunjungan karena jam operasional bisa berubah.</div>
      </div>
        <div class="faq-item">
        <div class="faq-question">Bagaimana cara menuju ke Candi Borobudur?</div>
        <div class="faq-answer">Candi Borobudur terletak di Magelang, Jawa Tengah. Kota besar terdekat adalah Yogyakarta, sekitar 40 kilometer jauhnya. Pengunjung bisa naik bus, mobil, atau mengikuti tur dari Yogyakarta ke Borobudur.</div>
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

<script src="js/Candi borobudur script.js"></script>
</body>
</html>