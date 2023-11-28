<?php
session_start();

if (!isset($_SESSION['Timespent_page1'])) {
    $_SESSION['Timespent_page1'] = 0;
}

$elapsed_time_page2 = time() - $_SESSION['start_time'];
$_SESSION['Timespent_page2'] = $elapsed_time_page2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coucou 2</title>
</head>
<body>
    <h1>Coucou 2</h1>
    <p>Temps passé sur la page précédente: <?php echo $_SESSION['Timespent_page1']; ?> secondes</p>
    <form action="noteAI.php" method="post">
        <input type="submit" value="Aller à Coucou 3">
    </form>
</body>
</html>
