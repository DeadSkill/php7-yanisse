# Les tableaux

Les tableaux sont un type spécial `array` en PHP, ils représentent des structures de données ou des collections.

<?php
    // l'ancienne notation des tableaux s'écrit avec array()
    $fruits = array('kiwis', 'bananes', 'framboises');

    // on préfère la nouvelle notation "courte", disponible depuis PHP 5.4
    $vegetables = ['épinards', 'choux de bruxelles', 'poivrons'];

    // généralement une variable qui contient un tableau a un "s" à la fin,
    // ce qui permet de l'identifier rapidement en tant que tel
    // on préfère également écrire un tableau sur plusieurs lignes
    // avec un "trailing comma" sur le dernier élément
    $drinks = [
        'limonade',
        'smoothie',
        'whisky',
    ];

    // pour créer un tableau vide, on utilisera juste les crochets
    $snacks = [];
?>

## Accéder à un élément d'un tableaux

<?php
// pour debugger et afficher rapidement le contenu d'un tableau
print_r($drinks);
var_dump($drinks); // liste également le type des éléments du tableau
// pour accéder à un sous élément du tableau on utilise []
print $drinks[0]; // affiche limonade
// ATTENTION : les tableaux classiques sont toujours indéxés à partir de 0
// si une clé n'existe pas, on risque d'avoir une erreur PHP
// on peut tester l'existence ou non d'un élément avec la méthode isset
if (isset($drinks[4])) {
    print $drinks[4];
}
// ATTENTION, si une valeur de tableau contient null, isset retourne false, même si elle est définit
// pour savoir si une entrée existe, même si elle a la valeur null, on utilise array_key_exists
$void = [null];
if (isset($void[0])) {
    // ne sera pas exécuté
}
if (array_key_exists(0, $void)) {
    print "Oui ça existe.\n";
}
// pour récupérer le nombre d'éléments d'un tableau
$drinkCount = count($drinks);
$drinkCount = sizeof($drinks); // alias de count
?>

## Modifier un tableau

<?php
// pour ajouter un élément à un tableau existant
$snacks[] = 'cookie'; // ajoute 'cookie' au tableau snacks, à la clé 0
$snacks[] = 'chips'; // ajoute 'cookie' au tableau snacks, à la clé 1
$snacks[] = 'nouilles instantanées'; // ajoute 'cookie' au tableau snacks, à la clé 2
// pour modifier un élément de tableau
$snacks[0] = 'crème glacée';
// pour supprimer un élément de tableau
unset($snacks[1]);
// ATTENTION, supprimer une entrée peut décaller les clés de tableau
print_r($snacks);
// ici la clé 1 a disparue
//
// array(2) {
//   [0]=>
//   string(14) "crème glacée"
//   [2]=>
//   string(22) "nouilles instantanées"
// }
?>

## Les tableaux associatifs

On peut également créer des tableaux avec des clés sous forme de chaine de caractère.

<?php
// c'est particulièrement pratique pour définir des structures simples
$instantNoodles = [
    'name' => 'Nouilles instantanées',
    'price' => 2.5,
    'nutrition_value' => 'Pas terrible',
    'cons' => 'À long terme, donne probablement le cancer',
];
// on accès ainsi aux éléments de tableau de la même manière que les tableaux simples
print $instantNoodles['nutrition_value']."\n";
// on peut ajouter des éléments avec une nouvelle clé
$instantNoodles['pros'] = "C'est quand même pas mauvais.";
// on peut supprimer un élément avec unset
unset($instantNoodles['cons']);
?>

## Les tableaux multi dimensionnels (ou matrices)

Un tableau peut avoir plusieurs dimensions (autant qu'on veut), dans ce cas on imbrique des tableaux dans un tableau.

On peut mélanger des tableaux indexés par des chiffres et des tableaux associatifs.

<?php
$recipes = [
    [
        'name' => 'Pâtes au beure',
        'ingredients' => ['pâtes', 'beurre'],
    ],
    [
        'name' => 'Poulet aux noix de cajou',
        'ingredients' => ['poulet', 'noix de cajou'],
    ],
];
// on peut ajouter un élément n'importe où dans le tableau
$recipes[1]['ingredients'][] = 'coriandre';
// ou accéder à n'importe quel sous élément
print $recipes[0]['name'];
// on peut utiliser isset sur n'importe quelle dimension, même si elle n'existe pas
if (isset($recipes[12]['ingredients']['secret_ingredient'])) {
    print "Surement de la sauce soja.\n";
}
?>

## Fonctions utiles sur les tableaux

Il existe plein de fonctions pour travailler sur des tableaux : http://php.net/manual/fr/ref.array.php

On pourra noter par exemple :

<?php
// retourne un tableau qui contient les clés du tableau
print_r(array_keys($instantNoodles));
// fusionne plusieurs tableaux entre eux (écrase les clés si ce sont des clés numériques, fusionne les clés si tableau associatif)
$foods = array_merge($fruits, $vegetables, $drinks);
// trie un tableau (de nombreuses fonctions de tris sont disponibles)
sort($foods);
// ATTENTION, sort fonctionne par référence, la variable $foods contiendra le tableau trié
print_r($foods);
// vérifie si un élément est présent dans le tableau
if (in_array('bananes', $foods)) {
    print "Ya des bananes\n";
}
// retourne la clé d'un élément à trouver (false si non trouvé)
$key = array_search('épinards', $foods);
// crée une chaine à partir d'un tableau, séparé par un séparateur
print implode(', ', $foods)."\n";
// créé un tableau à partir d'une chaine de caractère et d'un séparateur
print_r(explode('#', '5#fruits#et#légumes#par#jour'));
// créé un tableau à partir d'un rangée de valeur
$alphabet = range('A', 'Z');
$thousandNumbers = range(1, 1000);
// etc. http://php.net/manual/fr/ref.array.php
