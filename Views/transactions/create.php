<h1>Formulaire de virement</h1>
<form action="../Controllers/TransactionsController.php?action=insert" method="post">
    <label for="debiteur">Compte debiteur</label>
    <select name="debiteur" id="debiteur">
        <?php 
            foreach ($comptes as $compte) {
                echo "<option value='". $compte["ID"]. "'>";
                echo $compte["NumeroCompte"];
                echo "</option>";
            }
       ?>
    </select>
    <label for="montant">Montant</label>
    <input type="number" name="montant" id="montant" placeholder="Renseignez le montant" required>
    <label for="beneficiaire">Compte bénéficiaire</label>
    <select name="beneficiaire" id="beneficiaire">
        <?php 
            foreach ($comptes as $compte) {
                echo "<option value='" . $compte["ID"] . "'>";
                echo $compte["NumeroCompte"];
                echo "</option>";
            }
        ?>
    </select>
    <input type="submit" value="Envoyer">
</form>