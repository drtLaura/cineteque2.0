<?php
session_start(); // démarrage session

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
    
//Randomiser l'ordre des items du menu de navigation
$menuLiens=array("français.php", "japonais.php","américain.php", "russe.php" , "coréen.php");
shuffle($menuLiens);
$_SESSION["lien1"]=$menuLiens[0];
$_SESSION["lien2"]=$menuLiens[1];
$_SESSION["lien3"]=$menuLiens[2];
$_SESSION["lien4"]=$menuLiens[3];
$_SESSION["lien5"]=$menuLiens[4];
$menuItems=array(substr($_SESSION["lien1"],0,strlen($_SESSION['lien1'])-4),
substr($_SESSION["lien2"],0,strlen($_SESSION['lien2'])-4),
substr($_SESSION["lien3"],0,strlen($_SESSION['lien3'])-4),
substr($_SESSION["lien4"],0,strlen($_SESSION['lien4'])-4),
substr($_SESSION["lien5"],0,strlen($_SESSION['lien5'])-4));
$_SESSION["item1"]=$menuItems[0];
$_SESSION["item2"]=$menuItems[1];
$_SESSION["item3"]=$menuItems[2];
$_SESSION["item4"]=$menuItems[3];
$_SESSION["item5"]=$menuItems[4];
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
            <h3>Voici la consigne que vous devez réaliser : <?php echo $_SESSION['consigne'];?></h3>
        </div>
        <div id="timer">
          <p><?php echo $_SESSION['debut'];?></p>
        </div>
      </div>
      <nav id="menu-genre">
        <ul>
            <li>
                <a href="<?php echo $_SESSION['lien1'];?>"><?php echo $_SESSION['item1'];?></a>
            </li>
            <li>
                <a href="<?php echo $_SESSION['lien2'];?>"><?php echo $_SESSION['item2'];?></a>
            </li>
            <li>
                <a href="<?php echo $_SESSION['lien3'];?>"><?php echo $_SESSION['item3'];?></a>
            </li>
            <li>
                <a href="<?php echo $_SESSION['lien4'];?>"><?php echo $_SESSION['item4'];?></a>
            </li>
            <li>
                <a href="<?php echo $_SESSION['lien5'];?>"><?php echo $_SESSION['item5'];?></a>
            </li>
        </ul>
      </nav>
    </header>
    <main>
        <div id="films">
        <p id="message">Ce n'est pas la bonne page.</p>
      <ul>
              
          <li>
        <form method="post" action="../../succès.php">              <a>En savoir plus</a>
</form>
          </li>
      </ul>
            <ul>
          <li>
              <form action="paysAI.php" method="post">
        <input type="submit" value="Aller à Pays">
    </form>
          </li>
      </ul>
            </div>
    </main>
    <footer>
    </footer>
</body>
</html>
