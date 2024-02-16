<?php

require_once "../config.php";

require_once "../Modeles/informationsModel.php";


try {
    
    $db = new PDO(MY_DB_DRIVER . ":host=" . MY_DB_HOST . ";dbname=" . MY_DB_NAME . ";charset=" . MY_DB_CHARSET . ";port=" . MY_DB_PORT, MY_DB_LOGIN, MY_DB_PWD);
} catch (Exception $e) {
    die($e->getMessage());
}



if (isset ($_POST['themail'], $_POST['themessage'])) {

    
    $insert = addInformations($db, $_POST['themail'], $_POST['themessage']);
    
    if ($insert) {
        
        header("Location: ./");
        exit();
    } else {
        
        $message = "Erreur lors de l'insertion";
    }
}


$informations = getInformations($db);


include_once "../Vues/informations.vue.html.php";