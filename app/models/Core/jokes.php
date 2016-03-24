<?php

namespace Models\Core;
use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\QueryException as QueryException;


class Jokes extends Model {
    protected $table = "jokes";
    public $timestamp = true;

    public static function get_jokes() {
        $jokes = Jokes::orderBy('created_at')->get();
        return $jokes; } // function get_jokes

    public static function get_joke($id) {
        $joke = Jokes::find($id);
        return $joke; } // function get_jokes

    public static function add_joke($title, $text, $author_id, $joke_categories) {        
        $joke = new Jokes;
        $joke->title = $title;
        $joke->joketext = $text;
        $joke->author_id = $author_id;
        $joke->save();
        $joke_id = $joke->id;
        return $joke; } // function add_jokes

    public static function update_joke($id, $title, $text, $author_id) {
        $joke = Jokes::find($id);
        $joke->title = $title;
        $joke->joketext = $text;
        $joke->author_id = $author_id;
        $joke->save();
        return $joke; } // function update_jokes

    public static function delete_joke($id) {
        $joke = Jokes::find($id);
        $jokeCategory = JokeCategory::find($id);} // function delete_jokes

    public static function get_jokes_by_author($id) {
        $jokes = Jokes::where('author_id', '=', $id)->orderBy('created_at')->get();
        return $jokes; } // function get_jokes_by_author

    public static function get_jokes_by_jokecategory($jokesid) {
        $a = [];
        foreach ($jokesid as $joke) {
            $joke = Jokes::find($joke['joke_id']);            
            $a[] = $joke;}
            return $a; } // get_jokes_by_jokecategory

    public static function view_jokes($jokes) {        
        $arr = array();
        $i = 0;
        foreach ($jokes as $joke) {
            $joke['author'] = Users::get_author($joke['author_id']);
            $joke['date'] = $joke['created_at'];
            if (isset($joke['joke_id'])) {$joke['id'] = $joke['joke_id'];}
            $joke['url'] = '/jokes/' . $joke['id'];
            $joke['text'] = $joke['joketext'];
            $i = $i + 1;
            $joke['index'] = $i;
            if (isset($joke['joke_id'])) {$categories_id = JokeCategory::get_categoriesid_by_jokeid($joke['joke_id']);}
            else {$categories_id = JokeCategory::get_categoriesid_by_jokeid($joke['id']);}
            $cats = [];
                foreach ($categories_id as $category_id) {
                    $cats[] = Category::get_category_by_id($category_id['category_id']);}   
            $joke['categories'] = $cats;    
            $arr[] = $joke;}
        return $arr;} // function view_jokes

}