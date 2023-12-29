<?php
session_start();

$_SESSION['debutnote'] = microtime(true) * 1000;

$passepays = (microtime(true) * 1000) - $_SESSION['debutpays'];
$passepays = round($passepays, 2);

    if ($_SESSION['indexconsigne'] == 1){
    $_SESSION['passecons1pays'] = $passepays;
    $_SESSION['data'] = 
        array_merge($_SESSION['data'], array(
        'temps passe consigne 1 pays' => $_SESSION['passecons1pays']
    ));
    }


    if ($_SESSION['indexconsigne'] == 2){
        $_SESSION['passecons2pays'] = $passepays;
        $_SESSION['data'] = 
            array_merge($_SESSION['data'], array(
            'temps passe consigne 2 pays ' => $_SESSION['passecons2pays']
        ));
    }

    if ($_SESSION['indexconsigne'] == 3){
        $_SESSION['passecons3pays'] = $passepays;
        $_SESSION['data'] = 
            array_merge($_SESSION['data'], array(
            'temps passe consigne 3 pays ' => $_SESSION['passecons3pays']
        ));
    }


    if ($_SESSION['indexconsigne'] == 4){
        $_SESSION['passecons4pays'] = $passepays;
        $_SESSION['data'] = 
            array_merge($_SESSION['data'], array(
            'temps passe consigne 4 pays ' => $_SESSION['passecons4pays']
        ));
    }

    if ($_SESSION['indexconsigne'] == 5){
        $_SESSION['passecons5pays'] = $passepays;
        $_SESSION['data'] = 
            array_merge($_SESSION['data'], array(
            'temps passe consigne 5 pays ' => $_SESSION['passecons5pays']
        ));
    }

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
    <form action="succesAT.php" method="post">
        <input type="submit" value="Aller à succès">
    </form>
</body>
</html>
