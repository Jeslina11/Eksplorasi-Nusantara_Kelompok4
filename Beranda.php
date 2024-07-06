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
  <title>Beranda</title>
  <link rel="stylesheet" type="text/css" href="css/Beranda style.css">
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
      <li><a href="Beranda.php" id="home">Beranda</a></li>
      <li><a href="#tentang" id="about">Tentang</a></li>
      <li><a href="Informasi umum.php" id="informasi">Informasi umum</a></li>
      <li><a href="Wisata.php" id="wisata">Wisata</a></li> 
      <li class="login"><p href="Login.php" id="loginButton">Masuk/Daftar</p></li>
    </ul>
</header>


<!---------------------- BACKGROUND --------------------->
<div class="Background"></div>



<!--------------------- HEAD SECTION --------------------->
<div class="head-section">
  <div class="content-head">
      <h2>Selamat Datang</h2>
      <h1>Visit <span class="changecontent-head"></span></h1>
      <p>Jelajahi pesona destinasi wisata Indonesia dari sabang sampai merauke!</p>
  </div>
</div>



<!--------------------- HOME SECTION --------------------->
<section class="explore-more-home">
  <div class="home">
    <h1>Jelajahi lebih lanjut</h1>
    <p class="sub-text-home">Nikmati liburan dan wisata lengkap di Indonesia, serta berbagai destinasi menarik lainnya. Mari kita jelajahi sekarang!</p>
  </div>
  <div class="filters-home">
    <button class="filter-btn-home active" onclick="showCategory('popular')">Destinasi Popular</button>
    <button class="filter-btn-home" onclick="showCategory('pulau')">Pulau</button>
    <button class="filter-btn-home" onclick="showCategory('danau')">Danau</button>
    <button class="filter-btn-home" onclick="showCategory('pantai')">Pantai</button>
    <button class="filter-btn-home" onclick="showCategory('gunung')">Gunung</button>
    <button class="filter-btn-home" onclick="showCategory('budaya')">Budaya & Sejarah</button>
    <button class="filter-btn-home" onclick="showCategory('AirTerjun')">Air Terjun</button>
  </div>
  <div id="cards-home" class="card-container-home">
    <div class="card hidden"></div>
    <div class="card hidden"></div>
    <div class="card hidden"></div>
    <div class="card hidden"></div>
    <div class="card hidden"></div>
    <div class="card hidden"></div>
    <div class="card hidden"></div>
    <div class="card hidden"></div>
    <div class="card hidden"></div>
    <div class="card hidden"></div>
    <div class="card hidden"></div>
    <div class="card hidden"></div>
    <div class="card hidden"></div>
    <div class="card hidden"></div>
    <div class="card hidden"></div>
  </div>
  <div class="show-more-home">
    <button id="show-more-btn-home">Menampilkan lebih banyak</button>
  </div>
</section>




<!--------------------- PANDUAN SECTION ----------------->
<div class="servicess">
  <div class="textt">
    <h1>Panduan Perjalanan</h1>
  </div>
  <p class="subtitlee">Semua yang harus Anda ketahui dan persiapkan <br>sebelum melangkah ke petualangan Anda!</p>
  <div class="service-cardss">

    <div class="card9 value-item" data-title="Eksplor Budaya" data-description="<ul class='modal-description-list'>
      <li><i class='fas fa-house-user'></i>Temukan kekayaan budaya Indonesia melalui desa-desa tradisional dan festival lokal.</li>
      <li><i class='fas fa-theater-masks'></i>Setiap daerah memiliki keunikan budaya yang menarik untuk dieksplor.</li>
      <li><i class='fas fa-music'></i>Hadirilah konser musik tradisional atau pertunjukan tari untuk merasakan keindahan budaya Indonesia.</li>
      <li><i class='fas fa-book-open'></i>Pelajari cerita rakyat dan mitos lokal untuk memperdalam pemahaman Anda tentang warisan budaya Indonesia.</li>
      <li><i class='fas fa-globe'></i>Kenali budaya Indonesia lebih lanjut melalui festival budaya yang diadakan secara rutin di berbagai daerah.</li>
    </ul>">
    <div class="icon9 book-tour-icon">
      <i class="fas fa-monument"></i>
    </div>
    <div class="textt">
      <h2>Eksplor Budaya</h2>
      <p>Jelajahi budaya Indonesia <br>dengan mengunjungi desa <br> tradisional, pameran seni, <br> dan festival lokal.</p>
    </div>
    <button class="learn-more-btn">Learn More</button>
  </div>

    <div class="card9 value-item" data-title="Menghargai Tradisi" data-description="<ul class='modal-description-list'>
        <li><i class='fas fa-seedling'></i>Saat berkunjung ke tempat baru, sangat penting untuk menghormati alam dan budaya lokal.</li>
        <li><i class='fas fa-recycle'></i>Ini termasuk menjaga kebersihan dan menghormati adat istiadat setempat.</li>
        <li><i class='fas fa-users'></i>Berkomunikasi dengan penduduk setempat untuk belajar lebih banyak tentang nilai-nilai dan tradisi mereka.</li>
        <li><i class='fas fa-praying-hands'></i>Hormati kepercayaan dan praktik keagamaan lokal dengan sikap yang menghargai.</li>
        <li><i class='fas fa-comments'></i>Pelajari beberapa frasa atau kalimat dalam bahasa lokal untuk menghormati komunikasi sehari-hari dengan penduduk setempat.</li>
      </ul>">
      <div class="icon9 book-tour-icon">
        <i class="fas fa-hand-holding-heart"></i>
      </div>
      <div class="textt">
        <h2>Hormati Tradisi</h2>
        <p>Jaga kebersihan, hindari <br> merusak, patuhi aturan <br>untuk melindungi <br> alam & budaya.</p>
      </div>
      <button class="learn-more-btn">Learn More</button>
    </div>

    <div class="card9 value-item" data-title="Sebelum Bepergian" data-description="<ul class='modal-description-list'>
        <li><i class='fas fa-tshirt'></i>Pastikan Anda membawa pakaian yang sesuai untuk cuaca dan aktivitas selama perjalanan.</li>
        <li><i class='fas fa-first-aid'></i>Siapkan perlengkapan pertolongan pertama yang lengkap, termasuk obat-obatan pribadi dan plester.</li>
        <li><i class='fas fa-id-card'></i>Pastikan Anda memiliki salinan dokumen penting seperti paspor dan tiket perjalanan.</li>
        <li><i class='fas fa-money-bill-wave'></i>Siapkan uang tunai dalam mata uang lokal dan pastikan Anda memiliki opsi pembayaran digital.</li>
        <li><i class='fas fa-phone'></i>Bawa telepon seluler dan pastikan Anda mengaktifkan roaming internasional atau membeli kartu SIM lokal.</li>
      </ul>">
      <div class="icon9 take-flight-icon">
        <i class="fas fa-suitcase-rolling"></i>
      </div>
      <div class="textt">
        <h2>Sebelum Pergi</h2>
        <p>Pakaian sesuai cuaca,<br> obat-obatan pribadi, dan perlengkapan keamanan <br>untuk kegiatan luar.</p>
      </div>
      <button class="learn-more-btn">Learn More</button>
    </div>
  </div>
</div>

<!-- Modal Panduan -->
<div id="modal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <i id="modal-icon" class="modal-icon"></i>
    <h2 id="modal-title"></h2>
    <p id="modal-description"></p>
  </div>
</div>
  


<!------------------- REKOMENDASI SECTION --------------->
<div class="recommendation">
  <div class="des_bx">
      <h4>Liburan?</h4>
      <p>Pilih tujuan Anda berikutnya:</p>
      <li>Bali</li>
      <li>Jogja</li>
      <li>Bogor</li>
      <li>Bandung</li>
      <li>Malang</li>
      <li>Lombok</li>
      <h6>Kami menyediakan rekomendasi Transportasi yang sesuai untuk setiap destinasi pilihan Anda.</h6>
      <button id="infoButton-recommendation">INFO LEBIH LANJUT</button>
    </div>
  <div class="img_bx">
      <img src="image/Main_plan.png" alt="">
      <div class="msg">
          <img src="image/indonesia.png" alt="">
          <div class="cont">
              <h4>Bali</h4>
              <div class="icon">
                  <i class="bi bi-heart-fill"><span>8645</span></i>
                  <i class="bi bi-chat-fill"><span>486</span></i>
              </div>
          </div>
      </div>
      <div class="msg">
          <img src="image/indonesia.png" alt="">
          <div class="cont">
              <h4>Lombok</h4>
              <div class="icon">
                  <i class="bi bi-heart-fill"><span>8615</span></i>
                  <i class="bi bi-chat-fill"><span>586</span></i>
              </div>
          </div>
      </div>
  </div>
</div>

 <!-- Modal Rekomendasi -->
 <div id="infoModal-recommendation" class="modal-recommendation">
  <div class="modal-content-recommendation">
    <span class="close-recommendation">&times;</span>
    <p class="tittle-recommendation"><strong>Rekomendasi Transportasi untuk Liburan:</strong></p>
    <p><strong> Liburan Keluarga:</strong></p>
    <ul>
      <li><strong><i class="fas fa-car"></i> Mobil:</strong> Toyota Innova atau Honda Odyssey untuk ruang kabin yang luas dan nyaman.</li>
      <li><strong><i class="fas fa-motorcycle"></i> Motor:</strong> Honda Gold Wing dengan kursi tandem untuk pengalaman yang seru bersama keluarga.</li>
      <li><strong><i class="fas fa-plane"></i> Pesawat:</strong> Maskapai seperti Garuda Indonesia atau Singapore Airlines dengan layanan khusus keluarga.</li>
      <li><strong><i class="fas fa-ship"></i> Kapal Laut:</strong> Kapal pesiar keluarga dari Royal Caribbean atau Star Cruises.</li>
      <li><strong><i class="fas fa-train"></i> Kereta Api:</strong> Kereta ekspres dengan layanan keluarga dari KAI (Kereta Api Indonesia).</li>
    </ul>
    <p><strong> Liburan Bersama Teman:</strong></p>
    <ul>
      <li><strong><i class="fas fa-car"></i> Mobil:</strong> SUV seperti Toyota Fortuner atau Mitsubishi Pajero Sport untuk ruang yang cukup.</li>
      <li><strong><i class="fas fa-motorcycle"></i> Motor:</strong> Cruiser seperti Harley-Davidson atau sportbike seperti Yamaha MT-09.</li>
      <li><strong><i class="fas fa-plane"></i> Pesawat:</strong> Maskapai dengan opsi fleksibel seperti Lion Air atau AirAsia.</li>
      <li><strong><i class="fas fa-ship"></i> Kapal Laut:</strong> Yacht pribadi atau kapal pesiar dari Star Cruises atau Genting Dream.</li>
      <li><strong><i class="fas fa-train"></i> Kereta Api:</strong> Kereta penumpang dengan layanan fleksibel dari KAI.</li>
    </ul>
    <p><strong> Liburan Ke Pantai:</strong></p>
    <ul>
      <li><strong><i class="fas fa-car"></i> Mobil:</strong> Mobil convertible seperti Volkswagen Beetle atau Suzuki Jimny untuk mobilitas ringan.</li>
      <li><strong><i class="fas fa-motorcycle"></i> Motor:</strong> Scooter Vespa untuk eksplorasi pantai yang menyenangkan.</li>
      <li><strong><i class="fas fa-plane"></i> Pesawat:</strong> Penerbangan domestik dengan maskapai seperti Citilink atau Batik Air.</li>
      <li><strong><i class="fas fa-ship"></i> Kapal Laut:</strong> Perahu sewaan lokal atau kapal wisata pulau-pulau kecil.</li>
      <li><strong><i class="fas fa-train"></i> Kereta Api:</strong> Kereta penumpang lokal atau kereta wisata.</li>
    </ul>
    <p><strong> Liburan Ke Daerah Pegunungan:</strong></p>
    <ul>
      <li><strong><i class="fas fa-car"></i> Mobil:</strong> SUV tangguh seperti Toyota Fortuner atau Mitsubishi Pajero untuk medan berat.</li>
      <li><strong><i class="fas fa-motorcycle"></i> Motor:</strong> Dual-sport bike seperti Yamaha WR250R atau Honda CRF250L.</li>
      <li><strong><i class="fas fa-plane"></i> Pesawat:</strong> Penerbangan domestik atau jet pribadi dengan pilihan dari Garuda Indonesia atau Wings Air.</li>
      <li><strong><i class="fas fa-ship"></i> Kapal Laut:</strong> Kapal feri lokal atau pelayaran wisata di danau.</li>
      <li><strong><i class="fas fa-train"></i> Kereta Api:</strong> Kereta eksekutif atau kereta wisata dengan pemandangan alam.</li>
    </ul>
    <p><strong> Liburan Mewah:</strong></p>
    <ul>
      <li><strong><i class="fas fa-car"></i> Mobil:</strong> Mercedes-Benz atau BMW untuk kenyamanan dan kemewahan.</li>
      <li><strong><i class="fas fa-motorcycle"></i> Motor:</strong> Superbike seperti Ducati atau BMW S1000RR.</li>
      <li><strong><i class="fas fa-plane"></i> Pesawat:</strong> Jet pribadi dengan layanan eksklusif dari charter jet lokal.</li>
      <li><strong><i class="fas fa-ship"></i> Kapal Laut:</strong> Kapal pesiar mewah dari Silversea Cruises atau Seabourn.</li>
      <li><strong><i class="fas fa-train"></i> Kereta Api:</strong> Layanan kereta mewah dan turis dengan pemandangan alam.</li>
    </ul>
    <p><strong> Liburan Hemat Biaya:</strong></p>
    <ul>
      <li><strong><i class="fas fa-car"></i> Mobil:</strong> Mobil atau motor ekonomis seperti Toyota Agya atau Honda Brio.</li>
      <li><strong><i class="fas fa-plane"></i> Pesawat:</strong> Maskapai penerbangan murah seperti Lion Air atau Citilink.</li>
      <li><strong><i class="fas fa-ship"></i> Kapal Laut:</strong> Kapal feri antar-pulau dengan layanan dari Pelni atau ASDP.</li>
      <li><strong><i class="fas fa-train"></i> Kereta Api:</strong> Kereta ekonomi lokal atau komuter dengan layanan dari KAI.</li>
    </ul>
    <p><strong> Liburan Sendiri:</strong></p>
    <ul>
      <li><strong><i class="fas fa-car"></i> Mobil:</strong> Compact car seperti Toyota Yaris atau Honda Jazz untuk mobilitas solo.</li>
      <li><strong><i class="fas fa-motorcycle"></i> Motor:</strong> Sports bike seperti Kawasaki Ninja atau Yamaha R-series.</li>
      <li><strong><i class="fas fa-plane"></i> Pesawat:</strong> Penerbangan cepat dan efisien dengan maskapai seperti Wings Air atau Batik Air.</li>
      <li><strong><i class="fas fa-ship"></i> Kapal Laut:</strong> Kapal dayung atau perahu sewaan untuk eksplorasi pribadi.</li>
      <li><strong><i class="fas fa-train"></i> Kereta Api:</strong> Layanan kereta cepat atau ekonomi untuk perjalanan solo.</li>
    </ul>
  </div>
</div>


<!------------------ ABOUT SECTION -------------------->
<div id="tentang" class="container-about">
  <div class="text-content-about">
      <h1>Ketahui<br>Tentang Kami</h1>
  </div>
  <div class="description-content-about">
      <p>Eksplorasi Indonesia adalah sebuah website yang didedikasikan untuk  memperkenalkan <br>keindahan dan kekayaan budaya Indonesia kepada dunia. Situs ini berfungsi sebagai <br>panduan komprehensif untuk para wisatawan lokal dan internasional yang ingin <br> menjelajahi beragam destinasi di seluruh nusantara.</p>
      <div class="buttons-about">
      </div>
  </div>
</div>



<!------------------ WISATA TERKENAL SECTION ------------------>
<div class="teks-Wisata">
  <h1>Wisata Terkenal di Sulawesi</h1>
  <p>Surga Tersembunyi Penuh Petualangan!</p>
</div>
  <div class="container-Wisata">
    <div class="card-Wisata">
      <a href="patung yesus buntu burake.html">
        <div class="card-image-Wisata" style="background-image: url('image/patung\ yesus\ bg.jpeg');">
            <div class="rating-badge-Wisata">
                <span class="rating-text-Wisata">4.5</span>
                <span class="rating-star-Wisata">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                </span>
            </div>
        </div>
        <div class="card-content-Wisata">
            <h2>Buntu Burake</h2>
            <p class="lokasi-Wisata">
              <i class="fas fa-map-marker-alt lokasi-icon-Wisata"></i>
              Tana Toraja
          </p>
        </div>
    </div>
    <div class="card-Wisata">
      <a href="Taman nasional bunaken.html">
        <div class="card-image-Wisata" style="background-image: url('image/bunaken bg.jpg');">
            <div class="rating-badge-Wisata">
                <span class="rating-text-Wisata">4.6</span>
                <span class="rating-star-Wisata">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                </span>
            </div>
        </div>
        <div class="card-content-Wisata">
          <h2>Bunaken</h2>
          <p class="lokasi-Wisata">
            <i class="fas fa-map-marker-alt lokasi-icon-Wisata"></i>
            Manado
        </p>
      </div>
    </div>
  <div class="card-Wisata">
    <a href="Kampung rumede.html">
      <div class="card-image-Wisata" style="background-image: url('image/Rumede3.png');">
          <div class="rating-badge-Wisata">
              <span class="rating-text-Wisata">4.6</span>
              <span class="rating-star-Wisata">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              </span>
          </div>
      </div>
      <div class="card-content-Wisata">
        <h2>Kampung Rumede</h2>
        <p class="lokasi-Wisata">
          <i class="fas fa-map-marker-alt lokasi-icon-Wisata"></i>
          Polewali
      </p>
    </div>
  </div>
  <div class="card-Wisata">
    <a href="pantai ora resort.html">
    <div class="card-image-Wisata" style="background-image: url('image/ora.jpeg');">
        <div class="rating-badge-Wisata">
            <span class="rating-text-Wisata">4.7</span>
            <span class="rating-star-Wisata">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
                </svg>
            </span>
        </div>
    </div>
    <div class="card-content-Wisata">
      <h2>Pantai Ora Resort</h2>
      <p class="lokasi-Wisata">
        <i class="fas fa-map-marker-alt lokasi-icon-Wisata"></i>
        Maluku Tengah
    </p>
  </div>
  </div>
    <div class="card-Wisata">
      <a href="air terjun karawa.html">
        <div class="card-image-Wisata" style="background-image: url('image/karawa2.png');">
            <div class="rating-badge-Wisata">
                <span class="rating-text-Wisata">4.5</span>
                <span class="rating-star-Wisata">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                </span>
            </div>
        </div>
        <div class="card-content-Wisata">
          <h2>Air Terjun Karawa</h2>
          <p class="lokasi-Wisata">
            <i class="fas fa-map-marker-alt lokasi-icon-Wisata"></i>
            Pinrang
        </p>
      </div>
    </div>
    <div class="card-Wisata">
      <a href="lappa laona.html">
        <div class="card-image-Wisata" style="background-image: url('image/laona.png');">
            <div class="rating-badge-Wisata">
                <span class="rating-text-Wisata">4.6</span>
                <span class="rating-star-Wisata">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                </span>
            </div>
        </div>
        <div class="card-content-Wisata">
          <h2>Lappa Laona</h2>
          <p class="lokasi-Wisata">
            <i class="fas fa-map-marker-alt lokasi-icon-Wisata"></i>
            Barru
        </p>
      </div>
    </div>
    <div class="card-Wisata">
      <a href="padang indah.html">
        <div class="card-image-Wisata" style="background-image: url('image/padang\ indah.png');">
            <div class="rating-badge-Wisata">
                <span class="rating-text-Wisata">4.7</span>
                <span class="rating-star-Wisata">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                </span>
            </div>
        </div>
        <div class="card-content-Wisata">
          <h2>Padang Indah</h2>
          <p class="lokasi-Wisata">
            <i class="fas fa-map-marker-alt lokasi-icon-Wisata"></i>
            Barru
        </p>
      </div>
    </div>
    <div class="card-Wisata">
      <a href="pantai dato.html">
        <div class="card-image-Wisata" style="background-image: url('image/dato.png');">
            <div class="rating-badge-Wisata">
                <span class="rating-text-Wisata">4.5</span>
                <span class="rating-star-Wisata">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                </span>
            </div>
        </div>
        <div class="card-content-Wisata">
          <h2>Pantai Dato</h2>
          <p class="lokasi-Wisata">
            <i class="fas fa-map-marker-alt lokasi-icon-Wisata"></i>
            Majene
        </p>
      </div>
    </div>
    <div class="card-Wisata">
      <a href="pulau samalona.html">
        <div class="card-image-Wisata" style="background-image: url('image/samalona.png');">
            <div class="rating-badge-Wisata">
                <span class="rating-text-Wisata">4.6</span>
                <span class="rating-star-Wisata">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                </span>
            </div>
        </div>
        <div class="card-content-Wisata">
          <h2>Pulau Samalona</h2>
          <p class="lokasi-Wisata">
            <i class="fas fa-map-marker-alt lokasi-icon-Wisata"></i>
            Makassar
        </p>
      </div>
    </div>
    <div class="card-Wisata">
      <a href="Masjid kubah.html">
      <div class="card-image-Wisata" style="background-image: url('image/99 kubah.jpg');">
          <div class="rating-badge-Wisata">
              <span class="rating-text-Wisata">4.7</span>
              <span class="rating-star-Wisata">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
              </span>
          </div>
      </div>
      <div class="card-content-Wisata">
        <h2>Masjid Kubah</h2>
        <p class="lokasi-Wisata">
          <i class="fas fa-map-marker-alt lokasi-icon-Wisata"></i>
          Makassar
      </p>
    </div>
    </div>
    <div class="card-Wisata">
      <a href="puncak karomba.html">
        <div class="card-image-Wisata" style="background-image: url('image/karomba.png');">
            <div class="rating-badge-Wisata">
                <span class="rating-text-Wisata">4.4</span>
                <span class="rating-star-Wisata">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                </span>
            </div>
        </div>
        <div class="card-content-Wisata">
          <h2>Puncak Karomba</h2>
          <p class="lokasi-Wisata">
            <i class="fas fa-map-marker-alt lokasi-icon-Wisata"></i>
            Pinrang
        </p>
      </div>
    </div>
    <div class="card-Wisata">
      <a href="kali biru.html">
        <div class="card-image-Wisata" style="background-image: url('image/kali.png');">
            <div class="rating-badge-Wisata">
                <span class="rating-text-Wisata">4.4</span>
                <span class="rating-star-Wisata">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                </span>
            </div>
        </div>
        <div class="card-content-Wisata">
          <h2>Kalibiru</h2>
          <p class="lokasi-Wisata">
            <i class="fas fa-map-marker-alt lokasi-icon-Wisata"></i>
            Polewali
        </p>
      </div>
    </div>
  </div>





<!--------------------- FOOTER SECTION ------------------->
<section class="Footer">
  <div class="footer-box">
    <h3>Services</h3>
    <a href="#">Email Marketing</a>
    <a href="#">Campaigns</a>
    <a href="#">Brandings</a>
    <a href="#">Offline</a>
  </div>

  <div class="footer-box">
    <h3>Company</h3>
    <a href="#">Our story</a>
    <a href="#">Benefits</a>
    <a href="#">Team</a>
    <a href="#">Careers</a>
  </div>

  <div class="footer-box">
    <h3>Support</h3>
    <a href="#">Help</a>
    <a href="#">FAQ</a>
    <a href="#">Contact us</a>
  </div>

  <!-- <div class="footer-box">
    <h3>Follow Us</h3>
    <div class="social">
      <a href="#"><i class="ri-instagram-fill"></i></a>
      <a href="#"><i class="ri-twitter-fill"></i></a>
      <a href="#"><i class="ri-facebook-fill"></i></a>
      <a href="#"><i class="ri-Github-fill"></i></a>
      <a href="#"><i class="ri-Snpachat-fill"></i></a>
      <a href="#"><i class="ri-WhatsApp-fill"></i></a>
    </div>
  </div> -->
</section>

<script src="js/Beranda script.js"></script>

</body>
</html>
