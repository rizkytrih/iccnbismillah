<?php include 'header.php'; 



include 'koneksi.php';?>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    <div class="box-content">
					<h4 class="box-title">Ubah Banner</h4>
					<!-- /.box-title -->
					<table class="table">
						<thead>
							<tr>
                            <th>No</th>
                            <th width="30%">Judul Banner</th>
                            <th width="40%">Isi Banner</th>
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
                                                    <td><img src="<?php echo $d['gambar'] ?>" width="15%"></td>
                                                    <td>
                                                        <a href="edit_banner.php?id=<?php echo $d['id_banner']; ?>" class=""><button type="button" class="btn btn-primary waves-effect waves-light"><i class="ico ico-left fa fa-flag"></i>Ubah</button></a>
                                                    </td>         
                                                </tr>
                                                </tbody>
                                                <?php 
		}
		?>
                                        </table>
				</div>
				<!-- /.box-content -->

                    

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            ICCN
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