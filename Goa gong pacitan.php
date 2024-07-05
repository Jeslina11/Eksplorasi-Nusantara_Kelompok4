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
	<title>Goa Gong Pacitan</title>
	<link rel="stylesheet" type="text/css" href="css/Goa Gong Pacitan style.css">
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


<!-------------------- BACKGROUND  -------------------->
<div class="background"></div>



<!--------------------- HEAD SECTION --------------------->
<div class="container-head1">
  <h1>Goa Gong Pacitan</h1>
  <p class="text-head1">
    Goa Gong di Pacitan, Jawa Timur, adalah salah satu gua terindah di Indonesia, terkenal dengan stalaktit dan stalagmit yang menakjubkan. Terkenal karena suara gong yang terdengar saat stalaktit tertentu dipukul, gua ini menawarkan pemandangan formasi batu kapur spektakuler yang diterangi pencahayaan warna-warni. Dengan suasana yang tenang, udara sejuk, dan keindahan alam yang memukau, Goa Gong adalah destinasi wisata alam yang memberikan pengalaman menakjubkan dan ketenangan yang menenangkan.
  </p>
</div>


<!--------------------- GALLERY -------------------> 
<div class="gallery">
  <i id="left" class="fa-solid fa-angle-left"></i>
  <div class="carousel" id="carousel">
      <img src="image/Goa Gong Pacitan1.jpg" alt="img" draggable="false">
      <img src="image/Goa Gong Pacitan2.webp" alt="img" draggable="false">
      <img src="image/Goa Gong Pacitan5.jpg" alt="img" draggable="false">
      <img src="image/Goa Gong Pacitan7.jpeg" alt="img" draggable="false">
      <img src="image/Goa Gong Pacitan8.jpeg" alt="img" draggable="false">
      <img src="image/Goa Gong Pacitan3.jpeg" alt="img" draggable="false">
      <img src="image/Goa Gong Pacitan9.jpg" alt="img" draggable="false">
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
              <p>Jl. Salam, Salam, Bomo, Kec. Punung, Kabupaten Pacitan, Jawa Timur.</p>
              <a href="https://maps.app.goo.gl/qLBzctqvX2MQ6oyF7">Lihat Peta ></a>
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
                  <li>Minggu: <span>08:00 - 16:00</span></li>
                  <li>Senin: <span>08:00 - 16:00</span></li>
                  <li>Selasa: <span>08:00 - 16:00</span></li>
                  <li>Rabu: <span>08:00 - 16:00</span></li>
                  <li>Kamis: <span>08:00 - 16:00</span></li>
                  <li>Jumat: <span>08:00 - 16:00</span></li>
                  <li>Sabtu: <span>08:00 - 16:00</span></li>
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
  <h2>Fasilitas yang Ditawarkan di Goa Gong Pacitan</h2>
  <div class="facility-list">
      <div class="facility-item">
          <i class="fas fa-landmark"></i>
          <span>Wisata Goa</span>
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
    <p>Setiap hari, pengunjung dapat mengunjungi Goa Gong Pacitan dengan waktu operasional pukul 08.00 - 16.00 WIB. Pastikan untuk mematuhi aturan dan petunjuk selama kunjungan.</p>
    <a href="#modal-info" class="modal-open5">Baca selengkapnya</a>
  </div>
  <div id="modal-info5" class="modal5">
    <div class="modal-content5" style="overflow-y: auto; max-height: 600px;">
      <span class="modal-close5">&times;</span>
      <div id="InfoPenting" class="tabcontent2" style="display: block;">
        <h3>Info Penting</h3>
        <ul class="info-list2">
          <li><i class="fas fa-clock"></i>Setiap hari, pengunjung dapat mengunjungi Goa Gong Pacitan dengan waktu operasional pukul 08.00 - 16.00 WIB.</li>
          <li><i class="fas fa-calendar-times"></i>Goa Gong Pacitan tutup untuk kunjungan pada hari tertentu. Pastikan untuk memeriksa jadwal sebelum rencana perjalanan Anda.</li>
          <li><i class="fas fa-lightbulb"></i> Pengunjung dapat menyewa senter dengan biaya Rp5.000, termasuk baterai cadangan untuk pencahayaan di dalam gua. Meskipun begitu, gua dilengkapi dengan lampu neon warna-warni untuk suasana yang memikat.</li>
          <li><i class="fas fa-map-marked-alt"></i> Akses menuju lokasi dapat ditempuh dengan kendaraan pribadi atau transportasi umum.</li>
        </ul>
      </div>
      <div id="InfoPenting" class="tabcontent2" style="display: block;">
        <hr>
        <div class="tips-section5">
          <ol class="tips-list5">
            <h3>Tips dan Saran Berkunjung ke Goa Gong Pacitan</h3>
            <li><i class="fas fa-sun"></i>Waktu terbaik untuk mengunjungi Goa Gong adalah saat pagi atau siang hari untuk menikmati pencahayaan alami di dalam goa.</li>
            <li><i class="fas fa-tshirt"></i>Siapkan diri Anda dengan pakaian yang nyaman dan alas kaki yang sesuai untuk menjelajahi goa yang berlumpur.</li>
            <li><i class="fas fa-cloud-sun"></i>Periksa kondisi cuaca sebelum pergi, karena akses ke goa mungkin dipengaruhi oleh cuaca.</li>
            <li><i class="fas fa-camera"></i>Jangan lupa membawa kamera untuk mengabadikan keindahan stalaktit dan stalagmit di dalam goa.</li>
            <li><i class="fas fa-hiking"></i>Ikuti petunjuk dan jangan meninggalkan rute yang ditentukan untuk keselamatan Anda sendiri.</li>
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
          <p>"Goa Gong Pacitan adalah pengalaman yang luar biasa. Formasi batu kapur dan suara alam yang dihasilkan oleh gelombang air sangat menakjubkan. Saya merasa seperti berada di dunia lain saat mengunjungi goa ini."</p>
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
            <span>andis@gmail.com</span>
          </div>
        </div>
      </div>

      <!-- Testimonial 2 -->
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"Saya sangat terpesona dengan Goa Gong Pacitan. Suara gemerincing air dan visual formasi stalaktit yang unik membuat saya merasa dekat dengan alam. Tempat yang sangat direkomendasikan untuk pecinta alam dan petualangan."</p>
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
            <span>Intan</span>
            <span>intan123@gmail.com</span>
          </div>
        </div>
      </div>

      <!-- Testimonial 3 -->
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"Pengalaman di Goa Gong Pacitan sangat memukau. Saya terpesona dengan keindahan alam di dalam goa ini. Goa Gong adalah destinasi yang harus dikunjungi bagi siapa pun yang ingin mengagumi keajaiban alam."</p>
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
            <span>budi456@gmail.com</span>
          </div>
        </div>
      </div>

      <!-- Testimonial 4 -->
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"Goa Gong Pacitan adalah keajaiban alam yang sungguh menakjubkan. Saya sangat terkesan dengan formasi batu kapur dan suara alam yang tercipta di dalamnya. Tempat ini benar-benar memberikan kedamaian dan keindahan alam."</p>
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
            <span>dewi789@gmail.com</span>
          </div>
        </div>
      </div>

      <!-- Testimonial 5 -->
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"Saya sangat merekomendasikan Goa Gong Pacitan kepada siapa pun yang mencari pengalaman alam yang unik. Suara gemerincing air dan keindahan stalaktit di dalam goa ini sungguh luar biasa. Pengalaman yang tak terlupakan!"</p>
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
            <span>Rudi</span>
            <span>rudi321@gmail.com</span>
          </div>
        </div>
      </div>

      <!-- Testimonial 6 -->
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"Goa Gong Pacitan memberikan pengalaman spiritual yang mendalam bagi saya. Suara alam dan atmosfer di dalam goa memberikan kedamaian dan keajaiban tersendiri. Tempat yang sangat istimewa."</p>
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
            <span>putri456@gmail.com</span>
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
  <h1>Pertanyaan Seputar Goa Gong Pacitan</h1>
  <div class="Questions">
    <div class="faq">
      <div class="faq-item">
        <div class="faq-question">Apa yang membuat Goa Gong Pacitan istimewa?</div>
        <div class="faq-answer">Goa Gong Pacitan terkenal dengan keindahan stalaktit dan stalagmitnya yang unik, serta formasi batu kapur yang menakjubkan. Suara gemericik air yang terdengar di dalam goa menambah pengalaman mistis bagi pengunjung.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Berapa harga tiket masuk ke Goa Gong Pacitan?</div>
        <div class="faq-answer">Berdasarkan informasi terbaru, harga tiket masuk ke Goa Gong Pacitan adalah sekitar:</div>
        <div class="faq-answer">- Tiket Masuk Anak-anak: Rp5.000</div>
        <div class="faq-answer">- Tiket Masuk Dewasa: Rp20.000</div>
        <div class="faq-answer">Harga tiket dapat berubah, jadi sebaiknya periksa situs resmi atau hubungi langsung untuk informasi terbaru.</div>
      </div>
      
      <div class="faq-item">
        <div class="faq-question">Bolehkah pengunjung berenang di dalam Goa Gong Pacitan?</div>
        <div class="faq-answer">Tidak, kegiatan berenang tidak diperbolehkan di dalam Goa Gong Pacitan karena tujuannya adalah untuk melindungi kelestarian alam dan struktur stalaktit yang unik di dalamnya.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Bagaimana kondisi akses ke dalam Goa Gong Pacitan?</div>
        <div class="faq-answer">Akses ke dalam Goa Gong Pacitan cukup mudah, tetapi pengunjung perlu menuruni tangga curam sekitar 300 anak tangga untuk mencapai ruang utama goa. Untuk itu, disarankan untuk memakai alas kaki yang nyaman dan berhati-hati.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Apakah ada panduan wisata atau pemandu yang tersedia di Goa Gong Pacitan?</div>
        <div class="faq-answer">Ya, pengunjung dapat menggunakan jasa pemandu lokal yang akan memberikan informasi tentang sejarah dan formasi geologi di dalam goa.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Bagaimana kondisi kebersihan dan keamanan di sekitar Goa Gong Pacitan?</div>
        <div class="faq-answer">Pihak pengelola goa sangat memperhatikan kebersihan dan keamanan pengunjung. Di dalam goa terdapat fasilitas toilet yang bersih, serta petugas keamanan yang siap membantu jika diperlukan.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Bagaimana cara menuju ke Goa Gong Pacitan?</div>
        <div class="faq-answer">Goa Gong Pacitan terletak di Pacitan, Jawa Timur. Dari kota Pacitan, pengunjung bisa menggunakan mobil pribadi atau ojek untuk mencapai lokasi goa ini. Lokasi goa terletak sekitar 10 kilometer dari pusat kota Pacitan.</div>
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

<script src="js/Goa Gong Pacitan script.js"></script>
</body>
</html>