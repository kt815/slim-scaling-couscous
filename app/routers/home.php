<?php 

$app->get('/', function() use ($app) {

//    Sample log message
    $app->log->info("Slim-Skeleton '/' route");
    $jade = "Hello jade template";

	echo ROUTERS_DIR;
	exit;

    $app->render('index.jade', [
    'jade' => $jade
]);
});