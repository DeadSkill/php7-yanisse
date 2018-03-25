# Les boucles

Pour exécuter un traitement plusieurs fois de suite, on peut utiliser différents types de boucles :
for, while, foreach, dowhile.

<?php
$famousPeople = [
    [
        'name' => 'Mark Zuckerberg',
        'job' => 'Entreprenneur',
    ],
    [
        'name' => 'Bill Gates',
        'job' => 'Entreprenneur',
    ],
    [
        'name' => 'Shakira',
        'job' => 'Musicienne',
    ],
    [
        'name' => 'Jul',
        'job' => 'Musicien ?',
    ],
];
?>

## while

while() execute du code, tant que la condition entre paranthèse est évalue à `true`.

<?php
$index = 0;
while (isset($famousPeople[$index])) {
    $index++;
}
?>

## for

for() permet d'éxecuter un traitement X fois. for est composé de trois éléments, séparés par des `;` (initialisation, condition, post-traitement), par exemple :

<?php
for ($i = 0; $i < count($famousPeople); $i++) {
    print $famousPeople[$i]['name']."\n";
    }

?>

Le premier élément `$i = 0` est l'initialisation, ce code est exécuté AVANT le premier passage dans la boucle.

Le deuxième élément `$i < count($famousPeople)` est la condition qui sera évaluée avant chaque passage dans la boucle, si ça  retourne `false` on sort de la boucle.

Le troisième élément `$i++` est le post-traitement, ce code sera exécuté APRÈS chaque passage dans la boucle.

## foreach

foreach est la boucle la plus utilisée en php, car elle permet simplement de parcourir un tableau sans ce soucier de sa taille et avec un très faible risque de se tromper.

<?php
foreach ($famousPeople as $key => $people){
    // $key contient la clé de tableau (ici 0, 1, 2...)
    // $people est équivaut à $famousPeople[$key]
    print $key.': '.$people['name'].PHP_EOL;
}
?>

On peut imbriquer plusieurs boucles ensemble :

<?php
foreach ($famousPeople as $people){
    foreach ($people as $key => $value) {
        print $key.': '.$value.PHP_EOL;
    }
}
?>

## do while

Rarement utilisé (parce que très risqué), do while est identique à while sauf qu'on passe au moins une fois dans la boucle et que la condition est évaluée APRÈS chaque passage.

<?
$index = 0;
do {
    // sera exécuté une fois au moins
    var_dump($famousPeople[$index]);

    $index++;
} while ($famousPeople[$index]['job'] === 'Entreprenneur'));
?>

## break

utilisé pour sortir d'une boucle.

<?php
foreach ($famousPeople as $people){
    if ($people['job'] !== 'Entreprenneur') {
        break; // dès qu'un job est Entreprenneur, on sort de la boucle
    }
}
?>

## continue

utilisé pour passer à la prochaine itération d'une boucle.

<?php
foreach ($famousPeople as $people){
    if ($people['job'] !== 'Entreprenneur') {
        // on passe à l'itération suivante
        continue;
    }

    // ce code ne sera pas exécuté
    // pour les job Entreprenneur
    print $people['name'].PHP_EOL;
}
?>
