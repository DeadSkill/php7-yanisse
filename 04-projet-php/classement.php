<?php
// création de la connexion
$dsn = 'mysql:dbname=projet_php;host=127.0.0.1';
$user = 'root';
$password = '';
// $connection = new PDO($dsn, $user, $password);
$connection = new PDO($dsn, $user, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
]);

?>

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Baby Squad</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
  </head>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">Baby Squad</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link" href="index.php">Accueil</a>
            <!-- <a class="nav-link" href="creer-joueur.php">Créer un joueur</a> -->
            <a class="nav-link" href="creer-teams.php">Commence maintenant</a>
            <a class="nav-link active" href="classement.php">Classement</a>
            <a class="nav-link" href="contact.php">Contact</a>
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">Classement.</h1>
        <p class="lead">Classement général de toutes les équipes inscrites.</p>
      </main>
      <br>
      <br>

          <table>
                <tr>
                    <th>Nom équipe</th>
                    <th>Victoires</th>
                    <th>Défaites</th>
                </tr>

            <?php
                $base = mysqli_connect('localhost','root','','projet_php');
                $teamList = 'SELECT * FROM equipe';

                $re = mysqli_query($base,$teamList) or die ('Erreur SQL !'.$sql.'<br/>'.mysqli_error($base));

                while($donnees1 = mysqli_fetch_row($re))
                {
                    $win = 'SELECT COUNT(*) FROM matchs WHERE idGagnant = '.$donnees1[0];
                    $re2 = mysqli_query($base,$win) or die ('Erreur SQL !'.$sql.'<br/>'.mysqli_error($base));

                    while($donnees2 = mysqli_fetch_row($re2))
                    {
                    $def = 'SELECT COUNT(*) FROM matchs WHERE idPerdant = '.$donnees1[0];
                    $re3 = mysqli_query($base,$def) or die ('Erreur SQL !'.$sql.'<br/>'.mysqli_error($base));

                    while($donnees3 = mysqli_fetch_row($re3))
                    {  ?>
                        <tr>
                            <th><?php echo $donnees1[1];?></th>
                            <th><?php echo $donnees2[0];?></th>
                            <th><?php echo $donnees3[0];?></th>
                        </tr>
                        <?php
                    }
                    }
                    }
            ?>
          </table>

        <br>
        <br>

        <h1 class="cover-heading">Tu veux supprimer une équipe ?</h1>
            <p class="lead">
                Clique ci-dessous pour accéder au panel pour supprimer une équipe.
            </p>
            <a href="panel.php" class="btn btn-lg btn-secondary">Supprimer</a>
            <br>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Projet réalisé par Yanisse YOUMI et Corrantin SPEE</a>.</p>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
