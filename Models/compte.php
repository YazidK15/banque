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

function insertComptes ($NumeroCompte, $Solde, $FK_CLIENT){
    $bdd = new Bdd();
    $conn = $bdd->connect();
    $request = $conn->prepare ('INSERT INTO comptes (NumeroCompte, Solde, FK_CLIENT) VALUES (?,?,?);');
    $request-> execute([$NumeroCompte, $Solde, $FK_CLIENT]);
}

function getComptesByClient ($idClient) {
    $bdd = new Bdd();
    $conn = $bdd->connect();
    $request = $conn->prepare ('SELECT ID, NumeroCompte, Solde FROM comptes WHERE FK_CLIENT =?');
    $request-> execute([$idClient]);
    return $request->fetchAll(PDO::FETCH_ASSOC);
}

function getCompteByID($id){
    $bdd = new Bdd();
    $conn = $bdd->connect();
    $request = $conn->prepare ('SELECT comptes.ID, NumeroCompte, Solde, Nom, Prenom, Mail, Telephone 
                                FROM comptes 
                                INNER JOIN clients on clients.ID = FK_CLIENT
                                WHERE comptes.ID =?');
    $request-> execute([$id]);
    return $request->fetch(PDO::FETCH_ASSOC);
}