# Opérateurs

## Opérateurs de comparaison

Ils servent à évaluer si un résultat est vrai ou faux (une condition booléenne).

<?php
$captainAge = 23;
// comparé que le résultat est similaire
if ($captainAge == "23") {
    // retourne true parce que 23 est similaire à "23"
    // ce qui veux dire que la conversion en type entier de la chaine "23" est égale à 23
}
// comparer que le résultat est IDENTIQUE (égalité stricte)
if ($captainAge === "23") {
    // retourne false parce que les deux ne sont pas du même type
}
// comparer qu'une valeur est différente
if ($captainAge != 24) {
    // retourne vrai parce que 23 est différent de 24
}
// comparer qu'une valeur est STRICTEMENT différente
if ($captainAge !== 23) {
    // retourne faux parce que les deux valeurs sont identiques
}
if ($captainAge !== "23") {
    // retourne vrai parce que les deux valeurs sont similaires, mais pas du même type
    // elles sont donc différentes au sens strict
}
// comparaison de nombres
if ($captainAge < 24) {
    // retourne vrai
}
if ($captainAge > 24) {
    // retourne faux
}
if ($captainAge <= 23) {
    // retourne vrai
}
if ($captainAge >= 23) {
    // retourne aussi vrai
}
?>

## Opérateurs mathématiques

Servent à faire des opération mathématiques courantes.

<?php
// opérateur mathématiques
$sum = 12 + 45; // 56
$diff = 12 - 45; // -33
$multiplication = 12 * 45; // 540
$division = 12 / 45; // 0.266666...
//$division = 12 / 0; // warning DIVISION PAR ZERO
$exposant = 2 ** 3; // 8
$modulo = 12 % 3; // 0, correspond au reste de la division de 12 / 3, puisque 12 = (3 * 4) + 0
$modulo = 12 % 5; // 2, correspond au reste de la division de 12 / 7, pusique 12 = (5 * 2) + 2
$combo = 12 - (4 + 5) * 10; // on peut combiner / grouper des opérateurs mathématiques
?>

On peut combiner l'opérateur d'affectation = avec une opération mathématique.

L'opération est effectuée, puis le contenu de la variable est modifié.

<?php
$captainAge += 10;
// récupère le contenu de $captainAge
// lui ajoute 10
// stocke le résultat dans $captainAge
$captainAge -= 10;
$captainAge *= 10; // marche pour tout les opérateurs mathématiques
// incrémentation / décrémentation, pratique pour créer des compteurs
$captainAge++; // équivaut à $captainAge = $captainAge + 1;
$captainAge--; // équivaut à $captainAge = $captainAge - 1;
?>

Opérateur de concaténation, permet de coller plusieurs chaines de caractères en une seule.

<?php
$captainLabel = $captainAge;
$captainLabel .= " ans"; // 23 ans
?>
