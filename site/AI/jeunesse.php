<?php
session_start(); // démarrage session
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
            <p id="message">Ce n'est pas la bonne page.</p>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
