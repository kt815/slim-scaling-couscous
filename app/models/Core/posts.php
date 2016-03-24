<?php

namespace Models\Core;
use Illuminate\Database\Eloquent\Model as Model;


class Posts extends Model {
    protected $table = "posts";
    public $timestamps = false;

    public function comments() {
        return $this->hasMany('Comments');
    }
}