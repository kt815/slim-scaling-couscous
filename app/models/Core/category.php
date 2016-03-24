<?php

namespace Models\Core;
use Illuminate\Database\Eloquent\Model as Model;

 
// Define models
class Category extends Model {

    protected $table = "category";
    public $timestamps = false;

    public static function get_categories() {
        $categories = Category::all();
        return $categories;}

    public static function get_category_by_id($id) {
        $category = Category::find($id);
        return $category;}

    public static function view_categories($arr) {        
		$categories = Category::all();
		$a = [];
        foreach ($arr as $category) {        	   	
                $a[] = $category->id;}
		foreach ($categories as $category) {		
			if(in_array($category->id, $a)) {
				$category->check = true;}}
        return $categories;} // function view_categories

    public static function add_category($name) {        
        $category = new Category;
        $category->name = $name;
        $category->save();
        return $category; } // function add_category        

    public static function update_category($id, $name) {
        $category = Category::find($id);
        $category->name = $name;
        $category->save();
        return $category; } // function update_category


    public static function delete_category($id) {
        Category::find($id)->delete();
        JokeCategory::delete_jokecategory_by_categoryid($id);} // function delete_category
}