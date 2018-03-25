<?php
print "Je suis dans array_rand.php\n";
// une fonction permet de réutiliser du code
function arrayRand(array $data) {
    $randomIndex = mt_rand(0, count($data) - 1);

    // retourne un élément aléatoire d'un tableau
    return $data[$randomIndex];
}
