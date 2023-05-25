<?php 
// connection database
include 'koneksi.php';

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $gambar = $_FILES['gambar']['name'];

    if($gambar != "") {

      // Mengambil data gambar lama dari database
$query_select_gambar = "SELECT gambar FROM banner WHERE id_banner = '$id'";
$result_select_gambar = mysqli_query($connection, $query_select_gambar);
$row_select_gambar = mysqli_fetch_assoc($result_select_gambar);
$gambar_lama = $row_select_gambar['gambar'];

// Hapus foto lama jika ada
if ($gambar_lama != "") {
    unlink('gambar/' . $gambar_lama);
}
        $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
        $x = explode('.', $gambar); //memisahkan nama file dengan ekstensi yang diupload
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $namaea= "slidebg";
        $nama_gambar_baru = $angka_acak.'-'.$namaea; //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                      move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar

                      // Hapus foto lama jika ada
if ($gambar_lama != "" && $gambar_lama != $nama_gambar_baru) {
  unlink('gambar/' . $gambar_lama);
}
                          
                        // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                       $query  = "UPDATE banner SET judul = '$nama', isi = '$alamat', gambar= '$nama_gambar_baru'";
                        $query .= "WHERE id_banner = '$id'";
                        $result = mysqli_query($connection, $query);
                        // periska query apakah ada error
                        if(!$result){
                            die ("Query gagal dijalankan: ".mysqli_errno($connection).
                                 " - ".mysqli_error($connection));
                        } else {
                          //tampil alert dan akan redirect ke halaman index.php
                          //silahkan ganti index.php sesuai halaman yang akan dituju
                          echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
                        }
                  } else {     
                   //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                      echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah_produk.php';</script>";
                  }
        } else {
          // jalankan query UPDATE berdasarkan ID yang produknya kita edit
          $query  = "UPDATE banner SET judul = '$nama', isi = '$alamat'";
          $query .= "WHERE id_banner = '$id'";
          $result = mysqli_query($connection, $query);
          // periska query apakah ada error
          if(!$result){
                die ("Query gagal dijalankan: ".mysqli_errno($connection).
                                 " - ".mysqli_error($connection));
          } else {
            //tampil alert dan akan redirect ke halaman index.php
            //silahkan ganti index.php sesuai halaman yang akan dituju
              echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
          }
        }
    
     
    