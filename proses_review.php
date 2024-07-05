<?php
if (file_exists('koneksi.php')) {
    include 'koneksi.php';
} else {
    echo "File koneksi.php tidak ditemukan!";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $testimonial = trim($_POST['testimonial']);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO Testimonial (username, testimonial) VALUES (?, ?)");
    if ($stmt === false) {
        echo "Gagal mempersiapkan statement: " . htmlspecialchars($conn->error);
        exit;
    }
    
    $stmt->bind_param("ss", $username, $testimonial);

    if ($stmt->execute()) {
        echo "Testimonial berhasil dikirim!";
        header("Location: bromo.php");
        exit;
    } else {
        echo "Pengiriman testimonial gagal: " . htmlspecialchars($stmt->error);
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Metode pengiriman data tidak valid!";
}
?>
