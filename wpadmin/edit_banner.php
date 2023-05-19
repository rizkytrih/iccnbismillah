<!-- Plugins css -->
<link href="../plugins/quill/quill.core.css" rel="stylesheet" type="text/css" />
        <link href="../plugins/quill/quill.bubble.css" rel="stylesheet" type="text/css" />
        <link href="../plugins/quill/quill.snow.css" rel="stylesheet" type="text/css" />

<?php include 'sidebar.php';

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
                    
                <form action="proses-edit.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Ubah Banner</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">File Uploads</li>
                                    </ol>
                                </div>
                                
                            </div>
                        </div>
                    </div>     
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                <input type="hidden" name="id" value="<?php echo $siswa['id_banner'] ?>" />
                                    <h4 class="card-title">Judul</h4>
                                    <!-- <p class="card-subtitle mb-4">Silahkan isi ringkasan banner</p> -->
                                    
                                    <div > <input type="text" id="judul" class="form-control" name="nama" placeholder="" value="<?php echo $siswa['judul']; ?>">
                                    </div> <!-- end Snow-editor-->
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                    
                                    <h4 class="card-title">Isi Banner</h4>
                                    <p class="card-subtitle mb-4">Silahkan isi ringkasan banner</p>
                                     <div class="form-group">
                                    <textarea name="alamat" class="form-control" id="alamat" rows="3"><?php echo $siswa['isi']; ?></textarea>
                                        </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                    
                                    <h4 class="card-title">Gambar Banner</h4>
                                    <p class="card-subtitle mb-4">Sebaiknya ukuran gambar 1800 x 560 </p>
                                    <p class="card-subtitle mb-4"><img src="gambar/<?php echo $siswa['gambar']; ?>" style="width: 120px;float: left;margin-bottom: 5px;"></p>
                                    <br>
                                    <input name="gambar" type="file" class="dropify" data-height="300" />

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->
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

                    </form>

                    <!-- end row-->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

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

    <!-- App js -->
    <script src="assets/js/theme.js"></script>

</body>

</html>