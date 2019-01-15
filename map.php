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
    border-bottom: 2px darkgoldenrod solid;
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
    width: 50rem;
}
main_annu   {
    display: grid;
    grid-template-columns: 200px 400px;    
}
ul{
    grid-column: 1;
    grid-row: 1;
}
    ul p{
        text-align: center;
        font-weight: bold; 
    }
li{
    list-style-type : none;
    text-align: center;
    
}
ol{
    grid-column: 2;
    grid-row: 1;
}
    .mairie{
        text-align: center;
    }
    .mairie2{
        margin-top: 10px;
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
                 <h1 class="mairie2">Espace Administratif</h1>
      <li class="mairie2">Mairie de cucq-avenue des sports - tel: 03.21.94.36.66</li>
      <li class="mairie2">Bureau d'Information Touristique 1397 Place Jean Sapin Stella Plage - tél: 03.21.09.04.32</li>
      <li class="mairie2">Bibliothèque Municipale Place Ancienne Mairie Cucq - tél: 09.67.32.34.28</li>
      <li class="mairie2">Poste de Cucq 1650 Avenue de la Libération Cucq - tél: 36.31</li>
      <li class="mairie2">Poste de Stella Plage 1397 Place Jean Sapin Stella Plage Stella Plage - tél: 36.31</li> 
      <li class="mairie2">Crèche Parental L'Oiseau Bleu 489 Chemin du Chat Noir Trépied - tél: 03.21.09.54.12</li> 
      <li class="mairie2">Ecole Maternelle " Le Chat Noir " Trépied - tél: 03.21.94.71.00</li>
      <li class="mairie2">Ecole Maternelle de Cucq " La Souris Verte " - tél: 09.67.11.39.13</li> 
      <li class="mairie2">Ecole Primaire de Cucq 17 rue des Ecoles - tél: 09.67.08.71.01</li>  
      <li class="mairie2">Ecole Primaire de Trépied " Jean Levisse " - tél: 03.21.94.70.63</li>   
          
           
            
             
              
               
                
                  
        <h1 class="titre_annu">LES DIFFÉRENTES ASSOCIATIONS DE
                
                 CUCQ . TRÉPIED . STELLA PLAGE </h1>
        <div class="annu_asso_sport">
            <ul>


<p>ASSOCIATION OMNISPORTS DE CUCQ</p>

 

<li>AS . CUCQ BASKET : Président Monsieur LEBLOND Olivier.</li> 

<li>AS . CUCQ COLOMBOPHILIE : Président Monsieur MARGUERITTE JOËL.</li>

<li>AS . CUCQ CULTURISME : Président Monsieur DELITTE Jérémy.</li>

<li>AS . CUCQ CYCLO TOURISME : Président Monsieur GUYOT Jean Marie.</li>

<li>AS . CUCQ FOOTBALL : Président Monsieur GOBERT Fabrice.</li>

<li>AS . CUCQ GYMNASTIQUE : Présidente GUILLEMANT Daphné.</li>

<li>AS . CUCQ LANCER STELLIEN : Président Monsieur NUTTENS Marcel.</li>

<li>AS . CUCQ PÉTANQUE : Président Monsieur GUILBERT Jérôme.</li>

<li>AS  . CUCQ QUILLES : Président Monsieur DUCROCQ Roland.</li>

<li>AS . CUCQ SPORT CANIN : Président Monsieur DUMUR Marion.</li>

<li>AS . CUCQ TENNIS : Président Monsieur LIENARD Claude.</li>

<li>AS . CUCQ TENNIS DE TABLE : Président Monsieur LETENDART Alain.</li> 

<li>AS . CUCQ TIR A  L ' ARC : Président Monsieur BRIOIS Stéphane.</li>

 <li>CLUB-NAUTIQUE STELLIEN : Président Monsieur BERNARD Jacques.</li>

<li>FOKSADANCE : Madame FERRAND Mylène.</li> 

<li>JKA KARATÉ CÔTE D'OPALE: Monsieur FOURNIER Dany.</li>

<li>BILLARD CLUB DE CUCQ : Monsieur LEBECQ Jean Pierre.</li> 

<li>OPALE MARATHON VTT : Monsieur MARTEL Sébastien.</li>

            </ul>

<ul><p>ASSOCIATIONS DE QUARTIERS</p>
    
     
    
    <li>ASSOCIATION " LE PARC SOLEIL " : Présidente Madame BIGOT Catherine.</li>
    
    <li>ASSOCIATION " RANDY " : Président Monsieur FLAHAUT René.</li>
    
    <li>ASSOCIATION " LES TULIPES " : Présidente Madame</li>
    
     </ul>

<ul> <p>ASSOCIATIONS DIVERS</p>

 

<li>ASSOCIATION RENCONTRE ET LOISIRS : Président Monsieur BOMY Didier.</li>

<li>ASSOCIATION ÉVASION - PARTAGE : Président Monsieur SERGENT Albert.</li>

<li>ASSOCIATION DE L'OFFICE DU TOURISME : Président Monsieur BASTIEN Jean Luc.</li>

<li>ASSOCIATION DES ANCIENS COMBATTANT : Président Monsieur HABERT Roger.</li>

<li>ASSOCIATION A.F.N  : Président Monsieur CARPENTIER Georges.</li>

<li>ASSOCIATION CHASSE DE CUCQ : Président Monsieur DUSANNIER Christophe.</li> 

<li>ASSOCIATION STELLA 2020 : Président Monsieur KOVACS André.</li>

<li>L 'A.S.S.A.D EN OPALE SUD : Président Monsieur DUBUSSE.</li>

<li>SOCIÉTÉ DES CHASSEURS DE STELLA : Président Monsieur SAMIERS Gérard.</li>

<li>SYNDICAT DE DESSÈCHEMENT : Président Monsieur DUSSANIER François.</li>
            </ul>

        </div>
    </div>
</div>
<?php  
include './include/footer.php';
?>
