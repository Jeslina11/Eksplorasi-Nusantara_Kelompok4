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
  <title>Taman Nasional Bunaken</title>
  <link rel="stylesheet" type="text/css" href="css/Taman nasional bunaken style.css">
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



<!--------------------- HEAD SECTION --------------------->
<div class="container-head1">
  <h1>Taman Nasional Bunaken</h1>
  <p class="text-head1">
    Taman Nasional Bunaken adalah surga bawah laut dengan terumbu karang yang mengagumkan. Pengalaman snorkeling dan menyelam, air jernihnya memperlihatkan kehidupan laut yg kaya. Selain itu, pantai berpasir putih dan pemandangan alam yang menakjubkan membuat Bunaken menjadi destinasi yang ideal bagi pecinta alam dan petualangan yang ingin menikmati keindahan alam bawah laut.  
  </p>
</div>



<!------------------- GALLERY SECTION -------------------------> 
<div class="gallery">
  <i id="left" class="fa-solid fa-angle-left"></i>
  <div class="carousel" id="carousel">
      <img src="image/bunaken3.jpg" alt="img" draggable="false">
      <img src="image/bunaken4.jpg" alt="img" draggable="false">
      <img src="image/bunaken5.png" alt="img" draggable="false">
      <img src="image/bunaken6.jpeg" alt="img" draggable="false">
      <img src="image/bunaken7.webp" alt="img" draggable="false">
      <img src="image/bunaken18.webp" alt="img" draggable="false">
      <img src="image/bunaken9.jpg" alt="img" draggable="false">
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
              <p>Kawasan Youth center, Pelabuhan Marina plazaa, Mega mas kawasan, Kota Manado ,Sulawesi Utara.</p>
              <a href="https://maps.app.goo.gl/XVByh2b8XUrz2cPU6">Lihat Peta ></a>
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
                  <li>Minggu: <span>Buka 24 jam</span></li>
                  <li>Senin: <span>Buka 24 jam</span></li>
                  <li>Selasa: <span>Buka 24 jam</span></li>
                  <li>Rabu: <span>Buka 24 jam</span></li>
                  <li>Kamis: <span>Buka 24 jam</span></li>
                  <li>Jumat: <span>Buka 24 jam</span></li>
                  <li>Sabtu: <span>Buka 24 jam</span></li>
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
  <h2>Fasilitas yang ditawarkan</h2>
  <div class="facility-list">
      <div class="facility-item">
          <i class="fas fa-water"></i>
          <span>Snorkeling dan Diving</span>
      </div>
      <div class="facility-item">
          <i class="fas fa-ship"></i>
          <span>Perahu Wisata</span>
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
          <span>Restoran dan Warung Makan</span>
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
        <i class="fas fa-shower"></i>
        <span>Kamar Mandi dan Bilas</span>
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
    <p>Taman Nasional Bunaken adalah salah satu destinasi penyelaman terkenal di dunia. Kunjungi taman ini untuk menikmati keindahan bawah laut yang mempesona.</p>
    <a href="#modal-info" class="modal-open5">Baca selengkapnya</a>
  </div>
  <div id="modal-info5" class="modal5">
    <div class="modal-content5" style="overflow-y: auto; max-height: 600px;">
      <span class="modal-close5">&times;</span>
      <div id="InfoPenting" class="tabcontent2" style="display: block;">
        <h3>Info Penting</h3>
        <ul class="info-list2">
          <li><i class="fas fa-calendar-alt"></i>Taman Nasional Bunaken terbuka untuk pengunjung setiap hari.</li>
          <li><i class="fas fa-ship"></i>Anda dapat menyewa perahu atau mengikuti tur snorkeling dan diving yang disediakan oleh berbagai operator lokal.</li>
          <li><i class="fas fa-user-tie"></i>Pastikan untuk menggunakan pemandu wisata yang berpengalaman untuk menjelajahi spot-spot terbaik di Taman Nasional Bunaken.</li>
        </ul>
      </div>
      <div id="InfoPenting" class="tabcontent2" style="display: block;">
        <hr>
        <div class="tips-section5">
          <ol class="tips-list5">
            <h3>Tips dan Saran Berkunjung ke Taman Nasional Bunaken</h3>
            <li><i class="fas fa-sun"></i>Waktu terbaik untuk mengunjungi Taman Nasional Bunaken adalah pada musim kemarau, antara bulan Mei hingga September, untuk mendapatkan visibility yang terbaik di bawah laut.</li>
            <li><i class="fas fa-mask"></i>Jangan lupa membawa perlengkapan snorkeling atau diving sendiri jika memungkinkan untuk kenyamanan pribadi.</li>
            <li><i class="fas fa-bed"></i>Pastikan untuk memesan tur atau penginapan sebelumnya, terutama saat musim liburan untuk menghindari penuh.</li>
            <li><i class="fas fa-camera"></i>Siapkan kamera bawah air atau peralatan perekam untuk mengabadikan keindahan terumbu karang dan kehidupan laut yang menakjubkan.</li>
            <li><i class="fas fa-tshirt"></i>Kenakan pakaian renang dan gunakan tabir surya yang ramah lingkungan untuk melindungi kulit dari sinar matahari dan menjaga kelestarian terumbu karang.</li>
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
          <p>"Taman Nasional Bunaken adalah surga bagi para penyelam. Keindahan bawah lautnya luar biasa, dengan terumbu karang yang indah dan berbagai jenis ikan yang bisa dilihat. Pengalaman yang tak terlupakan dan saya pasti akan kembali lagi."</p>
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

      <!-- Testimonial 2 -->
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"Snorkeling di Taman Nasional Bunaken adalah salah satu pengalaman terbaik dalam hidup saya. Airnya sangat jernih dan pemandangan bawah lautnya sungguh menakjubkan. Saya sangat merekomendasikan tempat ini kepada siapa saja yang mencintai laut."</p>
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

      <!-- Testimonial 3 -->
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"Menyelam di Taman Nasional Bunaken adalah pengalaman yang luar biasa. Terumbu karangnya sangat indah dan penuh dengan kehidupan laut yang berwarna-warni. Pemandu lokal sangat ramah dan berpengetahuan. Pengalaman yang tidak akan saya lupakan."</p>
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

      <!-- Testimonial 4 -->
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"Bunaken adalah tempat yang sempurna untuk berlibur dan menikmati keindahan bawah laut. Saya sangat menikmati snorkeling di sini dan melihat berbagai jenis ikan dan karang. Tempat yang sangat direkomendasikan untuk pecinta alam dan penyelam."</p>
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
            <span>budi@example.com</span>
          </div>
        </div>
      </div>

      <!-- Testimonial 5 -->
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"Taman Nasional Bunaken menawarkan pengalaman menyelam yang tiada duanya. Kehidupan lautnya sangat beragam dan terumbu karangnya indah. Saya sangat menikmati waktu saya di sini dan pasti akan kembali lagi di masa depan."</p>
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

      <!-- Testimonial 6 -->
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"Pengalaman di Taman Nasional Bunaken sangat mengesankan. Keindahan bawah lautnya sangat luar biasa dan menyelam di sini adalah pengalaman yang tidak akan pernah saya lupakan. Saya sangat merekomendasikan tempat ini untuk semua pecinta laut."</p>
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
            <span>Ahmad</span>
            <span>ahmad@example.com</span>
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
        <input type="text" name="id_tempat_wisata" value="10">
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
  <h1>Pertanyaan Seputar Taman Nasional Bunaken</h1>
  <div class="Questions">
    <div class="faq">
      <div class="faq-item">
        <div class="faq-question">Apakah Taman Nasional Bunaken terbuka untuk pengunjung?</div>
        <div class="faq-answer">Ya, Taman Nasional Bunaken terbuka untuk pengunjung setiap hari. Taman ini menjadi salah satu tujuan wisata alam dan penyelaman yang populer di Indonesia.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Berapa harga tiket masuk ke Taman Nasional Bunaken saat ini?</div>
        <div class="faq-answer">Harga tiket masuk ke Taman Nasional Bunaken untuk turis asing adalah sekitar Rp150.000, sedangkan untuk turis domestik sekitar Rp50.000. Pastikan untuk memeriksa situs resmi atau sumber terpercaya lainnya untuk informasi harga terbaru.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Apakah pengunjung bisa menyelam di Taman Nasional Bunaken?</div>
        <div class="faq-answer">Ya, pengunjung diperbolehkan menyelam di Taman Nasional Bunaken. Terdapat banyak operator penyelaman yang menawarkan jasa penyelaman dan snorkeling di taman ini.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Bagaimana cara menuju ke Taman Nasional Bunaken?</div>
        <div class="faq-answer">Taman Nasional Bunaken terletak di Sulawesi Utara, Indonesia. Pengunjung dapat terbang ke Manado, kemudian melanjutkan perjalanan dengan perahu selama sekitar 30-45 menit untuk mencapai Bunaken.</div>
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

<script src="js/Taman nasional bunaken script.js"></script>
</body>
</html>