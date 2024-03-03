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
                        <a href="mailto:<?= $contact['email'] ?>" class="button__custom">Répondre</a>
                        <!-- <a href="delete-contact.php?id=<?= $contact['id'] ?>" class="btn btn-danger">Supprimer</a> -->
                </tr>
            <?php } ?>
        </tbody>
    </table>

</section>


<?php
    require_once ('templates-admin/footer-admin.php');
?>