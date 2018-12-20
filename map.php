<?php 
include './include/header.php';
include './include/navbar.php';
?>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
crossorigin=""></script>
<script src='https://api.mapbox.com/mapbox-gl-js/v0.51.0/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v0.51.0/mapbox-gl.css' rel='stylesheet' />
<style>
#map{
    width: 50%; 
    height: 50em; 
    border-right: 2px darkgoldenrod solid;
    border-top: 2px darkgoldenrod solid;
}
@media only screen and (max-width: 768px)
{
    #map{
        width: 100%;
        height: 400px;
    }
    .page_annu{
        display: block;
    }
}
.page_annu{
    display: flex;
}
.titre_annu{
    text-align : center;
}
main_annu   {
    display: grid;
    grid-template-columns: 200px 400px;    
}
ul{
    grid-column: 1;
    grid-row: 1;
}
li{
    list-style-type : none;
    text-align: center;
}
ol{
    grid-column: 2;
    grid-row: 1;
}
</style>
<body>
<div class="page_annu">
    <div id='map' style='w'></div>
    <script>
    mapboxgl.accessToken = 'pk.eyJ1Ijoid2Fpc2h5IiwiYSI6ImNqcDJmcHdvcjA2NnAzd3BoNzJueHAxcDkifQ.5xzVN_hgzuLyc12kFLm0aA';
    var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v10'
    });
    </script>

    <script>var map = L.map('map').setView([50.487619, 1.622844], 13);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([50.487619, 1.622844]).addTo(map)
</script>

    <div class="main_annu">
        <h1 class="titre_annu">Les différentes Associations Cucquoises</h1>
        <div class="annu_asso_sport">
            <ul> <p> Association sportive de Cucq</p>
                <li>Basket</li>
                <li>Omnisports</li>
                <li>Musculation</li>
                <li>Football</li>
                <li>Karaté</li>
                <li>Danse</li>
                <li>le parc soleil</li>
            </ul>
            <ol>
            <li>foot</li>
            </ol>

        </div>
    </div>
</div>
<?php  
include './include/footer.php';
?>
