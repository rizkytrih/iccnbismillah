<?php
include 'koneksi.php';

if(isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $judul = $_POST['nama'];
    $isi = $_POST['alamat'];

    // Periksa apakah file gambar baru diunggah
    if(isset($_FILES['gambar']) && $_FILES['gambar']['error'] === UPLOAD_ERR_OK) {
        $gambar = $_FILES['gambar'];

        // Generate a random name for the new image
        $ext = pathinfo($gambar['name'], PATHINFO_EXTENSION);
        $newName = 'gambar/banner/' . rand(100, 999) . '.' . $ext;

        // Hapus gambar lama jika ada
        $query = mysqli_query($connection, "SELECT gambar FROM banner WHERE id_banner='$id'");
        $oldImage = mysqli_fetch_assoc($query)['gambar'];
        if($oldImage) {
            unlink($oldImage);
        }

        // Pindahkan gambar baru ke direktori /gambar/banner
        move_uploaded_file($gambar['tmp_name'], $newName);

        // Update data banner dengan gambar baru
        $query = mysqli_query($connection, "UPDATE banner SET judul='$judul', isi='$isi', gambar='$newName' WHERE id_banner='$id'");
        if($query) {
            // Redirect to banner.php with success message
            header('Location: banner.php?success=1');
            exit();
        } else {
            echo "Gagal menyimpan data banner.";
        }
    } else {
        // Update data banner tanpa mengubah gambar
        $query = mysqli_query($connection, "UPDATE banner SET judul='$judul', isi='$isi' WHERE id_banner='$id'");
        if($query) {
            // Redirect to banner.php with success message
            header('Location: banner.php?success=1');
            exit();
        } else {
            echo "Gagal menyimpan data banner.";
        }
    }
}
?>
