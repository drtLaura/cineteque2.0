<?php
session_start(); // démarrage session
$_SESSION['debut'] = microtime(true) * 1000;

$_SESSION['id'] = $_GET['id'];

if (!isset($_SESSION['indexconsigne'])) {
    $_SESSION['indexconsigne'] = 1;
}

if ($_SESSION['indexconsigne'] == 1){
    $_SESSION['consigne'] = "je suis la consigne 1";
}
if ($_SESSION['indexconsigne'] ==  2) {
    $_SESSION['consigne'] = " je suis la consigne 2";
}
if ($_SESSION['indexconsigne'] ==  3) {
    $_SESSION['consigne'] = "je suis la consigne 3";
}
if ($_SESSION['indexconsigne'] ==  4) {
    $_SESSION['consigne'] = "je suis la consigne 4";
}
if ($_SESSION['indexconsigne'] == 5) {
    $_SESSION['consigne'] = "je suis la consigne 5";
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
    <form action="paysAT.php" method="post">
        <input type="submit" value="Aller à Pays">
    </form>
</body>
</html>
