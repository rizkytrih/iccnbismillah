<!DOCTYPE html>
<html>
<head>
    <title>Peta dengan Marker Dinamis</title>
    <link rel="stylesheet" href="leftleft/leaflet.css" />
    <script src="leftleft/leaflet.js"></script>
    <style>
      #map {
        height: 400px;
        width: 100%;
      }
    </style>
</head>
<body>
    <div id="map"></div>
    <form>
      <label for="coordinates">Koordinat:</label>
      <input type="text" id="coordinates" placeholder="Latitude, Longitude">
      <br>
      <button type="button" onclick="moveMarker()">Pindah</button>
    </form>

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
