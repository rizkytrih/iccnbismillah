<?php
// Include connection.php for database connection
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    // Get the form data
    $judul = $_POST['judul'];
    $keterangan = $_POST['keterangan'];

    // Check if a new image is uploaded
    if ($_FILES['gambar']['name']) {
        // Get the old image name from the database
        $sql = "SELECT gambar FROM sejarah_iccn WHERE id = 1";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);
        $oldImage = $row['gambar'];

        // Delete the old image if it exists
        if ($oldImage) {
            $oldImagePath = 'gambar/' . $oldImage;
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
        }

        // Generate a random three-digit number for the new image name
        $randomNumber = sprintf("%03d", mt_rand(1, 999));

        // Process the new image upload
        $gambar = $randomNumber . '-sejarah.jpg';
        $gambar_tmp = $_FILES['gambar']['tmp_name'];

        // Specify the upload directory
        $upload_dir = 'gambar/';

        // Move the uploaded file to the desired location
        move_uploaded_file($gambar_tmp, $upload_dir . $gambar);
    } else {
        // No new image uploaded, retain the old image
        $sql = "SELECT gambar FROM sejarah_iccn WHERE id = 1";
        $result = mysqli_query($connection, $sql);
        $row = mysqli_fetch_assoc($result);
        $gambar = $row['gambar'];
    }

    // Update the data in the database
    $sql = "UPDATE sejarah_iccn SET judul = '$judul', keterangan = '$keterangan', gambar = '$gambar' WHERE id = 1";
    $result = mysqli_query($connection, $sql);

    if ($result) {
        // Data updated successfully
        echo "<script>alert('Data berhasil diubah.');</script>";
        header("Location: ubah_sejarah.php");
        exit();
    } else {
        // Failed to update data
        echo "<script>alert('Gagal mengubah data.');</script>";
    }
}
?>
