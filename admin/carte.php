<?php
    require_once ("templates-admin/header-admin.php");
    require_once ("../lib/menu.php");

    $categories = getCategorie($pdo);

    $recipes = getRecipeByCategorie($pdo);

    $recipeByCategorie = getRecipeByCategorieId($pdo);

    var_dump($recipeByCategorie);
?>

<section class="section__gestion__carte">

    <h1>Carte</h1>

    <hr>

    <?php foreach ($recipeByCategorie as $key => $item) {?>
        <p><?= $item['name_categorie']?></p>
        <?php if ($recipeByCategorie["categorie.id_categorie"] == $recipeByCategorie["recipe.id_categorie"]) {?>
            <p><?= $recipeByCategorie['name_recipe']?></p>
            <?php } ?>
    <?php } ?>




</section>


<?php
    require_once ("templates-admin/footer-admin.php");
?>
