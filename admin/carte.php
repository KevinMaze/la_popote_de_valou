<?php
    require_once ("templates-admin/header-admin.php");
    require_once ("../lib/menu.php");


    $categories = getCategorie($pdo);

    $recipes = getRecipeByCategorie($pdo);

    $recipeByCategorie = getRecipeByCategorieId($pdo);

    $messages = [];
    $errors = [];

    try {
        $user_id = intval($_SESSION["user"]["id_user"]);
        if (isset($_POST["add_recipe"])){
            $result = addRecipe ($pdo, htmlspecialchars($_POST["name_recipe"], ENT_QUOTES), htmlspecialchars($_POST["description"], ENT_QUOTES), htmlspecialchars(strval($_POST["price"]), ENT_QUOTES), htmlspecialchars($_POST["take_away"], ENT_QUOTES), $user_id, htmlspecialchars($_POST["id_categorie"], ENT_QUOTES));
            if ($result) {
                $messages[] = "La recette a bien été ajoutée, redirection dans 3 secondes";
            } else {
                $errors[] = "Erreur lors de l'ajout de la recette";
            }
            echo "<meta http-equiv='refresh' content='0';URL=".$_SERVER['PHP_SELF'].".php?refresh=3000'>";
        };
    }catch (PDOException $e) {
        echo $e->getMessage();
    }
?>

<section class="section__gestion__carte">

    <h1>Carte</h1>

    <hr>

    <?php foreach ($categories as $key => $categorie) {?>
        <h2 class=""><?= $categorie['name_categorie'] ?></h2>
            <?php foreach ($recipes as $key => $recipe) {
                if ($recipe['id_categorie'] == $categorie['id_categorie']) {?>
                    <div>
                        <h3><?= $recipe["name_recipe"] ?></h3>
                        <p class="para__index"><?= $recipe["description"] ?> </p>
                        <p class="para__index"><?= $recipe["price"] ?> €</p>
                    </div>
            <?php } ?>
        <?php } ?>
    <?php } ?>

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
