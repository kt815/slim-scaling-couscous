<?php

namespace Models\Core;
use Illuminate\Database\Eloquent\Model as Model;

 
// Define models
class JokeCategory extends Model {

    protected $table = "jokecategory";

    public static function get_jokesid_by_categoryid($id) {
        $jokesid = JokeCategory::where('category_id', '=', $id)->get();
        return $jokesid;
    }        

    public static function get_categoriesid_by_jokeid($id) {
        $categoriesid = JokeCategory::where('joke_id', '=', $id)->get();
        return $categoriesid;
    }            

}