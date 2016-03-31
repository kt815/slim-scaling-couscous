<?php 

use Models\Core\Config as Config;
use Models\Core\Users as Users;
use Models\Core\Posts as Posts;
use Models\Core\Comments as Comments;
use Models\Core\Menus as Menus;
use Models\Core\Category as Category;


$app->get('/(:page)', function($page = 1) use ($app) {

    $menu = Menus::menu_home();
    $categories = Category::all();
    $authors = Users::all();
    $p = Posts::get_count();
    $post_per_page = getenv('post.per.page');
    $pages = ceil($p / $post_per_page);
    if ($page > $pages) $app->pass();
    $posts = Posts::orderBy('creation', 'desc')->take($post_per_page)->get();
    $posts = Posts::orderBy('creation', 'desc')
    		->skip(	$post_per_page * ($page - 1))
    		->take($post_per_page)
    		->get();
    $arr = array(); //Posts
    foreach ($posts as $post) {
        if ($post['active'] == 'true') {
			$post['author'] = Users::get_author($post['user_id']);
			$post['date'] = date('d/m/Y', $post['creation']);
			$post['url'] = $app->request->getUrl() . '/' . 'post/' . $post['id'];
			$post['teaser'] = $app->markdown->parse($post['teaser']);
			$post['count'] = Comments::where('posts_id', '=', $post['id'])->count();

			$array[] = array(
			    'menu' => $menu,
                'author' => $post['author'],
			    'title' => $post['title'],
			    'date' => $post['date'],
			    'url' => $post['url'],
			    'teaser' => $post['teaser'],
			    'count' => $post['count'],
			    'id' => $post['id']);}}

    //    Sample log message
    $app->log->info("Slim-Skeleton '/' route");
    $app->render('home.html', [
    'posts' => $array,
    'page' => $page,
    'pages' => $pages,
    'menu' => $menu,
    'categories' => $categories,
    'authors' => $authors
]);

})->conditions(array('page' => '\d+'));