<?php 
// koneksi database
include '..\header\koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];

// $id_banner = $_POST['id_banner'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
// $gambar = $_POST['gambar'];
 
// update data ke database
mysqli_query($connection,"UPDATE banner set judul='$judul', isi='$isi', where id_banner='$id'");

 
?>

