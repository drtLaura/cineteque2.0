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
    $_SESSION['res']=" je suis la réponse";
}
if ($_SESSION['indexconsigne'] ==  2) {
    echo 'indexconsigne = 2';
    $_SESSION['consigne'] = " je suis la consigne 2";
    echo "voici la consigne ".$_SESSION['consigne'];
    $_SESSION['res']=" je suis la réponse";
}
if ($_SESSION['indexconsigne'] ==  3) {
    echo 'indexconsigne = 3';
    $_SESSION['consigne'] = "je suis la consigne 3";
    echo "voici la consigne ".$_SESSION['consigne'];
    $_SESSION['res']=" je suis la réponse";
}
if ($_SESSION['indexconsigne'] ==  4) {
    echo 'indexconsigne = 4';
    $_SESSION['consigne'] = "je suis la consigne 4";
    echo "voici la consigne ".$_SESSION['consigne'];
    $_SESSION['res']=" je suis la réponse";
}
if ($_SESSION['indexconsigne'] == 5) {
    echo 'indexconsigne = 5';
    $_SESSION['consigne'] = "je suis la consigne 5";
    echo "voici la consigne ".$_SESSION['consigne'];
    $_SESSION['res']=" je suis la réponse";
}
//Randomiser l'ordre des items du menu de navigation
$menuLiens=array("jeunesse.php", "comedies. php","action.php", "romance.php" , "policier.php");
shuffle($menuLiens);
$_SESSION["lien1"]=$menuLiens[0];
$_SESSION["lien2"]=$menuLiens[1];
$_SESSION["lien3"]=$menuLiens[2];
$_SESSION["lien4"]=$menuLiens[3];
$_SESSION["lien5"]=$menuLiens[4];
if ($_SESSION["lien1"]=="jeunesse.php") {
$_SESSION["item1"]="Jeunesse";
}
if ($_SESSION["lien1"]=="comedies.php") {
$_SESSION["item1"]="Comédies";
}
if ($_SESSION["lien1"]=="action.php") {
$_SESSION["item1"]="Action";
}
if ($_SESSION["lien1"]=="romance.php") {
$_SESSION["item1"]="Romance";
}
if ($_SESSION["lien1"]=="policier.php") {
$_SESSION["item1"]="Policier";
}
if ($_SESSION["lien2"]=="jeunesse.php") {
$_SESSION["item2"]="Jeunesse";
}
if ($_SESSION["lien2"]=="comedies.php") {
$_SESSION["item2"]="Comédies";
}
if ($_SESSION["lien2"]=="action.php") {
$_SESSION["item2"]="Action";
}
if ($_SESSION["lien2"]=="romance.php") {
$_SESSION["item2"]="Romance";
}
if ($_SESSION["lien2"]=="policier.php") {
$_SESSION["item2"]="Policier";
}
if ($_SESSION["lien3"]=="jeunesse.php") {
$_SESSION["item3"]="Jeunesse";
}
if ($_SESSION["lien3"]=="comedies.php") {
$_SESSION["item3"]="Comédies";
}
if ($_SESSION["lien3"]=="action.php") {
$_SESSION["item3"]="Action";
}
if ($_SESSION["lien3"]=="romance.php") {
$_SESSION["item3"]="Romance";
}
if ($_SESSION["lien3"]=="policier.php") {
$_SESSION["item3"]="Policier";
}
if ($_SESSION["lien4"]=="jeunesse.php") {
$_SESSION["item4"]="Jeunesse";
}
if ($_SESSION["lien4"]=="comedies.php") {
$_SESSION["item4"]="Comédies";
}
if ($_SESSION["lien4"]=="action.php") {
$_SESSION["item4"]="Action";
}
if ($_SESSION["lien4"]=="romance.php") {
$_SESSION["item4"]="Romance";
}
if ($_SESSION["lien4"]=="policier.php") {
$_SESSION["item4"]="Policier";
}
if ($_SESSION["lien5"]=="jeunesse.php") {
$_SESSION["item5"]="Jeunesse";
}
if ($_SESSION["lien5"]=="comedies.php") {
$_SESSION["item5"]="Comédies";
}
if ($_SESSION["lien5"]=="action.php") {
$_SESSION["item5"]="Action";
}
if ($_SESSION["lien5"]=="romance.php") {
$_SESSION["item5"]="Romance";
}
if ($_SESSION["lien5"]=="policier.php") {
$_SESSION["item5"]="Policier";
}
>

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
            <h3>Voici la consigne que vous devez réaliser : <?php echo $_SESSION['consigne'];?></h3>
        </div>
        <div id="timer">
          <p><?php echo $_SESSION['debut']?></p>
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
      <ul>
          <li>
              <p>Ce n'est pas la bonne page.</p>
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
