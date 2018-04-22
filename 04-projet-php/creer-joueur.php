<?php
// création de la connexion
$dsn = 'mysql:dbname=projet_php;host=127.0.0.1';
$user = 'root';
$password = '';
// $connection = new PDO($dsn, $user, $password);
$connection = new PDO($dsn, $user, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
]);

// ajouter un joueur
if (isset($_POST['name']) && isset($_POST['team'])) {
    $statement = $connection->prepare("
        INSERT INTO joueur(nom, idEquipe)
        VALUES(:nom, :idEquipe)
    ");

    $statement->bindValue(':nom', $_POST['name']);
    $statement->bindValue(':idEquipe', $_POST['team']);
    $statement->execute();
}

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
          <!-- <h3 class="masthead-brand">Baby Squad</h3> -->
          <!-- <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="index.php">Accueil</a>
            <a class="nav-link" href="commence-maintenant.php">Commence maintenant</a>
            <a class="nav-link" href="contact.php">Contact</a>
          </nav> -->
        </div>
      </header>

      <!-- <main role="main" class="inner cover">
        <h1 class="cover-heading">Fais ton choix.</h1>
        <p class="lead">Tu as un choix très difficile à faire...</p>
        <p class="lead">
          <a href="commence-maintenant-1v1.php" class="btn btn-lg btn-secondary">1 vs 1</a>
          <a href="commence-maintenant-2v2.php" class="btn btn-lg btn-secondary">2 vs 2</a>
        </p>
            <a href="index.php" type="button" class="btn btn-danger">Retour</a>
      </main> -->

    <form action="creer-joueur.php" method="POST">
        <div class="form-group">
            <br>
            <br>
            <br>
        <h1 class="cover-heading">Crée ton joueur.</h1>
              <label for="formGroupExampleInput">Entre le pseudo du joueur a créer.</label>
              <input type="text" class="form-control" name="name" placeholder="Pseudo">
        </div>
        <label for="formGroupExampleInput">Dans quelle équipe tu veux l'insérer ?</label>
        <select class="form-control" name="team">
            <!-- <option>Sélectionne ton joueur</option> -->
            <?php
            $base = mysqli_connect('localhost','root','','projet_php');
            $sq = 'SELECT * FROM equipe';
            $re = mysqli_query($base,$sq) or die ('Erreur SQL !'.$sql.'<br/>'.mysqli_error($base));
            while($ligne=mysqli_fetch_row($re)) {
                echo '<option value="'.$ligne[0].'">'.$ligne[1].'</option>';
            }
            ?>
        </select>
        <br>
            <p class="lead">
              <!-- <a href="choix.php" class="btn btn-lg btn-secondary">Créer</a> -->
              <button type="submit" class="btn btn-primary" onclick="alert('Joueur créé avec succès! Tu peux continuer :)');">Créer</button>
            </p>

            <h1 class="cover-heading">Tu as déjà créé tes joueurs ?</h1>
                <p class="lead">
                  <a href="commence-maintenant-1v1.php" class="btn btn-lg btn-secondary">Continue</a>
                </p>
                    <a href="choix.php" type="button" class="btn btn-danger">Retour</a>

  </form>

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
