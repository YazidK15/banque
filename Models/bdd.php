<?php

class BDD {
    
    function connect (){
        try {
            // Connexion à la base de donnees
            $pdo = new PDO('mysql:host=localhost;dbname=banque', 'root', '');  
            // Affichage des erreurs
            echo 'Connexion réussie';
            // Retourne l'objet PDO
            return $pdo;
        } catch (PDOException $e) {
            // En cas d'erreur, affiche un message et arrête le script
            echo 'Une erreur est survenue : '. $e->getMessage();
        }
    }
}