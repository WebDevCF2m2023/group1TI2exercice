<?php
// Notre fonction qui charge les informations
function getInformations(PDO $db): array
{
    $sql = "SELECT * FROM informations";
    $query = $db->query($sql);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $result;

}

// notre fonction qui insert dans informations
function addInformations(PDO $db, string $theid, string $themail, string $themessage, string $thedate): bool|string
{
        /*
     * On récupère les données en assurant leur sécurité
     *
     * On utilise la fonction htmlspecialchars pour convertir les caractères spéciaux en entités HTML
     * Le paramètre ENT_QUOTES permet de convertir les guillemets doubles et simples
     * On utilise la fonction strip_tags pour supprimer les balises HTML et PHP
     * On utilise la fonction trim pour supprimer les espaces en début et fin de chaîne
     */

     $theid = htmlspecialchars(strip_tags(trim($theid)), ENT_QUOTES);
     // false si le courriel n'est pas valide, sinon on le garde
     $themail = filter_var($themail, FILTER_VALIDATE_EMAIL);
     $themessage = htmlspecialchars(strip_tags($themessage), ENT_QUOTES);
     $thedate = htmlspecialchars(strip_tags(trim($thedate)), ENT_QUOTES);
 
     // si les données ne sont pas valides, on envoie false
     if (empty($theid) || $themail === false || empty($themessage) || empty($thedate)) {
         return false;
     }
     // on prépare la requête
     $sql = "INSERT INTO informations (theid, themail, themessage, thedate) VALUES ('$theid', '$themail', '$themessage', '$thedate')";
     try {
         // on exécute la requête
         $db->exec($sql);
         // si tout s'est bien passé, on renvoie true
         return true;
     } catch (Exception $e) {
         // sinon, on renvoie le message d'erreur
         return $e->getMessage();
     }
 
    
}