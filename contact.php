<?php
    require_once ('templates/header.php');
    require_once ('lib/contact-opinion.php');

    $messages = [];
    $errors = [];

    // try {
    //     if(isset($_POST["button_contact"])){
    //         $result = addContact($pdo, htmlspecialchars($_POST["lastname"], ENT_QUOTES), htmlspecialchars($_POST["firstname"], ENT_QUOTES), htmlspecialchars($_POST["email"], ENT_QUOTES), htmlspecialchars($_POST["phone"], ENT_QUOTES), htmlspecialchars($_POST["commentary"], ENT_QUOTES), htmlspecialchars($_POST["reason"], ENT_QUOTES), htmlspecialchars($_POST["date_reservation"], ENT_QUOTES), htmlspecialchars($_POST["hourly_reservation"], ENT_QUOTES), null);
    //         if($result){
    //             $messages[] = "Votre message a bien été envoyé, nous vous répondrons dans les plus brefs délais, redirection dans 3 secondes";
    //         }else{
    //             $errors[] = "Erreur lors de l'envoi de votre message, redirection dans 3 secondes";
    //         }
    //         echo "<meta http-equiv='refresh' content='3';URL=".$_SERVER['PHP_SELF'].".php?refresh='3'";
    //     }
    // } catch (Exception $e) {
    //     echo $e->getMessage();
    // }

    try {
        if(isset($_POST["button_opinion]"])){
            $opinionResult = addOpinion($pdo, htmlspecialchars($_POST["name"], ENT_QUOTES), htmlspecialchars($_POST["opinion_text"], ENT_QUOTES), htmlspecialchars($_POST["note"], ENT_QUOTES));
            if($opinionResult){
                $messages[] = "Votre avis a bien été envoyé, redirection dans 3 secondes";
            }else{
                $errors[] = "Erreur lors de l'envoi de votre avis, redirection dans 3 secondes";
            }
            // echo "<meta http-equiv='refresh' content='3';URL=".$_SERVER['PHP_SELF'].".php?refresh='3'";
        }
    }catch (Exception $e) {
        echo $e->getMessage();
    }

    var_dump($_POST);
?>
<div class="line flux"></div>

<?php foreach ($messages as $message) { ?>
    <div class="alert alert-success"><?= $message; ?></div>
    <?php }?>
<?php foreach ($errors as $error) { ?>
    <div class="alert alert-danger"><?= $error; ?></div>
<?php }?>

<!-- <section class="section__contact flux">
    
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
    
    <form method="post" class="form__contact" id="contact">
        <div class="form__contact__div">
            <label for="lastname">Nom</label>
            <input type="text" name="lastname" id="lastname" require>
        </div>
        <div class="form__contact__div">
            <label for="firstname">Prénom</label>
            <input type="text" name="firstname" id="firstname" require>
        </div>
        <div class="form__contact__div">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" require>
        </div>
        <div class="form__contact__div">
            <label for="phone">Téléphone</label>
            <input type="tel" name="phone" id="phone" require>
        </div>
        <div class="form__contact__div">
            <label for="commentary">Message</label>
            <textarea name="commentary" id="commentary"></textarea>
        </div>
        <div class="form__contact__div">
            <label for="reason">Motif</label>
            <select name="reason" id="reason">
                <option value="menu à emporter">Menu à emporter</option>
                <option value="buffet">Buffet</option>
                <option value="réservation de salle">Réservation de salle</option>
                <option value="Autres">Autres</option>
            </select>
        </div>
        <div class="form__contact__div">
            <label for="date_reservation">Date (A remplir pour toutes demande de réservation)</label>
            <input type="date" name="date_reservation" id="button_contact">
        </div>
        <div class="form__contact__div">
            <label for="hourly_reservation">Heure (A remplir pour toutes demande de réservation)</label>
            <input type="time" name="hourly_reservation" id="hourly_reservation">
        </div>
        <button class="custom__button hover__custom" id="button_contact" name="button_contact">Envoyer</button>
    </form>
    
</section> -->

<div class="line flux"></div>

<section class="section__opinion">

    <h2 class="title__custom">Donner votre avis</h2>

    <form method="post" class="form__opinion" id="opinion">
        <div class="form__opinion__div">
            <label for="name">Nom</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="form__opinion__div">
            <label for="opinion_text">Message</label>
            <textarea name="opinion_text" id="opinion_text"></textarea>
        </div>
        <div class="form__opinion__div">
            <label for="note">Note</label>
            <select name="note" id="note">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <button class="custom__button hover__custom" id="button_opinion" name="button_opinion">Envoyer</button>
    </form>


</section>
<?php
    require_once ('templates/footer.php');
    ?>