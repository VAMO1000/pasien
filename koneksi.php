<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'omav');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Proses login
    if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["role"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $role = $_POST["role"];

        // Lakukan validasi data jika diperlukan

        // Jalankan parameterized query untuk memeriksa data login di database
        $stmt = $koneksi->prepare("SELECT * FROM user WHERE username = ? AND password = ? AND role = ?");
        $stmt->bind_param("sss", $username, $password, $role);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            // Login berhasil
            // Redirect ke halaman dashboard sesuai dengan role
            if ($role == 'user') {
                header("Location: user.php");
            } elseif ($role == 'customer') {
                header("Location: pasien.php");
            }
            exit();
        } else {
            // Login gagal
            echo "Username, password, atau role salah.";
        }

        $stmt->close();
    }

    // Proses sign up
    if (isset($_POST["sign_up"])) {
        $new_username = $_POST["new_username"];
        $new_password = $_POST["new_password"];
        $new_role = $_POST["new_role"];

        // Lakukan validasi data jika diperlukan

        // Jalankan parameterized query untuk memasukkan data sign up ke dalam database
        mysqli_query($koneksi, "INSERT INTO user VALUES(null, '$new_username', '$new_password', '$new_role')");

        // Jika sign up berhasil, redirect kembali ke halaman index.php
        header("Location: pasien.php");
        exit();
    }
}
    // tambah data customer
    if (isset($_POST["add-customer"])) {
        $nmPasien = $_POST["nmPasien"];
        $jk = $_POST["jk"];
        $alamat = $_POST["alamat"];
        mysqli_query($koneksi, "INSERT INTO pasien VALUES(null, '$nmPasien', '$jk', '$alamat')");
        header("location: user.php");
    }   
        
    if (isset($_GET['idPasien'])) {
        $idPasien = $_GET['idPasien'];
        mysqli_query($koneksi, "DELETE FROM pasien where idPasien = '$idPasien'");            
        header("location: user.php");
        }
        
    if (isset($_POST['edit'])) {
        $idPasien = $_POST['idPasien'];
        $nmPasien = $_POST['nmPasien'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $koneksi->query ("UPDATE pasien SET idPasien='$idPasien', nmPasien='$nmPasien', jk='$jk' where idPasien='$idPasien'");
        header("location:user.php");
        }




?>