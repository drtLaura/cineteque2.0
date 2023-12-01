<?php
session_start();

if (!isset($_SESSION['passegenre'])) {
    $_SESSION['passegenre'] = 0;
}
$passepays = time() - $_SESSION['debut'];
$_SESSION['passepays'] = $passepays;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pays</title>
</head>
<body>
    <h1>Pays</h1>
    <p> Voici la consigne que vous devez réaliser : <?php echo $_SESSION['consigne']?> </p>
    <p>Temps passé sur la page précédente: <?php echo $_SESSION['passegenre']; ?> secondes</p>
    <form action="noteAI.php" method="post">
        <input type="submit" value="Aller à Coucou 3">
    </form>
</body>
</html>
