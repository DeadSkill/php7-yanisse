<?php
$json = file_get_contents(__DIR__.'/src/data/shows.json');
$shows = json_decode($json, true);
$randomBanner = $shows[array_rand($shows)]['images']['banner'];
// Trié les séries par popularité
$showsSortedByPopularity = $shows;
usort($showsSortedByPopularity, "sortByPopularity");
function sortByPopularity ($a, $b) {
    return $b['statistics']['popularity'] <=> $a['statistics']['popularity'];
}
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

// Affiche les séries les plus populaires dans le classement
function mostPopularShowC ($shows) {
    for ($i = 0; $i < 10; $i++) {
        echo '<tr>
            <th scope="row">'. ($i+1) .'</th>
            <td><a href="serie.html">'.$shows[$i]['name'].'</a></td>
            <td>
                <span class="stars text-info" data-toggle="tooltip" data-placement="top" title="4.80">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </span>
            </td>
            <td>'.number_format($shows[$i]['statistics']['popularity'], 0, 3, ' ').'</td>
        </tr>';
    }
}
function mostRatingShowsC ($shows) {
    for ($i = 0; $i < 10; $i++) {
        $rate = $shows[$i]['statistics']['rating'];
        echo '<tr>
            <th scope="row">'. ($i+1) .'</th>
            <td><a href="serie.html">'.$shows[$i]['name'].'</a></td>
            <td>
                <span class="stars text-info" data-toggle="tooltip" data-placement="top" title="'. round($rate, 2) .'">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </span>
            </td>
            <td>'.number_format($shows[$i]['statistics']['popularity'], 0, 3, ' ').'</td>
        </tr>';
    }
}


?>
