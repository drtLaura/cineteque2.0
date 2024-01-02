<?php
session_start();
$_SESSION['id'] = $_GET['id'];
//$_SESSION['id']="1";
if (substr($_SESSION['id'], 0, 1) === "1") {
  $bonsite = "AI/genreAI.php?id=" . $_SESSION['id'];
}
if (substr($_SESSION['id'], 0, 1) === "2") {
  $bonsite = "AT/genreAT.php?id=" . $_SESSION['id'];
}
if (substr($_SESSION['id'], 0, 1) === "3") {
  $bonsite = "TI/genreTI.php?id=" . $_SESSION['id'];
}
if (substr($_SESSION['id'], 0, 1) === "4") {
  $bonsite = "TT/genreTT.php?id=" . $_SESSION['id'];
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="site.css">
  </head>
  <body>
    <header>
      <div id="en-tete">
        <div id="logo">
          <button name="logo"><img src="img/logo.png"/></button>
        </div>
        <div id="consigne">
            <h3>Votre consigne s'affichera ici.</h3>
        </div>
        <div id="timer">
          
        </div>
      </div>
      <nav id="menu-genre">
        <ul>
            <li>
                <a>Romance</a>
            </li>
            <li>
                <a>Policier</a>
            </li>
            <li>
                <a>Action</a>
            </li>
            <li>
                <a>Jeunesse</a>
            </li>
            <li>
                <a>Comédies</a>
            </li>
        </ul>
      </nav>
    </header>
    <main>
      <div id="tuto">
        <p id="intro">Avant de démarrer l'expérience, voici un <strong>court tutoriel</strong> pour vous familiariser avec l'interface du site. Cliquez sur le <strong>bouton "Suivant"</strong> quand vous serez prêt à démarrer.</p>
        <p>L'expérience va se dérouler via un site prototypique de cinémathèque, appelé "CinéThèque".</p>
        <p>Vos déplacements sur le site devront se faire <strong>uniquement via les menus de navigation</strong> <img src="img/menuTuto.png"/>et le <strong>logo</strong> du site <img src="img/logo.png"/>, présents sur les parties <em>gauche</em> de chaque page.</p>
        <p>Vous êtes ramenés à la page d'accueil du site lorsque vous cliquez sur le logo du site.</p>
        <p id="chance">Durant toute la durée de l'expérience, vous ne devez surtout pas utiliser les boutons et les raccourcis clavier qui permettent de revenir en arrière ou d'actualiser la page. <img src="img/boutonsInterdits.png"/></p>
        <p>La <strong>consigne</strong> qui vous sera attribuée vous sera rappelée en <em>haut</em> de chaque page du site.</p>
        <p>Vous pourrez consulter le temps que vous mettez à effectuer une tâche après sa réalisation.</p> 
        <p>Une <strong>tâche</strong> démarre lorsque vous êtes redirigés vers la page d'accueil du site et se termine lorsque vous êtes redirigés vers une page "succès".</p>
        <p id="chance">Vous aurez en tout <strong>cinq tâches</strong> à réaliser avec une consigne différente pour chaque tâche.</p>
        <p>A la fin de ces cinq tâches, vous devez cliquez sur le <strong>bouton "Terminer"</strong> qui vous redirigera vers un questionnaire <strong>auquel vous devez répondre.</strong></p>
        <p id="chance">L'expérience se terminera dès que vous aurez cliquez sur le <strong>bouton "Envoyer"</strong> après avoir répondu à toutes les questions du questionnaire.</p>
        <p>Pour la passation de cette expérience, il vous est recommandé de vous asseoir à un bureau dans un endroit calme pour éviter toute distraction, et de faire cette expérience sur un ordinateur en activant le mode "plein écran".</p>
        <p id="chance">N'oubliez pas que votre temps est compté.</p>
        <h3 id="chance">Bonne chance !</h3>

        <form method="post" action="<?php echo $bonsite; ?>">
          <button name="tuto">Suivant</button>
        </form>
      </div>
    </main>
  </body>
</html>
