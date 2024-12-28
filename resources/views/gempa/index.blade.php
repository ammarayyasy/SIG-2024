<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <style>
        #map { height: 600px; }
    </style>
     <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
</head>
    <body>
        <h1 style="text-align: center;">DATA GEMPA TERKINI DI INDONESIA</h1>
        <h3 style="text-align: center;">Sumber Data: BMKG</h3>
        <div id="map"></div>
        <script>
            var map = L.map('map').setView([-0.3155398750904368, 117.1371634207888], 5);
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png',{ maxZoom: 5,
              attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);

            let datas = {!! file_get_contents("https://data.bmkg.go.id/DataMKG/TEWS/gempaterkini.json") !!};
            let gempas = datas.Infogempa.gempa;
            let number = 1;
            console.log(gempas);
            
            gempas.forEach(gempa =>{
                let kordinat = gempa.Coordinates.split(",");
                let _lat = kordinat[0];
                let _long = kordinat[1];
                let marker = L.marker([_lat, _long]).addTo(map);
                marker.bindPopup(
                    "<b>" + number + ") Waktu :</b> " + gempa.Tanggal + ", " + gempa.Jam + "<br>" +
                    "<b> Wilayah :</b> " + gempa.Wilayah + "<br>" +
                    "<b> Kedalaman :</b> " + gempa.Kedalaman + ", " + gempa.Magnitude + " SR" + "<br>" +
                    "<b> Potensi :</b> " + gempa.Potensi + "<br>"
                );
                number++;
            });
            

        </script>
    </body>
</html>