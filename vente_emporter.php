<?php
    require_once ('templates/header.php');
    require_once ('lib/menu.php');
    // require_once ('lib/fetch/take_away.php');
?>

<div class="line flux"></div>

<section class="section__take-away flux">

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
        La Popotte vous ouvre ses portes pour passé un agréable moment privé.</p>
        <p>Contactez nous à l'avance pour obtenir toutes informations supplémentaires.</p>
    </div>

</section>

<div class="line flux"></div>

<section class="section__reservation flux">

    <div class="section__reservation__info">
        <p>Pour votre commande, votre buffet, votre réservation de salle ou toute autres demandes, par téléphone :</p>
        <p><a href="tel:+330647418582">06.47.41.85.82</a></p>
        <p>ou</p>
        <p><a href="tel:+330466541067">04.66.54.10.67</a></p>
        <p>Par mail : </p>
        <p><a href="mailto:valerie.lopez22@sfr.fr">valerie.lopez22@sfr.fr</a></p>
        <p>Ou via le formulaire si dessous :</p>
        <p>(Pour les commandes et reservation, merci de préciser l'heure et la date souhaité (min. 72h avant))</p>
    </div>

    <form action="" method="post" class="form">
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
            <label for="reason">Motif</label>
            <select name="reason" id="reason">
                <option value="menu à emporter">Menu à emporter</option>
                <option value="buffet">Buffet</option>
                <option value="réservation de salle">Réservation de salle</option>
                <option value="Autres">Autres</option>
            </select>
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