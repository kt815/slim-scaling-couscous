<?php

use Models\Core\Posts as Posts;
use Models\Core\Users as Users;
use Models\Core\Menus as Menus;

$app->group('/admin', function () use ($app, $isLogged, $isNoLogged) {



    $app->get('/users/', $isNoLogged($app), function() use ($app) {

	$menu_top_nav = Menus::menu_admin();

        $action = "Users List";    	

        $users = Users::orderBy('created_at', 'asc')->get();
        $app->render('admin/admin.root.html', array('users' => $users, 'action' => $action, 'menu' => $menu_top_nav));
    });

    $app->get('/users/edit/:id', $isNoLogged($app), function($id) use ($app) {

	$menu_top_nav = Menus::menu_admin();

        $flash = $app->view()->getData('flash');
        $error = isset($flash['error']) ? $flash['error'] : '';
        $success = isset($flash['success']) ? $flash['success'] : '';

        $action = "User Edit";

        $user = Users::where('id', '=', $id)->first();
        $app->render('admin/admin.root.html', array('user' => $user, 'error' => $error, 'success' => $success, 'action' => $action, 'menu' => $menu_top_nav));
    })->conditions(array('id' => '\d+'));


    $app->post('/users/edit/:id', $isNoLogged($app), function($id) use ($app) {

        $username = $app->request->post('username');
        $pass = $app->request->post('password');
        $password = hash('sha512', $pass);
        $email = $app->request->post('email');

        if($username == "") {
            $app->flash('error', 1);
            $app->redirect('/admin/users/edit/' . $id);
        }
        if($email == "" OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $app->flash('error', 2);
            $app->redirect('/admin/users/edit/'  . $id);
        }

        if( !empty($pass) ) {
            Users::where('id', '=', $id)->update(array('username' => $username, 'password' => $password, 'email' => $email));
        } else {
            Users::where('id', '=', $id)->update(array('username' => $username, 'email' => $email));
        }

        $app->flash('success', 1);
        $app->redirect('/admin/users/edit/' . $id);

    })->conditions(array('id' => '\d+'));


    $app->get('/users/delete/:id', $isNoLogged($app), function($id) use ($app) {

	$menu_top_nav = Menus::menu_admin();
        
        $action = "User Delete";

        $app->render('admin/admin.root.html', array('id' => $id, 'action' => $action, 'menu' => $menu_top_nav));
    })->conditions(array('id' => '\d+'));

    $app->delete('/users/delete/:id', $isNoLogged($app), function($id) use ($app) {
        Users::destroy($id);
        $app->redirect('/admin/users');

    })->conditions(array('id' => '\d+'));

    $app->get('/users/new/', $isNoLogged($app), function() use ($app) {

	$menu_top_nav = Menus::menu_admin();

        $flash = $app->view()->getData('flash');
        $error = isset($flash['error']) ? $flash['error'] : '';
        $success = isset($flash['success']) ? $flash['success'] : '';

        $action = "New User";

        $app->render('admin/admin.root.html', array('error' => $error, 'success' => $success, 'action' => $action, 'menu' => $menu_top_nav));
    });

    $app->post('/users/new', $isNoLogged($app), function() use ($app) {

        $username = $app->request->post('username');
        $password = hash('sha512', $app->request->post('password'));
        $email = $app->request->post('email');
        $created_at = date('Y-m-d H:i:s');

        if($username == "") {
            $app->flash('error', 1);
            $app->redirect('/admin/users/new');
        }
        if($password == "") {
            $app->flash('error', 2);
            $app->redirect('/admin/users/new');
        }
        if($email == "" OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $app->flash('error', 3);
            $app->redirect($settings->base_url . '/admin/users/new');
        }

        Users::insert(array('username' => $username, 'password' => $password, 'email' => $email, 'created_at' => $created_at));

        $app->flash('success', 2);
        $app->redirect('/admin/users');
        
    });


});