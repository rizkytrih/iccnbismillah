<!-- Plugins css -->
<link href="../plugins/quill/quill.core.css" rel="stylesheet" type="text/css" />
        <link href="../plugins/quill/quill.bubble.css" rel="stylesheet" type="text/css" />
        <link href="../plugins/quill/quill.snow.css" rel="stylesheet" type="text/css" />
        <!-- Dropify -->
	    <link rel="stylesheet" href="assets/plugin/dropify/css/dropify.min.css">

        <?php include 'header.php'; 
include 'koneksi.php';

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: index.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$query= mysqli_query($connection, "SELECT * from banner where id_banner='$id'");
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">


            
                <div class="container-fluid">
                
                <a href="javascript:history.go(-1)"><button type="button" class="btn btn-icon btn-icon-right btn-primary btn-sm waves-effect waves-light"><i class="ico fa fa-arrow-left"></i>Kembali</button></a> <br><br>

                </div>
                
                <div class="col-lg-6 col-xs-12">
                    
				<div class="box-content card white">
					<h4 class="box-title">Ubah banner</h4>
					<!-- /.box-title -->
					<div class="card-content">
                    <form action="proses-edit-banner.php" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label for="exampleInputEmail1">Judul Banner</label>
                                <input type="hidden" name="id" value="<?php echo $siswa['id_banner'] ?>" />
								<input type="text" id="judul" class="form-control" name="nama" placeholder="" value="<?php echo $siswa['judul']; ?>">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Isi Banner</label>
								<textarea name="alamat" class="form-control" id="alamat" rows="3"><?php echo $siswa['isi']; ?></textarea>
							</div>
							<div class="form-group">
								<label for="exampleInputFile">Gambar Banner</label>
                                <p>Sebaiknya ukuran gambar 1800 x 560</p>
								<input name="gambar" type="file" id="input-file-to-destroy" class="dropify" data-max-file-size="2M" >
							</div>
							<div class="text-right">

                    <button type="reset" class="btn btn-warning plus" data-bs-toggle="modal" >
                    <span data-feather="plus"></span>
                    Reset
                </button>
                <button type="submit" name="simpan" value="Simpan" class="btn btn-primary plus" data-bs-toggle="modal" >
                    <span data-feather="plus"></span>
                    Simpan Perubahan
                </button>
            </div>
            </div>

            
						</form>
					</div>
					<!-- /.card-content -->


                    
				</div>
                <div class="col-lg-6 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Gambar Banner</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<div class="form-group margin-bottom-0">
	                       <img src="gambar/<?php echo $siswa['gambar']; ?>"">
						</div>
					</div>
					<!-- /.card-content -->
				</div>
				<!-- /.box-content -->
				<!-- /.box-content -->
			</div>
        




            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            2020 © Xeloro.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-right d-none d-sm-block">
                                Design & Develop by Myra
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Overlay-->
    <div class="menu-overlay"></div>


    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metismenu.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/simplebar.min.js"></script>

     <!-- Plugins js -->
     <script src="../plugins/katex/katex.min.js"></script>
     <script src="../plugins/quill/quill.min.js"></script>
 
     <!-- Init js-->
     <script src="assets/pages/quilljs-demo.js"></script>

     <!-- Sparkline Chart -->
	<script src="assets/plugin/chart/sparkline/jquery.sparkline.min.js"></script>
	<script src="assets/scripts/chart.sparkline.init.min.js"></script>


    <!-- App js -->
    <script src="assets/js/theme.js"></script>

    <!-- Dropify -->
	<script src="assets/plugin/dropify/js/dropify.min.js"></script>
	<script src="assets/scripts/fileUpload.demo.min.js"></script>

	<script src="assets/scripts/main.min.js"></script>

</body>

</html>