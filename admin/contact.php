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
                <th scope="col">Prénom</th>
                <th scope="col">Email</th>
                <th scope="col">Motif</th>
                <th scope="col">Actions</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $key => $contact) {?>
                <tr>
                    <td><?= $contact['lastname'] ?></td>
                    <td><?= $contact['firstname'] ?></td>
                    <td><?= $contact['email'] ?></td>
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
                        <!-- <a href="delete-contact.php?id=<?= $contact['id'] ?>" class="btn btn-danger">Supprimer</a> -->
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>


<?php
    require_once ('templates-admin/footer-admin.php');
?>