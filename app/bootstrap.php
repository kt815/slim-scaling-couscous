<?php
require '/vendor/autoload.php';
\Slim\Slim::registerAutoloader();


$app = new \Slim\Slim();


$app->get('/', function () {
    echo "Hello!";
});

$app->run();
