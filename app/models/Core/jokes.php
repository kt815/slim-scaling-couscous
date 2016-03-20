<?php

namespace Models\Core;
use Illuminate\Database\Eloquent\Model as Model;


class Jokes extends Model {
    protected $table = "jokes";
    public $timestamp = false;

    public static function get_jokes_by_author($id) {
        $jokes = Jokes::where('author_id', '=', $id)->orderBy('jokedate')->get();
        return $jokes;
    }

    public static function view_jokes($jokes) {
        
        $arr = array();
        $i = 0;
        foreach ($jokes as $joke) {
            $joke['author'] = Users::get_author($joke['author_id']);
            $joke['date'] = $joke['jokedate'];
            if (isset($joke['joke_id'])) {$joke['id'] = $joke['joke_id'];}
            $joke['url'] = '/jokes/' . $joke['id'];
            $joke['text'] = $joke['joketext'];
            $i = $i + 1;
            $joke['index'] = $i;

if (isset($joke['joke_id'])) {$categories_id = JokeCategory::get_categoriesid_by_jokeid($joke['joke_id']);}
else {$categories_id = JokeCategory::get_categoriesid_by_jokeid($joke['id']);}


            $cats = [];

                foreach ($categories_id as $category_id) {
                    $cats[] = Category::get_category_by_id($category_id['category_id']);

                }   

            $joke['categories'] = $cats;    

            $arr[] = $joke;
        }

        return $arr;
    }

}