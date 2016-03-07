<?php 

use Models\Core\Config as Config;
use Models\Core\Users as Users;

$app->get('/', function() use ($app) {

	$name = "username";
	echo( Users::all() );
	exit;

//    Sample log message
    $app->log->info("Slim-Skeleton '/' route");
    $jade = "Hello jade template";



    $app->render('index.jade', [
    'jade' => $jade
]);
});