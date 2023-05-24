<?php include '..\header\koneksi.php';

// Memeriksa apakah tombol 'Simpan' telah diklik
if (isset($_POST['simpan'])) {
    // Mendapatkan nilai dari inputan form
    $judul = $_POST['judul'];
    $isi = $_POST['deskripsi'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $alamat = $_POST['alamat'];
    $lat = $_POST['lat'];

    // Memproses upload gambar
    $gambarDir = 'gambar/acara/'; // Direktori tempat menyimpan gambar
    $gambarName = $_FILES['gambar']['name'];
    $gambarTmp = $_FILES['gambar']['tmp_name'];
    
    // Generate angka acak untuk digabungkan dengan nama file gambar
    $randomNumber = rand(1000, 9999);
    
    // Menggabungkan angka acak dengan nama file gambar
    $gambarPath = $gambarDir . $randomNumber . '_' . $gambarName;

    // Pindahkan file gambar ke direktori tujuan
    if (move_uploaded_file($gambarTmp, $gambarPath)) {
        // Menambahkan data ke tabel acara dalam database
        $query = "INSERT INTO acara (judul, isi, tanggal, jam, lat, alamat, gambar) VALUES ('$judul', '$isi', '$tanggal', '$jam', '$lat', '$alamat', '$gambarPath')";

        if (mysqli_query($connection, $query)) {
            echo "Data berhasil ditambahkan ke database.";
        } else {
            echo "Terjadi kesalahan: " . mysqli_error($connection);
        }
    } else {
        echo "Terjadi kesalahan saat mengunggah gambar.";
    }
}
?>
