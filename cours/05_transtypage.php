# Transtypage

En PHP, typage faible oblige, il est très important de comprendre les conversion d'un type à l'autre.

Pour changer le type d'une variable, on utilise les paranthèses `(nouveau_type)$variable`.

<?php
$captainAge = 33;
$captainAgeString = (string)$captainAge; // traduit en string
// certaines conversions sont logiques
var_dump($captainAge);
var_dump($captainAgeString); // "23"
var_dump((bool)1); // true
var_dump((bool)1337); // true
var_dump((bool)0); // false
var_dump((bool)-1); // true
var_dump((float)-1); // -1
var_dump((bool)"true"); // true
// d'autres beaucoup moins
var_dump((int)"1234abc"); // 1234
var_dump((int)3.9); // 3
var_dump((bool)"false"); // true
var_dump((bool)""); // false
