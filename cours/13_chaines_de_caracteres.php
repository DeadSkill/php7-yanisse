# Les chaines de caractères

Plein de fonctions sur les chaines de caractères : http://php.net/manual/fr/ref.strings.php

<?php
$author = 'Howard Phillips Lovecraft';
$book = 'Call of Cthulhu';
// affiche la longueur d'une chaine
print strlen($author).PHP_EOL; // note : PHP_EOL (end of line) correspond au retour chariot, quel que soit le serveur
// affiche un caractère de la chaine
print $author{0}."\n"; // le premier caractère est indexé à 0
// concatènation de plusieurs chaines
print $author.' a écrit '.$book.".\n";
// on peut aussi utiliser des variables si on utilise les guillements doubles
print "L'auteur $author a écrit $book.\n";
// ou utiliser la fonction sprintf
// cette solution est à préférer car plus lisible si beaucoup de paramètres
print sprintf(
    "L'auteur %s a écrit %s.\n",
    $author,
    $book
);
// on peut facilement formater des chaines
print strtolower($book).PHP_EOL;
print strtoupper($book).PHP_EOL;
// remplacer une occurence dans une chaine
print str_replace('Cthulhu', 'Hello Kitty', $book).PHP_EOL;
// récupérer une partie d'une chaine
print substr($book, 0, 8).'Duty'.PHP_EOL;
// enlever les espaces superflux
print trim("  \t\n Il a aussi écrit le cauchemar d'Innsmouth.  \n ").PHP_EOL;
// et plein d'autres fonctions utiles : http://php.net/manual/fr/ref.strings.php
