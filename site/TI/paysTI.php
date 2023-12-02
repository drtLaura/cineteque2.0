<?php
session_start();

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
    <form action="noteTI.php" method="post">
        <input type="submit" value="Aller à Note">
    </form>
</body>
</html>
