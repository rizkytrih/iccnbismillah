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
}else {
    // Pengguna tidak memiliki level admin, arahkan kembali ke halaman tolak.php
    header("Location: tolak.php");
    exit();
}

include 'koneksi.php';
// Ambil nilai pencarian dari URL jika ada
$search = isset($_GET['search']) ? $_GET['search'] : '';

?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
</head>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
        

            
    
            <div class="page-content">
                
        <div class="container-fluid">
        <a href="tambah-berita.php"><button type="button" class="btn btn-icon btn-icon-right btn-primary btn-sm waves-effect waves-light"><i class="ico fa fa-plus"></i>Tambah Data</button> <br><br></a>
            <div class="box-content">
                
                <h4 class="box-title">BERITA</h4>
                                <form action="" method="get">
                             <div class="input-group margin-bottom-20">
							<input type="text" name="search" class="form-control" placeholder="Search..." value="<?php echo $search; ?>">
							<div class="input-group-btn"><button type="submit" class="btn btn-violet no-border waves-effect waves-light"><i class="fa fa-search text-white"></i></button></div>
							<!-- /.input-group-btn -->
                            </form>
						</div>

                <!-- /.box-title -->
                <table class="table">
                    <thead>
                        <tr>
                            <th width="30%">Judul</th>
                            <th width="5%">Gambar</th>
                            <th width="15%">Tgl. Posting</th>
                            <th width="15%">Penulis</th>
                            <th width="15%">Pilihan</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        <?php
                        $results_per_page = 6;

                        if (!empty($search)) {
                            $query = "SELECT * FROM berita JOIN admin ON admin.id_admin = berita.id_admin WHERE judul LIKE '%$search%' AND id_kategori = 3 ORDER BY tgl_posting DESC";
                        } else {
                            $query = "SELECT * FROM berita JOIN admin ON admin.id_admin = berita.id_admin WHERE id_kategori = 3 ORDER BY tgl_posting DESC";
                        }

                        $result = mysqli_query($connection, $query);
                        $number_of_results = mysqli_num_rows($result);
                        $number_of_pages = ceil($number_of_results / $results_per_page);

                        if (!isset($_GET['page'])) {
                            $page = 1;
                        } else {
                            $page = $_GET['page'];
                        }

                        $this_page_first_result = ($page - 1) * $results_per_page;

                        $query .= " LIMIT $this_page_first_result, $results_per_page";
                        $result = mysqli_query($connection, $query);

                        while ($d = mysqli_fetch_array($result)) {
                        ?>

                            <tr>
                                <td><?php echo $d['judul']; ?></td>
                                <td><img src="../gambar/<?php echo $d['gambar'] ?>" height="75" width="75"></td>
                                <td><?php echo $d['tgl_posting']; ?></td>
                                <td><?php echo $d['nama_awal']; ?> <?php echo $d['nama_akhir']; ?></td>
                                <td>
                                    <a class="btn btn-primary waves-effect waves-light" target="_blank" href="../berita.php?id=<?php echo $d['id_berita']; ?>" role="button"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-warning waves-effect waves-light" href="edit_artikel.php?id=<?php echo $d['id_berita']; ?>" role="button"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-danger waves-effect waves-light" href="hapus-artiber.php?id=<?php echo $d['id_berita']; ?>" role="button" onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <div class="text-right">
                    <ul class="pagination">
                        <?php
                        for ($page = 1; $page <= $number_of_pages; $page++) {
                            echo '<li><a href="?page=' . $page . '&search=' . $search . '">' . $page . '</a></li>';
                        }
                        ?>
                    </ul>
                </div>
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

<script>
    function searchTable() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        table = document.getElementsByTagName("table")[0];
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    // Menambahkan event listener untuk mencari saat teks pada input berubah
    document.getElementById("searchInput").addEventListener("input", searchTable);
</script>

<!-- App js -->
<script src="assets/js/theme.js"></script>

</body>

</html>
