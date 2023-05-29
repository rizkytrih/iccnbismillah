<?php
session_start();

// Periksa apakah pengguna sudah login dan memiliki level admin
if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1 && isset($_SESSION['level']) && $_SESSION['level'] == 'admin') {
    // Pengguna memiliki level admin, tampilkan konten halaman tambah_event.php di sini
    // ...
    // ...
    // Tambahkan kode HTML atau PHP untuk menampilkan konten halaman tambah_event.php
    echo "Selamat datang di halaman tambah_event.php. Hanya admin yang dapat mengakses halaman ini.";
} else {
    // Pengguna tidak memiliki level admin, arahkan kembali ke halaman login
    header("Location: tolak.php");
    exit();
}

include 'header.php';
include 'koneksi.php';
?>


<head>
    <!-- TinyMCE -->
	<link rel="stylesheet" href="assets/plugin/tinymce/skins/lightgray/skin.min.css">

    <!-- Dropify -->
    <link rel="stylesheet" href="assets/plugin/dropify/css/dropify.min.css">
	
	<!-- Must include this script FIRST -->
	<script src="assets/plugin/tinymce/tinymce.min.js"></script>

  <!-- Datepicker -->
<link rel="stylesheet" href="assets/plugin/datepicker/css/bootstrap-datepicker.min.css">

  <style>
    #map {
      height: 400px;
      width: 100%;
    }
  </style>
  <!-- Memuat pustaka Leaflet -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

  
</head>



<body>
<div id="wrapper">  
	<div class="main-content">

    
		<div class="row small-spacing">
        <div class="container-fluid">
 
 <a href="javascript:history.go(-1)"><button type="button" class="btn btn-icon btn-icon-right btn-primary btn-sm waves-effect waves-light"><i class="ico fa fa-arrow-left"></i>Kembali</button></a> <br><br>

   <!-- Konten halaman lainnya -->
   <div class="row">
   <form action="proses-tambah-event.php" method="POST" enctype="multipart/form-data">
    <div class="col-lg-6 col-xs-12">
        <div class="box-content card white">
            <h4 class="box-title">Tambah Event</h4>
            <!-- /.box-title -->
            <div class="card-content">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul</label>
                        <input type="text" name="judul" class="form-control" id="exampleInputEmail1" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Keterangan</label>
                        <textarea id="tinymce" name="keterangan"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Tempat</label>
                        <input type="text" name="tempat_acara" class="form-control" id="exampleInputEmail1" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Acara</label>
                          <div class="input-group">
                            <input type="text" name="tanggal" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                            <span class="input-group-addon bg-primary text-white"><i class="fa fa-calendar"></i></span>
                          </div>
                    </div>
                    <div class="form-group">
                        <label for="detient">Waktu</label>
                          <p class="card-subtitle mb-1"> Contoh : 10:00 WIB - Selesai / 11:00 WIB - 14:00 WIB </p>
                        <input type="text" class="form-control" name="waktu" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <textarea name="alamat" class="form-control" id="alamat" rows="3"></textarea>
                    </div>
                </div>
                <!-- /.card-content -->
            </div>
            <!-- /.box-content -->
        </div>
        <!-- /.col-lg-6 col-xs-12 -->

        <div class="col-lg-6 col-xs-12">
            <div class="box-content card white">
                <h4 class="box-title">Tambahkan Gambar</h4>
                <!-- /.box-title -->
                <div class="card-content">
                        <div class="form-group">
                            <!-- <label for="exampleInputFile">Gambar Banner</label>
                            <p>Sebaiknya ukuran gambar 1800 x 560</p> -->
                            <input name="gambar" type="file" id="input-file-to-destroy" class="dropify" data-max-file-size="2M" required>
                        </div>
                    </div>
                    <!-- /.card-content -->
                </div>
                <div class="box-content card white">
                <h4 class="box-title">Tambahkan Maps</h4>
                <!-- /.box-title -->
                <div class="card-content">
                        <div class="form-group">
                        <p class="card-subtitle mb-4">Untuk mencari detail lokasi silahkan copy kordinat dari <a href="https://www.google.com/maps" target="_blank">Google Maps</a> dan tempel pada field kordinat</p>
              <div id="map"></div> <br>
              <div class="form-group">
                <label>Kordinat : </label>
                <div class="input-group margin-bottom-20">
                  <input type="text" class="form-control" name="lat" id="coordinates" placeholder="Latitude, Longitude">
                  <div class="input-group-btn"><button type="button" onclick="moveMarker()" class="btn btn-violet no-border waves-effect waves-light"><i class="fa fa-search text-white"></i></button></div>
                </div>
              </div>
                        </div>
                    </div>
                    <!-- /.card-content -->
                </div>
                
                <!-- /.box-content -->
                <div class="text-right">
                    <button type="reset" class="btn btn-warning btn-sm waves-effect waves-light">Reset</button>
                    <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light" name="simpan">Simpan</button>
                </div>
            
        </div>
    </div>
    </form>
</div>

<!-- TinyMCE -->
	<!-- Plugin Files DON'T INCLUDES THESES FILES IF YOU USE IN THE HOST -->
	<link rel="stylesheet" href="assets/plugin/tinymce/skins/lightgray/skin.min.css">
	<script src="assets/plugin/tinymce/plugins/advlist/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/anchor/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/autolink/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/autoresize/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/autosave/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/bbcode/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/charmap/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/code/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/codesample/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/colorpicker/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/contextmenu/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/directionality/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/emoticons/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/example/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/example_dependency/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/fullpage/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/fullscreen/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/hr/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/image/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/imagetools/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/importcss/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/insertdatetime/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/layer/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/legacyoutput/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/link/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/lists/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/media/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/nonbreaking/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/noneditable/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/pagebreak/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/paste/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/preview/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/print/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/save/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/searchreplace/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/spellchecker/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/tabfocus/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/table/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/template/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/textcolor/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/textpattern/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/visualblocks/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/visualchars/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/plugins/wordcount/plugin.min.js "></script>
	<script src="assets/plugin/tinymce/themes/modern/theme.min.js"></script>
	<!-- Plugin Files DON'T INCLUDES THESES FILES IF YOU USE IN THE HOST -->

	<script src="assets/scripts/tinymce.init.min.js"></script>

	<script src="assets/scripts/main.min.js"></script>

 <!-- Dropify -->
 <script src="assets/plugin/dropify/js/dropify.min.js"></script>
	<script src="assets/scripts/fileUpload.demo.min.js"></script>

	<script src="assets/scripts/main.min.js"></script>

  <script>
    var marker;

    // Memanggil fungsi inisialisasi peta setelah halaman dimuat
    window.onload = function() {
      // Koordinat lokasi yang akan ditampilkan pada peta
      var myLatLng = L.latLng(-6.1754, 106.8272);

      // Membuat objek peta baru
      var map = L.map('map').setView(myLatLng, 12);

      

      // Menambahkan tile layer dari penyedia peta OpenStreetMap
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
      }).addTo(map);

      // Menambahkan penanda awal pada peta
      marker = L.marker(myLatLng, { draggable: true }).addTo(map)
        .bindPopup('Lokasi')
        .openPopup();

      // Mengikuti perubahan posisi marker
      marker.on('dragend', function(event) {
        var position = marker.getLatLng();
        updateCoordinatesField(position);
      });

      // Inisialisasi field dengan koordinat awal
      updateCoordinatesField(myLatLng);
    };

    // Fungsi untuk memindahkan marker ke koordinat yang dimasukkan pengguna
    function moveMarker() {
      var coordinatesField = document.getElementById('coordinates');
      var coordinates = coordinatesField.value.split(',');

      if (coordinates.length === 2) {
        var lat = parseFloat(coordinates[0].trim());
        var lng = parseFloat(coordinates[1].trim());

        if (!isNaN(lat) && !isNaN(lng)) {
          var position = L.latLng(lat, lng);
          marker.setLatLng(position);
          marker.getPopup().setContent(position.toString()).update();
          marker.openPopup();
          updateCoordinatesField(position);
        } else {
          alert('Koordinat tidak valid!');
        }
      } else {
        alert('Masukkan koordinat dalam format yang benar!');
      }
    }

    // Fungsi untuk mengisi field dengan koordinat latitude dan longitude
    function updateCoordinatesField(position) {
      var coordinatesField = document.getElementById('coordinates');
      coordinatesField.value = position.lat.toFixed(6) + ', ' + position.lng.toFixed(6);
    }
  </script>

<script src="assets/plugin/datepicker/js/bootstrap-datepicker.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#datepicker').datepicker();
    });
  </script>
  
  
  <!-- Memuat pustaka Leaflet -->
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

</body>