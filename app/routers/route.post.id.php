<?php

use Models\Core\Users as Users;
use Models\Core\Posts as Posts;
use Models\Core\Comments as Comments;

$app->get('/post/:id', function($id) use ($app) {

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

        $app->render('post.html', 
            array(
                'post' => $post, 
                'error' => $error, 
                'comments' => $comments, 
                'redirect' => $redirect,
                'title' => $title

        ));
    }
    else {
        $app->render('post.404.html');
    }    
})->conditions(array('id' => '\d+'));


$app->post('/post/comment/new', function() use($app, $settings) {
    $username = $app->request->post('username');
    $email = $app->request->post('email');
    $post_id = $app->request->post('post_id');
    $redirect = $app->request->post('redirect');
    $url = $app->request->post('url');
    $text = $app->request->post('text');

    if($username == "") {
        $app->flash('error', 1);
        $app->redirect($settings->base_url . '/post/' . $post_id);
    }
    if($url == "") {
        $app->flash('error', 2);
        $app->redirect($settings->base_url . '/post/' . $post_id);
    }
    if($email == "") {
        $app->flash('error', 3);
        $app->redirect($settings->base_url . '/post/' . $post_id);
    }
    if($text == "") {
        $app->flash('error', 4);
        $app->redirect($settings->base_url . '/post/' . $post_id);
    }

    Comments::insert(array('username' => $username, 'url' => $url, 'email' => $email, 'text' => $text, 'posts_id' => $post_id));
    $app->render('post.comments.sended.html', array('redirect' => $redirect));
});