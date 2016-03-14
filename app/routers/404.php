<?php

$app->notFound( function () use ($app) {

//echo("<h1>404 error page</h1>");
$app->render('404.html');

});