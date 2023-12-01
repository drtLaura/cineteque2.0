<?php
session_start();

if (!isset($_SESSION['passenote'])) {
    $_SESSION['passenote'] = 0;
}

$passesucces = time() - $_SESSION['debut'];
$_SESSION['passesucces'] = $passesucces;
$consigne1 =  $_SESSION['passegenre'] + $_SESSION['passepays'] + $_SESSION['passenote'];
$data = "indexconsigne : ". $_SESSION['indexconsigne'] ."consigne : " .$_SESSION['consigne'] . " id : " . $_SESSION['id']; 
//echo "data". $data;
echo  "avant" .$_SESSION['indexconsigne'];
if (isset($_SESSION['indexconsigne']) && $_SESSION['indexconsigne'] < 5) {
    $_SESSION['indexconsigne']++;
}
echo  "après" .$_SESSION['indexconsigne'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Succès</title>
    <script src="savedata.js" onload="console.log('Le script savedata.js a été chargé avec succès')"></script>
</head>
<body>
    
<script type="application/javascript"> 
    var data = JSON.parse('<?php echo json_encode($data); ?>');
    savedata(data);
</script>
    <h1>Succès</h1>
    <p>Temps passé sur les pages précédentes: <?php echo $data; ?> secondes</p>

<?php if ($_SESSION['indexconsigne'] != 5) {
    $ref = "genreAI.php";
    $msgbutton = "Continuer";
}
else{
    session_destroy();
     $ref = "terminer.php";
     $msgbutton = "Terminer";
}
?>

<form action="<?php echo $ref;?>" method="post">
        <input type="submit" value="<?php echo $msgbutton;?>">
</form>

    
</body>
</html>
