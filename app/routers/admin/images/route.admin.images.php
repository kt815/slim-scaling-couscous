<?php

use Models\Core\Posts as Posts;
use Models\Core\Users as Users;
use Models\Core\Menus as Menus;
use Models\Core\Images as Images;
use Models\Core\Files as Files;
use Models\Core\Resize as Resize;

$app->group('/admin', function () use ($app, $isLogged, $isNoLogged) {
    
    $app->get('/images', $isNoLogged($app), function() use ($app) {
    $menu_top_nav = Menus::menu_admin();
    // $id = Users::get_logged_id();
    $images = Images::get_images_all();
    // $name = Users::get_author($id);
    $name = "";
    $action = "Images";

    $app->render('admin/admin.root.html', array('action' => $action, 'menu' => $menu_top_nav, 'images' => $images, 'name' => $name));

    })->conditions(array('id' => '\d+'));

    $app->get('/images/edit/:id', $isNoLogged($app), function($id) use ($app) {
    $menu_top_nav = Menus::menu_admin();
    $image = Images::get_image($id);
    $flash = $app->view()->getData('flash');
    $error = isset($flash['error']) ? $flash['error'] : '';
    $success = isset($flash['success']) ? $flash['success'] : '';
    $action = "Image Edit";
    $app->render('admin/admin.root.html', array('error' => $error, 'success' => $success, 'action' => $action, 'menu' => $menu_top_nav, 'image' => $image));})->conditions(array('id' => '\d+'));

    $app->post('/images/edit/:id', $isNoLogged($app), function($id) use ($app) {
        $user_id = Users::get_logged_id();
        $name = $app->request->post('name');
        $description = $app->request->post('description');
        if($name == "") {
            $app->flash('error', 1);
            $app->redirect('/admin/images/edit/' . $id);}
        if($description == "") {
            $app->flash('error', 2);
            $app->redirect('/admin/images/edit/' . $id);}
        Images::update_image($id, $user_id, $name, $description);
        $app->flash('success', 2);
        $app->redirect('/admin/users/edit/' . $user_id );})->conditions(array('id' => '\d+'));

    $app->get('/images/edit/foto/:id', $isNoLogged($app), function($id) use ($app) {
    $menu_top_nav = Menus::menu_admin();
    $image = Images::get_image_foto($id);
    $flash = $app->view()->getData('flash');
    $error = isset($flash['error']) ? $flash['error'] : '';
    $success = isset($flash['success']) ? $flash['success'] : '';
    $action = "Foto Edit";
    $app->render('admin/admin.root.html', array('error' => $error, 'success' => $success, 'action' => $action, 'menu' => $menu_top_nav, 'image' => $image));})->conditions(array('id' => '\d+'));

    $app->post('/images/edit/foto', $isNoLogged($app), function() use ($app) {


    
    })->conditions(array('id' => '\d+'));


    $app->get('/images/delete/:id', $isNoLogged($app), function($id) use ($app) {
        $menu_top_nav = Menus::menu_admin();        
        $action = "Image Delete";
        $app->render('admin/admin.root.html', array('id' => $id, 'action' => $action, 'menu' => $menu_top_nav));})->conditions(array('id' => '\d+'));

    $app->delete('/images/delete/:id', $isNoLogged($app), function($id) use ($app) {
        $user_id = Users::get_logged_id();
        $new_filename = Images::get_name($id);
        Files::delete_file($new_filename);
        Images::delete_image($id);
        $app->redirect('/admin/users/edit/' . $user_id);})->conditions(array('id' => '\d+'));

    $app->get('/images/new/', $isNoLogged($app), function() use ($app) {
        $menu_top_nav = Menus::menu_admin();
        $flash = $app->view()->getData('flash');
        $error = isset($flash['error']) ? $flash['error'] : '';
        $success = isset($flash['success']) ? $flash['success'] : '';
        $action = "Image New";
        $app->render('admin/admin.root.html', array('error' => $error, 'success' => $success, 'action' => $action, 'menu' => $menu_top_nav));});

    $app->post('/images/new', $isNoLogged($app), function() use ($app) {
        $user_id = Users::get_logged_id();
        $description = $app->request->post('description');
        $type = $app->request->post('type');
        $x1 = $app->request->post('x1');
        $y1 = $app->request->post('y1');
        $x2 = $app->request->post('x2');
        $y2 = $app->request->post('y2');
        $width = $app->request->post('width');
        $height = $app->request->post('height');
        if(empty($_FILES['name']['name'])) {
            $app->flash('error', 1);
            $app->redirect('/admin/images/new');}
        if($description == "") {
            $app->flash('error', 2);
            $app->redirect('/admin/images/new');}
        if($type == "") {
            $app->flash('error', 3);
            $app->redirect('/admin/images/new');}
        if($type == "") {
            $app->flash('error', 4);
            $app->redirect('/admin/images/new');}
            $new_filename = Files::file_new();
        if($x1 && $y1 && $x2 && $y2) {
            Resize::resize($x1, $y1, $x2, $y2, $width, $height, $new_filename);
            }                                            
        Images::add_image($user_id, $new_filename, $description, $type);        
        $app->flash('success', 2);
        $app->redirect('/admin/users/edit/' . $user_id);});
});
