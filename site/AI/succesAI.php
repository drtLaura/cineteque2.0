<?php
session_start();

$passetotal = time() - $_SESSION['debut'];
echo "passetotal :". $passetotal;

if ($_SESSION['indexconsigne'] == 1){
    echo 'indexconsigne = 1';
    $_SESSION['passecons1'] = $passetotal;
    echo "passe consigne 1 ". $_SESSION['passecons1'];
    $_SESSION['data'] =  " id : " . $_SESSION['id']." indexconsigne : ". $_SESSION['indexconsigne'] ."consigne : " .$_SESSION['consigne'] ."temps passe 1 " . $_SESSION['passecons1']; 
}
if ($_SESSION['indexconsigne'] ==  2) {
    echo 'indexconsigne = 2';
    $_SESSION['passecons2'] = $passetotal;
    echo "passe consigne 2 ". $_SESSION['passecons2'];
    $_SESSION['data']  = $_SESSION['data']  . " indexconsigne : ". $_SESSION['indexconsigne'] ."consigne : " .$_SESSION['consigne'] ."temps passe 2 " . $_SESSION['passecons2']; 
}
if ($_SESSION['indexconsigne'] ==  3) {
    echo 'indexconsigne = 3';
    $_SESSION['passecons3'] = $passetotal;
    echo "passe consigne 3 ". $_SESSION['passecons3'];
    $_SESSION['data']  = $_SESSION['data']  . " indexconsigne : ". $_SESSION['indexconsigne'] ."consigne : " .$_SESSION['consigne'] ."temps passe 3 " . $_SESSION['passecons3']; 
}
if ($_SESSION['indexconsigne'] ==  4) {
    echo 'indexconsigne = 4';
    $_SESSION['passecons4'] = $passetotal;
    echo "passe consigne 4 ". $_SESSION['passecons4'];
    $_SESSION['data']  = $_SESSION['data']  . " indexconsigne : ". $_SESSION['indexconsigne'] ."consigne : " .$_SESSION['consigne'] ."temps passe 4 " . $_SESSION['passecons4']; 
}
if ($_SESSION['indexconsigne'] == 5) {
    echo 'indexconsigne = 5';
    $_SESSION['passecons5'] = $passetotal;
    echo "passe consigne 5 ". $_SESSION['passecons5'];
    $_SESSION['data']  = $_SESSION['data']  . " indexconsigne : ". $_SESSION['indexconsigne'] ."consigne : " .$_SESSION['consigne'] ."temps passe 5" . $_SESSION['passecons5']; 
}
echo "data : " . $_SESSION['data'] ;
echo  "avant" .$_SESSION['indexconsigne'];
if (isset($_SESSION['indexconsigne'])) {
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
    

    <h1>Succès</h1>
    <p>Temps passé sur les pages précédentes: <?php echo $_SESSION['data'] ; ?> secondes</p>

    <script type="application/javascript"> 
    var data = JSON.parse('<?php echo json_encode($_SESSION['data']); ?>');
    savedata(data);
    </script>

<?php if ($_SESSION['indexconsigne'] <= 5) {
    $ref = "genreAI.php?id=".$_SESSION['id'];
    $msgbutton = "Continuer";
}
else{
     $ref = "terminer.php";
     $msgbutton = "Terminer";
}
?>


<form action="<?php echo $ref;?>" method="post">
        <input type="submit" value="<?php echo $msgbutton;?>">
</form>
    
</body>
</html>
