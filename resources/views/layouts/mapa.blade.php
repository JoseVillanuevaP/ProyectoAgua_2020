<!DOCTYPE html>
<html>
<head>


    <script src="leaflet/leaflet.js"></script>
    <link rel="stylesheet" href="leaflet/leaflet.css"/>

    <style>
        #map {
            width: 60%;
            height: 400px;
            box-shadow: 5px 5px 5px #888;
        }
    </style>
</head>
<body>
<div id="map">
</div>

<div align="right">
    <table>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Age</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
    </table>
</div>


<script>
    var map = L.map('map').setView([19.846244, -90.477483],
        18);


    L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
        maxZoom: 18
    }).addTo(map);

    var customIcon = new L.Icon({


        iconUrl: 'leaflet/images/uac.png',
        iconSize: [40, 40],
        iconAnchor: [15, 50]
    });

    L.control.scale().addTo(map);


        L.marker([ 19.846244 ,-90.477483 ],{ icon: customIcon }).bindPopup( {!!"' Edificio A </br> " .$categorias. " m3'"!!}).openPopup().addTo(map);

        L.marker([ 19.84634 , -90.476968 ], { icon: customIcon }).bindPopup( {!!"' Edificio B </br> " .$categorias2. " m3'"!!}).openPopup().addTo(map);

    L.marker([ 19.846451, -90.477585 ], { icon: customIcon }).bindPopup({!!"' Edificio C </br> " .$categorias3. " m3'"!!}).openPopup().addTo(map);

    L.marker([ 19.846241, -90.476714 ], { icon: customIcon }).bindPopup({!!"' Edificio D </br> " .$categorias4. " m3'"!!}).openPopup().addTo(map);

    L.marker([ 19.846726, -90.476751 ], { icon: customIcon }).bindPopup({!!"' Edificio E </br> " .$categorias5. " m3'"!!}).openPopup().addTo(map);

    L.marker([ 19.845931, -90.477695 ], { icon: customIcon }).bindPopup( {!!"' Nevería </br> " .$categorias6. " m3'"!!}).openPopup().addTo(map);







</script>

</body>
</html>


