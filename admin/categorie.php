<?php
    require_once ("templates-admin/header-admin.php");
    require_once ("../lib/menu.php");

    $categories = getCategorie($pdo);

    $messages = [];
    $errors = [];

    try {
        if(isset($_POST["add_categorie"])){
            $result = addCategorie($pdo, htmlspecialchars($_POST["name_categorie"], ENT_QUOTES));
            if($result){
                $messages[] = "La catégorie a bien été ajoutée, redirection dans 3 secondes";
            }else{
                $errors[] = "Erreur lors de l'ajout de la catégorie, redirection dans 3 secondes";
            }
            echo "<meta http-equiv='refresh' content='3';URL=".$_SERVER['PHP_SELF'].".php?refresh='3";
        }
    }catch(Exception $e) {
        echo $e->getMessage();
    }
?>

<section>

    <h1>Categorie</h1>

    <hr>

    <table class="table table-hover table__custom">
        <tcaption>Liste des catégories</tcaption>
        <thead>
            <tr>
                <th scope="col">Catégories</th> 
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $key => $categorie) {?>
                <tr>
                    <td><?= $categorie["name_categorie"] ?></td>
                    <td><button data-bs-toggle="modal" data-bs-target="#exampleModal<?= $categorie["id_categorie"] ?>" class="button__custom">Supprimer</button>
                            <div class="modal fade" id="exampleModal<?= $categorie["id_categorie"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="title-modal" id="exampleModalLabel">Suppression de l'article <?= $categorie["id_categorie"] ?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Attention, vous êtes sur le point de supprimer l'article <?= $categorie["id_categorie"] ?>. La suppression est définitive.
                                            Etes-vous sûr ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="button__custom btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                            <button type="button" class="button__custom"><a href="delete-categorie.php?id=<?= $categorie["id_categorie"] ?>">Supprimer</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <hr>

    <form method="POST">
        <legend>Ajouter une catégorie</legend>
        <?php foreach ($messages as $message) { ?>
            <div class="alert alert-success"><?= $message; ?></div>
        <?php }?>
        <?php foreach ($errors as $error) { ?>
            <div class="alert alert-danger"><?= $error; ?></div>
        <?php }?>

        <div class="mb-3">
            <label for="name_categorie" class="form-label">Nom de la catégorie :</label>
            <input class="form-select" id="name_categorie" name="name_categorie"></input>
        </div>
        
        <input type="submit" class="button__custom" value="Ajouter" name="add_categorie">
    </form>

</section>


<?php
    require_once ("templates-admin/footer-admin.php");
?>