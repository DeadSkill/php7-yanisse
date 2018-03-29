<?php
$humain = [
    'age' => 23,
    'name' => 'Jul',
    'country' => 'France',
    'is_dead' => 'false',
];
class Humain
{
    public $age;
    public $name;
    public $country;
    protected $isDead = false;

    public function death()
    {
        $this->isDead = true;
    }

    public function printNameUpper()
    {
        print strtoupper($this->name);
    }

    public function isOlder(int $oldAge)
    {
        if ($oldAge > $this->age) {
            print "le capitaine est plus jeune";
        } else {
            print "le capitaine est plus vieux";
        }
    }
}
$pabloEscobar = new Humain();
$pabloEscobar->age = 23;
$pabloEscobar->name = "Pablo Escobar";
$gustavoGaviria = new Humain();
$gustavoGaviria->age = 42;
$gustavoGaviria->name = "Gustavo Gaviria";
$gustavoGaviria->death();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Humain</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <main role="main">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Humain</h1>
                <pre>
                    <?php $pabloEscobar->printNameUpper(); ?>
                    <?php var_dump($pabloEscobar); ?>
                    <?php var_dump($gustavoGaviria); ?>
                </pre>
            </div>
        </div>
    </main>

    <footer class="container">
        <p>&copy; Yanisse 2018</p>
    </footer>
</body>
</html>
