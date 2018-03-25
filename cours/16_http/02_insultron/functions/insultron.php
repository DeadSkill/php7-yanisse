<?php
require_once($projectDirectory.'/functions/array_rand.php');
function insultron() {
    global $projectDirectory;

    $adjectives1 = arrayRand(require($projectDirectory.'/data/adjectives.php'));
    $adjectives2 = arrayRand(require($projectDirectory.'/data/adjectives.php'));
    $animal = arrayRand(require($projectDirectory.'/data/animals.php'));
    $emoji = arrayRand(require($projectDirectory.'/data/emojis.php'));
    return sprintf(
        "Tu es %s comme un %s %s ! %s\n",
        $adjectives1,
        $adjectives2,
        $animal,
        $emoji
    );
}
