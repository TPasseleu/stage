<?php
include './include/header.php';
include './include/navbar.php';
?>
<link rel="stylesheet" href="css/flickity.css">
<link rel="stylesheet" href="css/stage.css">
<div class="home-jumb jumbotron mt-5">
    <h1 class="display-4">Un nouveau défi pour Cucq, Trépied, Stella.</h1>
    <p class="lead">Notre collectif « le triangle citoyen » vous invite à nous faire part de vos besoins et vos envies. Nous sommes tous habitant de la commune et voulons imaginer l’avenir de Cucq, Trépied, Stella.</p>
</div>


<div class="main-gallery js-flickity" data-flickity-options='{ "cellAlign": "left", "contain": true, "adaptiveHeight": true, "autoPlay": true, "wrapAround": true}'>
    <div class="gallery-cell"><img src="./img/img1.jpg" alt="Avatar"></div>
    <div class="gallery-cell"><img src="./img/img2.jpg" alt="Avatar"></div>
    <div class="gallery-cell"><img src="./img/img3.jpg" alt="Avatar"></div>
    <div class="gallery-cell"><img src="./img/img3.jpg" alt="Avatar"></div>
    <div class="gallery-cell"><img src="./img/img3.jpg" alt="Avatar"></div>
    <div class="gallery-cell"><img src="./img/img3.jpg" alt="Avatar"></div>
</div>


<?php include './include/footer.php' ?>
