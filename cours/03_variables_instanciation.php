<?php
/*
Une variable permet de stocker une donnée en mémoire pour pouvoir l'utiliser plus tard
Pour "instancier" une variable (lui donner une valeur) on utilise l'opérateur =
*/
// un nom de variable doit être descriptif de son contenu
// un nom de variable doit commencer par $
// un nom de variable s'écrit en anglais et en camelCase (comme les bosses d'un chameau)
$captainAge = 75;
$parrotName = "Kikou";
$shipName = "";
// on peut écraser la valeur contenu précédement dans une variable
$captainAge = 32;
$captainAgeLabel = "32 ans";
// on peut ensuite afficher le contenu de ces variables
echo $captainAge . "\n"; // concaténation
echo 'Mon perroquet : ' .$parrotName. ', mon bateau : ' . $shipName . "\n";
/*
Une constante sert aussi à stocker des valeur, mais ne peut jamais être modifiée
*/
// définition d'une constante
define('PIRATE_FLAG', '💀');
// affichage SANS $
echo PIRATE_FLAG;
// on ne peut pas la modifier
// PIRATE_FLAG = '🎏'; syntax error
// define('PIRATE_FLAG', '🎏'); ALREADY DEFINED
