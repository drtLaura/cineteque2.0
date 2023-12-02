<?php
session_start(); // démarrage session
$_SESSION['id'] = $_GET['id'];
// Réinitialiser le temps de début chaque fois que cette page est chargée
$_SESSION['debut'] = time();

if (!isset($_SESSION['indexconsigne'])) {
    $_SESSION['indexconsigne'] = 1;
}

if ($_SESSION['indexconsigne'] == 1){
    echo 'indexconsigne = 1';
    $_SESSION['consigne'] = "je suis la consigne 1";
    echo "voici la consigne ".$_SESSION['consigne'];
}
if ($_SESSION['indexconsigne'] ==  2) {
    echo 'indexconsigne = 2';
    $_SESSION['consigne'] = " je suis la consigne 2";
    echo "voici la consigne ".$_SESSION['consigne'];
}
if ($_SESSION['indexconsigne'] ==  3) {
    echo 'indexconsigne = 3';
    $_SESSION['consigne'] = "je suis la consigne 3";
    echo "voici la consigne ".$_SESSION['consigne'];
}
if ($_SESSION['indexconsigne'] ==  4) {
    echo 'indexconsigne = 4';
    $_SESSION['consigne'] = "je suis la consigne 4";
    echo "voici la consigne ".$_SESSION['consigne'];
}
if ($_SESSION['indexconsigne'] == 5) {
    echo 'indexconsigne = 5';
    $_SESSION['consigne'] = "je suis la consigne 5";
    echo "voici la consigne ".$_SESSION['consigne'];
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
    <p> Voici la consigne que vous devez réaliser : <?php echo $_SESSION['consigne']?> </p>
    <form action="paysTI.php" method="post">
        <input type="submit" value="Aller à Pays">
    </form>
</body>
</html>
