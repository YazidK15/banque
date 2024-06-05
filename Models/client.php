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