<button onclick="redirectToClients()">Clients</button>
<button>Compte</button>

<script type="text/javascript">

    // Fonction pour rédiriger vers le fichier ClientController
    function redirectToClients(){
        // window.location est une fonction JS déjà crée qui nous permet avec le replace d'être rediriger vers une autre url 
        window.location.replace('./Controllers/ClientController.php');
    }


</script>