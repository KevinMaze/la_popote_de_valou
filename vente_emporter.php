<?php
    require_once ('templates/header.php');
    require_once ('lib/menu.php');
    // require_once ('lib/fetch/take_away.php');
?>

<div class="line flux"></div>

<section class="section__take-away">

    <h2 class="title__custom">La popotte s'emporte</h2>

    <div class="section__take-away__info">
        <div class="section__take-away__images">
            <img src="./assets/plateau_emporter_1" alt="">
            <img src="./assets/plateau_emporter_2" alt="">
            <img src="./assets/plateau_emporter_3" alt="">
        </div>

        <div class="section__take-away__div">
            <p>Besoin d'un menu à emporter, carte ou sur-mesure ?</p>
            <p>La Popotte concoste ça pour vous !</p>
            <p>A retirer au comptoir</p>
            <p>11h45 - 14h / 19h00 - 22h00</p>
        </div>
        <button class="custom__button hover__custom" id="button_take_away">Voir la carte</button>
    </div>

    <div class="take_away">
        <!-- <?php include ('templates/take-away-part.php')?> -->
    </div>
    
</section>
<div class="line flux"></div>

<section class="section__buffet">
    
    <h2 class="title__custom">Buffet</h2>

    <div class="section__buffet__info">
        <div class="section__buffet__info__images">
            <img src="./assets/buffet_verrine.jpg" alt="">
            <img src="./assets/buffet_burger.jpg" alt="">
            <img src="./assets/buffet_dessert.jpg" alt="">
        </div>
        <div class="section__buffet__div">
            <p>Vous souhaitez organiser un événement ?</p>
            <p>La Popotte s'occupe de tout !</p>
            <p>Buffet salé ou sucré, à vous de choisir.</p>
        </div>
        <button class="custom__button hover__custom" id="">Voir les buffets salés</button>
        <button class="custom__button hover__custom" id="">Voir les buffets sucrés</button>
    </div>

    <div class="take_away">
    <!-- <?php include ('templates/take-away-part.php')?> -->
    </div>

</section>

<div class="line flux"></div>

<section class="section__reservation">
    <div class="section__reservation__info">
        <p>Réservez votre commande ou votre buffet par téléphone :</p>
        <p>06.47.41.85.82 ou 04.66.54.10.67</p>
        <p>Pour les commandes, reservations ou tout autres demandes, utiliser le formulaire.</p>
    </div>

    <form action="" method="post" class="form form__reservation">
        <div class="form__div">
            <label for="name">Nom</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="form__div">
            <label for="firstname">Prénom</label>
            <input type="text" name="firstname" id="firstname">
        </div>
        <div class="form__div">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div class="form__div">
            <label for="phone">Téléphone</label>
            <input type="tel" name="phone" id="phone">
        </div>
        <div class="form__div">
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </div>
        <div class="form__div">
            <label for="date">Date</label>
            <input type="date" name="date" id="date">
        </div>
        <div class="form__div">
            <label for="time">Heure</label>
            <input type="time" name="time" id="time">
        </div>
        <button class="custom__button hover__custom" id="button_reservation">Envoyer</button>
    </form>


</section>



<div class="line flux"></div>


<script src="js/take_away.js"></script>
<?php
    require_once ('templates/footer.php');
?>