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
  <title>Pantai Ora Resort</title>
  <link rel="stylesheet" href="{{ asset('css/pantai ora resort style.css') }}">
  <!-- link -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
</head> 
<body>

<!--------------------- NAVBAR SECTION ------------------>
<header>
  @include('komponen.navbar')
</header>


<!---------------------- BACKGROUND  -------------------->
<div class="background"></div>



<!--------------------- HEAD SECTION --------------------->
<div class="container-head1">
  <h1>Pantai Ora Resort</h1>
  <p class="text-head1">
    Pantai Ora di Maluku Tengah adalah surga tersembunyi dengan keindahan alam yang luar biasa. Pantai ini menawarkan pasir putih yang lembut, air laut yang jernih, dan terumbu karang yang indah, menjadikannya tempat yang sempurna untuk snorkeling dan menyelam. Selain itu, Pantai Ora juga dilengkapi dengan fasilitas penginapan tepi laut. Dengan latar belakang pegunungan hijau yang mempesona dan suasana yang tenang, Pantai Ora adalah destinasi sempurna untuk relaksasi dan menikmati keindahan alam yang masih alami.
  </p>
</div>



<!--------------------- GALLERY -------------------> 
<div class="gallery">
  <i id="left" class="fa-solid fa-angle-left"></i>
  <div class="carousel" id="carousel">
      <img src="image/Pantai Ora1.jpg" alt="img" draggable="false">
      <img src="image/Pantai Ora2.jpg" alt="img" draggable="false">
      <img src="image/Pantai Ora3.jpg" alt="img" draggable="false">
      <img src="image/Pantai Ora4.jpg" alt="img" draggable="false">
      <img src="image/Pantai Ora5.jpg" alt="img" draggable="false">
      <img src="image/Pantai Ora7.jpg" alt="img" draggable="false">
      <img src="image/Pantai Ora8.jpg" alt="img" draggable="false">
      <img src="image/Pantai Ora9.jpg" alt="img" draggable="false">
      <img src="image/Pantai Ora10.jpeg" alt="img" draggable="false">
      <img src="image/Pantai Ora11.jpg" alt="img" draggable="false">
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
              <p>Jl. Kabupaten, Kec. Seram Utara, Kabupaten Maluku Tengah, Maluku.</p>
              <a href="https://maps.app.goo.gl/N4gofkon1Rd9NHVeA">Lihat Peta ></a>
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
          <i class="fas fa-umbrella-beach"></i>
          <span>Pantai Pribadi dengan Pasir Putih</span>
      </div>
      <div class="facility-item">
          <i class="fas fa-sun"></i>
          <span>Aktivitas Berjemur di Tepi Pantai</span>
      </div>
      <div class="facility-item">
          <i class="fas fa-swimmer"></i>
          <span>Kolam Renang Infinity</span>
      </div>
      <div class="facility-item">
          <i class="fas fa-fish"></i>
          <span>Spot Snorkeling di Terumbu Karang</span>
      </div>
      <div class="facility-item">
          <i class="fas fa-utensils"></i>
          <span>Restoran Mewah dengan Masakan Lokal dan Internasional</span>
      </div>
      <div class="facility-item">
        <i class="fas fa-shopping-basket"></i>
        <span>Toko Suvenir dan Butik</span>
    </div>
  </div>
  <div class="facility-list">
    <div class="facility-item">
        <i class="fas fa-chair"></i>
        <span>Gazebo dan Tempat Istirahat Santai</span>
    </div>
    <div class="facility-item">
        <i class="fas fa-shower"></i>
        <span>Kamar Mandi dan Shower dengan Fasilitas Spa</span>
    </div>
    <div class="facility-item">
        <i class="fas fa-cocktail"></i>
        <span>Bar Pantai dengan Minuman Segar dan Koktail</span>
    </div>
    <div class="facility-item">
        <i class="fas fa-life-ring"></i>
        <span>Peralatan Keselamatan dan Pemandu Selam Profesional</span>
    </div>
    <div class="facility-item">
        <i class="fas fa-wifi"></i>
        <span>WiFi Cepat di Seluruh Area Resort</span>
    </div>
    <div class="facility-item">
        <i class="fas fa-ship"></i>
        <span>Penyewaan Kapal Wisata dan Aktivitas Perairan</span>
    </div>
    <div class="facility-item">
        <i class="fas fa-users"></i>
        <span>Layanan Pandu Wisata Pribadi dan Kelompok</span>
    </div>
  </div>
</div>


<!---------------------- INFO SECTION -------------------->
<section>
  <hr>
  <div class="info-box5">
    <h2>Info Penting & Tips</h2>
    <p>Pantai Ora Resort adalah destinasi liburan mewah yang terkenal di Maluku Tengah, Indonesia. Nikmati keindahan pantai ini dan fasilitas unggulan dari resort.</p>
    <a href="#modal-info" class="modal-open5">Baca selengkapnya</a>
  </div>
  <div id="modal-info5" class="modal5">
    <div class="modal-content5" style="overflow-y: auto; max-height: 600px;">
      <span class="modal-close5">&times;</span>
      <div id="InfoPenting" class="tabcontent2" style="display: block;">
        <h3>Info Penting</h3>
        <ul class="info-list2">
          <li><i class="fas fa-calendar-alt"></i>Resort buka setiap hari sepanjang tahun.</li>
          <li><i class="fas fa-calendar-times"></i>Tidak ada penutupan khusus di resort ini, Anda bisa menikmati fasilitas kapan saja.</li>
          <li><i class="fas fa-binoculars"></i>Resort menyediakan berbagai kegiatan dan layanan, termasuk snorkeling, selam, dan aktivitas air lainnya.</li>
        </ul>
      </div>
      <div id="InfoPenting" class="tabcontent2" style="display: block;">
        <hr>
        <div class="tips-section5">
          <ol class="tips-list5">
            <h3>Tips dan Saran Berkunjung ke Pantai Ora Resort</h3>
            <li><i class="fas fa-sun"></i>Pilih waktu yang tepat untuk berkunjung, seperti pagi hari untuk menikmati pantai yang tenang atau sore hari untuk melihat matahari terbenam yang indah.</li>
            <li><i class="fas fa-umbrella-beach"></i>Perhatikan untuk membawa perlengkapan renang dan snorkeling yang lengkap.</li>
            <li><i class="fas fa-ticket-alt"></i>Pemesanan penginapan dan fasilitas lainnya disarankan dilakukan dengan cukup waktu, terutama saat liburan atau musim ramai.</li>
            <li><i class="fas fa-camera"></i>Siapkan kamera atau ponsel Anda untuk mengabadikan momen-momen berharga di sekitar resort.</li>
            <li><i class="fas fa-walking"></i>Pantai Ora Resort memiliki area yang luas, pastikan untuk mengenakan sepatu yang nyaman untuk berjalan-jalan.</li>
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
          <p>"Pantai Ora Resort adalah surga yang sejati di Maluku Tengah. Suasana pantai yang tenang, pelayanan yang ramah, dan keindahan alamnya membuat pengalaman liburan saya sangat istimewa. Sangat direkomendasikan!"</p>
          <div class="ratings">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </main>
        <div class="profile">
          <div class="profile-image"></div>
          <div class="profile-desc">
            <span>Dani</span>
            <span>Dani@gmail.com</span>
          </div>
        </div>
      </div>

      <!-- Testimonial 2 -->
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"Pantai Ora Resort menawarkan pengalaman liburan yang luar biasa. Saya sangat menikmati fasilitas snorkeling dan keindahan terumbu karangnya. Tempat yang sempurna untuk bersantai dan menikmati keindahan alam."</p>
          <div class="ratings">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </main>
        <div class="profile">
          <div class="profile-image"></div>
          <div class="profile-desc">
            <span>Anita</span>
            <span>Anita@gmail.com</span>
          </div>
        </div>
      </div>

      <!-- Testimonial 3 -->
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"Pantai Ora Resort adalah destinasi liburan impian. Pelayanan yang sangat baik, makanan lezat, dan pemandangan laut yang memukau. Saya pasti akan kembali untuk menikmati kemewahan dan ketenangan di sini."</p>
          <div class="ratings">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </main>
        <div class="profile">
          <div class="profile-image"></div>
          <div class="profile-desc">
            <span>Budi</span>
            <span>Budi@gmail.com</span>
          </div>
        </div>
      </div>

      <!-- Testimonial 4 -->
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"Pantai Ora Resort adalah tempat yang sempurna untuk bersantai dan menikmati keindahan alam Maluku Tengah. Suasana yang tenang dan kebersihan pantainya membuat saya betah untuk berlama-lama di sini."</p>
          <div class="ratings">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </main>
        <div class="profile">
          <div class="profile-image"></div>
          <div class="profile-desc">
            <span>Anita</span>
            <span>Anita90@gmail.com</span>
          </div>
        </div>
      </div>

      <!-- Testimonial 5 -->
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"Pantai Ora Resort adalah destinasi liburan yang sangat istimewa di Maluku Tengah. Keindahan alamnya yang memesona, pelayanan yang ramah, dan fasilitas yang lengkap membuat liburan saya tak terlupakan."</p>
          <div class="ratings">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </main>
        <div class="profile">
          <div class="profile-image"></div>
          <div class="profile-desc">
            <span>Adam</span>
            <span>Adam@gmail.com</span>
          </div>
        </div>
      </div>

      <!-- Testimonial 6 -->
      <div class="item testimonial-card">
        <main class="test-card-body">
          <p>"Pantai Ora Resort adalah tempat yang sempurna untuk melarikan diri dari keramaian. Keindahan alamnya yang masih alami dan suasana yang tenang membuat pengalaman liburan saya di sini sangat berkesan."</p>
          <div class="ratings">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </main>
        <div class="profile">
          <div class="profile-image"></div>
          <div class="profile-desc">
            <span>Dewi</span>
            <span>Dewi@example.com</span>
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
  <h1>Pertanyaan Seputar Pantai Ora Resort</h1>
  <div class="Questions">
    <div class="faq">
      <div class="faq-item">
        <div class="faq-question">Apakah Pantai Ora Resort terbuka untuk umum?</div>
        <div class="faq-answer">Ya, Pantai Ora Resort terbuka untuk umum sepanjang tahun. Resort ini menyambut tamu dari berbagai belahan dunia untuk menikmati keindahan alamnya yang memesona.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Apa saja aktivitas yang bisa dilakukan di Pantai Ora Resort?</div>
        <div class="faq-answer">Di Pantai Ora Resort, pengunjung dapat menikmati snorkeling, berjemur di pantai, berenang, menyewa kapal untuk menjelajahi sekitar, dan menikmati makanan lezat di restoran pantai.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Bagaimana cara memesan akomodasi di Pantai Ora Resort?</div>
        <div class="faq-answer">Anda dapat memesan akomodasi di Pantai Ora Resort melalui situs web resmi mereka atau menghubungi nomor kontak yang tersedia. Disarankan untuk memesan dengan cukup waktu terutama saat musim liburan atau puncak kunjungan.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Apakah Pantai Ora Resort menyediakan fasilitas untuk penyandang disabilitas?</div>
        <div class="faq-answer">Ya, Pantai Ora Resort memperhatikan aksesibilitas dengan menyediakan fasilitas yang ramah bagi penyandang disabilitas untuk menjamin kenyamanan seluruh tamu.</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Apakah terdapat area parkir di Pantai Ora Resort?</div>
        <div class="faq-answer">Ya, Pantai Ora Resort menyediakan area parkir yang aman dan nyaman bagi tamu yang membawa kendaraan pribadi.</div>
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
<script src="js/pantai ora resort script.js"></script>
</body>
</html>