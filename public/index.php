<?php
//require '../vendor/autoload.php';
require '../flight/Flight.php';


Flight::route('/', function(){
    ob_start();
    require("./above/index.php");
    $Folioflush = ob_get_contents();

    echo $Folioflush;
    ob_end_flush();
});
Flight::route("/user/[0-9]+", function(){
    echo "Route";
});
Flight::start();