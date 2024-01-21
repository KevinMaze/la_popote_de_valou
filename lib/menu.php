<?php

// Récupération du menu du jour
function getDayMenu (PDO $pdo):array|bool
{
    $sql = ("SELECT * FROM day_menu");
    $query = $pdo->prepare($sql);
    $query->execute();
    $dayMenu = $query->fetch(PDO::FETCH_ASSOC);
    return $dayMenu;
}


// Récupérer les catégories
function getCategorie (PDO $pdo):array|bool 
{
    $sql = ("SELECT * FROM categorie");
    $query = $pdo->prepare($sql);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
};

// Récupérer les recettes
function getRecipeByCategorie (PDO $pdo):array|bool 
{
    $sql = ('SELECT * FROM recipe');
    $query = $pdo->prepare($sql);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}