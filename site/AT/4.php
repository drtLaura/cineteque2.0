<?php
session_start(); // démarrage session
$chemin = $_SERVER['SCRIPT_NAME'];
$nom_page = pathinfo($chemin, PATHINFO_FILENAME);
$_SESSION['note']=$nom_page;
//Création du message si succès 
if($_SESSION["res"][0]===$_SESSION["genre"] && $_SESSION["res"][1]===$_SESSION["pays"] && $_SESSION["res"][2]===$_SESSION["note"]){
  $_SESSION["message"]="<h3 id=\"succes\">Bravo !</h3><p id=\"succes\">Vous avez trouvé la bonne page !</p><br>
  <form action=\"succesAT.php\" method=\"post\">
      <input type=\"submit\" value=\"Suivant\">
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
            <h3>Voici la consigne que vous devez réaliser : <br><?php echo $_SESSION['consigne'];?></h3>
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
            <?php echo $_SESSION["message"];?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
