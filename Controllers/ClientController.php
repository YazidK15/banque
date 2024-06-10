<?php 
require_once '../Models/client.php';
require_once '../Models/compte.php';

if (!isset($_GET['action'])){
    $clients = fetchClients();
    include '../Views/clients/index.php';
}
else{
    if ($_GET["action"] == "create") {
        include '../Views/clients/create.php';
    }

    if ($_GET["action"] == "insert") {
        var_dump($_POST);
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $mail = $_POST["mail"];
        $telephone = $_POST["telephone"];
        // Appel la fonction insertClient
        insertClient($nom, $prenom, $mail, $telephone);
        // Redirige vers la page ClientController.php
        header("Location: CompteController.php");
    }
    if ($_GET["action"] == 'details'){
        $id = $_GET["id"];
        $client = getClientById($id);
        $comptes = getComptesByClient($id); 
        include '../Views/clients/details.php';
    }
}













// Afficher le var_dump en colonne et non en ligne sur le navigateur 
// echo '<pre>';
// var_dump(fetchClients());
// echo '</pre>';
