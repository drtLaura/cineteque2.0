<?php
session_start();

if (!isset($_SESSION['passepays'])) {
    $_SESSION['passepays'] = 0;
}

$passenote = time() - $_SESSION['debut'];
$_SESSION['passenote'] = $passenote;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note</title>
</head>
<body>
    <h1>Note</h1>
    <p> Voici la consigne que vous devez réaliser : <?php echo $_SESSION['consigne']?> </p>
    <p>Temps passé sur les pages précédentes: <?php echo $_SESSION['passegenre'] + $_SESSION['passepays']; ?> secondes</p>
    <form action="succesAI.php" method="post">
        <input type="submit" value="Aller à Coucou 4">
    </form>
</body>
</html>
