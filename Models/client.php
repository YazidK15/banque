<?php

require_once 'bdd.php';


function fetchClients () {
    // Crée une instance de BDD
    $bdd =  new Bdd();
    // Appel notre fonction connect crée dans models/bdd.php
    $conn = $bdd->connect();
    // Prépare la requête SQL grâce à PDO
    $request = $conn->prepare ('SELECT ID, Nom, Prenom, Mail, Telephone FROM clients;');
    // Exécute la requête SQL
    $request->execute();
    // Récupère les résultats du tableau dans php avec le fetch assoc pour que le var dump soit plus beau
    return $request->fetchAll(PDO::FETCH_ASSOC);
}

function insertClient ($nom, $prenom, $mail, $telephone){
    $bdd = new Bdd();
    $conn = $bdd->connect();
    $request = $conn->prepare ('INSERT INTO clients (Nom, Prenom, Mail, Telephone) VALUES (?,?,?,?);');
    $request-> execute([$nom, $prenom, $mail, $telephone]);
}

function getClientById ($id){
    $bdd = new Bdd();
    $conn = $bdd->connect();
    $request = $conn->prepare ('SELECT ID, Nom, Prenom, Mail, Telephone FROM clients WHERE ID =?');
    $request-> execute([$id]);
    return $request->fetch(PDO::FETCH_ASSOC);
}