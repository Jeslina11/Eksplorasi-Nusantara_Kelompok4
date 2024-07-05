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
	<title>Visa</title>
	<link rel="stylesheet" type="text/css" href="css/visa style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
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




<!---------------------- HOME SECTION ------------------->
<div class="center-text2">
    <h2>Jenis-Jenis Visa Indonesia yang Perlu Anda Ketahui</h2>
    </div>
    <div class="container-teks">
      <p class="intro">

        Pastikan Anda memilih jenis visa Indonesia yang tepat sesuai dengan keperluan perjalanan Anda. Dengan memahami perbedaan jenis visa yang tersedia, Anda dapat merencanakan perjalanan dengan lebih baik dan menghindari kendala administratif di kemudian hari.        </p>
        <!-- text-container1 -->
        <div class="text-container1">
            <h1>E-Visa</h1>
            <p>
              Pemerintah Indonesia telah merancang solusi inovatif untuk mempercepat dan menyederhanakan proses pemberian visa bagi wisatawan asing yang ingin menjelajahi keindahan negara ini. Melalui sistem e-Visa dan Electronic Visa on Arrival (eVOA), pemerintah memberikan akses yang lebih mudah bagi para pelancong dari 86 negara untuk merencanakan kunjungan mereka tanpa harus mengunjungi perwakilan Indonesia di luar negeri atau kantor imigrasi. <br>
              <br>Dengan menggunakan sistem pengajuan visa elektronik, para pelancong dapat mengajukan permohonan visa secara online, menghilangkan kebutuhan untuk mengurus dokumen secara fisik. Begitu pula dengan program eVOA yang memungkinkan wisatawan untuk mendapatkan visa saat kedatangan di 16 bandara, 91 pelabuhan laut, dan 6 pos pemeriksaan imigrasi lintas batas di seluruh Indonesia. <br>
              <br>Langkah-langkah ini tidak hanya mempermudah proses masuk bagi para wisatawan, tetapi juga mendukung perkembangan pariwisata dan ekonomi kreatif Indonesia. Dengan demikian, Indonesia terus berkomitmen untuk mempromosikan pariwisata yang berkelanjutan. Untuk informasi lebih lanjut mengenai syarat dan cara mendaftar, para pelancong dapat mengunjungi tautan yang disediakan oleh Kementerian Hukum dan Hak Asasi Manusia RI. <br>
            </p>
        </div>

        <!-- text-container2 -->
        <div class="text-container2">
          <h1>Jenis-Jenis Visa</h1>
          <div class="visa-section">
            <h1>1. Visa Kunjungan</h1>
              <h3>a. Indeks B211A dengan Tujuan Kunjungan sebagai berikut:</h3>
              <ul>
                  <li>- Bepergian</li>
                  <li>- Pekerjaan darurat dan mendesak</li>
                  <li>- Pertemuan bisnis</li>
                  <li>- Membeli barang</li>
                  <li>- Produksi film</li>
                  <li>- Pekerjaan sukarela, medis, dan rezeki</li>
                  <li>- Tugas pemerintah</li>
                  <li>- Alat transportasi pendamping di wilayah Indonesia</li>
                  <li>- Pengembangan industri kelautan (yachters)</li>
                  <li>- Tugas Pemerintah sesuai dengan pertemuan terkait Presiden Indonesia di G20 <br>atau Majelis Internasional Inter-Parliamentary Union (IPU) ke-144 <br></li>
              </ul>
              <h3>b. Indeks B211B dengan Tujuan Kunjungan sebagai berikut:</h3>
              <ul>
                  <li>- Calon tenaga kerja asing dalam uji kompetensi kerja</li>
                  <li>- Visa untuk Izin Tinggal Sementara</li>
                  <li>- Visa Izin Tinggal Sementara - Bekerja</li>
              </ul>
          </div>
          <div class="visa-section">
            <h1>2. Visa untuk Izin Tinggal Sementara</h1>
            <h2>Visa Izin Tinggal Sementara - Bekerja</h2>
              <h3>Indeks C312 dengan Tujuan Kunjungan sebagai berikut:</h3>
              <ul>
                  <li>- Para ahli</li>
                  <li>- Bergabung untuk bekerja di atas kapal, alat terapung, atau instalasi yang beroperasi di perairan, wilayah laut, landas kontinen, dan zona ekonomi eksklusif di Indonesia.</li>
                  <li>- Mengawasi dan memantau kualitas barang atau produksi</li>
                  <li>- Inspeksi atau audit pada cabang perusahaan di Indonesia</li>
                  <li>- Layanan pasca-penjualan</li>
                  <li>- Pekerjaan sukarela, medis, dan rezeki</li>
                  <li>- Menyiapkan dan memperbaiki mekanik</li>
                  <li>- Pekerjaan konstruksi tidak permanen</li>
                  <li>- Kegiatan produksi film yang bertujuan komersial dan telah mendapat izin dari instansi yang berwenang</li>
                  <li>- Calon tenaga kerja asing dalam uji kompetensi kerja</li>
              </ul>
              <h2>Visa Izin Tinggal Sementara - Non-kerja</h2>
                <h3>a. Indeks C313 dengan Tujuan Kunjungan sebagai berikut:</h3>
                <ul>
                    <li>- Penanaman Modal Asing dengan masa berlaku 1 tahun</li>
                </ul>
                <h3>b. Indeks C314 dengan Tujuan Kunjungan sebagai berikut:</h3>
                <ul>
                    <li>- Penanaman Modal Asing dengan masa berlaku 2 tahun</li>
                </ul>
                <h3>c. Indeks C316 dengan Tujuan Kunjungan sebagai berikut:</h3>
                <ul>
                    <li>- Pendidikan dan Pelatihan</li>
                </ul>
                <h3>d. Indeks C317 dengan Tujuan Kunjungan sebagai berikut:</h3>
                <ul>
                    <li>- Persatuan keluarga</li>
                </ul>
            </div>
        </div>
    </div>



<!----------------------------- FOOTER SECTION ----------------------------->
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
<script src="js/visa script.js"></script>
</body>
</html>