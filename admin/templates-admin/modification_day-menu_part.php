<section>
        <h2>Modification menu de <?= htmlentities($dayMenu["day"])?></h2>

        <hr>

        <?php foreach ($messages as $message) { ?>
            <div class="alert alert-success"><?= $message; ?></div>
        <?php }?>
        <?php foreach ($errors as $error) { ?>
            <div class="alert alert-danger"><?= $error; ?></div>
        <?php }?>

        <form method="POST" id="form_day-menu">
            <div class="mb-3">
                <label for="day" class="form-label">Jour</label>
                <input class="form-select" id="day" name="day" value="<?= htmlentities($dayMenu["day"])?>"></input>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="entre" class="form-label">Entrée</label>
                <input class="form-select" id="entre" name="entre"></input>
            </div>
            <div class="mb-3">
                <label for="plat" class="form-label">Plat</label>
                <input class="form-select" id="plat" name="plat"></input>
            </div>
            <div class="mb-3">
                <label for="dessert" class="form-label">Dessert</label>
                <input class="form-select" id="dessert" name="dessert"></input>
            </div>
            <input type="submit" class="button__custom" value="Modifier" name="modify">
        </form>
    </section>