<?php
session_start();

if (!isset($_SESSION['Timespent_page3'])) {
    $_SESSION['Timespent_page3'] = 0;
}

$elapsed_time_page4 = time() - $_SESSION['start_time'];
$_SESSION['Timespent_page4'] = $elapsed_time_page4;
$consigne1 =  $_SESSION['Timespent_page1'] + $_SESSION['Timespent_page2'] + $_SESSION['Timespent_page3'];
$data = "consigne 1 : ".$consigne1; 
echo $data;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coucou 4</title>
    <script src="savedata.js"></script>
</head>
<body>
    
<script type="application/javascript"> 
    var data = JSON.parse('<?php echo json_encode($data); ?>');
    savedata(data);
</script>
    <h1>Coucou 4</h1>
    <p>Temps passé sur les pages précédentes: <?php echo $data; ?> secondes</p>
</body>
</html>
