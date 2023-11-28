<?php
session_start();

if (!isset($_SESSION['Timespent_page2'])) {
    $_SESSION['Timespent_page2'] = 0;
}

$elapsed_time_page3 = time() - $_SESSION['start_time'];
$_SESSION['Timespent_page3'] = $elapsed_time_page3;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coucou 3</title>
</head>
<body>
    <h1>Coucou 3</h1>
    <p>Temps passé sur les pages précédentes: <?php echo $_SESSION['Timespent_page1'] + $_SESSION['Timespent_page2']; ?> secondes</p>
    <form action="succesAI.php" method="post">
        <input type="submit" value="Aller à Coucou 4">
    </form>
</body>
</html>
