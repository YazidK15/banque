<h5>Nom: <?php echo $client['Nom'] ?></h5>
<h5>Prénom: <?php echo $client['Prenom'] ?></h5>
<h5>Mail: <?php echo $client['Mail'] ?></h5>
<h5>Numéro de téléphone: <?php echo $client['Telephone'] ?></h5>

<h4>Comptes</h4>
<table>
    <thead>
        <th>ID</th>
        <th>Numéro de compte</th>
        <th>Solde</th>
    </thead>
    <tbody>
        <?php 
            foreach ($comptes as $compte){
                echo '<tr>';
                    echo '<td>'.$compte['ID'].'</td>';
                    echo '<td>'.$compte['NumeroCompte'].'</td>';
                    echo '<td>'.$compte['Solde'].'</td>';
                echo '<tr>';
            }        
        ?>
    </tbody>
</table>