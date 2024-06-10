<?php 

require_once '../Models/compte.php';

if (!isset ($_GET['action'])) {

    //Faire appelle à notre fonction fetchComptes()
    $comptes = fetchComptes();

    //Faire l'include de notre vue ../Views/comptes/index.php
    include '../Views/transactions/index.php';
} else {

}