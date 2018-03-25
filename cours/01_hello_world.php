<?php
// un fichier php classique commence par la balise <?php
// elle indique au compilateur que le texte entre les balises
// doit être interpreté comme du code php
// le nom du fichier php est écrit en minuscules, sans accent, et se termine par l'extension .php
// pour lancer ce script en ligne de commande on tape "php 01_hello_world.php" dans le répertoire qui contient le script
// une instruction doit forcément se terminer par un ;
// ici on affiche juste hello world
print 'Hello World';
// la balise de fermeture est optionelle
// et quand il n'y a qu'une balise php dans un script
// c'est une bonne pratique de ne pas la mettre
?>

On peut écrire du texte hors des balises php, il n'est pas interprêté par le compilateur mais il est "écrit" en sortie du script.

<?php
// un fichier php peut contenir autant de balise php qu'on veut
// la fonction die écrit du texte en sortie, et arrête l'exécution du script.
die("C'est la fin\n");
?>
