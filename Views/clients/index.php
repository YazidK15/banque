<table>
    <thead>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Mail</th>
        <th>Téléphone</th>
    </thead>
    <tbody>
        <?php
        // Boucle sur le tableau pour afficher chaque ligne du tableau
            foreach($clients as $client){
                echo "<tr>";
                    echo "<td>".$client["ID"]."</td>";
                    echo "<td>".$client["Nom"]."</td>";
                    echo "<td>".$client["Prenom"]."</td>";
                    echo "<td>".$client["Mail"]."</td>";
                    echo "<td>".$client["Telephone"]."</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>