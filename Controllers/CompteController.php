<?php 

require_once '../Models/compte.php';
require_once '../Models/client.php';


if (!isset ($_GET['action'])) {

    //Faire appelle à notre fonction fetchComptes()
    $comptes = fetchComptes();
    include '../Views/comptes/index.php';

} else {
    if ($_GET['action'] == 'create') {
        $clients = fetchClients();
        include '../Views/comptes/create.php';
    }

    if ($_GET["action"] == "insert") {
        var_dump($_POST);
        $numeroCompte = $_POST["numeroCompte"];
        $solde = $_POST["solde"];
        $FKCLIENT = $_POST["client"];
        insertComptes($numeroCompte, $solde, $FKCLIENT);
        header("Location: CompteController.php");

    }
    
    if ($_GET["action"] == 'details'){
        $id = $_GET["id"];
        $compte = getCompteByID($id); 
        include '../Views/comptes/details.php';
    }
}