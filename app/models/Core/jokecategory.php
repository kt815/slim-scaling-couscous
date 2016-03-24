<?php

namespace Models\Core;
use Illuminate\Database\Eloquent\Model as Model;

 
// Define models
class JokeCategory extends Model {

    protected $table = "jokecategory";
    public $timestamps = false;

    public static function get_jokesid_by_categoryid($id) {
        $jokesid = JokeCategory::where('category_id', '=', $id)->get();
        return $jokesid;}        

    public static function get_categoriesid_by_jokeid($id) {
        $categoriesid = JokeCategory::where('joke_id', '=', $id)->get();
        return $categoriesid;}            

    public static function add_categories($joke_id, $joke_categories) {
        foreach ($joke_categories as $category) {
            $c = new JokeCategory;
            $c->joke_id = $joke_id;
            $c->category_id = $category;
            $c->save();}
        return true;}   

    public static function update_categories($joke_id, $joke_categories) {
		JokeCategory::delete_jokecategory_by_jokeid($joke_id);
        foreach ($joke_categories as $category) {
            $c = new JokeCategory;
            $c->joke_id = $joke_id;
            $c->category_id = $category;
            $c->save();}
        return true;}

    public static function delete_jokecategory_by_jokeid($joke_id) {
        return JokeCategory::where('joke_id', $joke_id)->delete();}

    public static function delete_jokecategory_by_categoryid($category_id) {
        return JokeCategory::where('category_id', $category_id)->delete();}        

}