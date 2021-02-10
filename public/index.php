<?php
//require '../vendor/autoload.php';
require '../flight/Flight.php';
require '../app/DevPerf.php';
require '../app/Skills.php';

Flight::route('/', function(){
    $skills = new DevPerf([
        new Skills("PHP Performance", 85),
        new Skills("Bootstrap Performance", 65),
        new Skills("JS Performance", 75),
        new Skills("Web Design Performance", 75),
        new Skills("Micro Framework Performance", 75),
        new Skills("PHP Unit Performance", 85)
        ]);

    Flight::render(__DIR__."/above/index.php", array('skills' => $skills ));
});
Flight::route("/user/[0-9]+", function(){
    echo "Route";
});
Flight::start();