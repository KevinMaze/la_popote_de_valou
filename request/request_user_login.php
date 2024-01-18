<?php

try {
    // Si le bouton loginUser est appuyé
    if(isset($_POST["loginUser"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $user = verifyUserLogin($pdo, $email, $password);
        if($user) {
            // Regénération du cookie (id) de session pour éviter les faille de session hijacking
            session_regenerate_id(true);
            $_SESSION["user"] = $user;
            if($user["role"] === "admin") {
                header("Location: ./admin/index_admin.php");
            }else {
                header("Location: ./index.php");
            };
        }else {
            $error[] = "Email ou mot de passe incorrect";
        }
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}