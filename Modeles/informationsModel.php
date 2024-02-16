<?php

function getInformations(PDO $db) : array
{

        $sql = "SELECT * FROM informations";
        $query = $db->query($sql);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $query->closeCursor();
        return $result; 
    
}

function addInformations(PDO $db, string $themail, string $themessage)
{

        $themail = filter_var($themail, FILTER_VALIDATE_EMAIL);
        $themessage = htmlspecialchars(strip_tags($themessage), ENT_QUOTES);
    if ($themail === false || empty($themessage)) {
        var_dump($themail);
        var_dump($themessage);
        return false;
    }
    $sql = "INSERT INTO informations (themail, themessage) VALUES ('$themail', '$themessage')";
    try {
        $db->exec($sql);
        return true;
    } catch (Exception $e) {
        var_dump($db);
        return $e->getMessage();
    }
} 