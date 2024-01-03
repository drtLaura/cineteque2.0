<?php
session_start(); // démarrage session
$chemin = $_SERVER['SCRIPT_NAME'];
$nom_page = pathinfo($chemin, PATHINFO_FILENAME);
$_SESSION['note']=$nom_page;

$passenote = (microtime(true) * 1000) - $_SESSION['debutnote'];
$passenote = round($passenote, 2);

$passetotal = (microtime(true) * 1000) - $_SESSION['debut'];
$passetotal = round($passetotal, 2);

    if ($_SESSION['indexconsigne'] == 1){
    //echo 'indexconsigne = 1';
    $_SESSION['passecons1'] = $passetotal;
    $_SESSION['passecons1note'] = $passenote;
    //echo "passe consigne 1 ". $_SESSION['passecons1'];
    $_SESSION['data'] = array_merge($_SESSION['data'], array(
        'temps passe consigne 1 note ' => $_SESSION['passecons1note'],
        'temps passe consigne 1' => $_SESSION['passecons1']
    ));
}
    if ($_SESSION['indexconsigne'] ==  2) {
        //echo 'indexconsigne = 2';
        $_SESSION['passecons2'] = $passetotal;
        $_SESSION['passecons2note'] = $passenote;
        $_SESSION['data'] = array_merge($_SESSION['data'], array(
            'temps passe consigne 2 note ' => $_SESSION['passecons2note'],
            'temps passe consigne 2' => $_SESSION['passecons2']
        ));
    }

    if ($_SESSION['indexconsigne'] == 3) {
        //echo 'indexconsigne = 3';
        $_SESSION['passecons3'] = $passetotal;
        $_SESSION['passecons3note'] = $passenote;
        $_SESSION['data'] = array_merge($_SESSION['data'], array(
            'temps passe consigne 3 note ' => $_SESSION['passecons3note'],
            'temps passe consigne 3' => $_SESSION['passecons3']
        ));
    }
    if ($_SESSION['indexconsigne'] == 4) {
        //echo 'indexconsigne = 4';
        $_SESSION['passecons4'] = $passetotal;
        $_SESSION['passecons4note'] = $passenote;
        $_SESSION['data'] = array_merge($_SESSION['data'], array(
            'temps passe consigne 4 note ' => $_SESSION['passecons4note'],
            'temps passe consigne 4' => $_SESSION['passecons4'] + 1000
        ));
    }
    if ($_SESSION['indexconsigne'] == 5) {
        $_SESSION['passecons5'] = $passetotal;
        $_SESSION['passecons5note'] = $passenote;
        $_SESSION['data'] = array_merge($_SESSION['data'], array(
            'temps passe consigne 5 note ' => $_SESSION['passecons5note'],
            'temps passe consigne 5' => $_SESSION['passecons5'] + 1000
        ));
    }

//Création du message si succès 
if($_SESSION["res"][0]===$_SESSION["genre"] && $_SESSION["res"][1]===$_SESSION["pays"] && $_SESSION["res"][2]===$_SESSION["note"]){
  $_SESSION["message"]="<h3 id=\"succes\">Bravo !</h3><p id=\"succes\">Vous avez trouvé la bonne page !</p><br>
  <form action=\"succesTI.php\" method=\"post\">
      <input type=\"submit\" value=\"Suivant\">
  </form>";
}
else{
    $_SESSION["message"]="<h3 > Echec !</h3><p>Vous n'avez pas trouvé la bonne page ! Veuillez cliquer sur le logo pour retourner au début de la consigne</p><br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../site.css">
    <link rel="stylesheet" href="ti.css">
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
