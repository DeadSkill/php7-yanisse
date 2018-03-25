<html>
<body>

<form method="POST" action="#" >
<input type="text" name="n1">
    <select name="op" >
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
<input type="text" name="n2">
<input type="submit" name="b1" value="Calculer">
</form>
    <?php
    	$n1=$_POST['n1'];
    	$op=$_POST['op'];
    	$n2=$_POST['n2'];
        	if (isset($op)){
            echo("Resultat du calcul ".$n1.$op.$n2." : ");
            if ($op=="+") {
                echo $n1+$n2;
            } elseif ($op=="-") {
                echo $n1-$n2;
            } elseif ($op=="*") {
                echo $n1*$n2;
            } else {
                echo $n1/$n2;
            }
        }
    ?>
</body>
</html>
