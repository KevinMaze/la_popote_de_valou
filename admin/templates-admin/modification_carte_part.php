
<section class="section__modification__carte">

    <h2>Modification de la recette <?= htmlentities($recipe["name_recipe"])?></h2>

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
            <input class="form-select" id="name_recipe" name="name_recipe" value="<?= htmlentities($recipe["name_recipe"])?>"></input>
        </div>
        
        <div class="mb-3">
            <label for="description" class="form-label">Description : </label>
            <input class="form-select" id="description" name="description" value="<?= htmlentities($recipe["description"], ENT_QUOTES)?>"></input>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prix :</label>
            <input class="form-select" id="price" name="price" value="<?= htmlentities($recipe["price"])?>"></input>
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

        <input type="submit" class="button__custom" value="Modifier" name="modify_recipe">
    </form>
</section>