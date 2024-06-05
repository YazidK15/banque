<?php 

require_once '../Models/compte.php';

//Faire appelle à notre fonction fetchComptes()
$comptes = fetchComptes();

//Faire l'include de notre vue ../Views/comptes/index.php
include '../Views/comptes/index.php';