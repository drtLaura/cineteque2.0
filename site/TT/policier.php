<?php
session_start(); // démarrage session
$chemin = $_SERVER['SCRIPT_NAME'];
$nom_page = pathinfo($chemin, PATHINFO_FILENAME);
$_SESSION['genre']=$nom_page;



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
    <link rel="stylesheet" href="../site.css">
    <link rel="stylesheet" href="ai.css">
    <title>Genre</title>
</head>
<body>
    <header>
      <div id="en-tete">
        <div id="logo">
            <form method="post" action="accueil.php">
          <button name="logo"><img src="../img/logo.png"/></button>
                </form>
        </div>
        <div id="consigne">
            <h3>Voici la consigne que vous devez réaliser : <br><?php echo $_SESSION['consigne'];?></h3>
        </div>
        <div id="timer">
          <p></p>
        </div>
      </div>
      <nav id="menu-genre">
        <ul>
            <li>
                <a href="<?php echo $_SESSION['lienPays1'];?>"><?php echo $_SESSION['pays1'];?></a>
            </li>
            <li>
                <a href="<?php echo $_SESSION['lienPays2'];?>"><?php echo $_SESSION['pays2'];?></a>
            </li>
            <li>
                <a href="<?php echo $_SESSION['lienPays3'];?>"><?php echo $_SESSION['pays3'];?></a>
            </li>
            <li>
                <a href="<?php echo $_SESSION['lienPays4'];?>"><?php echo $_SESSION['pays4'];?></a>
            </li>
            <li>
                <a href="<?php echo $_SESSION['lienPays5'];?>"><?php echo $_SESSION['pays5'];?></a>
            </li>
        </ul>
      </nav>
    </header>
    <main>
        <div id="films">
            <?php echo $_SESSION["message"];?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
