<?php

use Models\Core\Posts as Posts;
use Models\Core\Users as Users;
use Models\Core\Menus as Menus;

$app->group('/admin', function () use ($app, $isLogged, $isNoLogged) {


    $app->get('/posts', $isNoLogged($app), function() use ($app) {

	$menu_top_nav = Menus::menu_admin();

        $posts = Posts::orderBy('creation', 'desc')->get();
        $arr = array();
        foreach ($posts as $post) {
            $post['author'] = Users::get_author($post['user_id']);
            $post['date'] = date('d-m-Y H:i', $post['creation']);
            $post['url'] = '/post/' . $post['id'];
            $arr[] = $post;
        }

        $action = "Posts";

        $app->render('admin/admin.root.html', array('posts' => $arr, 'action' => $action, 'menu' => $menu_top_nav));

    });

    $app->get('/posts/new/', $isNoLogged($app), function() use ($app) {

	$menu_top_nav = Menus::menu_admin();

        $flash = $app->view()->getData('flash');
        $error = isset($flash['error']) ? $flash['error'] : '';

        $action = "Post New";

        $app->render('admin/admin.root.html', array('error' => $error, 'action' => $action, 'menu' => $menu_top_nav));
    });

    $app->post('/posts/new', $isNoLogged($app), function() use ($app) {
        $title = $app->request->post('title');
        $teaser = $app->request->post('teaser');
        $text = $app->request->post('text');
        
        if ($title == "") {
            $app->flash('error', 1);
            $app->redirect('/admin/posts/new');
        }
        if ($text == "") {
            $app->flash('error', 2);
            $app->redirect('/admin/posts/new');
        }
        if ($teaser == "") {
            $app->flash('error', 3);
            $app->redirect('/admin/posts/new');
        }        

        $date = time();
        $author = Users::get_id($_SESSION['user']);

        Posts::insert(array('title' => $title, 'creation' => $date, 'teaser' => $teaser,'text' => $text, 'user_id' => $author));
        
        $app->redirect('/admin/posts');
    });

    $app->get('/posts/activate/:id', $isNoLogged($app), function($id) use ($app) {

        $post = Posts::where('id', '=', $id);

        if($post){
            Posts::where('id', '=', $id)->update(array('active' => 'true'));
            $app->redirect('/admin/posts');
        }
        else {
            $app->redirect('/admin/posts');
        }
    })->conditions(array('id' => '\d+'));

    $app->get('/posts/deactivate/:id', $isNoLogged($app), function($id) use ($app) {        


        $post = Posts::where('id', '=', $id);

        if($post){
            Posts::where('id', '=', $id)->update(array('active' => 'false'));
            $app->redirect('/admin/posts');
        }
        else {
                $app->redirect('/admin/posts');
        }
    })->conditions(array('id' => '\d+'));


    $app->get('/posts/edit/:id', $isNoLogged($app), function($id) use ($app) {

	$menu_top_nav = Menus::menu_admin();

        $post = Posts::where('id', '=', $id)->first();
        if($post){
            $title = $post->title;
            $teaser = $post->teaser;
            $text = $post->text;
            $postId = $id;

            $action = "Post Edit";

            $flash = $app->view()->getData('flash');
            $error = isset($flash['error']) ? $flash['error'] : '';
            $success = isset($flash['success']) ? $flash['success'] : '';

            $app->render('admin/admin.root.html', array('id' => $postId, 'title' => $title, 'text' => $text, 'teaser' => $teaser, 'error' => $error, 'success' => $success, 'action' => $action, 'menu' => $menu_top_nav));
        }
        else{

            $app->redirect('/admin/posts');

        }
    })->conditions(array('id' => '\d+'));

    $app->post('/posts/edit/:id', $isNoLogged($app), function($id) use ($app) {

        $title = $app->request->post('title');
        $teaser = $app->request->post('teaser');
        $text = $app->request->post('text');

        $post = Posts::where('id', '=', $id)->first();

        if($post){
            if ($title == "") {
                $app->flash('error', 1);
                $app->redirect('/admin/posts/edit/' . $id);
            }
            if ($text == "") {
                $app->flash('error', 2);
                $app->redirect('/admin/posts/edit/' . $id);
            }

            Posts::where('id', '=', $id)->update(array('title' => $title, 'teaser' => $teaser, 'text' => $text));

            $app->flash('success', 1);

            $app->redirect('/admin/posts/edit/' . $id);

        }
        else {
             $app->redirect('/admin/posts');
        }
    })->conditions(array('id' => '\d+'));


    $app->get('/posts/delete/:id', $isNoLogged($app), function($id) use ($app) {

	$menu_top_nav = Menus::menu_admin();

        $post = Posts::where('id', '=', $id)->first();

        $action = "Post Delete";

        if($post){
            $app->render('admin/admin.root.html', array('id' => $id, 'action' => $action, 'menu' => $menu_top_nav));
        }
        else {
           $app->redirect('/admin/posts');
        }

    })->conditions(array('id' => '\d+'));

    $app->delete('/posts/delete/:id', $isNoLogged($app), function($id) use ($app) {

        $post = Posts::where('id', '=', $id)->first();

        if($post){
            Posts::delete_post($id);
            $app->redirect('/admin/posts');
        }
        else {
             $app->redirect('/admin/posts');
        }
    })->conditions(array('id' => '\d+'));


});