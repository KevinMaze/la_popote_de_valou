<?php

// Vérification de l'existence du user
function verifyUserLogin(PDO $pdo, string $user, string $password):array|bool {

    $query = $pdo->prepare('SELECT * FROM user WHERE email = :email');
    $query->bindValue(':email', $user, PDO::PARAM_STR);
    $query->execute();
    $user = $query->fetch(PDO::FETCH_ASSOC);

    // Vérification du hash du mot de passe
    if($user && password_verify($password, $user["password"])) {
        return $user;
    }else {
        return false;
    }
}