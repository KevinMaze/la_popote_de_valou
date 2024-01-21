<?php foreach ($categories as $key => $categorie) {?>
        <h2 class="title__custom"><?= $categorie['name_categorie'] ?></h2>
            <?php foreach ($recipes as $key => $recipe) {
                if ($recipe['id_categorie'] == $categorie['id_categorie']) {?>
                    <div>
                        <h3><?= $recipe["name_recipe"] ?></h3>
                        <p class="para__index"><?= $recipe["description"] ?> </p>
                        <p class="para__index"><?= $recipe["price"] ?> €</p>
                    </div>
            <?php } ?>
        <?php } ?>
    <div class="line flux"></div>
<?php } ?>

