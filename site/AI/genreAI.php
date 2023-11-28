<?php
session_start();

if (!isset($_SESSION['start_time'])) {
    $_SESSION['start_time'] = time();
}

$elapsed_time = time() - $_SESSION['start_time'];
$_SESSION['Timespent_page1'] = $elapsed_time;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coucou 1</title>
</head>
<body>
    <h1>Coucou 1</h1>
    <p>Temps passé sur cette page: <?php echo $elapsed_time; ?> secondes</p>
    <form action="paysAI.php" method="post">
        <input type="submit" value="Aller à Coucou 2">
    </form>
</body>
</html>
