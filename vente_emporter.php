<?php
    require_once ('templates/header.php');
    require_once ('lib/menu.php');
    require_once ('lib/fetch/take_away.php');

    // $takeAway = getTakeAway($pdo);
    // $catagetories = getCategorie($pdo);
?>

<div class="line flux"></div>

<section class="section__take-away">

    <h2 class="title__custom">La popotte s'emporte</h2>

    <div class="section__take-away__info">
        <img src="assets/emporte.jpg" alt="">
        <div class="section__take-away__div">
            <p>Réservez votre commande par téléphone :</p>
            <p>06.47.41.85.82 ou 04.66.54.10.67</p>
            <p>A retirer au comptoir</p>
            <p>11h45 - 14h / 19h00 - 22h00</p>
            <button class="custom__button hover__custom" id="button_take_away">Voir la carte</button>
        </div>
    </div>

    <div class="line flux"></div>

    <div class="take_away">
        <!-- <?php include ('templates/take-away-part.php')?> -->
    </div>

</section>


<div class="line flux"></div>


<script src="js/take_away.js"></script>
<?php
    require_once ('templates/footer.php');
?>