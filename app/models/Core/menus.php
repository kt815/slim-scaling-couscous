<?php 

namespace Models\Core;
use Models\Core\Users as Users;

// Define models
class Menus  {
	
    public static function menu_home() {
	$one = ['name' => 'One', 'url' => '#' ];
	$two = ['name' => 'Two', 'url' => '#' ];
	$three = ['name' => 'Three', 'url' => '#' ];
	$four = ['name' => 'Add Joke', 'url' => 'admin/jokes/new' ];
	$username =  Users::get_username();

	$menu = array(
		'one' => $one,
		'two' => $two,
		'three' => $three,
		'four' => $four,
		'username' => $username
		);
        return $menu;
    }

    public static function menu_admin() {

		$username = Users::get_username();
		$user_id = Users::get_logged_id();
		$menu = array(
				'username' => $username,
				'userid' => $user_id
			);


        return $menu;
    }


}
