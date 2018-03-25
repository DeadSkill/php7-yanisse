<?php
    // la variable $_GET contient des variables passées par url
    // exemple: http://127.0.0.1:8000/cours/16_http/03_get/index.php?firstname=Obiwan&lastname=Kenobi
    // var_dump($_GET);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <main role="main">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Salut <?= $_GET['firstname'] ?> <?= $_GET['lastname']; ?> !</h1>
                <p style="font-size: 2em;">
                    Pour envoyer des arguments au script, on passe par les variables $_GET en url
                </p>
                <p>
                    Exemple : <a href="/php7-yanisse/02-web-php/test_get.php?firstname=yanisse&lastname=youmi">/php7-yanisse/02-web-php/test_get.php?firstname=yanisse&lastname=youmi</a>.
                </p>

                <p><a href="/php7-yanisse/02-web-php/test_get.php?firstname=Yanisse&lastname=Youmi" class="btn btn-primary btn-lg" role="button">Clique</a></p>
            </div>
        </div>
    </main>

    <footer class="container">
        <p>&copy; Bootstrap 2018</p>
    </footer>
</body>
</html>
