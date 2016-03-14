<?php

namespace Models\Core;
use Illuminate\Database\Eloquent\Model as Model;

 
// Define models
class Users extends Model {


    protected $table = "users";

    public static function get_author($id) {
        $user = Users::find($id);
        return $user->username;
    }

    public static function get_id($user) {
        $user = Users::where('email', '=', $user)->first();
        return $user->id;
    }

    public static function get_username() {
        
		if (isset($_SESSION['user'])) {
		    $user = Users::where('email', '=', $_SESSION['user'])->first();
		    $username = $user->username;
		  }
		else {
			$username = '';
		}		

        return $username;
    }

    public static function get_logged_id() {

		if (isset($_SESSION['user'])) {
		    $user = Users::where('email', '=', $_SESSION['user'])->first();
		    $user_id = $user->id;
		  }
		else {
			$user_id = '';
		}		

        return $user_id;
    }

}