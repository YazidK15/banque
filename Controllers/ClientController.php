<?php 
require_once '../Models/Client.php';

$clients = fetchClients();

// Permet d'afficher la page clients/index.php 
include '../Views/clients/index.php';













// Afficher le var_dump en colonne et non en ligne sur le navigateur 
// echo '<pre>';
// var_dump(fetchClients());
// echo '</pre>';
