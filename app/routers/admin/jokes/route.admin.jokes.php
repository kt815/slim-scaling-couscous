<?php

use Models\Core\Posts as Posts;
use Models\Core\Users as Users;
use Models\Core\Menus as Menus;
use Models\Core\Jokes as Jokes;
use Models\Core\Category as Category;
use Models\Core\JokeCategory as JokeCategory;

$app->group('/admin', function () use ($app, $isLogged, $isNoLogged) {
    $app->get('/jokes', $isNoLogged($app), function() use ($app) {
	    $menu_top_nav = Menus::menu_admin();
        $jokes = Jokes::get_jokes();
        $arr =  Jokes::view_jokes($jokes);
        $action = "Jokes";
        $app->render('admin/admin.root.html', array('jokes' => $arr, 'action' => $action, 'menu' => $menu_top_nav));
    });

    $app->get('/jokes/activate/:id', $isNoLogged($app), function($id) use ($app) {
        $post = Jokes::where('id', '=', $id);
        if($post){
            Jokes::where('id', '=', $id)->update(array('active' => 'true'));
            $app->redirect('/admin/jokes');}
        else {$app->redirect('/admin/jokes');}
    })->conditions(array('id' => '\d+'));

    $app->get('/jokes/deactivate/:id', $isNoLogged($app), function($id) use ($app) {
        $post = Jokes::where('id', '=', $id);
        if($post){
            Jokes::where('id', '=', $id)->update(array('active' => 'false'));
            $app->redirect('/admin/jokes');}
        else {$app->redirect('/admin/jokes');}
    })->conditions(array('id' => '\d+'));


    $app->get('/jokes/new/', $isNoLogged($app), function() use ($app) {
        $menu_top_nav = Menus::menu_admin();
        $categories = Category::all();
        $author = Users::get_logged_id();
        $flash = $app->view()->getData('flash');
        $error = isset($flash['error']) ? $flash['error'] : '';
        $action = "Joke New";
        $app->render('admin/admin.root.html', array('error' => $error, 'action' => $action, 'menu' => $menu_top_nav, 'categories' => $categories, 'id' => $author));
    });

    $app->post('/jokes/new', $isNoLogged($app), function() use ($app) {
        $title = $app->request->post('title');
        $joketext = $app->request->post('text');
        $joke_categories = $app->request->post('categories');
        $author_id = $app->request->post('id');
        if ($title == "") {
            $app->flash('error', 1);
            $app->redirect('/admin/jokes/new');}
        if ($joketext == "") {
            $app->flash('error', 2);
            $app->redirect('/admin/jokes/new');}
        if (count($joke_categories) == 0) {            
            $app->flash('error', 3);
            $app->redirect('/admin/jokes/new');}
        $joke = Jokes::add_joke($title, $joketext, $author_id, $joke_categories);
        $joke_id= $joke->id;
        $categories = JokeCategory::add_categories($joke_id, $joke_categories);        
        $author = Users::get_author($author_id);        
        $app->redirect('/admin/jokes');
    });


    $app->get('/jokes/edit/:id', $isNoLogged($app), function($id) use ($app) {
        $menu_top_nav = Menus::menu_admin();        
        $joke = Jokes::get_joke($id);
        $categories = JokeCategory::get_categoriesid_by_jokeid($id);
        if($joke){
            $arr = [];
            foreach ($categories as $category) {            
               $arr[] = Category::get_category_by_id($category->category_id);}
            $categories = Category::view_categories($arr);
            $title = $joke->title;
            $text = $joke->joketext;
            $joke_id = $joke->id;            
            $action = "Joke Edit";
            $flash = $app->view()->getData('flash');
            $error = isset($flash['error']) ? $flash['error'] : '';
            $success = isset($flash['success']) ? $flash['success'] : '';

            $app->render('admin/admin.root.html', array('id' => $joke_id, 'title' => $title, 'text' => $text, 'categories' => $categories,'error' => $error, 'success' => $success, 'action' => $action, 'menu' => $menu_top_nav));}
        else{ $app->redirect('/admin/jokes');
        }})->conditions(array('id' => '\d+'));


    $app->post('/jokes/edit/:id', $isNoLogged($app), function($id) use ($app) {

        $title = $app->request->post('title');
        $joketext = $app->request->post('text');
        $joke_categories = $app->request->post('categories');
        $joke_id = $app->request->post('id');
        $author_id = Users::get_logged_id();

        if ($title == "") {
            $app->flash('error', 1);
            $app->redirect('/admin/jokes/edit/' . $id);}
        if ($joketext == "") {
            $app->flash('error', 2);
            $app->redirect('/admin/jokes/edit/' . $id);}
        if (count($joke_categories) == 0) {            
            $app->flash('error', 3);
            $app->redirect('/admin/jokes/edit/' . $id);}
        
        $joke = Jokes::update_joke($id, $title, $joketext, $author_id);
        $categories = JokeCategory::update_categories($joke_id, $joke_categories);        

        // $author = Users::get_author($author_id);        
        $app->redirect('/admin/jokes');
    })->conditions(array('id' => '\d+'));

    $app->get('/jokes/delete/:id', $isNoLogged($app), function($id) use ($app) {
        $menu_top_nav = Menus::menu_admin();
        $joke = Jokes::where('id', '=', $id)->first();
        $action = "Joke Delete";
        if($joke){
            $app->render('admin/admin.root.html', array('id' => $id, 'action' => $action, 'menu' => $menu_top_nav));}
        else {$app->redirect('/admin/jokes');}
    })->conditions(array('id' => '\d+'));    


    $app->delete('/jokes/delete/:id', $isNoLogged($app), function($id) use ($app) {
        $joke = Jokes::where('id', '=', $id)->first();
        if($joke){
            Jokes::delete_joke($id);
            $app->redirect('/admin/jokes');}
        else {$app->redirect('/admin/jokes');}
    })->conditions(array('id' => '\d+'));

});
