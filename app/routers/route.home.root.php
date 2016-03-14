<?php 

use Models\Core\Config as Config;
use Models\Core\Users as Users;
use Models\Core\Posts as Posts;
use Models\Core\Comments as Comments;
use Models\Core\Menus as Menus;

$app->get('/(:page)', function($page = 1) use ($app) {

    $menu = Menus::menu_home();

    $p = Posts::where('active', '=', 'true')->count();
    $post_per_page = getenv('post.per.page');
    $pages = ceil($p / $post_per_page);

    if ($page > $pages) $app->pass();

    $p = Posts::count();
    $posts = Posts::orderBy('creation', 'desc')->take($post_per_page)->get();
    $posts = Posts::orderBy('creation', 'desc')
    		->skip(	$post_per_page * ($page - 1))
    		->take($post_per_page)
    		->get();
    $arr = array(); //Posts
    foreach ($posts as $post) {
        if ($post['active'] == 'true') {
			$post['author'] = Users::get_author($post['user_id']);
			$post['title'] = $post['title'];
			$post['date'] = date('d/m/Y', $post['creation']);
			$post['url'] = $app->request->getUrl() . '/' . 'post/' . $post['id'];
			$post['text'] = $app->markdown->parse($post['text']);
			$post['count'] = Comments::where('posts_id', '=', $post['id'])->count();

			$array[] = array(
			    'menu' => $menu,
                'author' => $post['author'],
			    'title' => $post['title'],
			    'date' => $post['date'],
			    'url' => $post['url'],
			    'text' => $post['text'],
			    'count' => $post['count'],
			    'id' => $post['id']
			);
		}
	}

    //    Sample log message
    $app->log->info("Slim-Skeleton '/' route");
    $app->render('home.html', [
    'posts' => $array,
    'page' => $page,
    'pages' => $pages,
    'menu' => $menu
]);

})->conditions(array('page' => '\d+'));