<?php
// Notre fonction qui charge les informations
function getInformations(PDO $db)
{
 $sql = "SELECT * FROM informations ORDER BY date_heure ASC";
    $query = $db->query($sql);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $result;
}

// notre fonction qui insert dans informations
function addInformations(PDO $db)
{
    
}