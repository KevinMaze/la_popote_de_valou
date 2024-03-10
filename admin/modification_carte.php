<?php
    require_once ("templates-admin/header-admin.php");
    require_once ("../lib/menu.php");
    $error = false;
    $messages = [];
    $errors = [];

    try {
        if(isset($_GET["id"])){
            $recipe = getRecipeById($pdo, (int)$_GET["id"]);
            $categories = getCategorie($pdo);
            if($recipe === false){
                $errors[] = "La recette n'existe pas!";
            }
            if(!$recipe){
                $error = true;
            }
        }else {
            $error = true;
        }
    }catch (Exception $e){
        echo $e->getMessage();
    }

    try {
        if(isset($_POST["modify_recipe"])){
            $user_id = $_SESSION["user"]["id_user"];
            $result = modifyRecipe($pdo, htmlspecialchars($_POST["name_recipe"], ENT_IGNORE, 'UTF-8'), htmlspecialchars($_POST["description"], ENT_IGNORE, 'UTF-8'), htmlspecialchars($_POST["price"], ENT_IGNORE, 'UTF-8'), htmlspecialchars($_POST["take_away"], ENT_IGNORE, 'UTF-8'), $user_id, htmlspecialchars($_POST["id_categorie"], ENT_IGNORE, 'UTF-8'), (int)$_GET["id"]);
            if($result){
                $messages[] = "La recette a bien été modifiée, redirection dans 3 s...";
            }else {
                $errors[] = "Une erreur s'est produite ! redirection dans 3 s...";
            
            }
            // echo "<meta http-equiv='refresh' content='3';URL='__DIR__/la_popote_de_valou/admin/modification_carte.php?refresh=3'";
        }
    }catch (Exception $e){
        echo $e->getMessage();
    };

    var_dump(__DIR__)
?>



<?php if(!$error) {?>

    <?php require_once ('templates-admin/modification_carte_part.php') ?>

<?php }else { ?>
    <div class="alert alert-danger">Une erreur s'est produite !</div>
<?php } ?>

<?php
    require_once ("templates-admin/footer-admin.php");
?>