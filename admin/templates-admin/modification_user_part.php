
<section>
    <h2>Modification menu de <?= htmlentities($user["firstname"].' '.$user["lastname"])?></h2>

    <hr>

    <?php foreach ($messages as $message) { ?>
        <div class="alert alert-success"><?= $message; ?></div>
    <?php }?>
    <?php foreach ($errors as $error) { ?>
        <div class="alert alert-danger"><?= $error; ?></div>
    <?php }?>

    <form method="POST" id="form_day-menu">
        <div class="mb-3">
            <label for="firstname" class="form-label">Nom</label>
            <input class="form-select" id="day" name="firstname" value="<?= htmlentities($user["firstname"])?>"></input>
        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label">Prénom</label>
            <input class="form-select" id="lastname" name="lastname" value="<?= htmlentities($user["lastname"])?>"></input>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input class="form-select" id="email" name="email" value="<?= htmlentities($user["email"])?>"></input>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input class="form-select" id="password" name="password"></input>
        </div>

        <div class="mb-3">
            <label for="role" class="form-label">Rôle</label>
            <select class="form-select" id="role" name="role">
                <option value="admin">Administrateur</option>
                <option value="user">Employé</option>
            </select>
        </div>

        <input type="submit" class="button__custom" value="Modifier" name="modify_user">
    </form>
</section>