<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    
    // Buat kode verifikasi acak
    $verificationCode = rand(100000, 999999);
    
    // Simpan kode verifikasi dan email ke database atau sesuai kebutuhan
    
    // Kirim email verifikasi
    $subject = "Kode Verifikasi";
    $message = "Kode verifikasi Anda adalah: $verificationCode";
    $headers = "ucikage@gmail.com"; // Ganti dengan alamat email pengirim

    if (mail($email, $subject, $message, $headers)) {
        echo "Email verifikasi telah dikirim ke $email";
    } else {
        echo "Gagal mengirim email verifikasi.";
    }
}
?>