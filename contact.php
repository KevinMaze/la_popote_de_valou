<?php
    require_once ('templates/header.php');
?>
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
    
    <form action="" method="post" class="form" id="contact">
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
<?php
    require_once ('templates/footer.php');
    ?>