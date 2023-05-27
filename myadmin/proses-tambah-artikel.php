<?php
// Include file koneksi.php
include 'koneksi.php';

// Ambil data dari form
$judul = $_POST['judul'];
$teks_berita = $_POST['teks_berita'];
$id_kategori = 4; // ID kategori artikel
$tgl_posting = date("Y-m-d H:i:s"); // Waktu sekarang
$id_admin = 1; // ID admin

// Periksa apakah file gambar diunggah
if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
    // Proses upload gambar
    $targetDir = "../gambar/"; // Direktori penyimpanan gambar
    $gambar = $_FILES['gambar']['name'];
    $ext = strtolower(pathinfo($gambar, PATHINFO_EXTENSION));
    $gambarBaru = "berita_" . uniqid() . "." . $ext;
    $targetFile = $targetDir . $gambarBaru;

    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $targetFile)) {
        echo "Gambar berhasil diupload.";

        // Query untuk menyimpan data ke tabel berita
        $sql = "INSERT INTO berita (judul, teks_berita, id_kategori, tgl_posting, id_admin, gambar)
                VALUES ('$judul', '$teks_berita', '$id_kategori', '$tgl_posting', '$id_admin', '$gambarBaru')";

        // Jalankan query
        if (mysqli_query($connection, $sql)) {
            echo "Data berhasil disimpan.";
            // Redirect to berita.php
            header("Location: artikel.php");
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connection);
        }
    } else {
        echo "Maaf, terjadi kesalahan saat mengupload gambar.";
    }
} else {
    echo "Maaf, file gambar tidak valid atau tidak diunggah.";
}

// Tutup koneksi ke database
mysqli_close($connection);
?>
