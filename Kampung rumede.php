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
  <title>Kampung Rumede</title>
  <link rel="stylesheet" type="text/css" href="css/Kampung rumede style.css">
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
  <h1>Kampung Rumede</h1>
  <p class="text-head1">
    Kampung Rumede, atau Desa Kunyi, di Polewali, Sulawesi Barat, adalah surga desa pegunungan dengan sawah hijau dan kebun yang indah. Nikmati kehidupan desa yang autentik dan ramah penduduk lokal sambil mengeksplorasi budaya yang kaya dan keindahan alam Sulawesi Barat yang menawan. Kunjungan ke Kampung Rumede menjanjikan pengalaman yang memperkaya dan mengesankan bagi para wisatawan yang mencari ketenangan dan keindahan alam yang belum terjamah, serta kedamaian yang sulit ditemukan di perkotaan.
  </p>
</div>



<!--------------------- GALLERY -------------------> 
<div class="gallery">
  <i id="left" class="fa-solid fa-angle-left"></i>
  <div class="carousel" id="carousel">
      <img src="image/rumede1.jpg" alt="img" draggable="false">
      <img src="image/rumede2.jpg" alt="img" draggable="false">
      <img src="image/rumede3.jpeg" alt="img" draggable="false">
      <img src="image/rumede5.jpg" alt="img" draggable="false">
      <img src="image/rumede4.jpeg" alt="img" draggable="false">
      <img src="image/rumede2 bg.png" alt="img" draggable="false">
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
              <p>Kunyi, Kec. Anreapi, Kabupaten Polewali Mandar, Sulawesi Barat.</p>
              <a href="https://maps.app.goo.gl/veqxb6ZkqG73wygn6">Lihat Peta ></a>
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
          <div class="info-teks">
              <h3>Informasi Lebih Lanjut</h3>
              <p>Belum memiliki informasi apapun.</p>
              <!-- <p>Pantai Ora di Maluku <strong>buka setiap hari selama 24 jam</strong>, tetapi waktu terbaik untuk menikmati keindahannya adalah antara pukul <strong>06.00-17.00</strong>. Jadi, tunggu apa lagi? Segera rencanakan perjalanan Anda dan saksikan sendiri pesona Pantai Ora yang memukau!</p> -->
               <!-- <a href="halaman.php">- Fasilitas</a> <br>
               <a href="halaman.php">- Waktu Terbaik berkunjung</a> -->
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
          <i class="fas fa-campground"></i>
          <span>Tempat Berkemah</span>
      </div>
      <div class="facility-item">
          <i class="fas fa-fire"></i>
          <span>Tempat Api Unggun</span>
      </div>
      <div class="facility-item">
          <i class="fas fa-toilet"></i>
          <span>Toilet dan MCK</span>
      </div>
      <div class="facility-item">
          <i class="fas fa-trash-alt"></i>
          <span>Tempat Pembuangan Sampah</span>
      </div>
      <div class="facility-item">
          <i class="fas fa-water"></i>
          <span>Air Bersih</span>
      </div>
      <!-- <div class="facility-item">
          <i class="fas fa-mountain"></i>
          <span>Pemandangan Alam</span>
      </div> -->
      <div class="facility-item">
          <i class="fas fa-parking"></i>
          <span>Area Parkir</span>
      </div>
      <div class="facility-item">
          <i class="fas fa-info-circle"></i>
          <span>Informasi dan Papan Petunjuk</span>
      </div>
  </div>
</div>


<!---------------------- INFO SECTION -------------------->
<section>
  <hr>
  <div class="info-box5">
    <h2>Info Penting & Tips</h2>
    <p>Kampung Rumede adalah destinasi wisata alam yang menawarkan pengalaman berkemah di tengah pemandangan yang indah di Kota Polewali.</p>
    <a href="#modal-info" class="modal-open5">Baca selengkapnya</a>
  </div>
  <div id="modal-info5" class="modal5">
    <div class="modal-content5" style="overflow-y: auto; max-height: 600px;">
      <span class="modal-close5">&times;</span>
      <div id="InfoPenting" class="tabcontent2" style="display: block;">
        <h3>Info Penting</h3>
        <ul class="info-list2">
          <li><i class="fas fa-calendar-alt"></i>Kampung Rumede buka untuk pengunjung sepanjang tahun.</li>
          <li><i class="fas fa-calendar-times"></i>Kemungkinan ada penutupan sementara tergantung pada kondisi cuaca atau perbaikan fasilitas.</li>
          <li><i class="fas fa-map-signs"></i>Ada pilihan untuk menggunakan layanan pemandu lokal untuk tur alam yang lebih mendalam.</li>
        </ul>
      </div>
      <div id="InfoPenting" class="tabcontent2" style="display: block;">
        <hr>
        <div class="tips-section5">
          <ol class="tips-list5">
            <h3>Tips dan Saran Berkunjung ke Kampung Rumede</h3>
            <li><i class="fas fa-sun"></i>Pilih waktu berkunjung di pagi atau sore hari untuk menikmati keindahan alam dan menghindari cuaca yang terlalu panas.</li>
            <li><i class="fas fa-hat-cowboy-side"></i>Bawa perlengkapan berkemah lengkap termasuk payung atau topi untuk melindungi diri dari sinar matahari.</li>
            <li><i class="fas fa-ticket-alt"></i>Pastikan untuk melakukan reservasi tempat berkemah terlebih dahulu untuk memastikan ketersediaan.</li>
            <li><i class="fas fa-camera-retro"></i>Jangan lupa membawa kamera untuk mengabadikan momen indah di tengah alam terbuka.</li>
            <li><i class="fas fa-hiking"></i>Kenakan sepatu yang nyaman untuk menjelajahi area sekitar dan menikmati aktivitas hiking atau jalan-jalan.</li>
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
          <p>"Kampung Rumede adalah tempat yang sangat istimewa. Suasana alam yang tenang dan kebersamaan dengan alam membuat saya merasa benar-benar terhubung dengan alam. Pengalaman berkemah di sini sangatlah memuaskan dan saya pasti akan kembali lagi."</p>
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
          <p>"Kampung Rumede memberikan pengalaman camping yang luar biasa. Pemandangan alamnya yang memukau dan udara segar membuat liburan kami menjadi lebih berkesan. Suasana di sini begitu damai dan cocok untuk keluarga."</p>
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
          <p>"Saya sangat menikmati waktu saya di Kampung Rumede. Berkemah di sini memberikan pengalaman yang tidak terlupakan. Udara segar dan pemandangan alam yang indah membuat liburan ini sempurna."</p>
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
          <p>"Kampung Rumede adalah tempat yang tepat untuk berkemah. Saya sangat menikmati kebersamaan dengan alam dan suasana tenang di sini. Terima kasih atas pengalaman yang luar biasa!"</p>
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
          <p>"Kampung Rumede adalah tempat yang menakjubkan untuk menghabiskan waktu dengan alam. Berkemah di sini memberikan kesempatan untuk merasakan kedamaian dan keindahan alam yang masih alami."</p>
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
          <p>"Saya merasa sangat terhubung dengan alam saat berkemah di Kampung Rumede. Udara segar dan pemandangan yang menyejukkan membuat liburan ini sangat berkesan bagi saya."</p>
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
  <h1>Pertanyaan Seputar Kampung Rumede</h1>
  <div class="Questions">
    <div class="faq">
      <div class="faq-item">
        <div class="faq-question">Apakah Kampung Rumede terbuka untuk pengunjung?</div>
        <div class="faq-answer">Ya, Kampung Rumede terbuka untuk pengunjung sepanjang tahun, kecuali jika ada penutupan sementara karena kondisi cuaca atau perbaikan fasilitas.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Bagaimana cara reservasi tempat berkemah di Kampung Rumede?</div>
        <div class="faq-answer">Anda dapat melakukan reservasi tempat berkemah di Kampung Rumede melalui situs web resmi atau menghubungi pihak pengelola. Pastikan untuk melakukan reservasi terlebih dahulu untuk memastikan ketersediaan tempat.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Apa yang sebaiknya dibawa saat berkunjung dan berkemah di Kampung Rumede?</div>
        <div class="faq-answer">Sebaiknya Anda membawa perlengkapan camping lengkap termasuk tenda, sleeping bag, perlengkapan mandi, dan perlindungan dari cuaca seperti payung atau topi. Pastikan juga untuk membawa persediaan makanan dan minuman yang cukup.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Apakah tersedia fasilitas mandi dan toilet di Kampung Rumede?</div>
        <div class="faq-answer">Ya, Kampung Rumede menyediakan fasilitas mandi dan toilet untuk kenyamanan pengunjung yang berkemah di sana.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Apakah di Kampung Rumede tersedia area khusus untuk membuat api unggun?</div>
        <div class="faq-answer">Ya, di Kampung Rumede tersedia area khusus untuk membuat api unggun. Pengunjung disarankan untuk mengikuti peraturan yang berlaku dan memastikan keamanan selama membuat dan memadamkan api unggun.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Apakah Kampung Rumede menyediakan aksesibilitas untuk penyandang disabilitas?</div>
        <div class="faq-answer">Ya, Kampung Rumede berusaha menyediakan aksesibilitas untuk penyandang disabilitas. Namun, pastikan untuk menghubungi pihak pengelola terlebih dahulu untuk informasi lebih lanjut dan persiapan yang diperlukan.</div>
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

<script src="js/Kampung rumede script.js"></script>
</body>
</html>