<?php
    require_once ("templates-admin/header-admin.php");
    require_once ("../lib/menu.php");

    $recipe = false;
    $errors = [];
    $messages = [];

    try {
        if(isset($_GET["id"])){
            $recipe = getRecipeById($pdo, (int)$_GET["id"]);
        }
        if($recipe){
            if(deleteRecipe($pdo, (int)$_GET["id"])){
                $messages[] = "L'article a bien été supprimé, redirection dans <span class='couldown'></span> s...";
            }else{
                $errors[] = "Une erreur s'est produite, redirection dans <span class='couldown'></span> s...";
            }
        }else{
            $errors[] = "L'article n'existe pas, redirection dans <span class='couldown'></span> s...";
        };
    }catch (PDOException $e){
        echo $e->getMessage();
    }
?>

    <section class="section__delete">

        <h1>Page de Suppression</h1>

        <hr>

        <?php foreach ($messages as $message) { ?>
            <div class="alert alert-success">
            <?= $message ?>
            </div>
        <?php }?>

        <?php foreach ($errors as $error) { ?>
            <div class="alert alert-danger">
            <?= $error ?>
            </div>
        <?php }?>

    </section>

    <script>setTimeout(() => {window.location.href="./carte.php"}, 4000);</script>
    <script src="../js/couldown.js"></script>
<?php
    require_once ("templates-admin/footer-admin.php");
?>