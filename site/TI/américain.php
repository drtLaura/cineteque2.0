<?php
session_start(); // démarrage session
$chemin = $_SERVER['SCRIPT_NAME'];
$nom_page = pathinfo($chemin, PATHINFO_FILENAME);
$_SESSION['pays']=$nom_page;


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
    <link rel="stylesheet" href="../site.css">
    <link rel="stylesheet" href="ai.css">
    <title>Pays</title>
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
                <a href="<?php echo $_SESSION['lienNotes1'];?>"><?php echo $_SESSION['note1'];?></a>
            </li>
            <li>
                <a href="<?php echo $_SESSION['lienNotes2'];?>"><?php echo $_SESSION['note2'];?></a>
            </li>
            <li>
                <a href="<?php echo $_SESSION['lienNotes3'];?>"><?php echo $_SESSION['note3'];?></a>
            </li>
            <li>
                <a href="<?php echo $_SESSION['lienNotes4'];?>"><?php echo $_SESSION['note4'];?></a>
            </li>
            <li>
                <a href="<?php echo $_SESSION['lienNotes5'];?>"><?php echo $_SESSION['note5'];?></a>
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
