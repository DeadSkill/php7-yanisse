# Les opérateurs logiques

Les opérateurs logiques permettent de faire des "opérations logique".

## Le "non logique"

Représente l'inverse d'une condition logique avec le caractères `!`.

<?php
$catWeight = 3;
$catIsFat = $catWeight > 5; // vaut false
if (!$catIsFat) {
    // le texte est affiché puisque la condition est évaluée true :
    // l'inverse de false
    print "Je suis pas gros.";
}
?>

## Le "et logique"

On utilise le "et logique" avec deux conditions (ou plus) et l'opérateur `&&`.

Les deux conditions sont ainsi évaluées et la conditions résultante est évaluée à vrai si LES DEUX CONDITIONS sont évaluées à vrai indépendament.

<?php
$name = 'Dog';
$weight = 2;
$isFatCat = $name === 'Cat' && $weight > 5;
if ($isFatCat) {
    // sera affiché si les deux conditions sont vraies
    print "C'est un gros chat.";
} else {
    // si au moins une conditions est fausse
    print "Ce n'est pas un chat, ou alors il n'est pas gros.";
}
?>

## Le "ou logique"

On utilise le "ou logique" avec deux conditions (ou plus) et l'opérateur `||`.

Les deux conditions sont ainsi évaluées et la conditions résultante est évaluée à vrai si AU MOINS UNE DES CONDITION est évaluée à vrai.

<?php
if ($name === 'Cat' || $name === 'Dog') {
    // sera affiché une des condition est vraie
    print "C'est un chat ou c'est un chien.";
} else {
    // si toutes les conditions sont fausses
    print "Ce n'est pas un chat, ou alors il n'est pas gros.";
}
?>

## Combinaison d'opérateurs logiques

On peut combiner les opérateurs entre eux, et faire des groupes avec les `()`.

<?php
$isFat = $weight > 5;
if (($name === 'Cat' || $name === 'Dog') && !$isFat) {
    print "C'est un chat ou un chien, mais en tout cas il est maigre.\n";
}
