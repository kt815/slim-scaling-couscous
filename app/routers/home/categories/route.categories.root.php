<?php 


use Models\Core\Jokes as Jokes;
use Models\Core\Users as Users;
use Models\Core\Menus as Menus;
use Models\Core\Category as Category;
use Models\Core\JokeCategory as JokeCategory;

$app->get('/jokes/categories', function() use($app) {
    $menu = Menus::menu_home();
    $categories = Category:: get_categories();

    $action = "Categories";
    $app->render('joke.html', ['menu' => $menu, 'action' => $action, 'categories' => $categories ]);
});

$app->get('/jokes/categories/:categoryId', function($categoryId) use ($app) {
    $menu = Menus::menu_home();
    $category = Category::find($categoryId);
	$jokesid = JokeCategory::get_jokesid_by_categoryid($categoryId);
	$jokes = Jokes::get_jokes_by_jokecategory($jokesid);
	$arr = Jokes::view_jokes($jokes);
	$count = count($arr);	
	$category_name = $category->name;
    $action = "Category";
    $app->render('joke.html', ['jokes' => $arr, 'menu' => $menu, 'action' => $action, 'count' => $count, 'category' => $category_name]);

})->conditions(array('jokeId' => '\d+'));
