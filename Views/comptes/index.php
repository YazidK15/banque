<button onclick="redirectToCreateAccount()">Ajouter un compte</button>
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

<script type="text/javascript">
    function redirectToCreateCompte() {
        // ?action=create fait en sorte de passer une valeur par la méthode GET
        window.location.replace("../Controllers/CompteController.php?action=create");
    }
</script>