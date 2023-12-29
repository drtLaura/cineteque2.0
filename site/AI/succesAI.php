<?php
session_start();

$passenote = (microtime(true) * 1000) - $_SESSION['debutnote'];
$passenote = round($passenote, 2);

$passetotal = (microtime(true) * 1000) - $_SESSION['debut'];
$passetotal = round($passetotal, 2);

    if ($_SESSION['indexconsigne'] == 1){
    $_SESSION['passecons1'] = $passetotal;
    $_SESSION['passecons1note'] = $passenote;
    $_SESSION['data'] = array_merge($_SESSION['data'], array(
        'temps passe consigne 1 note ' => $_SESSION['passecons1note'],
        'temps passe consigne 1' => $_SESSION['passecons1']
    ));
    }

    if ($_SESSION['indexconsigne'] ==  2) {
        $_SESSION['passecons2'] = $passetotal;
        $_SESSION['passecons2note'] = $passenote;
        $_SESSION['data'] = array_merge($_SESSION['data'], array(
            'temps passe consigne 2 note ' => $_SESSION['passecons2note'],
            'temps passe consigne 2' => $_SESSION['passecons2']
        ));
    }

    if ($_SESSION['indexconsigne'] == 3) {
        $_SESSION['passecons3'] = $passetotal;
        $_SESSION['passecons3note'] = $passenote;
        $_SESSION['data'] = array_merge($_SESSION['data'], array(
            'temps passe consigne 3 note ' => $_SESSION['passecons3note'],
            'temps passe consigne 3' => $_SESSION['passecons3']
        ));
    }
    if ($_SESSION['indexconsigne'] == 4) {
        $_SESSION['passecons4'] = $passetotal;
        $_SESSION['passecons4note'] = $passenote;
        $_SESSION['data'] = array_merge($_SESSION['data'], array(
            'temps passe consigne 4 note ' => $_SESSION['passecons4note'],
            'temps passe consigne 4' => $_SESSION['passecons4']
        ));
    }
    if ($_SESSION['indexconsigne'] == 5) {
        $_SESSION['passecons5'] = $passetotal;
        $_SESSION['passecons5note'] = $passenote;
        $_SESSION['data'] = array_merge($_SESSION['data'], array(
            'temps passe consigne 5 note ' => $_SESSION['passecons5note'],
            'temps passe consigne 5' => $_SESSION['passecons5']
        ));
    }

    if (isset($_SESSION['indexconsigne'])) {
        $_SESSION['indexconsigne']++;
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../style.css">
        <title>Succès</title>
        
    </head>
    <body>
        

        <h1>Succès</h1>
        <?php  
        echo "<ul>";
        $length=0;
        foreach($_SESSION['data'] as $cpt){
            $length++;
        }
        $index=0;
        for($index;$index<$length;$index++){
            if($index===0){
                echo "<li> Identifiant : ". $_SESSION['data']['id']."</li>";
            }
            else {
                echo "<li> Tâche ".$index." : ".$_SESSION['data']['temps passe consigne '.$index]." secondes</li>";
            }
        }
        echo "</ul>";

   
if ($_SESSION['indexconsigne'] <= 5) {
    $ref = "genreAI.php?id=".$_SESSION['id'];
    $msgbutton = "Continuer";
}
else{
     $ref = "../questionnaire.php";
     $msgbutton = "Terminer";
     
}
?>


<form action="<?php echo $ref;?>" method="post">
        <input type="submit" value="<?php echo $msgbutton;?>">
</form>
    
</body>
</html>
