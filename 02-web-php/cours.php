<?php
function arrayRand($data) {
    $randomIndex = mt_rand(0, count($data) - 1);

    // retourne un élément aléatoire d'un tableau
    return $data[$randomIndex];
}
$adjectives = [
    'moche',
    'dégueulasse',
    'puant',
    'horrible',
    'gay',
    'pd',
];
$animals = [
    'shlag',
    'fdp',
    'enculé',
    'connard',
    'salopard',
    'tétard',
    'chien',
];
$emojis = [
    '😂',
    '🏩',
    '❤️',
    '😘',
    '😊',
    '🤗',
];
$adjectives1 = arrayRand($adjectives);
$adjectives2 = arrayRand($adjectives);
$animal = arrayRand($animals);
$emoji = arrayRand($emojis);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Insultron</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
</head>
<body>
    <main role="main">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Insultron</h1>
                <p style="font-size: 2em;">
                    <?php
                    print "Tu es $adjectives1 comme un $adjectives2 $animal ! $emoji\n";
                     ?>
                </p>

                <p><a href="/php7-yanisse/02-web-php/cours.php" class="btn btn-primary btn-lg" role="button">Insulte !</a></p>
            </div>
        </div>
    </main>

    <footer class="container">
        <p>&copy; Yanisse YOUMI 2018</p>
    </footer>
</body>
</html>
