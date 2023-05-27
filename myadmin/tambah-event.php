<!-- Plugins css -->
<link href="../plugins/quill/quill.core.css" rel="stylesheet" type="text/css" />
        <link href="../plugins/quill/quill.bubble.css" rel="stylesheet" type="text/css" />
        <link href="../plugins/quill/quill.snow.css" rel="stylesheet" type="text/css" />
        <!-- Dropify -->
	    <link rel="stylesheet" href="assets/plugin/dropify/css/dropify.min.css">

        <link rel="stylesheet" href="leftleft/leaflet.css" />
        

        <!-- Datepicker -->
	<link rel="stylesheet" href="assets/plugin/datepicker/css/bootstrap-datepicker.min.css">

<!-- DateRangepicker -->
<link rel="stylesheet" href="assets/plugin/daterangepicker/daterangepicker.css">

    <script src="leftleft/leaflet.js"></script>



    <style>
      #map {
        height: 400px;
        width: 100%;
      }
    </style>

        <?php include 'header.php'; 
include 'koneksi.php'; ?>




        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                <div class="col-lg-6 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Tambah event</h4>
					<!-- /.box-title -->
					<div class="card-content">
                    <form action="proses-edit-banner.php" method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label for="judul">Judul event</label>
                                <input type="text" id="judul" class="form-control" name="nama" placeholder="">
							</div>
							<div class="form-group">
								<label for="detient">detail event</label>
								<textarea name="alamat" class="form-control" id="alamat" rows="3"></textarea>
							</div>
                            <div class="form-group">
								<label for="tanggal">Tanggal</label>
								<div class="input-group">
											<input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
											<span class="input-group-addon bg-primary text-white"><i class="fa fa-calendar"></i></span>
										</div>
							</div>
                            <div class="form-group">
								<label for="detient">Waktu</label>
                                <p class="card-subtitle mb-1"> Contoh : 10:00 WIB - Selesai / 11:00 WIB - 14:00 WIB </p>
								<input type="waktu" id="judul" class="form-control" name="nama" placeholder="">
							</div>
                            <div class="form-group">
								<label for="detient">Alamat</label>
								<textarea name="alamat" class="form-control" id="alamat" rows="3"></textarea>
							</div>
							<div class="form-group">
								<label for="exampleInputFile">Gambar Banner</label>
                                <p>Sebaiknya ukuran gambar 1800 x 560</p>
								<input name="gambar" type="file" id="input-file-to-destroy" class="dropify" data-max-file-size="2M" >
							</div>
							
            </div>

            
						
					</div>
					<!-- /.card-content -->


                    
				</div>
                <div class="col-lg-6 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Detail Lokasi</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<div class="form-group margin-bottom-0">
                        <p class="card-subtitle mb-4">Untuk mencari detail lokasi silahkan copy kordinat dari <a href="https://www.google.com/maps" target="_blank">Google Maps</a> dan tempel pada field kordinat</p>
                        <div id="map"></div>
                        <br>
                        <div class="form-group">
                            <label>Kordinat : </label>
                            <div class="input-group margin-bottom-20">
							<input type="text" class="form-control" name="lat" id="coordinates" placeholder="Latitude, Longitude">
							<div class="input-group-btn"><button type="button" onclick="moveMarker()" class="btn btn-violet no-border waves-effect waves-light"><i class="fa fa-search text-white"></i></button></div>
							<!-- /.input-group-btn -->
						</div>

                        
                        </div>                    

                        <div class="form-group">
                            
                            
                        </div>
                        
						</div>
                        
					</div>
                    
					<!-- /.card-content -->
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

    <!-- Datepicker -->
	<script src="assets/plugin/datepicker/js/bootstrap-datepicker.min.js"></script>

    <!-- DateRangepicker -->
	<script src="assets/plugin/daterangepicker/daterangepicker.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script>
  $(document).ready(function() {
    $('#datepicker').datepicker();
  });
</script>

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

</body>

</html>