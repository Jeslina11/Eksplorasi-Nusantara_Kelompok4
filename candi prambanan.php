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
	<title>Candi Prambanan</title>
	<link rel="stylesheet" type="text/css" href="css/Candi Prambanan style.css">
  <!-- link-->
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



<!--------------------- HEAD SECTION --------------------->
<div class="container-head1">
  <h1>Candi Prambanan</h1>
  <p class="text-head1">
    Candi Prambanan adalah keajaiban arsitektur Hindu di Yogyakarta, Indonesia, mempesona dengan keindahannya yang megah. Dibangun pada abad ke-9 Masehi, candi ini menampilkan relief-relief epik dari mitologi Hindu dan menciptakan atmosfer spiritual yang memikat. Sebagai situs warisan dunia UNESCO, Prambanan adalah destinasi yang wajib dikunjungi bagi para pecinta seni dan sejarah.
  </p>
</div>



<!------------------- GALLERY SECTION -------------------------> 
<div class="gallery">
  <i id="left" class="fa-solid fa-angle-left"></i>
  <div class="carousel" id="carousel">
      <img src="image/candi1.jpg" alt="img" draggable="false">
      <img src="image/candi2.jpg" alt="img" draggable="false">
      <img src="image/candi3.jpg" alt="img" draggable="false">
      <img src="image/candi4.jpg" alt="img" draggable="false">
      <img src="image/candi5.jpg" alt="img" draggable="false">
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
              <p>Jl. Raya Solo - Yogyakarta No.16, Kranggan, Bokoharjo, Kec. Prambanan, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55571.</p>
              <a href="https://maps.app.goo.gl/6XB1vVks7Pu6ZXPY6">Lihat Peta ></a>
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
                <li>Minggu: <span>06:30 - 17:00</span></li>
                <li>Senin: <span>06:30 - 17:00</span></li>
                <li>Selasa: <span>06:30 - 17:00</span></li>
                <li>Rabu: <span>06:30 - 17:00</span></li>
                <li>Kamis: <span>06:30 - 17:00</span></li>
                <li>Jumat: <span>06:30 - 17:00</span></li>
                <li>Sabtu: <span>06:30 - 17:00</span></li>
            </ul>
          </div>
      </div>
      <div class="card more-info">
        <div class="icon-container">
            <i class="fas fa-info-circle"></i>
        </div>
        <div class="info">
            <h3>Informasi Lebih Lanjut</h3>
            <p>Belum memiliki informasi apapun.</p>
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
        <i class="fas fa-couch"></i>
        <span>Area Istirahat</span>
    </div>
    <div class="facility-item">
        <i class="fas fa-praying-hands"></i>
        <span>Ruang Meditasi atau Doa</span>
    </div>
    <div class="facility-item">
        <i class="fas fa-wheelchair"></i>
        <span>Aksesibilitas</span>
    </div>
    <div class="facility-item">
        <i class="fas fa-volume-up"></i>
        <span>Audio Guide atau Panduan Audio</span>
    </div>
    <div class="facility-item">
        <i class="fas fa-theater-masks"></i>
        <span>Panggung Pertunjukan atau Pagelaran</span>
    </div>
    <div class="facility-item">
        <i class="fas fa-palette"></i>
        <span>Area Piknik</span>
    </div>
    <div class="facility-item">
        <i class="fas fa-users"></i>
        <span>Layanan Pandu Wisata Khusus</span>
    </div>
</div>
</div>



<!---------------------- INFO SECTION -------------------->
<section>
  <hr>
  <div class="info-box5">
    <h2>Info Penting & Tips</h2>
    <p>Candi Prambanan adalah salah satu situs warisan dunia UNESCO yang terkenal di Indonesia. Kunjungi situs ini untuk menikmati keindahan arsitektur Hindu yang megah.</p>
    <a href="#modal-info" class="modal-open5">Baca selengkapnya</a>
  </div>
  <div id="modal-info5" class="modal5">
    <div class="modal-content5" style="overflow-y: auto; max-height: 600px;">
      <span class="modal-close5">&times;</span>
      <div id="InfoPenting" class="tabcontent2" style="display: block;">
        <h3>Info Penting</h3>
        <ul class="info-list2">
          <li><i class="fas fa-calendar-alt"></i>Setiap hari kecuali Senin, Candi Prambanan buka untuk kunjungan umum dengan jam operasional dari pukul 06.00 - 17.00 WIB.</li>
          <li><i class="fas fa-calendar-times"></i>Setiap hari Senin, Candi Prambanan tutup untuk umum. Tamu masih bisa mengunjungi zona sekitar pukul 07.00 - 16.00 WIB.</li>
          <li><i class="fas fa-binoculars"></i>Anda dapat menggunakan jasa pemandu wisata untuk mendapatkan penjelasan lebih detail tentang keunikan Candi Prambanan.</li>
        </ul>
      </div>
      <div id="InfoPenting" class="tabcontent2" style="display: block;">
        <hr>
        <div class="tips-section5">
          <ol class="tips-list5">
            <h3>Tips dan Saran Berkunjung ke Candi Prambanan</h3>
            <li><i class="fas fa-sun"></i>Waktu terbaik untuk mengunjungi Candi Prambanan adalah pagi hari atau sore menjelang matahari terbenam untuk menghindari cuaca yang terlalu panas.</li>
            <li><i class="fas fa-umbrella-beach"></i>Jangan lupa membawa payung atau topi untuk melindungi diri dari sinar matahari langsung.</li>
            <li><i class="fas fa-ticket-alt"></i>Pastikan untuk membeli tiket masuk sebelumnya secara online untuk menghindari antrean panjang di lokasi.</li>
            <li><i class="fas fa-camera"></i>Siapkan kamera atau ponsel Anda untuk mengabadikan keindahan arsitektur dan relief Candi Prambanan.</li>
            <li><i class="fas fa-walking"></i>Kenakan sepatu yang nyaman karena Anda akan banyak berjalan kaki di sekitar kompleks candi yang luas ini.</li>
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
          <p>"Candi Prambanan adalah tempat yang sangat spesial. Struktur bangunan yang mengesankan dan suasana yang damai membuat saya betah berlama-lama di sini. Pengalaman yang sangat berkesan dan saya pasti akan kembali lagi."</p>
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

      <!-- Testimonial 2 -->
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"Candi Prambanan menawarkan pengalaman yang sangat berharga. Selain keindahan arsitekturnya, keramahan masyarakat sekitar juga menambah kenyamanan kunjungan saya. Tempat yang wajib dikunjungi saat berada di Yogyakarta."</p>
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
          <p>"Pengalaman di Candi Prambanan sangat luar biasa. Saya bisa merasakan sejarah yang kental dari setiap sudut candi ini. Pemandangan dari puncak candi saat matahari terbenam adalah salah satu yang terbaik yang pernah saya lihat."</p>
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
            <span>Budi</span>
            <span>Budisantuy@gmail.com</span>
          </div>
        </div>
      </div>

      <!-- Testimonial 4 -->
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"Kunjungan ke Candi Prambanan sangat mengesankan. Struktur candi yang megah dan suasana yang tenang memberikan pengalaman yang tak terlupakan. Waktu terbaik untuk berkunjung adalah saat matahari terbit."</p>
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

      <!-- Testimonial 5 -->
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"Candi Prambanan adalah keajaiban arsitektur yang memukau. Detail ukirannya luar biasa dan pemandangan dari atas candi sangat indah. Saya sangat merekomendasikan kunjungan ke sini untuk semua pencinta sejarah dan budaya."</p>
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

      <!-- Testimonial 6 -->
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"Pengalaman di Candi Prambanan sangat mengesankan. Struktur candi yang megah dan suasana yang tenang memberikan pengalaman yang tak terlupakan. Waktu terbaik untuk berkunjung adalah saat matahari terbit."</p>
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
            <span>Dewi</span>
            <span>dewi@example.com</span>
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
  <h1>Pertanyaan Seputar Candi Prambanan</h1>
  <div class="Questions">
    <div class="faq">
      <div class="faq-item">
        <div class="faq-question">Apakah Candi Prambanan terbuka untuk pengunjung?</div>
        <div class="faq-answer">Ya, Candi Prambanan terbuka untuk pengunjung setiap hari kecuali pada hari besar keagamaan. Candi ini menjadi salah satu tujuan wisata budaya yang populer di Indonesia.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Berapa harga tiket masuk ke Candi Prambanan saat ini?</div>
        <div class="faq-answer">Harga tiket masuk ke Candi Prambanan untuk turis asing adalah sekitar Rp400.000, sedangkan untuk turis domestik sekitar Rp30.000. Pastikan untuk memeriksa situs resmi atau sumber terpercaya lainnya untuk informasi harga terbaru.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Bolehkah pengunjung naik ke Candi Prambanan?</div>
        <div class="faq-answer">Ya, pengunjung diperbolehkan naik ke Candi Prambanan. Namun, untuk menjaga kelestarian, beberapa bagian mungkin tidak dapat diakses secara langsung. Panduan dari petugas situs harus diikuti selama kunjungan.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Bagaimana cara menuju ke Candi Prambanan?</div>
        <div class="faq-answer">Candi Prambanan terletak sekitar 17 kilometer dari Yogyakarta, Jawa Tengah. Pengunjung dapat menggunakan bus, mobil pribadi, atau mengikuti tur dari Yogyakarta untuk mencapai lokasi candi ini.</div>
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

<script src="js/Candi Prambanan script.js"></script>
</body>
</html>