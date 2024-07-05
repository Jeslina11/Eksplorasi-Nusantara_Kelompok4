<?php
if (file_exists('koneksi.php')) {
    include 'koneksi.php';
} else {
    echo "File koneksi.php tidak ditemukan!";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/Login style.css">
    <!-- link -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap">
</head>
<body>

<!--------------------- NAVBAR SECTION ------------------>
<header>
    <a href="#" class="logo">
      <img src="image/logo.png" alt="Logo" />
  </a>
      <ul class="navbar">
        <li><a href="Beranda.php" id="home">Beranda</a></li>
        <li><a href="#holiday" id="about">Tentang</a></li>
        <li><a href="Informasi umum.php" id="informasi">Informasi umum</a></li>
        <li><a href="Wisata.php" id="about">Wisata</a></li>
        <li class="login"><a href="Login.php" id="loginButton">Masuk</a></li>
    </ul>
</header>

<!------------------- BACKGROUND  ------------------>
<div class="background"></div>

<!------------------------ LOGIN ------------------------>
    <div class="container">
        <div class="main-box login">
            <h1>Login</h1>
            <form action="login-handler.php" method="POST">
                <div class="input-box">
                    <span class="icon"><i class="bx bxs-envelope"></i></span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="bx bxs-lock-alt"></i></span>
                    <input type="password" name="password" required>
                    <label>Kata sandi</label>
                </div>
                <div class="check">
                    <label><input type="checkbox">Ingatkan saya!</label>
                    <a href="#">Lupa kata sandi?</a>
                </div>
                <button type="submit" class="main-btn">Masuk</button>
                <div class="register">
                    <p>Tidak memiliki akun?<a href="Register.php" class="register-link"> Daftar</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
