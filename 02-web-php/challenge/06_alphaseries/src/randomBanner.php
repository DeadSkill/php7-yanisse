<?php
$json = file_get_contents(__DIR__.'/data/shows.json');
$shows = json_decode($json, true);
function arrayRand() {
    global $shows;
    $randomKey = array_rand($shows, 1);
    // retourne un élément aléatoire d'un tableau
    return $randomKey;
}
$serie = $shows[arrayRand()];
 ?>
