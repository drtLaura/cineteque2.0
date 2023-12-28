<?php
session_start(); // démarrage session
$_SESSION['id'] = $_GET['id'];
// Réinitialiser le temps de début chaque fois que cette page est chargée
$_SESSION['debut'] = time();

if (!isset($_SESSION['indexconsigne'])) {
    $_SESSION['indexconsigne'] = 1;
}

if ($_SESSION['indexconsigne'] == 1){
    echo 'indexconsigne = 1';
    $_SESSION['consigne'] = "je suis la consigne 1";
    echo "voici la consigne ".$_SESSION['consigne'];
}
if ($_SESSION['indexconsigne'] ==  2) {
    echo 'indexconsigne = 2';
    $_SESSION['consigne'] = " je suis la consigne 2";
    echo "voici la consigne ".$_SESSION['consigne'];
}
if ($_SESSION['indexconsigne'] ==  3) {
    echo 'indexconsigne = 3';
    $_SESSION['consigne'] = "je suis la consigne 3";
    echo "voici la consigne ".$_SESSION['consigne'];
}
if ($_SESSION['indexconsigne'] ==  4) {
    echo 'indexconsigne = 4';
    $_SESSION['consigne'] = "je suis la consigne 4";
    echo "voici la consigne ".$_SESSION['consigne'];
}
if ($_SESSION['indexconsigne'] == 5) {
    echo 'indexconsigne = 5';
    $_SESSION['consigne'] = "je suis la consigne 5";
    echo "voici la consigne ".$_SESSION['consigne'];
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
    <h1>Genre</h1>
    <header>
      <div id="en-tete">
        <div id="logo">
            <form method="post" action="ai.php">
          <button name="logo"><img src="../img/logo.png"/></button>
                </form>
        </div>
        <div id="consigne">
            <h3>Voici la consigne que vous devez réaliser : <?php echo $_SESSION['consigne']?></h3>
        </div>
        <div id="timer">
          <p><?php echo $_SESSION['debut']?></p>
        </div>
      </div>
      <nav id="menu-genre">
        <ul>
            <li>
                <a href="jeunesse.php">Jeunesse</a>
            </li>
            <li>
                <a href="comedies.php">Comédies</a>
            </li>
            <li>
                <a href="action.php">Action</a>
            </li>
            <li>
                <a href="romance.php">Romance</a>
            </li>
            <li>
                <a href="policier.php">Policier</a>
            </li>
        </ul>
      </nav>
    </header>
    <main>
        <div id="films">
      <ul>
          <li>
              <p>Message</p>
          </li>
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
