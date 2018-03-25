<?php
$json = file_get_contents(__DIR__.'/data/shows.json');
$shows = json_decode($json, true);
function sortByMarks($showA, $showB) {
    // les fonctions de tri attendues par usort
    // doivent retourner :
    // -1 si le premier élément est inférieur
    // 1 si le premier élément est supérieur
    // 0 si les deux éléments sont égaux
    if ($showA['statistics']['rating'] < $showB['statistics']['rating']) {
        return 1;
    }
    if ($showA['statistics']['rating'] > $showB['statistics']['rating']) {
        return -1;
    }
    return 0;
}
// la fonction usort prends comme premier argument un tableau à trier
// et comme deuxième argument une fonction de tri qui compare deux éléments
usort($shows, 'sortByMarks');
$marksShows = array_slice($shows, 0, 3);
 ?>
