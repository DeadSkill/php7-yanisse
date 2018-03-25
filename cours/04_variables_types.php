# Les types de variables

PHP est un language à "typage faible" comme JavaScript et contrairement à Java qui a un "typage fort".

En typage faible, on a pas besoin de préciser le type d'une variable pendant son instanciation. De plus une même variable peut changer de type au cours de son existance.

## Types scalaires

Il existe 4 types "scalar" en PHP (types primitifs de base).

<?php
$captainName = "Albator"; // type string, représente une chaine de caractères
$captainAge = 23; // type integer, représente un entier
$captainHeight = 1.70; // type float, représente un nombre à virgule
$captainDead = false; // type bool (true, false), représente vrai ou faux
// pour débugger le contenu d'une variable, on utilise var_dump (dump moi cette variable)
var_dump($captainName);
var_dump($captainAge);
var_dump($captainHeight);
var_dump($captainDead);
?>

## Autres types

En plus des types scalaires on trouve le type `array` qui représente les tableaux et le type  `object`. Nous en verrons plus sur ces deux types plus tard.

<?php
// un tableau simple "array"
$captainStats = [
    'name' => $captainName,
    'age' => $captainAge,
    'height' => $captainHeight,
    'is_dead' => $captainDead,
];
var_dump($captainStats);
// pour du debug également, mais moins descriptif
print_r($captainStats);
// un objet "DateTime"
$captainDateOfBirth = new \DateTime('1984-09-30');
var_dump($captainDateOfBirth);
?>

# Vérification des types

On dispose de plusieurs fonctions pour savoir si une variable est d'un type demandé :

<?php
// savoir de quel type est une variable
var_dump(is_string($captainAge)); // false
var_dump(is_int($captainAge)); // true
var_dump(is_bool($captainAge)); // false
var_dump(is_array($captainAge)); // false
var_dump(is_object($captainAge)); // false
?>

# Le type spécial NULL

Le type NULL est représenté par un mot clé spécial `null` (en minuscule).

Il correspond à "l'absence de valeur". Quand on veut utiliser une variable qui n'a pas été instanciée auparavant, elle contiendra toujours la valeur null (cela va aussi afficher une erreur comme quoi elle n'est pas définie).

On peut écraser une variable avec la valeur null pour "effacer" sa valeur.

<?php
var_dump($gabriel); // NULL
// isset nous dit si une variable ne contient pas null
var_dump(isset($gabriel)); // false
var_dump(isset($captainAge)); // true
// enlever la valeur d'une variable
$captainAge = null;
var_dump($captainAge); // NULL
