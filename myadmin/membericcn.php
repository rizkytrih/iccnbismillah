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


// Ambil nilai pencarian dari URL jika ada
$search = isset($_GET['search']) ? $_GET['search'] : '';

?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
        

            
    
            <div class="page-content">
                
        <div class="container-fluid">
            <a href="tambah-event.php"><button type="button" class="btn btn-icon btn-icon-right btn-primary btn-sm waves-effect waves-light"><i class="ico fa fa-plus"></i>Tambah Data</button></a> <br><br>
            <div class="box-content">
                
                <h4 class="box-title">Event</h4>
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
                            <th width="25%">Nama</th>
                            <th width="5%">Username</th>
                            <th width="15%">Email</th>
                            <th width="15%">No Hp</th>
                            <th width="15%">Foto</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        <?php
                        $results_per_page = 6;

                        if (!empty($search)) {
                            $query = "SELECT * FROM admin WHERE nama_awal LIKE '%$search%' ORDER BY tgl_post DESC";
                        } else {
                            $query = "SELECT * FROM admin ORDER BY tgl_post DESC";
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
                                <td><?php echo $d['nama_awal']; ?> <?php echo $d['nama_akhir']; ?></td>
                                <td><?php echo $d['username']; ?></td>
                                <td><?php echo $d['email']; ?></td>
                                <td><?php echo $d['no_hp']; ?></td>
                                <td><img src="gambar/acara/<?php echo $d['gambar_event']; ?>"></td>
                                <td>
                                    <a class="btn btn-primary waves-effect waves-light" href="edit_berita.php?id=<?php echo $d['id_admin']; ?>" role="button"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-warning waves-effect waves-light" href="edit_berita.php?id=<?php echo $d['id_admin']; ?>" role="button"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-danger waves-effect waves-light" href="edit_berita.php?id=<?php echo $d['id_admin']; ?>" role="button"><i class="fa fa-trash"></i></a>
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
