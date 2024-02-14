<?php

require_once "../config.php";

require_once "../Modeles/informationsModel.php";


try {
    
    $db = new PDO(MY_DB_DRIVER . ":host=" . MY_DB_HOST . ";dbname=" . MY_DB_NAME . ";charset=" . MY_DB_CHARSET . ";port=" . MY_DB_PORT, MY_DB_LOGIN, MY_DB_PWD);
} catch (Exception $e) {
    die($e->getMessage());
}



if (isset($_POST['theid'], $_POST['themail'], $_POST['themessage'], $_POST['thedate'])) {

    
    $insert = addComments($db, $_POST['theid'], $_POST['themail'], $_POST['themessage'], $_POST['thedate']);
    
    if ($insert) {
        
        header("Location: ./?section=livredor");
        exit();
    } else {
        
        $message = "Erreur lors de l'insertion";
    }
}


$comments = getInformations($db);


$db = null;