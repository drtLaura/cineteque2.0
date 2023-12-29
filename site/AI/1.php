<?php
session_start(); // démarrage session
//Création du message si succès 
$page="1";
$redirect="succesAI.php";
$method="post";
$type="submit";
$value="Suivant";
if($_SESSION["res"]===$page){
    $_SESSION["message"]="<p>Vous avez trouvé la bonne page !</p><br>
    <form action=$redirect method=$method>
        <input type=$type value=$value>
    </form>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../site.css">
    <link rel="stylesheet" href="ai.css">
    <title>Notes</title>
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
        </ul>
      </nav>
    </header>
    <main>
        <div id="films">
            <p id="message"><?php echo $_SESSION["message"];?></p>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
