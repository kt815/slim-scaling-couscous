<?php 

    $app->get('/logout/', $isNoLogged($app), function() use ($app) {
        unset($_SESSION['user']);
        $app->redirect('/');
    });
