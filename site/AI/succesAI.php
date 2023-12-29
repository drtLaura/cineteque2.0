<?php
session_start();

$passetotal = (microtime(true) - $_SESSION['debut']) * 1000;
echo "passetotal :". $passetotal;

    if ($_SESSION['indexconsigne'] == 1){
    //echo 'indexconsigne = 1';
    $_SESSION['passecons1'] = $passetotal;
    //echo "passe consigne 1 ". $_SESSION['passecons1'];
    $_SESSION['data'] = array(
        'id' => $_SESSION['id'],
        'temps passe consigne 1' => $_SESSION['passecons1']
    );
    }

    if ($_SESSION['indexconsigne'] ==  2) {
        //echo 'indexconsigne = 2';
        $_SESSION['passecons2'] = $passetotal;
        //echo "passe consigne 2 " . $_SESSION['passecons2'];
        $_SESSION['data'] = array_merge($_SESSION['data'], array(
            'temps passe consigne 2' => $_SESSION['passecons2']
        ));
    }

    if ($_SESSION['indexconsigne'] == 3) {
        //echo 'indexconsigne = 3';
        $_SESSION['passecons3'] = $passetotal;
        //echo "passe consigne 3 " . $_SESSION['passecons3'];
        $_SESSION['data'] = array_merge($_SESSION['data'], array(
            'temps passe consigne 3' => $_SESSION['passecons3']
        ));
    }

    if ($_SESSION['indexconsigne'] == 4) {
        //echo 'indexconsigne = 4';
        $_SESSION['passecons4'] = $passetotal;
        //echo "passe consigne 4 " . $_SESSION['passecons4'];
        $_SESSION['data'] = array_merge($_SESSION['data'], array(
            'temps passe consigne 4' => $_SESSION['passecons4']
        ));
    }

    if ($_SESSION['indexconsigne'] == 5) {
        //echo 'indexconsigne = 5';
        $_SESSION['passecons5'] = $passetotal;
        //echo "passe consigne 5 " . $_SESSION['passecons5'];
        $_SESSION['data'] = array_merge($_SESSION['data'], array(
            'temps passe consigne 5' => $_SESSION['passecons5']
        ));
    }
    //echo "data : ";
    //print_r($_SESSION['data']);
    //echo "avant" . $_SESSION['indexconsigne'];
    if (isset($_SESSION['indexconsigne'])) {
        $_SESSION['indexconsigne']++;
    }
    //echo "après" . $_SESSION['indexconsigne'];
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
