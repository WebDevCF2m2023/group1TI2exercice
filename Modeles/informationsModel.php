<?php

function getInformations(PDO $db) : array
{

        $sql = "SELECT * FROM informations";
        $query = $db->query($sql);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $query->closeCursor();
        return $result; 
    
}

function addInformations(PDO $db, string $theid, string $themail, string $themessage, string $thedate, )  // faut il chercher les id et date ici??
{
        
        $themail = filter_var($themail, FILTER_VALIDATE_EMAIL);
        $themessage = htmlspecialchars(strip_tags($themessage), ENT_QUOTES);
    if ($themail === false || empty($themessage)) {
        return false;
    }
    $sql = "INSERT INTO informations (themail, themessage) VALUES ('$theid', $themail', '$themessage', $thedate)";
    try {
        $db->exec($sql);
        return true;
    } catch (Exception $e) {
        return $e->getMessage();
    }
} 