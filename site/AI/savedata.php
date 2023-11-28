<?php
// Récupérer les données du corps de la requête
$data = json_decode(file_get_contents('php://input'), true);

// Convertir les données en JSON
$jsonData = json_encode($data);

// Écrire les données dans un fichier
file_put_contents('data.json', $jsonData);
?>