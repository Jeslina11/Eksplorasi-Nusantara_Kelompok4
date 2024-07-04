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
  <title>King Kong Hill</title>
  <link rel="stylesheet" type="text/css" href="css/King Kong Hill style.css">
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
  <h1>King Kong Hill</h1>
  <p class="text-head1">
    Jelajahi keindahan alam Gunung Bromo dengan mengunjungi King Kong Hill, sebuah tempat tersembunyi yang menawarkan pemandangan yang luar biasa. Dengan akses mudah dari Penanjakan 1, Anda dapat menikmati hiking santai menuju puncak untuk melihat panorama megah Gunung Bromo dan lautan pasirnya yang memukau. Terdapat fasilitas kantin di puncak untuk menyegarkan diri setelah perjalanan, King Kong Hill menjadi destinasi hiking yang sempurna untuk mengalami keindahan alam yang autentik.
  </p>
</div>



<!------------------- GALLERY SECTION -------------------------> 
<div class="gallery">
  <i id="left" class="fa-solid fa-angle-left"></i>
  <div class="carousel" id="carousel">
      <img src="image/King Kong Hill1.jpg" alt="img" draggable="false">
      <img src="image/King Kong Hill4.jpg" alt="img" draggable="false">
      <img src="image/King Kong Hill5.jpg" alt="img" draggable="false">
      <img src="image/King Kong Hill6.jpg" alt="img" draggable="false">
      <img src="image/King Kong Hill8.jpg" alt="img" draggable="false">
      <img src="image/King Kong Hill3.jpg" alt="img" draggable="false">
      <img src="image/King Kong Hill2.jpg" alt="img" draggable="false">

  </div>
  <i id="right" class="fa-solid fa-angle-right"></i>
</div>

<!-- Modal gallery -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="modal-img">
</div>



<!----------------------- LOCATION -----------------------> 
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
              <p>Cemorolawang, Ngadisari, Kec. Sukapura, Kabupaten Probolinggo, Jawa Timur</p>
              <a href="https://maps.app.goo.gl/2h93ZpE2ZS7SvqDm7">Lihat Peta ></a>
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
    <h2>Fasilitas</h2>
    <div class="facility-list">
        <div class="facility-item">
            <i class="fas fa-mountain"></i>
            <span>Pemandangan Gunung Bromo</span>
        </div>
        <div class="facility-item">
            <i class="fas fa-camera"></i>
            <span>Spot Fotografi</span>
        </div>
        <div class="facility-item">
            <i class="fas fa-parking"></i>
            <span>Area Parkir</span>
        </div>
        <div class="facility-item">
            <i class="fas fa-tree"></i>
            <span>Alam Terbuka</span>
        </div>
        <div class="facility-item">
            <i class="fas fa-toilet"></i>
            <span>Fasilitas Toilet</span>
        </div>
        <div class="facility-item">
          <i class="fas fa-road"></i>
          <span>Akses Jalan</span>
      </div>
    </div>
    <div class="facility-list">
        <div class="facility-item">
            <i class="fas fa-utensils"></i>
            <span>Warung Makan</span>
        </div>
    </div>
</div>


<!---------------------- INFO SECTION -------------------->
<section>
  <hr>
  <div class="info-box5">
    <h2>Info Penting & Tips</h2>
    <p>King Kong Hill adalah salah satu destinasi populer di Indonesia yang menawarkan pemandangan spektakuler dari ketinggian. Nikmati pengalaman mendaki yang menantang dan pemandangan alam yang menakjubkan.</p>
    <a href="#modal-info" class="modal-open5">Baca selengkapnya</a>
  </div>
  <div id="modal-info5" class="modal5">
    <div class="modal-content5" style="overflow-y: auto; max-height: 600px;">
      <span class="modal-close5">&times;</span>
      <div id="InfoPenting" class="tabcontent2" style="display: block;">
        <h3>Info Penting</h3>
        <ul class="info-list2">
          <li><i class="fas fa-calendar-alt"></i>King Kong Hill buka setiap hari dengan jam operasional yang berbeda-beda tergantung pada cuaca dan musim. Sebaiknya periksa jadwal terbaru sebelum merencanakan kunjungan Anda.</li>
          <li><i class="fas fa-calendar-times"></i>King Kong Hill mungkin tutup atau memiliki akses terbatas selama kondisi cuaca buruk atau perbaikan fasilitas. Pastikan untuk memeriksa informasi terbaru sebelum pergi.</li>
          <li><i class="fas fa-binoculars"></i>Disarankan untuk menggunakan pemandu lokal yang berpengalaman untuk mendapatkan pengalaman mendaki yang lebih aman dan informatif.</li>
        </ul>
      </div>
      <div id="InfoPenting" class="tabcontent2" style="display: block;">
        <hr>
        <div class="tips-section5">
          <ol class="tips-list5">
            <h3>Tips dan Saran Berkunjung ke King Kong Hill</h3>
            <li><i class="fas fa-sun"></i>Pilih waktu kunjungan saat cuaca cerah untuk menikmati pemandangan terbaik dari puncak King Kong Hill.</li>
            <li><i class="fas fa-umbrella-beach"></i>Selalu bawa perlengkapan yang tepat seperti pakaian hangat atau jas hujan jika cuaca berubah tiba-tiba.</li>
            <li><i class="fas fa-ticket-alt"></i>Periksa apakah reservasi atau izin khusus diperlukan sebelum naik ke King Kong Hill, terutama saat musim liburan atau akhir pekan.</li>
            <li><i class="fas fa-camera"></i>Jangan lupa membawa kamera atau ponsel untuk mengabadikan momen indah selama perjalanan mendaki.</li>
            <li><i class="fas fa-walking"></i>Persiapkan diri dengan sepatu yang nyaman dan sesuai untuk trekking, karena Anda akan melewati berbagai medan yang berbeda.</li>
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
        <p>Testimoni & Ulasan</p>
        <h2>Apa yang Mereka Katakan?</h2>
      </div>
    </div>

    <!-- Testimoni 1 -->
    <div class="owl-carousel owl-theme testimonials-container">
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"King Kong Hill memberikan pengalaman mendaki yang menakjubkan. Pemandangan alamnya luar biasa, dan udara segar membuat perjalanan ini sangat menyegarkan. Saya sangat merekomendasikan untuk penggemar hiking!"</p>
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
            <span>Yulia</span>
            <span>yulia@example.com</span>
          </div>
        </div>
      </div>

      <!-- Testimoni 2 -->
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"King Kong Hill adalah destinasi yang menakjubkan untuk menikmati matahari terbit. Saya sangat terkesan dengan pemandangan sunrise dari puncaknya. Tempat ini cocok untuk pencinta alam dan fotografi."</p>
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
            <span>Rizky</span>
            <span>rizky@example.com</span>
          </div>
        </div>
      </div>

      <!-- Testimoni 3 -->
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"Pengalaman mendaki di King Kong Hill sangat memuaskan. Terlepas dari tantangan perjalanan, pemandangan dari puncaknya sungguh memukau. Saya merasa seperti menemukan kedamaian di alam."</p>
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
            <span>bambang@example.com</span>
          </div>
        </div>
      </div>

      <!-- Testimoni 4 -->
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"King Kong Hill adalah tempat yang luar biasa untuk bersantai dan menikmati alam. Saya sangat menikmati kesunyian dan keindahan pemandangan dari puncaknya. Suasana di sini sangat menenangkan."</p>
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
            <span>Maria</span>
            <span>maria@example.com</span>
          </div>
        </div>
      </div>

      <!-- Testimoni 5 -->
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"Saya sangat terkesan dengan perjalanan mendaki di King Kong Hill. Pemandangan alamnya menakjubkan, dan perasaan kedamaian yang saya rasakan di puncaknya tidak terlupakan. Sangat direkomendasikan!"</p>
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
            <span>Andi</span>
            <span>andi@example.com</span>
          </div>
        </div>
      </div>

      <!-- Testimoni 6 -->
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"King Kong Hill adalah tempat yang menakjubkan untuk menikmati keindahan alam. Saya sangat menikmati perjalanan mendaki dan melihat pemandangan dari puncaknya. Pengalaman yang sangat berkesan!"</p>
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
            <span>Putri</span>
            <span>putri@example.com</span>
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

<!-- rating -->
<div class="feedback-background2">
  <div class="feedback-container2">
    <form class="feedback-form2" action="simpan_ulasan.php" method="post">
      <h2>Berikan Ulasan Anda</h2>
      <p>Apa pendapat Anda tentang pengalaman Anda mengunjungi destinasi wisata ini?</p>
      <div class="star-widget2">
        <input type="radio" name="rate" id="rate-5" value="5">
        <label for="rate-5" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-4" value="4">
        <label for="rate-4" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-3" value="3">
        <label for="rate-3" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-2" value="2">
        <label for="rate-2" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-1" value="1">
        <label for="rate-1" class="fas fa-star"></label>
      </div>
      <textarea name="review" placeholder="Tulisan pendapatmu disini...."></textarea>
      <div class="buttons2">
        <button type="submit">Kirim</button>
        <button type="reset">Batalkan</button>
      </div>
    </form>
  </div>
</div>




<!------------------- QUESTIONS SECTION ------------------->
<section>
  <hr>
  <h1>Pertanyaan Seputar King Kong Hill</h1>
  <div class="Questions">
    <div class="faq">
      <div class="faq-item">
        <div class="faq-question">Apakah King Kong Hill terbuka untuk pengunjung?</div>
        <div class="faq-answer">Ya, King Kong Hill terbuka untuk pengunjung setiap hari kecuali dalam kondisi cuaca ekstrem atau perbaikan rutin. Tempat ini menjadi tujuan favorit untuk aktivitas hiking dan menikmati alam di daerah tersebut.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Berapa biaya untuk masuk ke King Kong Hill?</div>
        <div class="faq-answer">Tidak ada biaya masuk untuk mengakses King Kong Hill. Pengunjung dapat menikmati keindahan alamnya tanpa dikenakan biaya tiket.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Apakah pengunjung diizinkan untuk mendaki King Kong Hill?</div>
        <div class="faq-answer">Ya, pengunjung diperbolehkan mendaki King Kong Hill. Jalur hiking tersedia dengan berbagai tingkat kesulitan, sehingga cocok untuk berbagai kalangan pengunjung yang ingin menjelajahi keindahan alamnya.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Bagaimana cara menuju ke King Kong Hill?</div>
        <div class="faq-answer">King Kong Hill terletak di daerah tertentu, sekitar 25 kilometer dari pusat kota terdekat. Pengunjung dapat menggunakan transportasi umum, mobil pribadi, atau mengikuti petunjuk rute yang tersedia untuk mencapai lokasi ini.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Apakah di King Kong Hill tersedia fasilitas parkir?</div>
        <div class="faq-answer">Ya, King Kong Hill menyediakan area parkir bagi pengunjung yang menggunakan kendaraan pribadi. Fasilitas parkirnya cukup luas untuk menampung sejumlah kendaraan.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Apakah King Kong Hill cocok untuk anak-anak?</div>
        <div class="faq-answer">Pendakian ke King Kong Hill bisa cukup menantang tergantung pada jalur yang dipilih. Sebagian jalur mungkin lebih cocok untuk pengunjung yang lebih berpengalaman atau remaja. Namun, terdapat juga jalur yang lebih ringan dan cocok untuk anak-anak dengan pengawasan orang dewasa.</div>
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

<script src="js/King Kong Hill script.js"></script>
</body>
</html>