<?php
session_start(); // démarrage session
$chemin = $_SERVER['SCRIPT_NAME'];
$nom_page = pathinfo($chemin, PATHINFO_FILENAME);
$_SESSION['pays']=$nom_page;
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
