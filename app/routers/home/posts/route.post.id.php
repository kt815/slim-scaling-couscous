<?php

use Models\Core\Users as Users;
use Models\Core\Posts as Posts;
use Models\Core\Comments as Comments;
use Models\Core\Menus as Menus;

$app->get('/post/:id', function($id) use ($app) {

    $menu = Menus::menu_home();

    if ($post = Posts::find($id)) {

        $flash = $app->view()->getData('flash');
        $error = isset($flash['error']) ? $flash['error'] : '';

        $post->author = Users::get_author($post->user_id);
        $post->date = date('d-m-Y H:i', $post->creation);
        $post->text = $app->markdown->parse($post->text);
        $comments = Comments::get_comments($id);
        // kd($comments);
        $redirect = $app->request->getUrl() . $app->request->getPath();


        // kd($post->title);
        $title = $post->title;

        $app->render('home/posts/posts.post.html', 
            array(
                'post' => $post, 
                'error' => $error, 
                'comments' => $comments, 
                'redirect' => $redirect,
                'title' => $title, 
		'menu' => $menu

        ));
    }
    else {
        $app->render('404.html', ['menu' => $menu]);
    }    
})->conditions(array('id' => '\d+'));


$app->post('/post/comment/new', function() use($app) {
    $username = $app->request->post('username');
    $email = $app->request->post('email');
    $post_id = $app->request->post('post_id');
    $redirect = $app->request->post('redirect');
    $url = $app->request->post('url');
    $text = $app->request->post('text');

    if($username == "") {
        $app->flash('error', 1);
        $app->redirect(getenv('base.url') . '/post/' . $post_id);
    }
    if($url == "") {
        $app->flash('error', 2);
        $app->redirect(getenv('base.url') . '/post/' . $post_id);
    }
    if($email == "") {
        $app->flash('error', 3);
        $app->redirect(getenv('base.url') . '/post/' . $post_id);
    }
    if($text == "") {
        $app->flash('error', 4);
        $app->redirect(getenv('base.url') . '/post/' . $post_id);
    }

    Comments::insert(array('username' => $username, 'url' => $url, 'email' => $email, 'text' => $text, 'posts_id' => $post_id));
    $app->render('home/home.comments.sended.html', array('redirect' => $redirect));
});