<?php


require_once "../config.php";
require_once "../Modeles/informationsModel.php";

try {
    $db = new PDO(MY_DB_DRIVER . ":host=" . MY_DB_HOST . ";dbname=" . MY_DB_NAME . ";charset=" . MY_DB_CHARSET . ";port=" . MY_DB_PORT, MY_DB_LOGIN, MY_DB_PWD);
} catch (Exception $e) {
    die($e->getMessage());
}

if (isset($_GET['theid'], $_GET['themail'], $_GET['themessage'], $_GET['thedate'])) {

    $insert = addInformations($db, $_GET['theid'], $_GET['themail'], $_GET['themessage'], $_GET['thedate']);
  //      var_dump($insert);
    if ($insert) {
        header("Location: ./");
        die();
    } else { 
        $message = "Désole, il y à un problème avec l'insertion. ";
    }
}
    $getData = getInformations($db);

    include "../Vues/informations.vue.html.php";

$db = null;

// faut il aussi fermer $getData et $insert??

