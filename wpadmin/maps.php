<!DOCTYPE html>
<html>
<head>
  <title>Peta Interaktif</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" />
  <style>
    #map {
      height: 400px;
    }
  </style>
</head>
<body>
  <div id="map"></div>
  <div>
    <label for="search-input">Cari Tempat: </label>
    <input type="text" id="search-input">
    <button onclick="searchPlace()">Cari</button>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
  <script>
    // Inisialisasi peta
    var map = L.map('map').setView([-6.2088, 106.8456], 13);

    // Menambahkan layer peta dari OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    // Membuat marker yang bisa dipindahkan
    var marker = L.marker([-6.2088, 106.8456], {
      draggable: true
    }).addTo(map);

    // Menambahkan popup pada marker
    marker.bindPopup("Posisi saya").openPopup();

    // Fungsi untuk mencari tempat berdasarkan input pengguna
    function searchPlace() {
      var input = document.getElementById('search-input').value;
      if (input !== '') {
        // Lakukan proses pencarian tempat sesuai kebutuhan Anda di sini
        // Misalnya, Anda dapat menggunakan basis data lokal atau algoritma pencocokan teks kustom
        // Setelah menemukan hasil pencarian, atur posisi marker dan peta sesuai dengan hasilnya
        alert('Fitur pencarian tempat belum diimplementasikan.');
      }
    }
  </script>
</body>
</html>
