<p>
    <form action="#" method="post">
        <p>
        <p><input name="chiffre_mystere" size="16px" /></p>
        <input type="submit" value="Test" />
        </p>
    </form>
    </p>


    <?php

    if (isset($_POST['chiffre_mystere']))
    {
        $chiffre_mystere = $_POST['chiffre_mystere'];

        if($chiffre_mystere > 1269) // 1337 ou n'importe quel nombre
        {

           echo "Le chiffre mystere est plus petit !";
        }
        else if($chiffre_mystere < 1269)
        {
            echo "Le chiffre mystere est plus grand !";
        }
        else
        {
            echo "TU AS GAGNE !<br />";
            echo "Le chiffre mystere est bien : $chiffre_mystere";
        }

    }
    ?>
