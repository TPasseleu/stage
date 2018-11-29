<?php
include './include/header.php';
include './include/navbar.php';
?>

    <div class="page">
        <p>Le lien vers notre page <a href="#">Facebook</a></p>
    </div>
    <main role="main" class="container">
        <br>

        <p class="commentaire">Poster vos commentaires ici</p>
        <div class="fb-comments" data-href="http://127.0.0.1:49317/presentationex.html" data-width="500" data-numposts="5"></div>

    </main>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>


<?php include './include/footer.php' ?>