<?php 

use Models\Core\Config as Config;

$app->get('/', function() use ($app) {

//    Sample log message
    $app->log->info("Slim-Skeleton '/' route");
    $jade = "Hello jade template";

	
    echo Config::get();
    exit;

    $app->render('index.jade', [
    'jade' => $jade
]);
});