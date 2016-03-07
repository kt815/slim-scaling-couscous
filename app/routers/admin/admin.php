<?php

$app->group('/admin', function () use ($app) {

    $app->get('/', function() use ($app) {

	echo "admin page";

    });

});