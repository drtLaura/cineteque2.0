<?php
session_start();

$_SESSION['debutpays'] = microtime(true) * 1000;

$passegenre = (microtime(true) * 1000) - $_SESSION['debut'];
$passegenre = round($passegenre, 2);

    if ($_SESSION['indexconsigne'] == 1){
    $_SESSION['passecons1genre'] = $passegenre;
    $_SESSION['data'] = array(
        'id' => $_SESSION['id'],
        'temps passe consigne 1 genre' => $_SESSION['passecons1genre']
    );
    }


    if ($_SESSION['indexconsigne'] == 2){
        $_SESSION['passecons2genre'] = $passegenre;
        $_SESSION['data'] = 
            array_merge($_SESSION['data'], array(
            'temps passe consigne 2 genre' => $_SESSION['passecons2genre']
        ));
    }

    if ($_SESSION['indexconsigne'] == 3){
        $_SESSION['passecons3genre'] = $passegenre;
        $_SESSION['data'] = 
            array_merge($_SESSION['data'], array(
            'temps passe consigne 3 genre' => $_SESSION['passecons3genre']
        ));
    }

    if ($_SESSION['indexconsigne'] == 4){
        $_SESSION['passecons4genre'] = $passegenre;
        $_SESSION['data'] = 
            array_merge($_SESSION['data'], array(
            'temps passe consigne 4 genre' => $_SESSION['passecons4genre']
        ));
    }
    if ($_SESSION['indexconsigne'] == 5){
        $_SESSION['passecons5genre'] = $passegenre;
        $_SESSION['data'] = 
            array_merge($_SESSION['data'], array(
            'temps passe consigne 5 genre' => $_SESSION['passecons5genre']
        ));
    }
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
    <form action="noteAT.php" method="post">
        <input type="submit" value="Aller à Note">
    </form>
</body>
</html>
