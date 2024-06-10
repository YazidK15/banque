<?php 

require_once '../Models/compte.php';


if (!isset ($_GET['action'])) {

    //Faire appelle à notre fonction fetchComptes()
    $comptes = fetchComptes();

    //Faire l'include de notre vue ../Views/comptes/index.php
    include '../Views/comptes/index.php';
} else {
    if ($_GET['action'] == 'create') {
        include '../Views/comptes/create.php';
    }
    if ($_GET["action"] == "insert") {
        var_dump($_POST);
        $numeroCompte = $_POST["numeroCompte"];
        $Solde = $_POST["Solde"];
        $FKCLIENT = $_POST["client"];
        insertCompte($numeroCompte, $solde, $FKCLIENT);
    }
}