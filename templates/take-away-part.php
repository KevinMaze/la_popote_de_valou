<?php foreach ($catagetories as $key => $categorie) {?>
            <div class="take-away__item">
                <h3><?= $categorie['name_categorie'] ?></h3>
                <?php foreach ($takeAway as $key => $recipe) {
                    if ($recipe['id_categorie'] == $categorie['id_categorie']) {?>
                        <p class="para__index"><?= $recipe["name_recipe"] ?></p>
                        <p class="para__index"><?= $recipe["price"] ?> €</p>
                <?php } ?>
            <?php } ?>
            </div>
        <?php } ?>