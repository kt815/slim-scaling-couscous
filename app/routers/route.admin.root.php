<?php

use Models\Core\Posts as Posts;
use Models\Core\Users as Users;
use Models\Core\Menus as Menus;

$app->group('/admin', function () use ($app, $isLogged, $isNoLogged) {

	$app->get('/', $isNoLogged($app), function() use ($app) {

	$menu_top_nav = Menus::menu_admin();

        $action = '';
        $app->render('admin/admin.root.html', array('action' => $action, 'menu' => $menu_top_nav));    
    });




});