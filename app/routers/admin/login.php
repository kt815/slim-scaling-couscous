<?php 

$app->group('/admin', function () use ($app) {

$app->get('/login/', function() use ($app) {

echo "login area";
exit;

});

});