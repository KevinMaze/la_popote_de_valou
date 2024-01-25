<?php
/********************* START DAY MENU************/

// Récupération des menus du jour
function getDayMenu (PDO $pdo):array|bool
{
    $sql = ("SELECT * FROM day_menu");
    $query = $pdo->prepare($sql);
    $query->execute();
    $dayMenu = $query->fetchAll(PDO::FETCH_ASSOC);
    return $dayMenu;
}

// Récupération daymenu avec id
function dayMenuById (PDO $pdo, int $id):array|bool
{
    $sql = ("SELECT * FROM day_menu WHERE id_day_menu = :id");
    $query = $pdo->prepare($sql);
    $query->bindValue(":id", $id, PDO::PARAM_INT);
    $query->execute();
    $dayMenu = $query->fetch(PDO::FETCH_ASSOC);
    return $dayMenu;
}

// Modification daymenu
function changeDayMenu (PDO $pdo, int $id, string $day, string $entre, string $plat, string $dessert):bool
{
    $sql = ("UPDATE day_menu SET day = :day, entre = :entre, plat = :plat, dessert = :dessert WHERE id_day_menu = :id");
    $query = $pdo->prepare($sql);
    $query->bindValue(":id", $id, PDO::PARAM_INT);
    $query->bindValue(":day", $day, PDO::PARAM_STR);
    $query->bindValue(":entre", $entre, PDO::PARAM_STR);
    $query->bindValue(":plat", $plat, PDO::PARAM_STR);
    $query->bindValue(":dessert", $dessert, PDO::PARAM_STR);
    return $query->execute();
}

/***************END DAY MENU ****************/


/**************START CARTE/MENU ************/

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

// Récupérer les recettes par catégorie
function getRecipeByCategorieId (PDO $pdo):array|bool 
{
    $sql = "SELECT * FROM categorie INNER JOIN recipe ON categorie.id_categorie = recipe.id_categorie";
    $query = $pdo->prepare($sql);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}



/**************END CARTE/MENU ************/