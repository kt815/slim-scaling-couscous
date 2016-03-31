<?php

use Models\Core\Posts as Posts;
use Models\Core\Users as Users;
use Models\Core\Menus as Menus;
use Models\Core\Jokes as Jokes;
use Models\Core\Category as Category;
use Models\Core\JokeCategory as JokeCategory;

$app->group('/admin', function () use ($app, $isLogged, $isNoLogged) {
    $app->get('/jokes/categories', $isNoLogged($app), function() use ($app) {
    $menu_top_nav = Menus::menu_admin();    
    $categories = Category::get_categories();
    $action = "Categories";
    $app->render('admin/admin.root.html', array('categories' => $categories, 'action' => $action, 'menu' => $menu_top_nav));});

    $app->get('/jokes/categories/new/', $isNoLogged($app), function() use ($app) {
    $menu_top_nav = Menus::menu_admin();
    $flash = $app->view()->getData('flash');
    $error = isset($flash['error']) ? $flash['error'] : '';
    $action = "Categories New";
    $app->render('admin/admin.root.html', array('error' => $error, 'action' => $action, 'menu' => $menu_top_nav));});

    $app->post('/jokes/categories/new', $isNoLogged($app), function() use ($app) {
        $name = $app->request->post('name');
        if ($name == "") {
            $app->flash('error', 1);
            $app->redirect('/admin/jokes/categories/new');}
        $category = Category::add_category($name);
        $app->redirect('/admin/jokes/categories');});

    $app->get('/jokes/categories/edit/:id', $isNoLogged($app), function($id) use ($app) {        
        $menu_top_nav = Menus::menu_admin(); 
        $category = Category::get_category_by_id($id);
        if($category){
            $name = $category->name;
            $action = "Category Edit";
            $flash = $app->view()->getData('flash');
            $error = isset($flash['error']) ? $flash['error'] : '';
            $success = isset($flash['success']) ? $flash['success'] : '';
            $app->render('admin/admin.root.html', array('id' => $id, 'name' => $name, 'error' => $error, 'success' => $success, 'action' => $action, 'menu' => $menu_top_nav));}
        else{ $app->redirect('/admin/jokes/categories');
        }})->conditions(array('id' => '\d+'));

    $app->post('/jokes/categories/edit/:id', $isNoLogged($app), function($id) use ($app) {
        $name = $app->request->post('name');
        if ($name == "") {
            $app->flash('error', 1);
            $app->redirect('/admin/categories/edit/' . $id);}        
        $category = Category::update_category($id, $name);
        $app->redirect('/admin/jokes/categories');
    })->conditions(array('id' => '\d+'));

    $app->get('/jokes/categories/delete/:id', $isNoLogged($app), function($id) use ($app) {
        $menu_top_nav = Menus::menu_admin();
        $category = Category::get_category_by_id($id);
        $action = "Category Delete";
        if($category){
            $app->render('admin/admin.root.html', array('id' => $id, 'action' => $action, 'menu' => $menu_top_nav));}
        else {$app->redirect('/admin/jokes/categories');}
    })->conditions(array('id' => '\d+'));    


    $app->delete('/jokes/categories/delete/:id', $isNoLogged($app), function($id) use ($app) {
       $category = Category::get_category_by_id($id);
        if($category){
            Category::delete_category($id);
            $app->redirect('/admin/jokes/categories');}
        else {$app->redirect('/admin/jokes/categories');}
    })->conditions(array('id' => '\d+'));


});
