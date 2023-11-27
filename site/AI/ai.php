<?php
if (isset($_POST['name'])) {

    // Redirection vers une la page d'accueil après le traitement
    header("Location: accueil.html");
    echo "La redirection a été effectuée avec succès";
    exit(); 
}
?>