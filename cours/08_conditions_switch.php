<?php
/*
Le switch est utilisé pour appliquer plusieurs conditions à une même variable. C'est un peu le même principe qu'une suite de "elseif".
Chaque "case" représente une condition qui sera évalué à la variable.
Quand un "case" est évalué positivement, chaque "case" suivant sont exécutés un a un, jusqu'à rencontrer un "break" qui sort du switch. On mettra donc un "break" dans chaque case généralement pour éviter qu'un code soit exécuté par erreur.
*/
$captainAge = 100;
switch ($captainAge) {
    // équivau à "if ($captainAge == -1)"
    case -1:
        print "Il est pas né.\n";
        break;

    case 18:
        print "Il peut juste boire de l'alcool.\n";
        break;

    case 100:
        print "IL EST PILE CENTENAIRE.\n";
        // sans break, on continue à évaluer
        // les cases qui sont en dessous
        // jusqu'à rencontrer un break
        // si l'age du capitaine est 100, c'est tout ces 5 cases qui seront éxécutés.
    case 101:
        print "Il a 101 ans.\n";
    case 102:
        print "Il a 101 ans.\n";
    case 103:
        print "Il a 102 ans.\n";
    case 104:
        print "Il a 104 ans.\n";
        break;

    // si aucun case n'est évalué positivement, on peut ajouter un "default" qui sera exécuté.
    default:
        print "Il a ".$captainAge." ans.\n";
        break;
}
