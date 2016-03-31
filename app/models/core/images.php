<?php

namespace Models\Core;
use Illuminate\Database\Eloquent\Model as Model;

 
// Define models
class Images extends Model {

    protected $table = "images";
    public $timestamps = false;

    public static function get_images_all() {
        $images = Images::all();
        return $images;}        

    public static function get_images($user_id) {
        $images = Images::where('user_id', '=', $user_id)->get();
        return $images;}        

    public static function get_images_case($user_id) {
        $images = Images::where('user_id', '=', $user_id)
        ->where('type', '=', 'case')
        ->get();
        return $images;}        

    public static function get_image_foto($user_id) {
        $foto = Images::where('user_id', '=', $user_id)
        ->where('type', '=', 'foto')
        ->get();
        foreach ($foto as $item) {
            return $item;   
        }}

    public static function get_image($id) {
        $image = Images::find($id);
        return $image;}            

    public static function get_name($id) {
        $image = Images::find($id);
        return $image->name;}            

    public static function add_image($user_id, $name, $description, $type) {
            $c = new Images;
            $c->user_id = $user_id;
            $c->name = $name;
            $c->description = $description;
            $c->type = $type;            
            $c->save();
        return $c;}   

    public static function update_image($id, $user_id, $name, $description, $type) {
            $c = Images::find($id);
            $c->user_id = $user_id;
            $c->name = $name;
            $c->description = $description;
            $c->type = $type;
            $c->save();
        return $c;}   

    public static function delete_image($id) {
        return Images::find($id)->delete();}

}