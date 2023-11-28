<?php
if (isset($_POST['tuto'])) {

    // Redirection vers une la page d'accueil après le traitement
    header("Location: consigne.html");
    echo "La redirection a été effectuée avec succès";
    exit(); 
}
?>