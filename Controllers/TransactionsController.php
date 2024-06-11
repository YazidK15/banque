<?php 

// Permet d'utiliser les données dans un autre fichier
require_once '../Models/compte.php';
require_once '../Models/transactions.php';

if (!isset($_GET['action'])) {

// Chercher toutes les transactions grace au model include de transaction/index.php
    $transactions = fetchTransactions();
    include '../Views/transactions/index.php';

} else {
// On va chercher les comptes et si l'action est égale à "create" alors on affiche le formulaire de création de transaction
    if ($_GET ['action'] == "create") {
        $comptes = fetchComptes();
        include '../Views/transactions/create.php';
    }
    
    if ($_GET['action'] == "insert") {
        $debiteur = $_POST ['debiteur'];
        $montant = $_POST ['montant'];
        $beneficiaire = $_POST ['beneficiaire'];
        updateCompteMontantDebiteur($montant, $debiteur);
        updateCompteMontantBeneficiaire($montant, $beneficiaire);
        insertTransaction($beneficiaire, $debiteur, $montant);
// Redirigé sur la page des transactions après en avoir fait une 
        header("Location: TransactionsController.php");
    }
}