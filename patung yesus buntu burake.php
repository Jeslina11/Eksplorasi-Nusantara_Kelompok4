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
	<title>Patung Yesus Buntu Burake</title>
	<link rel="stylesheet" type="text/css" href="css/patung yesus buntu burake style.css">
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




<!--------------------- HEAD SECTION --------------------->
<div class="container-head1">
  <h1>Patung Yesus Buntu Burake</h1>
  <p class="text-head1">
    Patung Yesus Buntu Burake, atau dikenal sebagai Patung Yesus Kristus Memberkati, berdiri tegak di Bukit Buntu Burake, Makale, Tana Toraja. Dengan tinggi mencapai 45 meter, termasuk pedestalnya yang terbuat dari perunggu, patung ini diresmikan pada tahun 2015 dan dirancang oleh seniman Yogyakarta, Supriadi. Selain sebagai simbol keagamaan, patung ini juga menjadi daya tarik wisata yang menampilkan pemandangan indah dari perbukitan sekitar dan jembatan kaca yang menambah keunikan. Patung Yesus Buntu Burake memukau pengunjung dengan keindahan alamnya yang luar biasa, menarik perhatian dengan pesonanya yang unik.
  </p>
</div>



<!------------------- GALLERY SECTION -------------------------> 
<div class="gallery">
  <i id="left" class="fa-solid fa-angle-left"></i>
  <div class="carousel" id="carousel">
      <img src="image/patung yesus2.jpg" alt="img" draggable="false">
      <img src="image/patung yesus3.webp" alt="img" draggable="false">
      <img src="image/patung yesus4.jpeg" alt="img" draggable="false">
      <img src="image/patung yesus5.jpg" alt="img" draggable="false">
      <img src="image/patung yesus6.webp" alt="img" draggable="false">
      <img src="image/patung yesus7.jpg" alt="img" draggable="false">
      <img src="image/patung yesus1.jpg" alt="img" draggable="false">
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
              <p>Buntu Burake, Kec. Makale, Kabupaten Tana Toraja, Sulawesi Selatan.</p>
              <a href="https://maps.app.goo.gl/tEMwrymJpoUNxcMC9">Lihat Peta ></a>
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
                  <li>Minggu: <span>07:00 - 21:00</span></li>
                  <li>Senin: <span>07:00 - 21:00</span></li>
                  <li>Selasa: <span>07:00 - 21:00</span></li>
                  <li>Rabu: <span>07:00 - 21:00</span></li>
                  <li>Kamis: <span>07:00 - 21:00</span></li>
                  <li>Jumat: <span>07:00 - 21:00</span></li>
                  <li>Sabtu: <span>07:00 - 21:00</span></li>
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
</div>



<!---------------------- FASILITAS SECTION --------------------->
<div class="facilities">
  <h2>Fasilitas yang Ditawarkan</h2>
  <div class="facility-list">
      <div class="facility-item">
          <i class="fas fa-cross"></i>
          <span>Wisata Religi</span>
      </div>
      <div class="facility-item">
          <i class="fas fa-camera"></i>
          <span>Spot Fotografi</span>
      </div>
      <div class="facility-item">
          <i class="fas fa-tree"></i>
          <span>Pemandangan Alam</span>
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
        <span>Ruang Doa</span>
    </div>
    <div class="facility-item">
        <i class="fas fa-wheelchair"></i>
        <span>Aksesibilitas</span>
    </div>
    <div class="facility-item">
        <i class="fas fa-binoculars"></i>
        <span>Menara Pandang</span>
    </div>
    <div class="facility-item">
        <i class="fas fa-walking"></i>
        <span>Jalur Pendakian</span>
    </div>
    <div class="facility-item">
        <i class="fas fa-shuttle-van"></i>
        <span>Layanan Shuttle</span>
    </div>
    <div class="facility-item">
        <i class="fas fa-users"></i>
        <span>Layanan Pandu Wisata</span>
    </div>
</div>
</div>




<!---------------------- INFO SECTION -------------------->
<section>
  <hr>
  <div class="info-box5">
    <h2>Info Penting & Tips</h2>
    <p>Patung Yesus Buntu Burake di Toraja adalah salah satu patung Yesus tertinggi di dunia dan menjadi tujuan wisata religi yang penting. Nikmati pemandangan spektakuler dan suasana spiritual yang tenang di lokasi ini.</p>
    <a href="#modal-info" class="modal-open5">Baca selengkapnya</a>
  </div>
  <div id="modal-info5" class="modal5">
    <div class="modal-content5" style="overflow-y: auto; max-height: 600px;">
      <span class="modal-close5">&times;</span>
      <div id="InfoPenting" class="tabcontent2" style="display: block;">
        <h3>Info Penting</h3>
        <ul class="info-list2">
          <li><i class="fas fa-calendar-alt"></i>Patung Yesus Buntu Burake buka setiap hari dengan jam operasional dari pukul 07.00 - 18.00 WITA.</li>
          <li><i class="fas fa-road"></i>Akses jalan menuju patung cukup menanjak, sehingga disarankan menggunakan kendaraan yang prima dan berhati-hati selama perjalanan.</li>
          <li><i class="fas fa-binoculars"></i>Anda dapat menikmati pemandangan indah Toraja dari ketinggian dan memanfaatkan spot-spot foto yang menarik di sekitar patung.</li>
        </ul>
      </div>
      <div id="InfoPenting" class="tabcontent2" style="display: block;">
        <hr>
        <div class="tips-section5">
          <ol class="tips-list5">
            <h3>Tips dan Saran Berkunjung ke Patung Yesus Buntu Burake</h3>
            <li><i class="fas fa-sun"></i>Waktu terbaik untuk mengunjungi patung adalah pagi hari atau sore menjelang matahari terbenam untuk menghindari cuaca yang terlalu panas dan menikmati pemandangan yang lebih indah.</li>
            <li><i class="fas fa-umbrella-beach"></i>Jangan lupa membawa payung atau topi untuk melindungi diri dari sinar matahari langsung, serta air minum untuk menjaga hidrasi.</li>
            <li><i class="fas fa-ticket-alt"></i>Pastikan untuk membeli tiket masuk jika diperlukan dan memeriksa kebijakan terbaru terkait kunjungan.</li>
            <li><i class="fas fa-camera"></i>Siapkan kamera atau ponsel Anda untuk mengabadikan momen indah di sekitar patung dan pemandangan sekitarnya.</li>
            <li><i class="fas fa-walking"></i>Kenakan sepatu yang nyaman karena Anda mungkin akan banyak berjalan kaki di area ini, terutama jika Anda menjelajahi sekitar patung.</li>
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
          <p>"Patung Yesus Buntu Burake adalah tempat yang sangat menginspirasi. Pemandangan dari atas bukit sangat menakjubkan dan suasana spiritual di sini sangat kuat. Saya merasa damai dan tenang saat berkunjung."</p>
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
          <p>"Mengunjungi Patung Yesus Buntu Burake adalah pengalaman yang tak terlupakan. Keindahan patung yang menjulang tinggi dan pemandangan alam sekitarnya sangat memukau. Tempat ini sangat direkomendasikan untuk dikunjungi."</p>
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
          <p>"Pengalaman di Patung Yesus Buntu Burake sangat luar biasa. Patungnya sangat megah dan pemandangan dari bukit sangat indah. Saya merasa sangat terberkati dapat mengunjungi tempat ini."</p>
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
          <p>"Kunjungan ke Patung Yesus Buntu Burake sangat mengesankan. Patung yang megah dan suasana yang tenang memberikan pengalaman yang tak terlupakan. Waktu terbaik untuk berkunjung adalah saat pagi hari atau sore hari."</p>
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
          <p>"Patung Yesus Buntu Burake adalah keajaiban arsitektur yang memukau. Detail patungnya luar biasa dan pemandangan dari atas bukit sangat indah. Saya sangat merekomendasikan kunjungan ke sini untuk semua pencinta sejarah dan budaya."</p>
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
          <p>"Pengalaman di Patung Yesus Buntu Burake sangat mengesankan. Patung yang megah dan suasana yang tenang memberikan pengalaman yang tak terlupakan. Waktu terbaik untuk berkunjung adalah saat matahari terbit atau terbenam."</p>
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

      <!-- Testimonial 7 -->
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"Kunjungan ke Patung Yesus Buntu Burake adalah pengalaman spiritual yang sangat mendalam. Suasana tenang dan pemandangan alam yang indah membuat saya merasa sangat dekat dengan alam dan Sang Pencipta."</p>
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
            <span>Rina</span>
            <span>rina@example.com</span>
          </div>
        </div>
      </div>

      <!-- Testimonial 8 -->
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"Patung Yesus Buntu Burake menawarkan pengalaman yang sangat berharga. Selain keindahan patungnya, keramahan masyarakat sekitar juga menambah kenyamanan kunjungan saya. Tempat yang wajib dikunjungi saat berada di Toraja."</p>
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
            <span>Tono</span>
            <span>tono@example.com</span>
          </div>
        </div>
      </div>

      <!-- Testimonial 9 -->
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"Mengunjungi Patung Yesus Buntu Burake memberikan kedamaian dalam hati. Patung yang tinggi dan pemandangan alam yang indah membuat saya sangat terkesan. Pasti akan kembali lagi untuk merasakan ketenangan di sini."</p>
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
            <span>Sari</span>
            <span>sari@example.com</span>
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
  <h1>Pertanyaan Seputar Patung Yesus Buntu Burake</h1>
  <div class="Questions">
    <div class="faq">
      <div class="faq-item">
        <div class="faq-question">Apakah Patung Yesus Buntu Burake terbuka untuk pengunjung?</div>
        <div class="faq-answer">Ya, Patung Yesus Buntu Burake terbuka untuk pengunjung setiap hari. Tempat ini menjadi salah satu tujuan wisata rohani yang populer di Toraja, Sulawesi Selatan.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Berapa harga tiket masuk ke Patung Yesus Buntu Burake saat ini?</div>
        <div class="faq-answer">Untuk memasuki area Patung Yesus Buntu Burake, pengunjung biasanya dikenakan tiket masuk sebesar Rp15.000 per orang. Pastikan untuk memeriksa informasi terbaru sebelum berkunjung.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Apakah ada panduan wisata di Patung Yesus Buntu Burake?</div>
        <div class="faq-answer">Ya, tersedia layanan panduan wisata yang dapat membantu pengunjung mendapatkan informasi lebih mendalam tentang sejarah dan makna spiritual dari Patung Yesus Buntu Burake.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Bagaimana cara menuju ke Patung Yesus Buntu Burake?</div>
        <div class="faq-answer">Patung Yesus Buntu Burake terletak sekitar 4 kilometer dari kota Makale, Toraja. Pengunjung dapat menggunakan mobil pribadi atau mengikuti tur lokal yang disediakan oleh agen perjalanan di Toraja.</div>
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

<script src="js/patung yesus buntu burake script.js"></script>
</body>
</html>