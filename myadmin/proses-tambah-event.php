<?php
// Asumsikan Anda telah membuat koneksi ke database
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $judul = $_POST['judul'];
    $detailAcara = $_POST['keterangan'];
    $tempat = $_POST['tempat_acara'];
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];
    $alamat = $_POST['alamat'];
    $latLong = $_POST['lat'];

    // Data tambahan
    $idAdmin = 1;
    $tglPosting = date('Y-m-d H:i:s'); // Waktu saat ini

    // Upload gambar
    $gambar = $_FILES['gambar']['name'];
    $gambarTmp = $_FILES['gambar']['tmp_name'];
    $gambarPath = 'gambar/acara/';
    $gambarExt = strtolower(pathinfo($gambar, PATHINFO_EXTENSION));
    $gambarName = uniqid('acara_') . '.' . $gambarExt;
    $gambarDestination = $gambarPath . $gambarName;
    move_uploaded_file($gambarTmp, $gambarDestination);

    // Simpan data ke dalam tabel "acara"
    $query = "INSERT INTO acara (nama_event, detail_acara, tempat_acara, tanggal, jam, alamat, gambar_event, lokasi_peta, id_admin, tgl_posting) 
              VALUES ('$judul', '$detailAcara', '$tempat', '$tanggal', '$waktu', '$alamat', '$gambarName', '$latLong', '$idAdmin', '$tglPosting')";

    // Jalankan query
    $result = mysqli_query($connection, $query);

    if ($result) {
        // Data berhasil disimpan
        echo "<script>alert('Data berhasil disimpan.');</script>";
        echo "<script>window.location.href = 'event.php';</script>";
        exit();
    } else {
        // Gagal menyimpan data
        echo "Error: " . mysqli_error($connection);
    }
}
?>
