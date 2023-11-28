<?php 
// conditions qui redirige vers succès.html si le bon film a été trouvé. 
header("Location: succès.html");

//condition si ce n'est pas le bon film. 
echo '<p>Ce n'est pas le film que vous devez trouver.</p>';
?>