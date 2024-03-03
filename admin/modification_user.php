<?php
    require_once ("templates-admin/header-admin.php");
    require_once ("../lib/user.php");

    $error = false;
    $messages = [];
    $errors = [];

    try {
        if(isset($_GET["id"])){
            $user = getUserById($pdo, (int)$_GET["id"]);
            if($user === false){
                $errors[] = "L'utilisateur n'existe pas!";
            }
            if(!$user){
                $error = true;
            }
    }
    }catch (Exception $e){
        echo $e->getMessage();
    }

    try {
        if(isset($_POST["modify_user"])){
            $result = modifyUser($pdo, htmlspecialchars($_POST["firstname"], ENT_QUOTES), htmlspecialchars($_POST["lastname"], ENT_QUOTES), htmlspecialchars($_POST["email"], ENT_QUOTES), htmlspecialchars($_POST["password"], ENT_QUOTES), htmlspecialchars($_POST["role"], ENT_QUOTES), (int)$_GET["id"]);
            if($result){
                $messages[] = "L'utilisateur a bien été modifié, redirection dans 3 s...";
            }else {
                $errors[] = "Une erreur s'est produite ! redirection dans 3 s...";
            
            }
            echo "<meta http-equiv='refresh' content='3';URL=".__DIR__."\user.php".".php?refresh=3";
        }
    }catch (Exception $e){
        echo $e->getMessage();
    }

?>

<?php if(!$error) {?>

    <?php require_once ('templates-admin/modification_user_part.php') ?>

<?php }else { ?>
    <div class="alert alert-danger">Une erreur s'est produite !</div>
<?php } ?>

<?php
    require_once ("templates-admin/footer-admin.php");
?>