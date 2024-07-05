<?php
if (file_exists('koneksi.php')) {
    include 'koneksi.php';
} else {
    echo "File koneksi.php tidak ditemukan!";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_SESSION['username']; // trim($_POST['username']);
    $rating = intval($_POST['rate']); // Ensure rating is an integer
    $review = trim($_POST['review']);
    echo $username . ' rating ' . $rating . ' review ' . $review;
    // Validate rating value
    if ($rating < 1 || $rating > 5) {
        echo "Nilai rating harus antara 1 dan 5!";
        exit;
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO Ulasan (username, rating, review) VALUES (?, ?, ?)");
    if ($stmt === false) {
        echo "Gagal mempersiapkan statement: " . htmlspecialchars($conn->error);
        exit;
    }

    $stmt->bind_param("sis", $username, $rating, $review);

    if ($stmt->execute()) {
        echo "Ulasan berhasil dikirim!";
        // header("Location: bromo.php");
        exit;
    } else {
        echo "Pengiriman ulasan gagal: " . htmlspecialchars($stmt->error);
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Metode pengiriman data tidak valid!";
}
