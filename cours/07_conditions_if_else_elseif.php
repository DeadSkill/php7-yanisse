# Conditions : if, else, elseif

Les conditions permettent d'exécuter un script si et seulement si une condition est évaluée (retourne) la valeur "vrai" d'un booléen.

<?php
$captainAlive = true;
if ($captainAlive == true) {
    // ce code est exécuté car la condition
    // dans les paranthèses du if s'évalue bien à true
    print "Il est en vie 💪\n";
}
// quand on veut juste vérifier qu'une variable s'évalue à true, on peut directemen utiliser
// ce qui revient au même que le code ci-dessus
if ($captainAlive) {
    print "Il est en vie 😱\n";
}
?>

Si la condition du if s'évalue à "false", et qu'on veut éxecuter du code dans ce cas précis, on utilisera un "else".

<?php
$captainAlive = false;
if ($captainAlive) {
    // ne sera pas affiché
    print "Il est en vie 💪\n";
} else {
    // est affiché, puisque la condition du if s'évalue à false
    print "Il est mort 😱\n";
}
// ce code peut être racourci en utilisant l'opérateur ternaire
// il a le même effet que le code ci-dessus
print ($captainAlive) ? "Il est en vie 💪\n" : "Il est mort 😱\n";
// il peut être utiliser pour créer des variables bool rapidement sans passer par un if / else
$captainAge = 15;
$captainIsMinor = ($captainAge < 18) ? true : false;
?>

Quand on veut l'inverse d'un booléen, on utilise "!" qui correspond au "non logique".

<?
$captainAlive = false;
// inversion d'un boolean true -> false, false -> true
if (!$captainAlive) {
    // équivaut à $captainAlive == false
    // ce code sera afficher puisque !false -> true
    print "Il n'est pas en vie.";
}
// les doubles négations, c'est difficile à comprendre
// c'est pourquoi on peut passer par une autre variable pour plus de lisibilité
$captainDead = !$captainAlive;
if ($captainDead) {
    print "Il est mort.";
}
?>

Quand on veut évaluer plusieurs conditions à la suite, on peut utiliser "elseif", même si on préferera généralement utiliser un switch.

<?php
$captainAge = 23;
if ($captainAge < 18) {
    print "Le capitaine est mineur.\n";
} elseif ($captainAge < 30){
    print "Le capitaine est un jeune vieux.\n";
// si toutes mes conditions sont évaluées à false, c'est le else qui sera exécuté
} else {
    print "Le capitaine est vieux\n";
}
?>
