<?php

namespace Models\Core;
use Illuminate\Database\Eloquent\Model as Model;


class Posts extends Model {
    protected $table = "posts";
    public $timestamps = false;

    public function comments() {
    return $this->hasMany('Comments');}

    public static function get_posts() {
        $posts = Posts::orderBy('created_at')->get();
        return $posts; } // function get_posts

    public static function get_post($id) {
        $post = Posts::find($id);
        return $post; } // function get_post

    public static function add_post($title, $tiaser, $text, $user_id) {        
        $post = new Posts;
        $post->title = $title;
        $post->tiaser = $tiaser;
        $post->text = $text;
        $post->user_id = $user_id;
        $post->save();
        $post_id = $post->id;
        return $post; } // function add_post

    public static function update_post($id, $title, $tiaser, $text, $user_id) {
        $post = Posts::find($id);
        $post->title = $title;
        $post->tiaser = $tiaser;        
        $post->text = $text;
        $post->user_id = $user_id;
        $post->save();
        return $post; } // function update_post

    public static function delete_post($id) {
        Comments::delete_comment_by_postid($id);
        Posts::find($id)->delete();} // function delete_post

    public static function get_count() {
        return Posts::where('active', '=', 'true')->count();} // function get_count
}