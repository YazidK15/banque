<button onclick="redirectToCreateClient()">Ajouter un client</button>
<table>
    <thead>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Mail</th>
        <th>Téléphone</th>
        <th>Actions</th>
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
                    echo "<td> <button onclick='redirectToDetailsClient(". $client['ID'] .")'> Détails </button> </td>";
                    echo "<td> <button onclick='redirectToEditClient(". $client['ID'] .")'> Modifier </button> </td>";
                    echo "<td> <button onclick='redirectToDeleteClient(". $client['ID'] .")'>Supprimer </button> </td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>

<script type="text/javascript">
    function redirectToCreateClient() {
        // ?action=create fait en sorte de passer une valeur par la méthode GET
        window.location.replace("../Controllers/ClientController.php?action=create");
    }

    function redirectToDetailsClient(clientId){
        window.location.replace('../Controllers/ClientController.php?action=details&id=' +clientId)
    }

    function redirectToEditClient(clientId){
        window.location.replace('../Controllers/ClientController.php?action=edit&id=' +clientId)
    }

    function redirectToDeleteClient(clientId){
        window.location.replace('../Controllers/ClientController.php?action=delete&id=' +clientId)
    }
</script>