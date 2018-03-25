# Les arguments d'un script

Si vous appelez ce script avec des arguments, par exemple : `php 09_arguments_de_script.php le chat est gros`, vous pouvez récupérer chaque argument ('le', 'chat', 'est' et 'gros') grace à la variable spéciale `$argv`.

Les arguments seront toujours récupérés comme des chaines de caractères, donc on peut avoir besoin de changer leur types vers des entiers par exemple.

Cette variable contient un tableau d'élément dont le premier est le nom du script exécuté et les suivants sont les arguments du script.

Attention, pour qu'une chaine de caractère qui contient des espaces ou des guillemets soient interprêtée comme un seul argument, il convient de mettre des doubles guillements, par exemple : `php 09_arguments_de_script.php "php c'est super naze"`

<?php
// debug de la variable $argv
var_dump($argv);
/*
Dans le premier exemple, affichera le tableau suivant :
array(5) {
  [0]=>
  string(26) "09_arguments_de_script.php"
  [1]=>
  string(2) "le"
  [2]=>
  string(4) "chat"
  [3]=>
  string(3) "est"
  [4]=>
  string(4) "gros"
}
Dans le deuxième exemple, affichera :
array(2) {
  [0]=>
  string(26) "09_arguments_de_script.php"
  [1]=>
  string(21) "php c'est super naze."
}
*/
print "Le nom du script est : ".$argv[0]."\n";
if (isset($argv[1])) {
    print "Le premier argument est : ".$argv[1]."\n";
}
if (isset($argv[2])) {
    print "Le deuxième argument est : ".$argv[2]."\n";
}
if (isset($argv[3])) {
    print "Le troisième argument est : ".$argv[3]."\n";
}
if (isset($argv[4])) {
    print "Le quatrième argument est : ".$argv[4]."\n";
}
// et ainsi de suite...
