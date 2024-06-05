<?php 

require_once("bdd.php");

// Crée la fonction fetchComptes qui sera appeler dans ClientController.php

function fetchComptes(){
    $bdd = new bdd();
    $conn = $bdd->connect();
    $request = $conn->prepare("SELECT ID, NumeroCompte, Solde, FK_CLIENT FROM comptes");
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
}

//Fiare le models
// Faire le controller
// Faire la views
