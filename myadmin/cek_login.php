<?php
session_start();
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 1) {
        // Login berhasil
        $data = mysqli_fetch_assoc($result);
        $_SESSION['admin'] = 1;
        $_SESSION['id_admin'] = $data['id_admin'];
        $_SESSION['nm_admin'] = $data['nama_lengkap'];
        $_SESSION['level'] = $data['level'];

        // Redirect berdasarkan level
        if ($_SESSION['level'] == 'author') {
            header("Location: artikel.php");
            exit();
        } else {
            header("Location: index.php");
            exit();
        }
    } else {
        // Login gagal
        $_SESSION['login_error'] = "Username or password is incorrect.";
        header("Location: login.php");
        exit();
    }
} else {
    // Jika tidak ada request POST
    $_SESSION['login_error'] = "Invalid request.";
    header("Location: login.php");
    exit();
}
?>
