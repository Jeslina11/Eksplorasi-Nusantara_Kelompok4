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
	<title>Perbedaan Waktu</title>
	<link rel="stylesheet" href="{{ asset('css/Perbedaan Waktu style.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
</head>
<body>

<!--------------------- NAVBAR SECTION ------------------>
<header>
  @include('komponen.halog')
</header>


<!---------------------- BACKGROUND  -------------------->
<div class="background"></div>




<!---------------------- HOME SECTION ------------------->
<div class="center-text2">
      <h2>Navigasi Zona Waktu Indonesia: Memahami Waktu dan Jadwal Sholat</h2>
    </div>
    <!-- TEKS -->
      <div class="container-teks">
      <p class="intro">
        Membahas secara mendalam perbedaan zona waktu di Indonesia serta jadwal sholat yang berbeda-beda di setiap daerah. Mengetahui zona waktu yang digunakan di berbagai kota besar seperti Jakarta, Bali, Makassar, dan Jayapura sangat penting untuk perencanaan perjalanan dan koordinasi aktivitas sehari-hari. Selain itu, artikel ini juga menjelaskan cara menghitung perbedaan waktu dengan kota-kota besar di dunia, membantu pembaca mempersiapkan diri dengan baik sebelum melakukan perjalanan lintas negara.
      </p>

         <!-- text-container1 -->
        <div class="text-container1">
          <h1>Mengapa penting untuk memahami perbedaan zona waktu di Indonesia?</h1>
          <p>
            Memahami perbedaan zona waktu di Indonesia penting untuk merencanakan perjalanan, komunikasi, dan koordinasi kegiatan lintas daerah, agar tidak terjadi kesalahpahaman atau ketidaktepatan waktu.
          </p>
      </div>
      <div class="text-container1">
        <h1>Berapa zona waktu yang ada di Indonesia dan daerah mana saja yang termasuk dalam masing-masing zona?</h1>
        <h3>Indonesia memiliki tiga zona waktu:</h3>
        <ul>
          <li>- Waktu Indonesia Barat (WIB): Pulau Sumatera, Jawa, dan sebagian Kalimantan. WIB setara dengan UTC +7 jam.</li>
          <li>- Waktu Indonesia Tengah (WITA): Sebagian Kalimantan, Sulawesi, Bali, dan Nusa Tenggara. WITA setara dengan UTC +8 jam.</li>
          <li>- Waktu Indonesia Timur (WIT): Papua dan sebagian Maluku. WIT setara dengan UTC +9 jam.</li>
        </ul>
    </div>
    <div class="text-container1">
      <h1>Apa zona waktu yang digunakan di Jakarta, Indonesia?</h1>
      <p>
        Jakarta, Indonesia, menggunakan Waktu Indonesia Barat (WIB), yang setara dengan Coordinated Universal Time (UTC) +7 jam.
      </p>
  </div>

    <!-- text-container2 -->
    <div class="text-container2">
        <h1>Bagaimana cara menghitung perbedaan waktu dengan beberapa kota besar di dunia?</h1>
        <h3>Hitung selisih antara zona waktu Jakarta (WIB) dengan zona waktu kota tujuan. Misalnya:</h3>
        <div class="time-section">
            <ul>
                <li>- <strong>New York</strong>: Jakarta (WIB) 12 jam lebih awal dari New York (UTC -5).</li>
                <li>- <strong>London</strong>: Jakarta (WIB) 7 jam lebih awal dari London (UTC 0).</li>
                <li>- <strong>Sydney</strong>: Jakarta (WIB) 3 jam lebih lambat dari Sydney (UTC +10).</li>
                <li>- <strong>Tokyo</strong>: Jakarta (WIB) 2 jam lebih lambat dari Tokyo (UTC +9).</li>
                <li>- <strong>Dubai</strong>: Jakarta (WIB) 3 jam lebih awal dari Dubai (UTC +4).</li>
                <li>- <strong>Seoul</strong>: Jakarta (WIB) 2 jam lebih lambat dari Seoul (UTC +9).</li>
                <li>- <strong>Beijing</strong>: Jakarta (WIB) 1 jam lebih lambat dari Beijing (UTC +8).</li>
                <li>- <strong>Berlin</strong>: Jakarta (WIB) 5 jam lebih cepat dari Berlin (UTC +2, saat waktu musim panas; UTC +1 saat musim dingin)..</li>
                <li>- <strong>Amsterdam</strong>: Jakarta (WIB) 5 jam lebih cepat dari Amsterdam (UTC +2, saat waktu musim panas; UTC +1 saat musim dingin).</li>
                <li>- <strong>Paris</strong>: Jakarta (WIB) 5 jam lebih cepat dari Paris (UTC +2, saat waktu musim panas; UTC +1 saat musim dingin).</li>
                <li>- <strong>Moscow</strong>: Jakarta (WIB) 4 jam lebih cepat dari Moscow (UTC +3).</li>
                <li>- <strong>Arab Saudi</strong>: Jakarta (WIB) 4 jam lebih cepat dari Arab Saudi (UTC +3).</li>
        </div>
        </div>

         <!-- text-container1 -->
        <div class="text-container1">
          <h1>Perbedaan Zona Waktu dan Jadwal Sholat di Indonesia</h1>
          <h3>1. Waktu Sholat di Berbagai Zona Waktu:</h3>
          <ul>
            <li>- <strong>Subuh</strong>: Sekitar pukul 4:30 - 5:30 pagi, tergantung daerah dan musim.</li>
            <li>- <strong>Zuhur</strong>: Sekitar pukul 12:00 - 1:00 siang.</li>
            <li>- <strong>Asar</strong>: Sekitar pukul 3:00 - 4:00 sore.</li>
            <li>- <strong>Maghrib</strong>: Segera setelah matahari terbenam, sekitar pukul 6:00 sore.</li>
            <li>- <strong>Isya</strong>: Sekitar pukul 7:00 - 8:00 malam.</li>
          </ul>
          <h3>2. Pengaruh Zona Waktu terhadap Waktu Sholat:</h3>
          <ul>
            <li>- <strong>Jakarta (WIB)</strong>: Subuh dimulai sekitar pukul 4:30 pagi.</li>
            <li>- <strong>Bali (WITA)</strong>: Subuh dimulai sekitar pukul 5:30 pagi.</li>
            <li>- <strong>Makassar (WITA)</strong>: Zuhur pukul 1:00 siang.</li>
            <li>- <strong>Jayapura (WIT)</strong>: Zuhur pukul 2:00 siang.</li>
            <li>- <strong>Surabaya (WIB)</strong>: Maghrib sekitar pukul 6:00 sore.</li>
            <li>- <strong>Manado (WITA)</strong>: Maghrib sekitar pukul 7:00 malam.</li>
            <li>- <strong>Ambon (WIT)</strong>: Maghrib sekitar pukul 8:00 malam..</li>
          </ul>
      </div>
      <div class="text-container1">
        <h1>Mengapa Mengetahui Waktu Sholat Penting?</h1>
        <p>
          Memahami perbedaan waktu sholat di berbagai zona waktu Indonesia sangat penting bagi umat Muslim untuk melaksanakan ibadah tepat waktu. Bagi mereka yang bepergian atau tinggal di daerah dengan zona waktu yang berbeda, mengetahui jadwal sholat membantu menjaga konsistensi dalam melaksanakan kewajiban agama.
        </p>
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
<script src="js/Perbedaan Waktu script.js"></script>
</body>
</html>