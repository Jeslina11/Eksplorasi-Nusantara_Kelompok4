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
	<title>Jam Kerja & Hari Libur</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/Jam Kerja & Hari Libur style.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
</head>
<body>

<!--------------------- NAVBAR SECTION ------------------>
<header>
  @include('komponen.navbar')
</header>


<!---------------------- BACKGROUND  -------------------->
<div class="background"></div>



  <!-- HOME  -->
  <div class="center-text2">
    <h2> Rahasia Mengoptimalkan Aktivitas Anda di Indonesia: Jam Operasional, Hari Libur, dan Tips Praktis</h2>
  </div>

  <!-- TEKS SECTION -->
  <div class="container-teks">
    <p class="intro">
        Ingin tahu kapan waktu terbaik untuk beraktivitas di Indonesia? Informasi ini mengungkap rahasia mengoptimalkan jadwal Anda dengan memahami jam operasional berbagai tempat seperti bank, kantor, museum, mal, kantor pos, dan toko. <br>
        <br>Temukan juga informasi tentang hari libur nasional, cuti bersama, dan suasana unik di hari-hari tersebut. Dilengkapi dengan tips praktis untuk menemukan jam kerja dan hari libur melalui situs web resmi, informasi ini memastikan Anda dapat menikmati perjalanan dan kegiatan Anda di Indonesia tanpa hambatan. Dengan panduan ini, rencanakan setiap langkah Anda dengan percaya diri dan nikmati pengalaman yang lebih menyenangkan di Tanah Air!
    </p>

    <div class="text-container2">
      <h2>Kapan waktu terbaik untuk melakukan aktivitas di Indonesia?</h2>
      <p>Waktu terbaik untuk melanjutkan aktivitas Anda di Indonesia adalah setelah jam 10 pagi. Pada saat itu, sebagian besar tempat telah dibuka. Restoran dan kafe seringkali buka 24 jam atau dari pagi hari, sehingga Anda tidak perlu khawatir tentang lapar.</p>

      <h1>Jam Operasional di Indonesia:</h1>
      <table>
        <tr>
          <th>Tempat</th>
          <th>Senin-Jumat</th>
          <th>Sabtu</th>
          <th>Minggu & Hari Libur Umum</th>
        </tr>
        <tr>
          <td>Banks (dengan teller)</td>
          <td>08:00-15:00</td>
          <td>08:00-13:00</td>
          <td>Tutup</td>
        </tr>
        <tr>
          <td>Kantor</td>
          <td>08:00-16:00</td>
          <td>Kebanyakan tutup</td>
          <td>Tutup</td>
        </tr>
        <tr>
          <td>Museum</td>
          <td>08:00-17:00</td>
          <td>08:00-17:00</td>
          <td>08:00-17:00</td>
        </tr>
        <tr>
          <td>Mal Belanja</td>
          <td>10:00-22:00</td>
          <td>10:00-22:00</td>
          <td>10:00-22:00</td>
        </tr>
        <tr>
          <td>Kantor Pos</td>
          <td>07:00-19:00</td>
          <td>07:00-17:00</td>
          <td>Tutup</td>
        </tr>
        <tr>
          <td>Toko</td>
          <td>07:00-22:00</td>
          <td>07:00-22:00</td>
          <td>07:00-22:00</td>
        </tr>
      </table>
    </div>

    <div class="text-container1">
      <h1>Bagaimana dengan hari libur dan cuti bersama di Indonesia?</h1>
      <p>Indonesia memiliki sejumlah hari libur nasional yang ditetapkan oleh pemerintah, seperti Hari Kemerdekaan, Hari Natal, dan Idul Fitri. Selain itu, ada juga cuti bersama yang biasanya terkait dengan libur nasional untuk memberikan waktu istirahat lebih panjang kepada masyarakat.</p>
    </div>

    <div class="text-container1">
      <h1>Apa saja hari libur nasional yang penting di Indonesia?</h1>
      <p>Hari libur nasional yang penting di Indonesia meliputi Tahun Baru pada 1 Januari, Tahun Baru Imlek yang jatuh pada bulan Januari atau Februari, Hari Buruh pada 1 Mei, dan Hari Kemerdekaan pada 17 Agustus.</p>
    </div>

    <div class="text-container1">
      <h1>Bagaimana suasana pada hari libur nasional di Indonesia?</h1>
      <p>Pada hari libur nasional, kantor-kantor umumnya tutup dan sebagian besar toko tidak beroperasi. Masyarakat sering memilih untuk berdiam diri di rumah atau berkumpul dengan keluarga. Namun, mall dan beberapa toko besar mungkin tetap buka dan menjadi tujuan populer, terutama jika hari libur jatuh pada long weekend.</p>
    </div>
  </div>





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
<script src="js/Jam Kerja & Hari Libur script.js"></script>
</body>
</html>