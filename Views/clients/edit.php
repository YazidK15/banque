<h2>Modification d'un client</h2>
<form action="../Controllers/ClientController.php?action=update" method="post">
    <input type="hidden" name="id" value="<?php echo $client['ID']?>">
    <label for="nom">Nom</label>
    <input type="text" name="nom" id="nom" placeholder="Renseignez le nom du client" value="<?php echo $client['Nom']?>" required>
    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" id="prenom" placeholder="Renseignez le prénom du client" value="<?php echo $client['Prenom']?>" required>
    <label for="mail">Mail</label>
    <input type="email" name="mail" id="mail" placeholder="Renseignez le mail du client" value="<?php echo $client['Mail']?>" >
    <label for="telephone">Téléphone</label>
    <input type="text" name="telephone" id="telephone" placeholder="Renseignez le téléphone du client" value="<?php echo $client['Telephone']?>" >
    <input type="submit" value="Envoyer">
</form>