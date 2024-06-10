<h1>Formulaire de virement</h1>
<form action="../Controllers/TransactionsController.php?action=insert" method="post">
    <label for="crediteur">Compte créditeur</label>
    <select name="crediteur" id="crediteur">
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