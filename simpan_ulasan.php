<?php
session_start();

if (file_exists('koneksi.php')) {
    include 'koneksi.php';
} else {
    echo "File koneksi.php tidak ditemukan!";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil data dari formulir
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
    } else {
        echo "Session user_id tidak tersedia.";
        exit;
    }

    $rating = isset($_POST['rate']) ? intval($_POST['rate']) : 0; // Pastikan rating adalah integer
    $review = trim($_POST['review']);
    $id_tempat_wisata = isset($_POST['id_tempat_wisata']) ? intval($_POST['id_tempat_wisata']) : 0;

    // Validate rating value
    if ($rating < 1 || $rating > 5) {
        echo "Nilai rating harus antara 1 dan 5!";
        exit;
    }

    // Validate id_tempat_wisata
    if ($id_tempat_wisata <= 0) {
        echo "ID tempat wisata tidak valid!";
        exit;
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO Ulasan (user_id, tempat_wisata_id, comment, rating) VALUES (?, ?, ?, ?)");
    if ($stmt === false) {
        echo "Gagal mempersiapkan statement: " . htmlspecialchars($conn->error);
        exit;
    }

    $stmt->bind_param("iisi", $user_id, $id_tempat_wisata, $review, $rating);

    if ($stmt->execute()) {
        echo "<script>alert('Ulasan berhasil dikirim!'); window.location.href = 'Beranda-Berhasil.php';</script>";
        exit;
    } else {
        echo "Pengiriman ulasan gagal: " . htmlspecialchars($stmt->error);
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Metode pengiriman data tidak valid!";
}
?>
