<?php

$random = mt_rand (0, 5);
$random2 = mt_rand (0, 4);
$random3 = mt_rand (0, 3);
$random4 = mt_rand (0, 3);

$static = "Tu es un ";
$static2 = "de ";
$static3 = "en terme de ";

$complimentStep1 = ['beau ', 'gentil ', 'super ', 'génial ', "bon ", "magnifique "];
$complimentStep2 = ["animal ", "joueur ", "developpeur", "defenseur ", "monstre"];
$complimentStep3 = [ "la jungle ", "php", "call of duty", "football "];
$complimentStep4 = [ "skill." , "popularité.", "bambi attitude.", "hippie"];

$display =  $static . $complimentStep1[$random] . $complimentStep2[$random2]. $static2 . $complimentStep3[$random3] . $static3 . $complimentStep4[$random4]."\n";
