<?php

namespace Models\Core;
use Illuminate\Database\Eloquent\Model as Model;


class Jokes extends Model {
    protected $table = "jokes";
    public $timestamp = false;

}