<?php

// Récupération du menu du jour en fonction du paramètre id_day_menu
function getDayMenuById (PDO $pdo, int $id_day_menu):array|bool
{
    $dayMenu = $_GET["day"];
    $sql = "SELECT * FROM day_menu WHERE id_day_menu = :id_day_menu";
    $query = $pdo->prepare($sql);
    $query->bindValue(":id_day_menu", $id_day_menu, PDO::PARAM_INT);
    $query->execute();
    $dayMenu = $query->fetch(PDO::FETCH_ASSOC);
    return $dayMenu;
}

echo json_encode(getDayMenuById($pdo, $_GET["day"]));