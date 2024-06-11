<button onclick="redirectToCreateTransaction()">Faire une transaction</button>
<table>
    <thead>
        <th>ID</th>
        <th>Date</th>
        <th>Compte débiteur</th>
        <th>Compte bénéficiaire</th>
        <th>Montant</th>
    </thead>
    <tbody>
        <?php
            foreach ($transactions as $transaction) {
                echo "<tr>";
                    echo "<td>".$transaction["ID"]."</td>";
                    echo "<td>".$transaction["CompteDebiteur"]."</td>";
                    echo "<td>".$transaction["CompteBeneficiaire"]."</td>";
                    echo "<td>".$transaction["Montant"]."</td>";
                    echo "<td>".$transaction["Date"]."</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>

<script type="text/javascript">
    function redirectToCreateTransaction() {
        window.location.replace("../Controllers/TransactionsController.php?action=create");
    }

</script>