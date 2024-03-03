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

// Récupération liste users
function getUser(PDO $pdo):array {
    $query = $pdo->prepare('SELECT * FROM user');
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

// Ajout d'un user
function addUser(PDO $pdo, string $firstname, string $lastname, string $email, string $password, string $role):bool
{
    $query = $pdo->prepare('INSERT INTO user (firstname, lastname, email, password, role) VALUES (:firstname, :lastname, :email, :password, :role)');

    // Hashage du mot de passe
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query->bindValue(':firstname', $firstname, PDO::PARAM_STR);
    $query->bindValue(':lastname', $lastname, PDO::PARAM_STR);
    $query->bindValue(':email', $email, PDO::PARAM_STR);
    $query->bindValue(':password', $password, PDO::PARAM_STR);
    $query->bindValue(':role', $role, PDO::PARAM_STR);

    return $query->execute();
}

// Récupération d'un user par son id
function getUserById (PDO $pdo, int $id):array|bool
{
    $query = $pdo->prepare("SELECT * FROM user WHERE id_user = :id");
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch(PDO::FETCH_ASSOC);
}

// Modification d'un user
function modifyUser (PDO $pdo, string $firstname, string $lastname, string $email, string $password, string $role, int $id_user):bool
{
    $query = $pdo->prepare("UPDATE user SET firstname = :firstname, lastname = :lastname, email = :email, password = :password, role = :role WHERE id_user = :id");

    // Hashage du mot de passe
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query->bindValue(":firstname", $firstname, PDO::PARAM_STR);
    $query->bindValue(":lastname", $lastname, PDO::PARAM_STR);
    $query->bindValue(":email", $email, PDO::PARAM_STR);
    $query->bindValue(":password", $password, PDO::PARAM_STR);
    $query->bindValue(":role", $role, PDO::PARAM_STR);
    $query->bindValue(":id", $id_user, PDO::PARAM_INT);
    return $query->execute();
}

// Suppression d'un user
function deleteUser (PDO $pdo, int $id_user):bool
{
    $query = $pdo->prepare("DELETE FROM user WHERE id_user = :id");
    $query->bindValue(":id", $id_user, PDO::PARAM_INT);
    $query->execute();
    
    if($query->rowCount() > 0){
        return true;
    }else{
        return false;
    }
}