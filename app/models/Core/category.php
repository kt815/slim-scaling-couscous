<?php

namespace Models\Core;
use Illuminate\Database\Eloquent\Model as Model;

 
// Define models
class Category extends Model {

    protected $table = "category";


    public static function get_category_by_id($id) {
        $category = Category::where('id', '=', $id)->get();
        return $category;
    }

    public static function view_categories($arr) {        
		$categories = Category::all();
		$a = [];
        foreach ($arr as $category) {
        	foreach ($category as $cat) {
        		$a[] = $cat->id;}}
		foreach ($categories as $category) {		
			if(in_array($category->id, $a)) {
				$category->check = true;}}
        return $categories;} // function view_jokes


}