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

function addRecipe (PDO $pdo, string $name_recipe, string $description, float $price, string $take_away, int $id_user, int $id_categorie):bool
{
    $sql = "INSERT INTO recipe (name_recipe, description, price, take_away, id_user, id_categorie) VALUE (:name_recipe, :description, :price, :take_away, :id_user, :id_categorie)";
    $query = $pdo->prepare($sql);
    $query->bindValue(":name_recipe", $name_recipe, PDO::PARAM_STR);
    $query->bindValue(":description", $description, PDO::PARAM_STR);
    $query->bindValue(":price", $price, PDO::PARAM_STR);
    $query->bindValue(":take_away", $take_away, PDO::PARAM_STR);
    $query->bindValue(":id_user", $id_user, PDO::PARAM_INT);
    $query->bindValue(":id_categorie", $id_categorie, PDO::PARAM_INT);
    return $query->execute();
}



/**************END CARTE/MENU ************/