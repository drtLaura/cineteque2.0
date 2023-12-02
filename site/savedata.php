<?php
session_start();
// Récupérer les données du corps de la requête
$data = json_decode(file_get_contents('php://input'), true);

// Convertir les données en JSON
$jsonData = json_encode($data, JSON_PRETTY_PRINT);
// Récupérer l'id stocké dans la session
$id = $_SESSION['id'];
echo $id;
// Créer le nom de fichier en concaténant les parties
$nomfichier = 'data/data' . $id . '.json';

// Écrire les données dans un fichier
file_put_contents($nomfichier, $jsonData);
session_destroy();

?>