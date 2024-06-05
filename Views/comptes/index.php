<table>
    <thead>
        <th>ID</th>
        <th>Numéro de compte</th>
        <th>Solde</th>
        <th>Numéro client</th>
    </thead>
    <tbody>
        <?php
            foreach ($comptes as $compte) {
                echo "<tr>";
                    echo "<td>".$compte["ID"]."</td>";
                    echo "<td>".$compte["NumeroCompte"]."</td>";
                    echo "<td>".$compte["Solde"]."</td>";
                    echo "<td>".$compte["FK_CLIENT"]."</td>";
                echo "</tr>";
            }
        ?>
    </tbody>

</table>