<?php
// création de la connexion
$dsn = 'mysql:dbname=projet_php;host=127.0.0.1';
$user = 'root';
$password = '';
// $connection = new PDO($dsn, $user, $password);
$connection = new PDO($dsn, $user, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
]);

// suppression d'un produit
if (isset($_GET['delete_id'])) {
    $statement = $connection->prepare("
        DELETE
        FROM equipe
        WHERE idEquipe = :delete_id
    ");

    $statement->bindValue(':delete_id', $_GET['delete_id']);
    $statement->execute();
}

// affichage de la liste
$statement = $connection->prepare("
    SELECT *
    FROM equipe
");
$statement->execute();
$products = $statement->fetchAll();
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
        <!-- <div class="inner">
          <h3 class="masthead-brand">Baby Squad</h3>
        </div> -->
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">Panel.</h1>
        <p class="lead">Supprime l'équipe de ton choix.</p>
      </main>
      <br>
      <br>

      <?php if (count($products) === 0) { ?>
          <div class="alert alert-success" role="alert">
              Il n'y a pas d'équipes. 👌
          </div>
      <?php } else { ?>
          <table class="table">
              <?php foreach ($products as $product) { ?>
                  <tr>
                      <th width="250px"><?= $product['idEquipe'] ?></th>
                      <td><?= $product['nom'] ?></td>
                      <td style="text-align: right">
                          <a href="panel.php?delete_id=<?= $product['idEquipe'] ?>">Supprimer</a>
                      <td>
                  </tr>
              <?php } ?>
          </table>
      <?php } ?>

      <hr/>

      <a href="index.php" type="button" class="btn btn-danger">Retour à l'accueil</a>
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
