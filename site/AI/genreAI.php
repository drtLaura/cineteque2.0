<?php
session_start(); // démarrage session
$_SESSION['id'] = $_GET['id'];
// Réinitialiser le temps de début chaque fois que cette page est chargée
$_SESSION['debut'] = time();
$passegenre = time() - $_SESSION['debut'];
$_SESSION['passegenre'] = $passegenre;

if (!isset($_SESSION['indexconsigne'])) {
    $_SESSION['indexconsigne'] = 1;
}
$indexconsigne = $_SESSION['indexconsigne'];
echo "indexconsigne". $indexconsigne;

if ($indexconsigne == 1){
    echo 'indexconsigne = 1';
    $_SESSION['consigne'] = "consigne 1";
}
if ($indexconsigne ==  2) {
    echo 'indexconsigne = 2';
    $_SESSION['consigne'] = "consigne 2";
}
if ($indexconsigne ==  3) {
    echo 'indexconsigne = 3';
    $_SESSION['consigne'] = "consigne 3";
}
if ($indexconsigne ==  4) {
    echo 'indexconsigne = 4';
    $_SESSION['consigne'] = "consigne 4";
}
if ($indexconsigne == 5) {
    echo 'indexconsigne = 5';
    $_SESSION['consigne'] = "consigne 5";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genre</title>
</head>
<body>
    <h1>Genre</h1>
    <p>Temps passé sur cette page: <?php echo $passegenre; ?> secondes</p>
    <p> Voici la consigne que vous devez réaliser : <?php echo $_SESSION['consigne']?> </p>
    <form action="paysAI.php" method="post">
        <input type="submit" value="Aller à Pays">
    </form>
</body>
</html>
