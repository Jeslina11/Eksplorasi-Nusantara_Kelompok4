<?php
if (file_exists('koneksi.php')) {
    include 'koneksi.php';
} else {
    echo "File koneksi.php tidak ditemukan!";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Prepare and bind
    $stmt = $conn->prepare("SELECT nama, password FROM Registrasi WHERE email = ?");
    if ($stmt === false) {
        echo "Gagal mempersiapkan statement: " . htmlspecialchars($conn->error);
        exit;
    }

    $stmt->bind_param("s", $email);

    if ($stmt->execute()) {
        $stmt->store_result();
        if ($stmt->num_rows == 1) {
            $stmt->bind_result($username, $hashed_password);
            $stmt->fetch();
            if (password_verify($password, $hashed_password)) {
                // Start a new session and save the user info
                session_start();
                $_SESSION['username'] = $username;
                $_SESSION['email'] = $email;
                
                // Redirect to logout page
                header("Location: Beranda admin.html");
                exit;
            } else {
                echo "Password salah!";
            }
        } else {
            echo "Email tidak terdaftar!";
        }
    } else {
        echo "Login gagal: " . htmlspecialchars($stmt->error);
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Metode pengiriman data tidak valid!";
}
?>














