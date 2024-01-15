<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="La cuisine comme à la maison">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=PT+Sans+Narrow:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="shortcut icon" href="./assets/logopopotte_edited.png" type="image/x-icon">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/button.css">
        <link rel="stylesheet" href="css/hover.css">
        <title>La Popotte de Valou</title>
    </head>

    <body>
        
        <div class="div__nav">
            <nav class="navbar navbar-expand-lg rounded navbar__custom">
                <div class="container-fluid">
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="navbar-collapse d-lg-flex collapse nav__div__list" id="navbarsExample11">
                        <ul class="navbar-nav col-lg-6 justify-content-lg-around">
                            <li class="nav-item hover__custom">
                            <a class="nav-link" aria-current="page" href="#">Accueil</a>
                            </li>
                            <li class="nav-item hover__custom">
                            <a class="nav-link" href="#">Menu</a>
                            </li>
                            <li class="nav-item hover__custom">
                            <a class="nav-link" href="#">Buffet et Repas entreprise</a>
                            </li>
                            <li class="nav-item hover__custom">
                            <a class="nav-link" href="#">Privatisation de salle</a>
                            </li>
                            <li class="nav-item hover__custom">
                            <a class="nav-link" href="#">Gâteaux</a>
                            </li>
                            <li class="nav-item hover__custom">
                            <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                        <div class="d-lg-flex col-lg-3 justify-content-lg-end div__button">
                            <a class="button__custom">Connection</a>
                        </div>
                    </div>
                </div>
            </nav>
    
            <header class="header">
                <img src="assets/logopopotte_edited.png" alt="logo de la popotte" class="logo__header">
            </header>
        </div>

        <div class="line"></div>
        
        <section class="section__index">
            <h1 class="title__custom">"Une cuisine faite maison avec des produits frais et un accueil chaleureux"</h1>
            <div class="carousel">
                <img src="assets/salle-gauche.jpg" alt="">
                <img src="assets/verranda-2.jpg" alt="">
                <img src="assets/verranda.jpg" alt="">
            </div>
            <p class="para__index"><img src="assets/flocon.png" alt="" class="flocon">Salle et véranda climatisée et terrasse couverte</p>
        </section>
        
        <div class="line"></div>
        
        <section class="section__presentation">
            <img src="assets/valou.jpg" alt="" class="img__valou">
            <img src="assets/maison.jpg" alt="" class="logo__maison">
            <p class="para__presentation">Toute l'équipe vous accueil dans une ambiance chaleureuse. Tous nos plats sont élaborés et préparés sur place aevc des produits frais et de saisons.</p>
        </section>
        
        <div class="line"></div>

        <section class="section__actu">
            <h2 class="title__custom">Nos Actualitées</h2>
            <p class="para__actu">Suivez ici l'actualité de la Popotte! Retrouvez toutes nos publications Facebook et Instagram ici</p>
            <div class="section__actu__img">
                <img src="assets/facebook.png" alt="">
                <img src="assets/insta.png" alt="">
            </div>
            <p class="para__actu">Abonnez-vous à nos réseaux !</p>
        </section>


<?php include_once 'templates/footer.php'; ?>