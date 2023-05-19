<?php include 'sidebar.php'; ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">BANNER</h4>

                                <!-- <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                                        <li class="breadcrumb-item active">Grid</li>
                                    </ol>
                                </div> -->
                                
                            </div>
                        </div>
                    </div>     
                    <!-- end page title -->

                    

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Ubah Banner</h4>
                                    <!-- <p class="card-subtitle mb-4">
                                        See how aspects of the Bootstrap grid system work across multiple devices with a handy table.
                                    </p> -->

                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>No</th>
                                                    <th>Judul Banner</th>
                                                    <th>Isi Banner</th>
                                                    <th>Gambar</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <?php
                                                $no =1;
                                                $data = mysqli_query($connection, "SELECT * from banner");
                                                while($d = mysqli_fetch_array($data)){
                                                    ?>
                                            <tbody>
                                                <tr>
                                                    <th scope="row"><?php echo $no++; ?></th>
                                                    <td><?php echo $d['judul']; ?></td>
                                                    <td><?php echo $d['isi']; ?></td>
                                                    <td><img src="gambar/<?php echo $d['gambar'] ?>" width="5%"></td>
                                                    <td><a class="btn btn-primary waves-effect waves-light" href="edit_banner.php?id=<?php echo $d['id_banner']; ?>" role="button">Ubah</a></td>         
                                                </tr>
                                                </tbody>
                                                <?php 
		}
		?>
                                        </table>
                                    </div>

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->

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

    <!-- App js -->
    <script src="assets/js/theme.js"></script>

</body>

</html>