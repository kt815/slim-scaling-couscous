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
}