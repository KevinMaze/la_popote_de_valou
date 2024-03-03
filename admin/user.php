<?php
    require_once ('templates-admin/header-admin.php');
    require_once ('../lib/user.php');

    $users = getUser($pdo);

    $messages = [];
    $errors = [];

    try {
        if(isset($_POST["add_user"])){
            $result = addUser($pdo, htmlspecialchars($_POST["firstname"], ENT_QUOTES), htmlspecialchars($_POST["lastname"], ENT_QUOTES), htmlspecialchars($_POST["email"], ENT_QUOTES), htmlspecialchars($_POST["password"], ENT_QUOTES), htmlspecialchars($_POST["role"], ENT_QUOTES));
            if ($result) {
                $messages[] = "L'utilisateur a bien été ajouté, redirection dans 3 secondes";
            } else {
                $errors[] = "Erreur lors de l'ajout de l'utilisateur, redirection dans 3 secondes";
        }
        echo "<meta http-equiv='refresh' content='3';URL=".$_SERVER['PHP_SELF'].".php?refresh=3";
    }
    }catch (PDOException $e){
        echo $e->getMessage();
    }


    // var_dump(__DIR__."\user.php")
?>

<section class="section__user">

    <h2>Utilisateurs Enregistrés</h2>

    <hr>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Prénom</th>
                <th scope="col" class="disable">Nom</th>
                <th scope="col" class="disable">Email</th>
                <th scope="col">Rôle</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $key => $user) {?>
                <tr>
                    <td><?= $user["lastname"] ?></td>
                    <td class="disable"><?= $user["firstname"] ?></td>
                    <td class="disable"><?= $user["email"] ?></td>
                    <td><?= $user["role"] ?></td>
                    <td>
                        <a class="button__custom" href="modification_user.php?id=<?= $user["id_user"]?>">Modifier</a>
                        <button data-bs-toggle="modal" data-bs-target="#exampleModal<?= $user["id_user"] ?>" class="button__custom">Supprimer</button>
                            <div class="modal fade" id="exampleModal<?= $user["id_user"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="title-modal" id="exampleModalLabel">Suppression de l'article <?= $user["firstname"]." ".$user["lastname"]?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Attention, vous êtes sur le point de supprimer l'article <?= $user["firstname"]." ".$user["lastname"]?>. La suppression est définitive.
                                            Etes-vous sûr ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="button__custom btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                            <button type="button" class="button__custom"><a href="delete-user.php?id=<?=$user["id_user"] ?>">Supprimer</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </td>
                </tr>
                <?php } ?>
        </tbody>
    </table>

</section>

<hr>

<section class="section__add__user">

    <?php foreach ($messages as $message) { ?>
        <div class="alert alert-success"><?= $message; ?></div>
    <?php }?>
    <?php foreach ($errors as $error) { ?>
        <div class="alert alert-danger"><?= $error; ?></div>
    <?php }?>
    
    <h2>Ajouter un utilisateur</h2>

    <hr>

    <form method="post" class="form__add__user">
        <div class="mb-3">
            <label for="lastname" class="form-label">Nom</label>
            <input type="text" class="form-control" id="lastname" required name="lastname">
        </div>
        <div class="mb-3">
            <label for="firstname" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="firstname" require name="firstname">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" required name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="password" require name="password">
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Rôle</label>
            <select class="form-select" id="role" name="role">
                <option value="admin">Administrateur</option>
                <option value="user">Employé</option>
            </select>
        </div>
        <button type="submit" class="button__custom" name="add_user">Ajouter</button>
    </form>
</section>




<?php
    require_once ('templates-admin/footer-admin.php');
?>