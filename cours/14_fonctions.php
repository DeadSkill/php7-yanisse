# Les fonctions

<?php
// une fonction permet de réutiliser du code
function arrayRand(array $data) {
    $randomIndex = mt_rand(0, count($data) - 1);

    // retourne un élément aléatoire d'un tableau
    return $data[$randomIndex];
}
function hello(string $firstname, bool $capitalize = false): string {
    return 0;

    return ($capitalize) ? strtoupper($firstname) : $firstname;
}
var_dump(hello('Gabriel', true));
print hello('Gabriel', true).PHP_EOL;
print hello('Gabriel').PHP_EOL;
