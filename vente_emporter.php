<?php
    require_once ('templates/header.php');
    require_once ('lib/menu.php');
?>

<div class="line flux"></div>

<section class="section__take-away flux">

    <h2 class="title__custom">La popotte s'emporte</h2>

    <div class="section__take-away__info">
        <div class="section__take-away__images">
            <img src="./assets/plateau_emporter_1" alt="">
            <img src="./assets/emporte.jpg" alt="">
            <img src="./assets/plateau_emporter_2" alt="">
        </div>

        <div class="section__take-away__div">
            <p>Besoin d'un menu à emporter, carte ou sur-mesure ?</p>
            <p>La Popotte concoste ça pour vous !</p>
            <p>A retirer au comptoir</p>
            <p>11h45 - 14h / 19h00 - 22h00</p>
        </div>
        <button class="custom__button hover__custom" id="button_take_away">Voir la carte à emporter</button>
    </div>
    
</section>
<div class="line flux"></div>

<section class="section__buffet flux">
    
    <h2 class="title__custom">Buffet</h2>

    <div class="section__buffet__info">
        <div class="section__buffet__info__images">
            <img src="./assets/buffet_verrine.jpg" alt="">
            <img src="./assets/buffet_burger.jpg" alt="">
            <img src="./assets/buffet_dessert.jpg" alt="">
        </div>
        <div class="section__buffet__div">
            <p>La Popotte vous propose pour vos évènements des buffets sucré, salé ( multitudes de bouchées, mignardises, toasts, verrines, tartes en sucré ou salé). Venez nous voir au restaurant pour en discuter et mettre en place un devis selon vos envies. </p>
        </div>
    </div>
    <a href="contact.php" class="custom__button hover__custom">Page de Contact</a>

    <div class="take_away">
    <!-- <?php include ('templates/take-away-part.php')?> -->
    </div>

</section>

<div class="line flux"></div>

<section class="section__private flux">

    <h2 class="title__custom">Privatisation de salle</h2>
    <h3>Repas d'entreprise - Mariage - Anniversaire</h3>
    <div class="section__private__info">
        <p>À partir de 30 personnes</p>
        <p>Le restaurant est privatisable le soir et le samedi sur réservation avec un menu élaboré selon vos envies.
        La Popotte vous ouvre ses portes pour passé un agréable moment privé. Contactez nous à l'avance pour obtenir toutes informations supplémentaires.</p>
    </div>
    <a href="contact.php" class="custom__button hover__custom">Page de Contact</a>

</section>

<div class="line flux"></div>

<script src="js/take_away.js"></script>
<?php
    require_once ('templates/footer.php');
?>