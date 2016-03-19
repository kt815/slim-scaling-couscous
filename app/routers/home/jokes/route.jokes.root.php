<?php 


use Models\Core\Jokes as Jokes;
use Models\Core\Users as Users;
use Models\Core\Menus as Menus;
use Models\Core\Category as Category;
use Models\Core\JokeCategory as JokeCategory;

$app->get('/jokes', function() use($app) {

    $menu = Menus::menu_home();
    $users = Users::all();
    $categories = Category::all();

if($app->request->params('action') == 'search'){

    if ($author = Users::find($app->request->params('id'))) {

        $id = $app->request->params('id');
        $jokes = Jokes::get_jokes_by_author($id);
        $author = Users::get_author($id);
        $count = count($jokes);

        $arr = Jokes::view_jokes($jokes);

        $action = "Search";

        $app->render('jokes.html', ['jokes' => $arr, 'menu' => $menu, 'action' => $action, 'count' => $count, 'author' => $author, 'users' => $users, 'categories' => $categories ]);
        exit;

    }

    else if ($category = Category::find($app->request->params('category'))) {

        $category_name = $category['name'];

        $id = $app->request->params('category');

        $jokes = JokeCategory::get_jokesid_by_categoryid($id);
        
        $arr = [];

        $i = 0;
        foreach ($jokes as $joke) {
            $joke = Jokes::find($joke['joke_id']);

            $joke['author'] = Users::get_author($joke['author_id']);
            $joke['date'] = $joke['jokedate'];
            $joke['url'] = '/jokes/' . $joke['id'];
            $joke['text'] = $joke['joketext'];
            $i = $i + 1;
            $joke['index'] = $i;

            $categories_id = JokeCategory::get_categoriesid_by_jokeid($joke['id']);
            $cats = [];

                foreach ($categories_id as $category_id) {
                    $cats[] = Category::get_category_by_id($category_id['category_id']);

                }   

            $joke['categories'] = $cats;            
            $arr[] = $joke;
        }

        $count = count($arr);

        $category = Category::get_category_by_id($id);

        $action = "Search";

        $app->render('jokes.html', ['jokes' => $arr, 'menu' => $menu, 'action' => $action, 'count' => $count, 'category' => $category_name, 'users' => $users, 'categories' => $categories ]);
        exit;        
    }

}

        $jokes = Jokes::orderBy('jokedate')->get();
        
        $count = count($jokes);

        if ($count > 9) {
            $count = $count - 9;
            $take = 9;
        }
        else {
            $take = $count;   
        }

        $jokes = Jokes::orderBy('jokedate')->take($take)->get();

        $arr = array();
        $i = 0;
        foreach ($jokes as $joke) {
            $joke['author'] = Users::get_author($joke['author_id']);
            $joke['date'] = $joke['jokedate'];
            $joke['url'] = '/jokes/' . $joke['id'];
            $joke['text'] = $joke['joketext'];
            $i = $i + 1;
            $joke['index'] = $i;

            $categories_id = JokeCategory::get_categoriesid_by_jokeid($joke['id']);
            $cats = [];

                foreach ($categories_id as $category_id) {
                    $cats[] = Category::get_category_by_id($category_id['category_id']);

                }   

            $joke['categories'] = $cats;            
            $arr[] = $joke;
        }

        $action = "Jokes";


    $app->render('jokes.html', ['jokes' => $arr, 'menu' => $menu, 'action' => $action, 'count' => $count, 'users' => $users, 'categories' => $categories ]);

    

});

$app->post('/jokes', function() use($app) {

    if ( isset($_POST['count']) ) {

        // sleep(5);

        $jokes = Jokes::orderBy('jokedate')->get();    
        $skip = count($jokes) - $_POST['count'];        

       $render = [];

        if ($_POST['count'] > 9) {    
            $take = 9;
            $render['count'] = $_POST['count'] - 9;
        }
        else {
            $take = $_POST['count'];
            $render['count'] = 0;
        }        

        $jokes = Jokes::orderBy('jokedate')->skip($skip)->take($take)->get();

        $arr = array();
        $i = 0;
        foreach ($jokes as $joke) {
            $joke['author'] = Users::get_author($joke['author_id']);
            $joke['date'] = $joke['jokedate'];
            $joke['url'] = '/jokes/' . $joke['id'];
            $joke['text'] = $joke['joketext'];
            $i = $i + 1;
            $joke['index'] = $i;            
            $arr[] = $joke;
    }       

       $render['jokes'] = $arr;
       echo json_encode($render);  

   }

});