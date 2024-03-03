<?php

/************************START FORM CONTACT******************/
// Ajout d'un contact
function addContact(PDO $pdo, string $lastname, string $firstname, string $email, string $phone, string $commentary, string $reason, string $date_reservation, string $hourly_reservation, int|null $id_buffet):bool
{
    $sql = "INSERT INTO contact (lastname, firstname, email, phone, commentary, reason, date_reservation, hourly_reservation, id_buffet) VALUE (:lastname, :firstname, :email, :phone, :commentary, :reason, :date_reservation, :hourly_reservation, :id_buffet)";
    $query = $pdo->prepare($sql);
    $query->bindValue(":lastname", $lastname, PDO::PARAM_STR);
    $query->bindValue(":firstname", $firstname, PDO::PARAM_STR);
    $query->bindValue(":email", $email, PDO::PARAM_STR);
    $query->bindValue(":phone", $phone, PDO::PARAM_STR);
    $query->bindValue(":commentary", $commentary, PDO::PARAM_STR);
    $query->bindValue(":reason", $reason, PDO::PARAM_STR);
    $query->bindValue(":date_reservation", $date_reservation, PDO::PARAM_STR);
    $query->bindValue(":hourly_reservation", $hourly_reservation, PDO::PARAM_STR);
    $query->bindValue(":id_buffet", $id_buffet, PDO::PARAM_INT);
    return $query->execute();
}

// Récupération de tous les contacts
function getContact(PDO $pdo):array
{
    $query = $pdo->prepare("SELECT * FROM contact");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

// Récupération d'un contact par son id
function getContactById (PDO $pdo, int $id_contact):bool|array
{
    $query = $pdo->prepare("SELECT * FROM contact WHERE id_contact = :id");
    $query->bindValue(":id", $id_contact, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch(PDO::FETCH_ASSOC);
}

// Suppression d'un contact
function deleteContact (PDO $pdo, int $id_contact):bool
{
    $query = $pdo->prepare("DELETE FROM contact WHERE id_contact = :id");
    $query->bindValue(":id", $id_contact, PDO::PARAM_INT);
    $query->execute();
    
    if($query->rowCount() > 0){
        return true;
    }else{
        return false;
    }
}

/************************END FORM CONTACT******************/

/************************START OPINION******************/
function addOpinion(PDO $pdo, string $firstname, string $opinion_text, int $note):bool
{
    $sql = "INSERT INTO opinion(firstname, opinion_text, note) VALUE (:name, :opinion_text, :note)";
    $query = $pdo->prepare($sql);
    $query->bindValue(":name", $firstname, PDO::PARAM_STR);
    $query->bindValue(":opinion_text", $opinion_text, PDO::PARAM_STR);
    $query->bindValue(":note", $note, PDO::PARAM_INT);
    return $query->execute();
}
/************************END OPINION******************/

