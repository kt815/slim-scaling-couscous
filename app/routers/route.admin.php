<?php

$app->group('/admin', function () use ($app, $isLogged, $isNoLogged) {

	$app->get('/', $isNoLogged($app), function() use ($app) {

		echo "admin page";

    });

});