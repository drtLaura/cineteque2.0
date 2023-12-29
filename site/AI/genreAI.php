<?php
session_start(); // démarrage session
//$_SESSION['id'] = $_GET['id'];
// Réinitialiser le temps de début chaque fois que cette page est chargée
$_SESSION['debut'] = time();

if (!isset($_SESSION['indexconsigne'])) {
    $_SESSION['indexconsigne'] = 1;
}

if ($_SESSION['indexconsigne'] == 1){
    //echo 'indexconsigne = 1';
    $_SESSION['consigne'] = "je suis la consigne 1";
    //echo "voici la consigne ".$_SESSION['consigne'];
    $_SESSION['res']="2";
}
if ($_SESSION['indexconsigne'] ==  2) {
    //echo 'indexconsigne = 2';
    $_SESSION['consigne'] = " je suis la consigne 2";
    //echo "voici la consigne ".$_SESSION['consigne'];
    $_SESSION['res']=" 1";
}
if ($_SESSION['indexconsigne'] ==  3) {
    //echo 'indexconsigne = 3';
    $_SESSION['consigne'] = "je suis la consigne 3";
    //echo "voici la consigne ".$_SESSION['consigne'];
    $_SESSION['res']=" je suis la réponse";
}
if ($_SESSION['indexconsigne'] ==  4) {
    //echo 'indexconsigne = 4';
    $_SESSION['consigne'] = "je suis la consigne 4";
    //echo "voici la consigne ".$_SESSION['consigne'];
    $_SESSION['res']=" je suis la réponse";
}
if ($_SESSION['indexconsigne'] == 5) {
    //echo 'indexconsigne = 5';
    $_SESSION['consigne'] = "je suis la consigne 5";
    //echo "voici la consigne ".$_SESSION['consigne'];
    $_SESSION['res']=" je suis la réponse";
}
//Randomiser l'ordre des items du menu de navigation des genres 
$menuLiens=array("jeunesse.php", "comedies.php","action.php", "romance.php" , "policier.php");
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
//Randomiser l'ordre des items du menu de navigation des pays
$menuLiensPays=array("français.php", "japonais.php","américain.php", "russe.php" , "coréen.php");
shuffle($menuLiensPays);
$_SESSION["lienPays1"]=$menuLiensPays[0];
$_SESSION["lienPays2"]=$menuLiensPays[1];
$_SESSION["lienPays3"]=$menuLiensPays[2];
$_SESSION["lienPays4"]=$menuLiensPays[3];
$_SESSION["lienPays5"]=$menuLiensPays[4];
$menuPays=array(substr($_SESSION["lienPays1"],0,strlen($_SESSION['lienPays1'])-4),
substr($_SESSION["lienPays2"],0,strlen($_SESSION['lienPays2'])-4),
substr($_SESSION["lienPays3"],0,strlen($_SESSION['lienPays3'])-4),
substr($_SESSION["lienPays4"],0,strlen($_SESSION['lienPays4'])-4),
substr($_SESSION["lienPays5"],0,strlen($_SESSION['lienPays5'])-4));
$_SESSION["pays1"]=$menuPays[0];
$_SESSION["pays2"]=$menuPays[1];
$_SESSION["pays3"]=$menuPays[2];
$_SESSION["pays4"]=$menuPays[3];
$_SESSION["pays5"]=$menuPays[4];
//Randomiser l'ordre des items du menu de navigation des notes 
$menuLiensNotes=array("1.php", "2.php","3.php", "4.php" , "5.php");
shuffle($menuLiensNotes);
$_SESSION["lienNotes1"]=$menuLiensNotes[0];
$_SESSION["lienNotes2"]=$menuLiensNotes[1];
$_SESSION["lienNotes3"]=$menuLiensNotes[2];
$_SESSION["lienNotes4"]=$menuLiensNotes[3];
$_SESSION["lienNotes5"]=$menuLiensNotes[4];
$menuNotes=array(substr($_SESSION["lienNotes1"],0,strlen($_SESSION['lienNotes1'])-4),
substr($_SESSION["lienNotes2"],0,strlen($_SESSION['lienNotes2'])-4),
substr($_SESSION["lienNotes3"],0,strlen($_SESSION['lienNotes3'])-4),
substr($_SESSION["lienNotes4"],0,strlen($_SESSION['lienNotes4'])-4),
substr($_SESSION["lienNotes5"],0,strlen($_SESSION['lienNotes5'])-4));
$_SESSION["note1"]=$menuNotes[0];
$_SESSION["note2"]=$menuNotes[1];
$_SESSION["note3"]=$menuNotes[2];
$_SESSION["note4"]=$menuNotes[3];
$_SESSION["note5"]=$menuNotes[4];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../site.css">
    <link rel="stylesheet" href="ai.css">
    <link rel="canonical" href="https://icons.getbootstrap.com/icons/emoji-laughing/">
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
                <a href="<?php echo $_SESSION['lien1'];?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-laughing" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                    <path d="M12.331 9.5a1 1 0 0 1 0 1A4.998 4.998 0 0 1 8 13a4.998 4.998 0 0 1-4.33-2.5A1 1 0 0 1 4.535 9h6.93a1 1 0 0 1 .866.5M7 6.5c0 .828-.448 0-1 0s-1 .828-1 0S5.448 5 6 5s1 .672 1 1.5m4 0c0 .828-.448 0-1 0s-1 .828-1 0S9.448 5 10 5s1 .672 1 1.5"/>
                </svg>
                <?php echo $_SESSION['item1'];?></a>
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
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
