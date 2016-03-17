<?php 


use Models\Core\Jokes as Jokes;
use Models\Core\Users as Users;
use Models\Core\Menus as Menus;

$app->get('/jokes', function() use($app) {

	$menu_top_nav = Menus::menu_admin();

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
        $arr[] = $joke;
    }

	$action = "Jokes";

    $app->render('jokes.html', ['jokes' => $arr, 'menu' => $menu_top_nav, 'action' => $action, 'count' => $count]);

});

$app->post('/jokes', function() use($app) {

    if ( isset($_POST['count']) ) {

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