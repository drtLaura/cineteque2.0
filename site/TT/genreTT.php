<?php
session_start(); // démarrage session
$_SESSION['id'] = $_GET['id'];
// Réinitialiser le temps de début chaque fois que cette page est chargée
$_SESSION['debut'] = time();
$_SESSION["message"]="<p id=\"message\">Ce n'est pas la bonne page.</p>";
if (!isset($_SESSION['indexconsigne'])) {
    $_SESSION['indexconsigne'] = 1;
}
if ($_SESSION['indexconsigne'] == 1){
    //echo 'indexconsigne = 1';
    $_SESSION['consigne'] = "Recherchez une comédie française qui a une note de 2/5";
    //echo "voici la consigne ".$_SESSION['consigne'];
    $_SESSION['res']=array("comedies","français","2");
}
if ($_SESSION['indexconsigne'] ==  2) {
    //echo 'indexconsigne = 2';
    $_SESSION['consigne'] = "Recherchez un film d'animation pixar qui a une note de 4/5";
    //echo "voici la consigne ".$_SESSION['consigne'];
    $_SESSION['res']=array("jeunesse","américain","4");
}
if ($_SESSION['indexconsigne'] ==  3) {
    //echo 'indexconsigne = 3';
    $_SESSION['consigne'] = "Recherchez un film d'action russe qui a une note de 3/5";
    //echo "voici la consigne ".$_SESSION['consigne'];
    $_SESSION['res']=array("action","russe","3");
}
if ($_SESSION['indexconsigne'] ==  4) {
    //echo 'indexconsigne = 4';
    $_SESSION['consigne'] = "Recherchez une romance coréenne qui a une note de 1/5";
    //echo "voici la consigne ".$_SESSION['consigne'];
    $_SESSION['res']=array("romance","coréen","1");
}
if ($_SESSION['indexconsigne'] == 5) {
    //echo 'indexconsigne = 5';
    $_SESSION['consigne'] = "Recherchez un film policier japonais qui a la note maximale";
    //echo "voici la consigne ".$_SESSION['consigne'];
    $_SESSION['res']=array("policier","japonais","5");
}
//Contrôler le chemin emprunté 
$_SESSION["genre"]="";
$_SESSION["pays"]="";
$_SESSION["note"]="";
//Affecter les items du menu de navigation des genres 
$menuLiens=array("action.php","comedies.php","jeunesse.php","policier.php","romance.php");
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
//Randomiser l'ordre des items avec icônes du menu de navigation des genres
/*$menuItems=array("jeunesse <svg xmlns=\"http://www.w3.org/2000/svg\" id=\"Layer_1\" data-name=\"Layer 1\" viewBox=\"0 0 24 24\" width=\"16\" height=\"16\">
<path d=\"M22.264,3.728c-.847-.854-2.269-.938-3.289-.211l-3.358,2.191c.245-.518,.383-1.097,.383-1.707,0-2.206-1.794-4-4-4s-4,1.794-4,4c0,.61,.138,1.189,.383,1.707l-3.341-2.179c-1.034-.739-2.459-.655-3.306,.199-.524,.527-.789,1.25-.728,1.981,.062,.732,.44,1.398,1.054,1.837l4.938,3.253v3.665l-2.268,2.268c-.674,.674-.905,1.654-.603,2.562l1.026,2.996c.341,1.022,1.294,1.71,2.372,1.71,.413,0,.825-.105,1.195-.305,1.049-.568,1.537-1.906,1.133-3.119l-.492-1.406,2.17-2.17h.932l2.174,2.174-.47,1.409c-.402,1.205,.086,2.544,1.137,3.113,.374,.201,.775,.304,1.194,.304,1.077,0,2.03-.688,2.371-1.71l1-3c.301-.904,.069-1.885-.604-2.559l-2.268-2.268v-3.665l4.953-3.264c.598-.428,.977-1.094,1.038-1.826,.062-.731-.203-1.454-.728-1.981ZM12,1c1.654,0,3,1.346,3,3s-1.346,3-3,3-3-1.346-3-3,1.346-3,3-3Zm4,13.356l-3.441,1.644h-1.118l-3.441-1.644v-1.356h8v1.356Zm-7.565,4.33c-.136,.136-.182,.338-.118,.519l.594,1.695c.251,.752-.034,1.576-.662,1.916-.809,.44-1.858,.013-2.145-.846l-1.026-2.996c-.181-.543-.042-1.131,.362-1.535l2.164-2.164,2.87,1.372-2.039,2.039Zm10.126-1.247c.404,.404,.543,.992,.362,1.535l-1,3c-.283,.853-1.334,1.279-2.141,.843-.629-.341-.914-1.165-.663-1.917l.567-1.702c.06-.18,.013-.378-.121-.512l-2.039-2.039,2.87-1.372,2.164,2.164Zm3.435-11.813c-.037,.44-.265,.84-.608,1.085l-5.162,3.401c-.14,.093-.225,.25-.225,.418v1.471H8v-1.471c0-.168-.085-.325-.225-.418L2.629,6.721c-.359-.256-.587-.655-.624-1.096-.037-.445,.119-.869,.44-1.192,.507-.511,1.373-.55,2.033-.078l4.59,2.994c.598,.426,1.301,.651,2.035,.651h1.793c.734,0,1.438-.226,2.018-.64l4.624-3.018c.645-.461,1.51-.421,2.017,.09,.321,.323,.478,.747,.44,1.192Z\"/>
</svg>", 
"comedies <svg xmlns=\"http://www.w3.org/2000/svg\" id=\"Layer_1\" data-name=\"Layer 1\" viewBox=\"0 0 24 24\" width=\"16\" height=\"16\">
<path d=\"M5.993,14a21.841,21.841,0,0,0,6,1A21.923,21.923,0,0,0,18,14c-.615,2.28-2.664,5-6,5S6.608,16.28,5.993,14ZM8,9c.321,0,1,.946,1,2h2c0-1.892-1.232-4-3-4S5,9.108,5,11H7C7,9.946,7.679,9,8,9Zm8-2c-1.768,0-3,2.108-3,4h2c0-1.054.68-2,1-2s1,.946,1,2h2C19,9.108,17.768,7,16,7Zm7.432,6.688C22.674,12.93,19,12,19,12s.93,3.674,1.688,4.432a1.94,1.94,0,0,0,2.744-2.744ZM5,12s-3.674.93-4.432,1.688a1.94,1.94,0,0,0,2.744,2.744C4.07,15.674,5,12,5,12Zm7,10a9.982,9.982,0,0,1-7.783-3.735,3.888,3.888,0,0,1-1.966.7,11.963,11.963,0,0,0,19.5,0,3.906,3.906,0,0,1-1.966-.706A9.979,9.979,0,0,1,12,22ZM12,2a10,10,0,0,1,9.909,8.771,12.933,12.933,0,0,1,2.073.888,11.986,11.986,0,0,0-23.964,0,12.894,12.894,0,0,1,2.073-.888A10,10,0,0,1,12,2Z\"/>
</svg>",
"action <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-crosshair\" viewBox=\"0 0 16 16\">
<path d=\"M8.5.5a.5.5 0 0 0-1 0v.518A7.001 7.001 0 0 0 1.018 7.5H.5a.5.5 0 0 0 0 1h.518A7.001 7.001 0 0 0 7.5 14.982v.518a.5.5 0 0 0 1 0v-.518A7.001 7.001 0 0 0 14.982 8.5h.518a.5.5 0 0 0 0-1h-.518A7.001 7.001 0 0 0 8.5 1.018zm-6.48 7A6.001 6.001 0 0 1 7.5 2.02v.48a.5.5 0 0 0 1 0v-.48a6.001 6.001 0 0 1 5.48 5.48h-.48a.5.5 0 0 0 0 1h.48a6.002 6.002 0 0 1-5.48 5.48v-.48a.5.5 0 0 0-1 0v.48A6.001 6.001 0 0 1 2.02 8.5h.48a.5.5 0 0 0 0-1h-.48M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4\"/>
</svg>", 
"romance <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-hearts\" viewBox=\"0 0 16 16\">
<path fill-rule=\"evenodd\" d=\"M4.931.481c1.627-1.671 5.692 1.254 0 5.015-5.692-3.76-1.626-6.686 0-5.015Zm6.84 1.794c1.084-1.114 3.795.836 0 3.343-3.795-2.507-1.084-4.457 0-3.343ZM7.84 7.642c2.71-2.786 9.486 2.09 0 8.358-9.487-6.268-2.71-11.144 0-8.358Z\"/>
</svg>" , 
"policier <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-fingerprint\" viewBox=\"0 0 16 16\">
<path d=\"M8.06 6.5a.5.5 0 0 1 .5.5v.776a11.5 11.5 0 0 1-.552 3.519l-1.331 4.14a.5.5 0 0 1-.952-.305l1.33-4.141a10.5 10.5 0 0 0 .504-3.213V7a.5.5 0 0 1 .5-.5Z\"/>
<path d=\"M6.06 7a2 2 0 1 1 4 0 .5.5 0 1 1-1 0 1 1 0 1 0-2 0v.332c0 .409-.022.816-.066 1.221A.5.5 0 0 1 6 8.447c.04-.37.06-.742.06-1.115zm3.509 1a.5.5 0 0 1 .487.513 11.5 11.5 0 0 1-.587 3.339l-1.266 3.8a.5.5 0 0 1-.949-.317l1.267-3.8a10.5 10.5 0 0 0 .535-3.048A.5.5 0 0 1 9.569 8Zm-3.356 2.115a.5.5 0 0 1 .33.626L5.24 14.939a.5.5 0 1 1-.955-.296l1.303-4.199a.5.5 0 0 1 .625-.329Z\"/>
<path d=\"M4.759 5.833A3.501 3.501 0 0 1 11.559 7a.5.5 0 0 1-1 0 2.5 2.5 0 0 0-4.857-.833.5.5 0 1 1-.943-.334Zm.3 1.67a.5.5 0 0 1 .449.546 10.72 10.72 0 0 1-.4 2.031l-1.222 4.072a.5.5 0 1 1-.958-.287L4.15 9.793a9.72 9.72 0 0 0 .363-1.842.5.5 0 0 1 .546-.449Zm6 .647a.5.5 0 0 1 .5.5c0 1.28-.213 2.552-.632 3.762l-1.09 3.145a.5.5 0 0 1-.944-.327l1.089-3.145c.382-1.105.578-2.266.578-3.435a.5.5 0 0 1 .5-.5Z\"/>
<path d=\"M3.902 4.222a4.996 4.996 0 0 1 5.202-2.113.5.5 0 0 1-.208.979 3.996 3.996 0 0 0-4.163 1.69.5.5 0 0 1-.831-.556Zm6.72-.955a.5.5 0 0 1 .705-.052A4.99 4.99 0 0 1 13.059 7v1.5a.5.5 0 1 1-1 0V7a3.99 3.99 0 0 0-1.386-3.028.5.5 0 0 1-.051-.705ZM3.68 5.842a.5.5 0 0 1 .422.568c-.029.192-.044.39-.044.59 0 .71-.1 1.417-.298 2.1l-1.14 3.923a.5.5 0 1 1-.96-.279L2.8 8.821A6.531 6.531 0 0 0 3.058 7c0-.25.019-.496.054-.736a.5.5 0 0 1 .568-.422Zm8.882 3.66a.5.5 0 0 1 .456.54c-.084 1-.298 1.986-.64 2.934l-.744 2.068a.5.5 0 0 1-.941-.338l.745-2.07a10.51 10.51 0 0 0 .584-2.678.5.5 0 0 1 .54-.456Z\"/>
<path d=\"M4.81 1.37A6.5 6.5 0 0 1 14.56 7a.5.5 0 1 1-1 0 5.5 5.5 0 0 0-8.25-4.765.5.5 0 0 1-.5-.865Zm-.89 1.257a.5.5 0 0 1 .04.706A5.478 5.478 0 0 0 2.56 7a.5.5 0 0 1-1 0c0-1.664.626-3.184 1.655-4.333a.5.5 0 0 1 .706-.04ZM1.915 8.02a.5.5 0 0 1 .346.616l-.779 2.767a.5.5 0 1 1-.962-.27l.778-2.767a.5.5 0 0 1 .617-.346Zm12.15.481a.5.5 0 0 1 .49.51c-.03 1.499-.161 3.025-.727 4.533l-.07.187a.5.5 0 0 1-.936-.351l.07-.187c.506-1.35.634-2.74.663-4.202a.5.5 0 0 1 .51-.49\"/>
</svg>");
shuffle($menuItems);
$_SESSION["item1"]=$menuItems[0];
$_SESSION["item2"]=$menuItems[1];
$_SESSION["item3"]=$menuItems[2];
$_SESSION["item4"]=$menuItems[3];
$_SESSION["item5"]=$menuItems[4];
$menuLiens=array("","","","","");
$index=0;
foreach($menuItems as $item){
    $ch=strstr($item," ",true);
    $menuLiens[$index]=$ch.".php";
    $index++;
}
$_SESSION["lien1"]=$menuLiens[0];
$_SESSION["lien2"]=$menuLiens[1];
$_SESSION["lien3"]=$menuLiens[2];
$_SESSION["lien4"]=$menuLiens[3];
$_SESSION["lien5"]=$menuLiens[4];*/
//Affecyer les items du menu de navigation des pays
$menuLiensPays=array("américain.php","coréen.php","français.php", "japonais.php", "russe.php");
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
//Randomiser l'ordre des items avec icônes du menu de navigation des pays
/*$menuPays=array("français <img src=\"../img/france.png\"/>", 
"japonais <img src=\"../img/japan.png\"/>",
"américain <img src=\"../img/usa.png\"/>", 
"russe <img src=\"../img/russia.png\"/>" , 
"coréen <img src=\"../img/korean.png\"/>");
shuffle($menuPays);
$_SESSION["pays1"]=$menuPays[0];
$_SESSION["pays2"]=$menuPays[1];
$_SESSION["pays3"]=$menuPays[2];
$_SESSION["pays4"]=$menuPays[3];
$_SESSION["pays5"]=$menuPays[4];
$menuLiensPays=array("","","","","");
$index=0;
foreach($menuPays as $pays){
    $ch=strstr($pays," ",true);
    $menuLiensPays[$index]=$ch.".php";
    $index++;
}
$_SESSION["lienPays1"]=$menuLiensPays[0];
$_SESSION["lienPays2"]=$menuLiensPays[1];
$_SESSION["lienPays3"]=$menuLiensPays[2];
$_SESSION["lienPays4"]=$menuLiensPays[3];
$_SESSION["lienPays5"]=$menuLiensPays[4];*/
//Randomiser l'ordre des items du menu de navigation des notes 
$menuLiensNotes=array("1.php", "2.php","3.php", "4.php" , "5.php");
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
//Randomiser l'ordre des items avec icônes du menu de navigation des notes 
/*$menuNotes=array("1 <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-emoji-angry-fill\" viewBox=\"0 0 16 16\">
<path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M4.053 4.276a.5.5 0 0 1 .67-.223l2 1a.5.5 0 0 1 .166.76c.071.206.111.44.111.687C7 7.328 6.552 8 6 8s-1-.672-1-1.5c0-.408.109-.778.285-1.049l-1.009-.504a.5.5 0 0 1-.223-.67zm.232 8.157a.5.5 0 0 1-.183-.683A4.498 4.498 0 0 1 8 9.5a4.5 4.5 0 0 1 3.898 2.25.5.5 0 1 1-.866.5A3.498 3.498 0 0 0 8 10.5a3.498 3.498 0 0 0-3.032 1.75.5.5 0 0 1-.683.183M10 8c-.552 0-1-.672-1-1.5 0-.247.04-.48.11-.686a.502.502 0 0 1 .166-.761l2-1a.5.5 0 1 1 .448.894l-1.009.504c.176.27.285.64.285 1.049 0 .828-.448 1.5-1 1.5\"/>
</svg>", 
"2 <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-emoji-frown-fill\" viewBox=\"0 0 16 16\">
<path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5m-2.715 5.933a.5.5 0 0 1-.183-.683A4.498 4.498 0 0 1 8 9.5a4.5 4.5 0 0 1 3.898 2.25.5.5 0 0 1-.866.5A3.498 3.498 0 0 0 8 10.5a3.498 3.498 0 0 0-3.032 1.75.5.5 0 0 1-.683.183M10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8\"/>
</svg>",
"3 <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-emoji-neutral-fill\" viewBox=\"0 0 16 16\">
<path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5m-3 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5M10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8\"/>
</svg>", 
"4 <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-emoji-smile-fill\" viewBox=\"0 0 16 16\">
<path d=\"M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683M10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8\"/>
</svg>",
"5 <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-emoji-heart-eyes-fill\" viewBox=\"0 0 16 16\">
<path d=\"M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M4.756 4.566c.763-1.424 4.02-.12.952 3.434-4.496-1.596-2.35-4.298-.952-3.434m6.559 5.448a.5.5 0 0 1 .548.736A4.498 4.498 0 0 1 7.965 13a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .548-.736h.005l.017.005.067.015.252.055c.215.046.515.108.857.169.693.124 1.522.242 2.152.242.63 0 1.46-.118 2.152-.242a26.58 26.58 0 0 0 1.109-.224l.067-.015.017-.004.005-.002zm-.07-5.448c1.397-.864 3.543 1.838-.953 3.434-3.067-3.554.19-4.858.952-3.434z\"/>
</svg>");
shuffle($menuNotes);
$_SESSION["note1"]=$menuNotes[0];
$_SESSION["note2"]=$menuNotes[1];
$_SESSION["note3"]=$menuNotes[2];
$_SESSION["note4"]=$menuNotes[3];
$_SESSION["note5"]=$menuNotes[4];
$menuLiensNotes=array(substr($_SESSION["note1"],0,1).".php",
substr($_SESSION["note2"],0,1).".php",
substr($_SESSION["note3"],0,1).".php",
substr($_SESSION["note4"],0,1).".php",
substr($_SESSION["note5"],0,1).".php");
$_SESSION["lienNotes1"]=$menuLiensNotes[0];
$_SESSION["lienNotes2"]=$menuLiensNotes[1];
$_SESSION["lienNotes3"]=$menuLiensNotes[2];
$_SESSION["lienNotes4"]=$menuLiensNotes[3];
$_SESSION["lienNotes5"]=$menuLiensNotes[4];*/
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
            <h3>Voici la consigne que vous devez réaliser : <br><?php echo $_SESSION['consigne'];?></h3>
        </div>
        <div id="timer">
          <p></p>
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
            <?php echo $_SESSION["message"];?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
