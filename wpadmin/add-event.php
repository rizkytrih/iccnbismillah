<!-- Plugins css -->
<link href="../plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
    <link href="../plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="../plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="../plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css" />
    <link href="../plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css" />
    <link href="../plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="leftleft/leaflet.css" />
    <script src="leftleft/leaflet.js"></script>
    <style>
      #map {
        height: 400px;
        width: 100%;
      }
    </style>

<?php include 'sidebar.php';



?>



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

        <div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Event</h4>
                        <p class="card-subtitle mb-4">Silahkan isi detail event</p>

                        <div class="form-group">
                            <label>Gambar</label>
                            <p class="card-subtitle mb-1"> Sebaiknya ukuran gambar tidak lebih 2 Mb </p>
                            <input name="gambar" type="file" class="dropify" data-height="300" />
                        </div>

                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" class="form-control" maxlength="50" name="judul" id="defaultconfig" />
                        </div>

                        <div class="form-group">
                            <label>Detail Event</label>
                            <textarea id="textarea"  name="deskripsi" class="form-control" rows="3" placeholder=""></textarea>
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="text" name="tanggal" class="form-control" data-provide="datepicker">
                        </div>
                        <div class="form-group">
                            <label>Waktu</label>
                            <p class="card-subtitle mb-1"> Contoh : 10:00 WIB - Selesai / 11:00 WIB - 14:00 WIB </p>
                            <input type="text" name="jam" class="form-control" maxlength="25" name="defaultconfig" id="defaultconfig" />
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea id="textarea" class="form-control" name="alamat" rows="3" placeholder=""></textarea>
                        </div>
                        
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-xl-6 -->

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Detail Lokasi</h4>
                        <p class="card-subtitle mb-4">Untuk mencari detail lokasi silahkan copy kordinat dari <a href="https://www.google.com/maps" target="_blank">Google Maps</a> dan tempel pada field kordinat</p>
                        <div id="map"></div>
                        <br>
                        <div class="form-group">
                            <label>Kordinat : </label>
                            <input type="text" class="form-control" name="lat" id="coordinates" placeholder="Latitude, Longitude"" />
                        </div>

                                               
                        <div class="text-right">
                        <button type="button" class="btn btn-warning plus" onclick="moveMarker()">Cari</button> </div>
                         
                        <div class="form-group">
                            
                        </div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-xl-6 -->
        </div> <!-- end row -->
    
            

                    <div class="text-right">

                    <button type="reset" class="btn btn-warning plus" data-bs-toggle="modal" >
                    <span data-feather="plus"></span>
                    Reset
                </button>
                <button type="submit" name="simpan" value="Simpan" class="btn btn-primary plus" data-bs-toggle="modal" >
                    <span data-feather="plus"></span>
                    Simpan
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

    <script>
      var map = L.map('map').setView([-2.3813699, 107.2226223], 13);
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
      }).addTo(map);

      var marker = L.marker([-2.3813699, 107.2226223], { draggable: true }).addTo(map)
        .bindPopup('Marker').openPopup();

      marker.on('dragend', function(e) {
        var lat = e.target._latlng.lat.toFixed(6);
        var lng = e.target._latlng.lng.toFixed(6);
        document.getElementById('coordinates').value = lat + ', ' + lng;
      });

      function moveMarker() {
        var coordinates = document.getElementById('coordinates').value;

        if (coordinates === '') {
          alert('Silakan masukkan koordinat latitude dan longitude!');
          return;
        }

        var latLng = coordinates.split(',').map(function(coord) {
          return parseFloat(coord.trim());
        });

        if (latLng.length !== 2 || isNaN(latLng[0]) || isNaN(latLng[1])) {
          alert('Format koordinat tidak valid!');
          return;
        }

        var lat = latLng[0];
        var lng = latLng[1];

        marker.setLatLng([lat, lng]);
        map.setView([lat, lng], 13);

        alert('Marker telah dipindahkan ke koordinat baru!');
      }
    </script>

     <!-- Plugins js -->
     <script src="../plugins/katex/katex.min.js"></script>
     <script src="../plugins/quill/quill.min.js"></script>
     <script src="../plugins/autonumeric/autoNumeric-min.js"></script>
    <script src="../plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="../plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
    <script src="../plugins/moment/moment.js"></script>
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>
    <script src="../plugins/select2/select2.min.js"></script>
    <script src="../plugins/switchery/switchery.min.js"></script>
    <script src="../plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
    <script src="../plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
 
     <!-- Init js-->
     <script src="assets/pages/quilljs-demo.js"></script>

    <!-- App js -->
    <script src="assets/js/theme.js"></script>

</body>

</html>