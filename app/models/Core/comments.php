<?php
namespace Models\Core;
use Illuminate\Database\Eloquent\Model as Model;


class Comments extends Model {
    protected $table = "comments";

    public function post() {
        return $this->belongsTo('Posts');
    }

    public static function get_comments($id) {
        $comments = Comments::where('posts_id', '=', $id)->get();
        return $comments;
    }
}