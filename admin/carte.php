<?php
    require_once ("templates-admin/header-admin.php");
    require_once ("../lib/menu.php");


    $categories = getCategorie($pdo);

    $recipes = getRecipe($pdo);

    $recipeWithCategories = getRecipeWithCategorie($pdo);

    $messages = [];
    $errors = [];

    try {
        $user_id = intval($_SESSION["user"]["id_user"]);
        if (isset($_POST["add_recipe"])){
            $result = addRecipe ($pdo, htmlspecialchars($_POST["name_recipe"], ENT_QUOTES), htmlspecialchars($_POST["description"], ENT_QUOTES), htmlspecialchars(strval($_POST["price"]), ENT_QUOTES), htmlspecialchars($_POST["take_away"], ENT_QUOTES), $user_id, htmlspecialchars($_POST["id_categorie"], ENT_QUOTES));
            if ($result) {
                $messages[] = "La recette a bien été ajoutée, redirection dans 3 secondes";
            } else {
                $errors[] = "Erreur lors de l'ajout de la recette, redirection dans 3 secondes";
            }
            echo "<meta http-equiv='refresh' content='3';URL=".$_SERVER['PHP_SELF'].".php?refresh=3";
        };
    }catch (PDOException $e) {
        echo $e->getMessage();
    }
?>

<section class="section__gestion__carte"> 

    <h1>Carte</h1>

    <hr>

    <table class="table table-hover table__custom">
        <tcaption>Liste des recettes</tcaption>
        <thead>
            <tr>
                <th scope="col" class="form__th">Nom</th>
                <th scope="col" class="disable">Prix</th>
                <th class="disable" scope="col">Catégorie</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recipeWithCategories as $key => $recipeWithCategorie) {?>
                <tr>
                    <td class="form__th"><?= $recipeWithCategorie["name_recipe"] ?></td>
                    <td  class="disable"><?= $recipeWithCategorie["price"] ?> €</td>
                    <td class="disable"><?= $recipeWithCategorie["name_categorie"] ?></td>
                    <td><a href="modification_carte.php?id=<?= $recipeWithCategorie['id_recipe'] ?>" class="button__custom">Modifier |</a> 
                        <button data-bs-toggle="modal" data-bs-target="#exampleModal<?= $recipeWithCategorie["id_recipe"] ?>" class="button__custom">Supprimer</button>
                            <div class="modal fade" id="exampleModal<?= $recipeWithCategorie["id_recipe"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="title-modal" id="exampleModalLabel">Suppression de l'article <?= $recipeWithCategorie["name_recipe"] ?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Attention, vous êtes sur le point de supprimer l'article <?= $recipeWithCategorie["name_recipe"] ?>. La suppression est définitive.
                                            Etes-vous sûr ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="button__custom btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                            <button type="button" class="button__custom"><a href="delete-recipe.php?id=<?=$recipeWithCategorie["id_recipe"] ?>">Supprimer</a></button>
                                        </div>
                                    </div>
                                </div>
                            </div></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>



    <hr>

    <form method="POST">
        <legend>Ajouter une recette</legend>
        <?php foreach ($messages as $message) { ?>
            <div class="alert alert-success"><?= $message; ?></div>
        <?php }?>
        <?php foreach ($errors as $error) { ?>
            <div class="alert alert-danger"><?= $error; ?></div>
        <?php }?>

        <div class="mb-3">
            <label for="name_recipe" class="form-label">Nom de la recette :</label>
            <input class="form-select" id="name_recipe" name="name_recipe"></input>
        </div>
        
        <div class="mb-3">
            <label for="description" class="form-label">Description : </label>
            <input class="form-select" id="description" name="description"></input>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prix :</label>
            <input class="form-select" id="price" name="price"></input>
        </div>
        <div class="mb-3">
            <label for="take_away" class="form-label">A emporter : </label>
            <select name="take_away" id="take_away">
                <option value="yes">OUI</option>
                <option value="no">NON</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="id_categorie" class="form-label">Catégorie : </label>
            <select name="id_categorie" id="id_categorie">
                <?php foreach ($categories as $key => $categorie) {?>
                    <option value="<?= $categorie['id_categorie'] ?>"><?= $categorie['name_categorie'] ?></option>
                <?php } ?>
            </select>
        </div>

        <input type="submit" class="button__custom" value="Ajouter" name="add_recipe">
        
    </form>




</section>


<?php
    require_once ("templates-admin/footer-admin.php");
?>
