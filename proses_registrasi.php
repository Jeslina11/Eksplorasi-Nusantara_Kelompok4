<?php
if (file_exists('koneksi.php')) {
    include 'koneksi.php';
} else {
    echo "File koneksi.php tidak ditemukan!";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        echo "Password dan konfirmasi password tidak cocok!";
        exit;
    }

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO Registrasi (nama, email, password) VALUES (?, ?, ?)");
    if ($stmt === false) {
        echo "Gagal mempersiapkan statement: " . htmlspecialchars($conn->error);
        exit;
    }
    
    $stmt->bind_param("sss", $username, $email, $hashed_password);

    if ($stmt->execute()) {
        echo "Registrasi berhasil!";
        // !!!!!!!!!
        header("Location: Beranda-Berhasil Login.php");
        exit;
    } else {
        echo "Registrasi gagal: " . htmlspecialchars($stmt->error);
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Metode pengiriman data tidak valid!";
}
?>


