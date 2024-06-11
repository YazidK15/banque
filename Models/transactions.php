<!-- Fonction qui vient chercher toutes les transactions -->

<?php 
require_once("bdd.php");

function fetchTransactions(){
    $bdd = new BDD();
    $conn = $bdd->connect();
    $request = $conn->prepare('SELECT ID, CompteBeneficiaire, CompteDebiteur, Montant, Date FROM transactions');
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
};

function insertTransaction($compteBeneficiaire, $compteDebiteur, $montant){
    $bdd = new BDD();
    $conn = $bdd->connect();
    $request = $conn->prepare('INSERT INTO transactions (CompteBeneficiaire, CompteDebiteur, Montant, Date) 
                                VALUES (?,?,?,NOW())');
    $request->execute([$compteBeneficiaire, $compteDebiteur, $montant]);
};