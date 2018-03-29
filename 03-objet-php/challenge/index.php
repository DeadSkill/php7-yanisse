<?php
/**
 * Pour insérer (ou supprimer, ou mettre à jour) dans une base de donnée,
 * c'est exactement le même principe
 */

$dsn = 'mysql:dbname=challenge_exo;host=127.0.0.1';
$user = 'root';
$password = '';
$connection = new PDO($dsn, $user, $password);
$statement = $connection->prepare("
    INSERT INTO `user` (`email`,'password')
    VALUES
        (:email, :password)
    ;
");
// pour être sûr que la valeur ne va pas poser de problème de sécurité
// on utilise bindValue plutôt que de concaténer dans le SQL
$statement->bindValue(':email', $_GET['email']);
$statement->bindValue(':password', $_GET['password']);
$statement->execute();

?>

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Se connecter</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin">
      <img class="mb-4" src="Apple_logo_black.svg.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Veuillez remplir les champs ci-dessous</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Adresse mail" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
+      <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Rester connecté
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
      <p class="mt-5 mb-3 text-muted">&copy; Yanisse 2017-2018</p>
    </form>
  </body>
</html>
