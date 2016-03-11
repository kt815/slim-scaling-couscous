<?php 

use Models\Core\Users as Users;

$app->group('/admin', function () use ($app, $isLogged, $isNoLogged) {

    $app->get('/login/', $isLogged($app), function() use ($app) {
        $flash = $app->view()->getData('flash');
        $error = isset($flash['error']) ? $flash['error'] : '';

        $app->render('admin.login.html');
    });

    $app->post('/login', function() use ($app) {
        $email = $app->request->post('email');
        $password = hash('sha512', $app->request->post('password'));
        $user = Users::whereRaw('email = ? AND password = ?', array($email, $password))->get();

        if ($user->count() != 0) {
            $_SESSION['user'] = $email;
            $app->redirect('/admin');
        } else {
            $app->flash('error', 1);
            $app->redirect('/admin/login');
        }
    });

});