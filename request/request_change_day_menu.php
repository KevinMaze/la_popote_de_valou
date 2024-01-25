<?php
try {
        if(isset($_GET["id"])){
            $dayMenu = dayMenuById($pdo, (int)$_GET["id"]);
            if($dayMenu === false){
                $errors[] = "Le menu du jour n'existe pas!";
            }
            if(!$dayMenu){
                $error = true;
            }
        }else {
            $error = true;
        }
    }catch (Exception $e){
        echo $e->getMessage();
    }

    try {
        if(isset($_POST["modify"])){
            $user_id = $_SESSION["user"]["id_user"];
            $result = changeDayMenu($pdo, (int)$_GET["id"], $_POST["day"], $_POST["entre"], $_POST["plat"], $_POST["dessert"]);
            if($result){
                $messages[] = "Le menu du jour a bien été modifié, redirection dans <span class='couldown'></span> s...";
            }else {
                $errors[] = "Une erreur s'est produite ! redirection dans <span class='couldown'></span> s...";
            
            }
        }
    }catch (Exception $e){
        echo $e->getMessage();
    }