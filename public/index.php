<?php

// Chargement des dépendances

// Connexion à la base de donnée

// Si le formulaire a été envoyé

    // On insert dans la table `informations` si valide

// on récupère toutes les entrées de la table
// `informations`

// on charge le template qui affiche la vue

// on ferme la connexion 


// chargement de configuration (pas de soucis si déjà appelé dans index.php car require_once)
require_once "../config.php";
// chargement du modèle de la table comments
require_once "../model/informationsModel.php";

// connexion à la DB
try {
    // création d'une instance de PDO - Connexion à la base de données
    $db = new PDO(MY_DB_DRIVER . ":host=" . MY_DB_HOST . ";dbname=" . MY_DB_NAME . ";charset=" . MY_DB_CHARSET . ";port=" . MY_DB_PORT, MY_DB_LOGIN, MY_DB_PWD);
} catch (Exception $e) {
    die($e->getMessage());
}


// si le formulaire a été soumis
if (isset($_POST['theid'], $_POST['themail'], $_POST['themessage'], $_POST['thedate'])) {

    // on appelle la fonction d'insertion dans la DB
    $insert = addComments($db, $_POST['theid'], $_POST['themail'], $_POST['themessage'], $_POST['thedate']);
    // si l'insertion a réussi
    if ($insert) {
        // on redirige vers la page actuelle
        header("Location: ./?section=livredor");
        exit();
    } else {
        // sinon, on affiche un message d'erreur
        $message = "Erreur lors de l'insertion";
    }
}

// on récupère les commentaires
$comments = getComments($db);

// fermeture de la connexion
$db = null;