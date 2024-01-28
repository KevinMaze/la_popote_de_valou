<?php 
    require_once ('../lib/config.php');
    require_once ('../lib/pdo.php');
    require_once ('../lib/session.php');
?>

<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/style_admin.css">
        <link rel="stylesheet" href="../css/button.css">
        <link rel="stylesheet" href="../css/hover.css">
        <link rel="shortcut icon" href="../assets/logopopotte_edited.png" type="image/x-icon">
        <title>Administration</title>
    </head>
    <body>
    <header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow header__custom" data-bs-theme="dark">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="../index.php"><img src="../assets/logopopotte_edited.png" alt="Logo de la popotte">La Popotte de Valou</a>
        <div class="navbar-nav flex-row d-md-none">
            <div class="nav-item text-nowrap">
                <button class="nav-link px-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-list"></i>
                </button>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <div class="sidebar border-right col-md-3 col-lg-2 p-0 sidebar__custom">
                <div class="offcanvas-md offcanvas-end" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
                    <div class="offcanvas-header">
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
                    </div>
                    <div class="d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto siderbar__custom__left">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2 custom__button  hover__custom" href="./index_admin.php">
                                <i class="bi bi-house-fill"></i>
                                    Google Analytics
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2 custom__button hover__custom" href="./day-menu.php">
                                <i class="bi bi-calendar-day"></i>
                                    Menu du jour
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2 custom__button hover__custom" href="carte.php">
                                <i class="bi bi-book"></i>
                                    Carte
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2 custom__button hover__custom" href="#">
                                <i class="bi bi-basket"></i>
                                    Buffet
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2 custom__button hover__custom" href="#">
                                <i class="bi bi-images"></i>
                                    Images
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2 custom__button hover__custom" href="#">
                                <i class="bi bi-person"></i>
                                    Comptes
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2 custom__button hover__custom" href="#">
                                <i class="bi bi-hourglass"></i>
                                    Horaires
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center gap-2 custom__button hover__custom" href="#">
                                <i class="bi bi-person-lines-fill"></i>
                                    Contacts
                                </a>
                            </li>

                            <hr class="my-3 line-navbar">

                            <p class="d-flex align-items-center gap-2"><i class="bi bi-person"></i><?= $_SESSION["user"]["firstname"]?> <?= $_SESSION["user"]["lastname"]?></p>
                            <li>
                                <a class="nav-link d-flex align-items-center gap-2 custom__button hover__custom" href="../index.php">
                                <i class="bi bi-door-open"></i>
                                    Retour
                                </a>
                            </li>
                            <li>
                                <a class="nav-link d-flex align-items-center gap-2 custom__button hover__custom" href="../templates/deconnection.php">
                                <i class="bi bi-door-closed"></i>
                                    Déconnexion
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">