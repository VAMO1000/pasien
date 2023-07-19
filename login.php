<?php
require_once 'includes/koneksi.php';

// Proses login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Menggunakan parameterized query untuk mencegah SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ? AND role = ?");
    $stmt->bind_param("sss", $username, $password, $role);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Login berhasil
        $user = $result->fetch_assoc();

        if ($user['role'] == 'user') {
            // Redirect ke dashboard user
            header("Location: user.php");
            exit();
        } elseif ($user['role'] == 'customer') {
            // Redirect ke dashboard customer
            header("Location: pasien.php");
            exit();
        }
    } else {
        // Login gagal
        echo "Username, password, atau role salah.";
    }

    $stmt->close();
}

$conn->close();
?>