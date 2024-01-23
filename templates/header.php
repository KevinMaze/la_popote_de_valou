<?php 
    require_once ('lib/main_menu.php');
    require_once ('lib/session.php');
    require_once ('lib/config.php');
    require_once ('lib/pdo.php');
    require_once ('lib/user.php');
    //recupère le nom de la page actuelle avec $_SERVER
    $currentPage = basename($_SERVER['SCRIPT_NAME']);
    $errors = [];
    require_once ('request/request_user_login.php');

?>

<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?= $mainMenu[$currentPage]["meta_description"]?>">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=PT+Sans+Narrow:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/button.css">
        <link rel="stylesheet" href="css/hover.css">
        <link rel="stylesheet" href="css/form_login.css">
        <link rel="shortcut icon" href="./assets/logopopotte_edited.png" type="image/x-icon">
        <title><?= $mainMenu[$currentPage]["head_tile"]?></title>
    </head>

    <body>
        
        <div class="div__nav">
            <nav class="navbar navbar-expand-lg rounded navbar__custom">
                <div class="container-fluid">
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="navbar-collapse d-lg-flex collapse" id="navbarsExample11">
                        <ul class="navbar-nav col-lg-12 justify-content-center  nav__div__list">
                            <?php foreach ($mainMenu as $key => $menuItem){
                                if($menuItem["include"] == true){ ?>
                                    <li class="nav-item hover__custom">
                                        <a class="nav-link" href="<?= $key ?>"><?= $menuItem["title"]?></a>
                                    </li>
                            <?php } }?>
                            <li class="nav-item hover__custom">
                                <?php if(isset($_SESSION["user"])) { ?>
                                <a class="nav-link" href="./admin/index_admin.php">Espace Pro</a>
                                <?php } else { ?>
                                <a class="nav-link" href="login.php">Connection</a>
                                <?php } ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
    
            <header class="header" style="background-image: url('<?= $mainMenu[$currentPage]["image"]?>')">
                <img src="assets/logopopotte_edited.png" alt="logo de la popotte" class="logo__header">
                <?php if ($mainMenu[$currentPage]["title"] === "Connection") { ?>
                    <form method="post" class="logo__header form">
                        <?php foreach ($errors as $error){ ?>
                            <div class="alert alert-danger">
                                <?= $error ?>
                            </div>
                        <?php } ?>
                        <div class="form__div">
                            <label for="email">Email</label>
                            <input type="text" name="email">
                        </div>
                        <div class="form__div">
                            <label for="password">Mot de passe</label>
                            <input type="password" name="password">
                        </div>
                        <div class="hover__custom">
                            <input type="submit" value="Se connecter" class="custom__button" name="loginUser">
                        </div>
                    </form>
                <?php } ?>

            </header>
        </div>