<?php
session_start();

// Periksa apakah pengguna telah login
if (!isset($_SESSION['admin']) && !isset($_SESSION['level'])) {
    header('Location: login.php');
    exit();
}

// Periksa level pengguna untuk menentukan header yang digunakan
if (isset($_SESSION['level'])) {
    if ($_SESSION['level'] === 'author') {
        include 'header2.php'; // Gunakan header2.php untuk level author
    } else {
        include 'header.php'; // Gunakan header1.php untuk level admin
    }
}

include 'koneksi.php'; ?>

<head>
    <!-- TinyMCE -->
	<link rel="stylesheet" href="assets/plugin/tinymce/skins/lightgray/skin.min.css">

    <!-- Dropify -->
    <link rel="stylesheet" href="assets/plugin/dropify/css/dropify.min.css">
	
	<!-- Must include this script FIRST -->
	<script src="assets/plugin/tinymce/tinymce.min.js"></script>
</head>



<body>
<div id="wrapper">  
	<div class="main-content">

    
		<div class="row small-spacing">
        <div class="container-fluid">
 
 <a href="javascript:history.go(-1)"><button type="button" class="btn btn-icon btn-icon-right btn-primary btn-sm waves-effect waves-light"><i class="ico fa fa-arrow-left"></i>Kembali</button></a> <br><br>

   <!-- Konten halaman lainnya -->
   <div class="row">
   <form action="proses-tambah-berita.php" method="POST" enctype="multipart/form-data">
    <div class="col-lg-6 col-xs-12">
        <div class="box-content card white">
            <h4 class="box-title">Tambah Berita</h4>
            <!-- /.box-title -->
            <div class="card-content">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul Berita</label>
                        <input type="text" name="judul" class="form-control" id="exampleInputEmail1" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Isi Berita</label>
                        <textarea id="tinymce" name="teks_berita"></textarea>
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

</body>