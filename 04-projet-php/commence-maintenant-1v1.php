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
if (isset($_POST['equipe1']) && isset($_POST['equipe2']) && isset($_POST['gagnant']) && isset($_POST['perdant'])) {
    $statement = $connection->prepare("
        INSERT INTO matchs(idEquipe1, idEquipe2, idGagnant, idPerdant)
        VALUES(:idEquipe1, :idEquipe2, :idGagnant, :idPerdant)
    ");

    $statement->bindValue(':idEquipe1', $_POST['equipe1']);
    $statement->bindValue(':idEquipe2', $_POST['equipe2']);
    $statement->bindValue(':idGagnant', $_POST['gagnant']);
    $statement->bindValue(':idPerdant', $_POST['perdant']);
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
          <h3 class="masthead-brand">Baby Squad</h3>
          <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link" href="index.php">Accueil</a>
            <!-- <a class="nav-link" href="creer-joueur.php">Créer un joueur</a> -->
            <a class="nav-link active" href="creer-teams.php">Commence maintenant</a>
            <a class="nav-link" href="classement.php">Classement</a>
            <a class="nav-link" href="contact.php">Contact</a>
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">Le match.</h1>
        <p class="lead">Pour commencer c'est très simple. Rentre les informations des équipes ci-dessous et crée le classement !</p>
      </main>


          <form action="commence-maintenant-1v1.php" method="POST">
            <div class="form-group">
                      <h1 class="cover-heading">Score du match.</h1>
                        <label for="formGroupExampleInput">Quel résultat ? Choisi ton équipe ci-dessous</label>
                      <select class="form-control" name="equipe1">
                          <!-- <option>Sélectionne ton joueur</option> -->
                          <?php
                                $base = mysqli_connect('localhost','root','','projet_php');
                                $sq = 'SELECT * FROM equipe ';
                                $re = mysqli_query($base,$sq) or die ('Erreur SQL !'.$sql.'<br/>'.mysqli_error($base));
                                while($ligne=mysqli_fetch_row($re)) {
                                    echo '<option value="'.$ligne[0].'">'.$ligne[1].'</option>';
                                }
                            ?>
                    </select>
                    <label for="formGroupExampleInput">Contre quel équipe as-tu joué ?</label>
                  <select class="form-control" name="equipe2">
                      <!-- <option>Sélectionne ton joueur</option> -->
                      <?php
                            $base = mysqli_connect('localhost','root','','projet_php');
                            $sq = 'SELECT * FROM equipe ';
                            $re = mysqli_query($base,$sq) or die ('Erreur SQL !'.$sql.'<br/>'.mysqli_error($base));
                            while($ligne=mysqli_fetch_row($re)) {
                                echo '<option value="'.$ligne[0].'">'.$ligne[1].'</option>';
                            }
                        ?>
                </select>

                <label for="formGroupExampleInput">Le gagnant est l'équipe :</label>
                    <select class="form-control" name="gagnant">
                        <!-- <option>Sélectionne ton joueur</option> -->
                        <?php
                              $base = mysqli_connect('localhost','root','','projet_php');
                              $sq = 'SELECT * FROM equipe ';
                              $re = mysqli_query($base,$sq) or die ('Erreur SQL !'.$sql.'<br/>'.mysqli_error($base));
                              while($ligne=mysqli_fetch_row($re)) {
                                  echo '<option value="'.$ligne[0].'">'.$ligne[1].'</option>';
                              }
                          ?>
                  </select>
            </div>

            <label for="formGroupExampleInput">L'équipe qui a perdue le match est :</label>
                <select class="form-control" name="perdant">
                    <!-- <option>Sélectionne ton joueur</option> -->
                    <?php
                          $base = mysqli_connect('localhost','root','','projet_php');
                          $sq = 'SELECT * FROM equipe ';
                          $re = mysqli_query($base,$sq) or die ('Erreur SQL !'.$sql.'<br/>'.mysqli_error($base));
                          while($ligne=mysqli_fetch_row($re)) {
                              echo '<option value="'.$ligne[0].'">'.$ligne[1].'</option>';
                          }
                      ?>
              </select>
              <p class="lead">
                <!-- <a href="choix.php" class="btn btn-lg btn-secondary">Créer</a> -->
                <button type="submit" class="btn btn-primary" onclick="alert('Match ajouté avec succès !');">Ajouter le match</button>
              </p>
        </div>


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
