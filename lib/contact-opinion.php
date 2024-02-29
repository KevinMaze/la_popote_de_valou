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

/************************END FORM CONTACT******************/

/************************START OPINION******************/

/************************END OPINION******************/

