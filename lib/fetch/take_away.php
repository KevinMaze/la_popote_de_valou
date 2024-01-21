<?php
require_once ('./lib/pdo.php');

// Récupérer menu par take away
function getTakeAway (PDO $pdo):array|bool 
{
    $sql = 'SELECT * FROM recipe WHERE take_away = "yes"';
    $query = $pdo->prepare($sql);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
};

echo json_encode(getTakeAway($pdo), JSON_INVALID_UTF8_IGNORE);


