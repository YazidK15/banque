<h1>Formulaire Comptes</h1>
<form action="../Controllers/CompteController.php?action=insert" method="post">
    <label for="numeroCompte">Numéro de compte</label>
    <input type="text" name="numeroCompte" id="numeroCompte" placeholder="Renseignez le numéro de compte du client" required>
    <label for="solde">Solde</label>
    <input type="text" name="solde" id="solde" placeholder="Renseignez le solde du client" required>
    <label for="client">Client</label>
    <select name="client" id="client">
        <?php 
            foreach ($clients as $client) {
                echo "<option value='" . $client["ID"] . "'>";
                echo $client["Nom"] . " " . $client ["Prenom"];
                echo "</option>";
            }
        ?>
    </select>
    <input type="submit" value="Envoyer">
</form>