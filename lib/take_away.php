<?php
require_once ("config.php");
require_once ("pdo.php");

function getTakeAway (PDO $pdo):array|bool
{
    $sql = ("SELECT * FROM recipe WHERE take_away = 'yes'");
    $query = $pdo->prepare($sql);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

echo json_encode(getTakeAway($pdo), JSON_UNESCAPED_UNICODE);
