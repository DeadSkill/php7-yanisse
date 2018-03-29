<?php
$json = file_get_contents(__DIR__.'/data/shows.json');
$shows = json_decode($json, true);
function sortByPopularity($showA, $showB) {
    // les fonctions de tri attendues par usort
    // doivent retourner :
    // -1 si le premier élément est inférieur
    // 1 si le premier élément est supérieur
    // 0 si les deux éléments sont égaux
    if ($showA['statistics']['popularity'] < $showB['statistics']['popularity']) {
        return 1;
    }
    return 0;
}
// la fonction usort prends comme premier argument un tableau à trier
// et comme deuxième argument une fonction de tri qui compare deux éléments
usort($shows, 'sortByPopularity');
$popularShows = array_slice($shows, 0, 3);

function mostPopularShow ($shows) {
    for ($i = 0; $i < 3; $i++) {
        echo '<p>
                <div class="card">
                <img class="card-img-top" src="' . $shows[$i]['images']['banner'] . '">
                    <div class="card-body">
                        <h5 class="card-title">#' . ($i + 1) . ' - <a href="serie.php?slug=' . $shows[$i]['slug'] . '">' . $shows[$i]['name'] . '</a></h5>
                        <p class="card-text">' . number_format($shows[$i]['statistics']['popularity'], 0, 3, ' ') . ' personnes regardent cette série.</p>
                    </div>
               </div>
             </p>';
    }
}

// Trié les séries par notes.
$showsSortedByRating = $shows;
usort($showsSortedByRating, "sortByRating");
function sortByRating ($a, $b) {
    return $b['statistics']['rating'] <=> $a['statistics']['rating'];
}
function mostRatingShows ($shows) {
    for ($i = 0; $i < 3; $i++) {
        $rate = $shows[$i]['statistics']['rating'];
        echo '<p>
                <div class="card">
                <img class="card-img-top" src="' . $shows[$i]['images']['banner'] . '">
                  <div class="card-body">
                    <h5 class="card-title">#' . ($i + 1) . ' - <a href="serie.php?slug=' . $shows[$i]['slug'] . '">' . $shows[$i]['name'] . '</a></h5>
                    <p class="card-text"><i class="fa fa-star"></i> La série est notée ' . round($rate, 2) . '/ 5</p>
                  </div>
                </div>
              </p>';
    }
}
// Affiche les détails de la série
function details ($shows) {
    $showSlug = $_GET['slug'];
    return $shows[$showSlug];
}


?>
