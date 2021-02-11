<?php
ini_set('display_errors', 1);
include_once(dirname(__DIR__."../")."/vendor/autoload.php");
//require '../vendor/autoload.php';

/*
require '../flight/Flight.php';
require '../app/DevPerf.php';
require '../app/Skills.php';
*/
Flight::route('POST /', function(){
    
    $pdo = new PDO("sqlite:".dirname(__DIR__)."/mysqlitedb.db", 'admin');

    //var_dump("sqlite:".dirname(__DIR__)."/mysqldb");
    $fluent = new \Envms\FluentPDO\Query($pdo);
    $query = $fluent->from('users')->select("*");
    foreach($query as $rw)
        var_dump($rw);
    
});

Flight::route('/', function(){
    $skills = new App\DevPerf([
        new App\Skills("PHP Performance", 85),
        new App\Skills("Bootstrap Performance", 65),
        new App\Skills("JS Performance", 75),
        new App\Skills("Web Design Performance", 75),
        new App\Skills("Micro Framework Performance", 75),
        new App\Skills("PHP Unit Performance", 85)
        ]);

    Flight::render(__DIR__."/above/index.php", array('skills' => $skills ));
});
Flight::route("/user/[0-9]+", function(){
    echo "Route";
});


Flight::start();