<button onclick="redirectToClients()">Clients</button>
<button onclick="redirectToComptes()">Compte</button>
<button onclick="redirectToTransactions()">Virement</button>

<script type="text/javascript">

    // Fonction pour rédiriger vers le fichier ClientController
    function redirectToClients(){
        // window.location est une fonction JS déjà crée qui nous permet avec le replace d'être rediriger vers une autre url 
        window.location.replace('./Controllers/ClientController.php');
    }

    function redirectToComptes(){
        // window.location est une fonction JS déjà crée qui nous permet avec le replace d'être rediriger vers une autre url 
        window.location.replace('./Controllers/CompteController.php');
    }

    function redirectToTransactions(){
        // window.location est une fonction JS déjà crée qui nous permet avec le replace d'être rediriger vers une autre url 
        window.location.replace('./Controllers/TransactionsController.php');
    }

</script>