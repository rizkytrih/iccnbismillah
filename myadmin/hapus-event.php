<?php
include "koneksi.php";

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $query = "DELETE FROM acara WHERE id = $id";

  if (mysqli_query($connection, $query)) {
    echo "Data berhasil dihapus.";
    // Redirect ke halaman referer yang tepat setelah penghapusan berhasil
    $referer = $_SERVER['HTTP_REFERER'];
    header("Location: $referer");
    exit();
  } else {
    echo "Gagal menghapus : " . mysqli_error($connection);
  }
} else {
  echo "ID tidak ditemukan.";
}

mysqli_close($connection);
?>
