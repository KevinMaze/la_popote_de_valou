<?php
    require_once ('templates-admin/header-admin.php');
    require_once ('../lib/contact-opinion.php');

    $contacts = getContact($pdo);

    $errors = [];
    $messages = [];
?>

<section class="section__contact__admin">

    <h2>Liste des contact</h2>

    <hr>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col" class="disable">Prénom</th>
                <th scope="col" class="disable">Email</th>
                <th scope="col">Motif</th>
                <th scope="col">Actions</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $key => $contact) {?>
                <tr>
                    <td><?= $contact['lastname'] ?></td>
                    <td class="disable"><?= $contact['firstname'] ?></td>
                    <td class="disable"><?= $contact['email'] ?></td>
                    <td><?= $contact['reason'] ?></td>
                    <td>
                        <button type="button" class="button__custom" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?= htmlentities($contact["id_contact"])?>">Voir Menu /</button>
                            <div class="modal fade " id="staticBackdrop<?= htmlentities($contact["id_contact"])?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Message de <?= $contact["lastname"]." ".$contact["firstname"]?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                    <div class="modal-body">
                                        <p>Motif : <?= $contact["reason"] ?></p>
                                        <p>Message : <?= $contact["commentary"] ?></p>
                                        <p>Heure : <?= $contact["hourly_reservation"] ?></p>
                                        <p>Date : <?= $contact["date_reservation"] ?></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="button__custom" data-bs-dismiss="modal">Fermer</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        <a href="mailto:<?= $contact['email'] ?>" class="button__custom">Répondre /</a>
                        <button data-bs-toggle="modal" data-bs-target="#exampleModal<?= $contact["id_contact"] ?>" class="button__custom">Supprimer</button>
                            <div class="modal fade" id="exampleModal<?= $contact["id_contact"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="title-modal" id="exampleModalLabel">Suppression du message de <?= $contact["firstname"]." ".$contact["lastname"]?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Attention, vous êtes sur le point de supprimer le message de <?= $contact["firstname"]." ".$contact["lastname"]?>. La suppression est définitive.
                                            Etes-vous sûr ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="button__custom btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                            <button type="button" class="button__custom"><a href="delete-contact.php?id=<?=$contact["id_contact"] ?>">Supprimer</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>


<?php
    require_once ('templates-admin/footer-admin.php');
?>