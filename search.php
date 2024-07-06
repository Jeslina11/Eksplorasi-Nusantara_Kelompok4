<?php
if (file_exists('koneksi.php')) {
    include 'koneksi.php';
} else {
    echo "File koneksi.php tidak ditemukan!";
    exit;
}

$provinsi = isset($_GET['provinsi']) ? $_GET['provinsi'] : '';
$kota = isset($_GET['kota']) ? $_GET['kota'] : '';
$kategori = isset($_GET['kategori']) ? $_GET['kategori'] : '';

$query = "SELECT * FROM DetailWisata WHERE 1=1";
$params = array();
$types = '';

if (!empty($provinsi)) {
    $query .= " AND provinsi = ?";
    $params[] = $provinsi;
    $types .= 's';
}

if (!empty($kota)) {
    $query .= " AND kota = ?";
    $params[] = $kota;
    $types .= 's';
}

if (!empty($kategori) && $kategori != 'Semua') {
    $query .= " AND kategori = ?";
    $params[] = $kategori;
    $types .= 's';
}

$stmt = $conn->prepare($query);

if ($types && $params) {
    $stmt->bind_param($types, ...$params);
}

$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        // Buatkan permisalan bagian apa saja yang bisa dicari 
        if ($row['nama'] == "Candi Borobudur") {
            header("Location: Candi_Borobudur.php");
        } 
    }
} 

$stmt->close();
$conn->close();
?>
