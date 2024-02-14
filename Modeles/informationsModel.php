<?php

function getInformations(PDO $db): array
{
    $sql = "SELECT * FROM informations";
    $query = $db->query($sql);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $result;

}


function addInformations(PDO $db, string $theid, string $themail, string $themessage, string $thedate): bool|string
{
    
     $theid = htmlspecialchars(strip_tags(trim($theid)), ENT_QUOTES);
     $themail = filter_var($themail, FILTER_VALIDATE_EMAIL);
     $themessage = htmlspecialchars(strip_tags($themessage), ENT_QUOTES);
     $thedate = htmlspecialchars(strip_tags(trim($thedate)), ENT_QUOTES);
 
     
     if (empty($theid) || $themail === false || empty($themessage) || empty($thedate)) {
         return false;
     }
     
     $sql = "INSERT INTO informations (theid, themail, themessage, thedate) VALUES ('$theid', '$themail', '$themessage', '$thedate')";
     try {
         
         $db->exec($sql);
         
         return true;
     } catch (Exception $e) {
         
         return $e->getMessage();
     }
 
    
}