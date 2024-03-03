<?php
    require_once ("templates-admin/header-admin.php");
    require_once ("../lib/menu.php");
    $error = false;
    $messages = [];
    $errors = [];
    try {
        if(isset($_GET["id"])){
            $dayMenu = dayMenuById($pdo, (int)$_GET["id"]);
            if($dayMenu === false){
                $errors[] = "Le menu du jour n'existe pas!";
            }
            if(!$dayMenu){
                $error = true;
            }
        }else {
            $error = true;
        }
    }catch (Exception $e){
        echo $e->getMessage();
    }

    try {
        if(isset($_POST["modify"])){
            $user_id = $_SESSION["user"]["id_user"];
            $result = changeDayMenu($pdo, (int)$_GET["id"], $_POST["day"], $_POST["entre"], $_POST["plat"], $_POST["dessert"]);
            if($result){
                $messages[] = "Le menu du jour a bien été modifié, redirection dans <span class='couldown'></span> s...";
            }else {
                $errors[] = "Une erreur s'est produite ! redirection dans <span class='couldown'></span> s...";
            
            }
            echo "<meta http-equiv='refresh' content='3';URL=".$_SERVER['PHP_SELF'].".php?refresh=3";
        }
    }catch (Exception $e){
        echo $e->getMessage();
    }
?>

<?php if(!$error) {?>

    <?php require_once ('templates-admin/modification_day-menu_part.php') ?>

<?php }else { ?>
    <div class="alert alert-danger">Une erreur s'est produite !</div>
<?php } ?>

<?php
    require_once ("templates-admin/footer-admin.php");
?>