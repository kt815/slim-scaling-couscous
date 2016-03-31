<?php 
use Models\Core\Users as Users;
use Models\Core\Menus as Menus;
use Models\Core\Images as Images;
    

$app->get('/users/:id', function($id) use ($app) {
	$menu = Menus::menu_home();	
	$user = Users::find($id);
	$images = Images::get_images_case($id);
	$fotos = Images::get_image_foto($id);
	$foto = $fotos->name;

    $app->render('home/users/user.html', 
            array('user' => $user, 'menu' => $menu, 'images' => $images, 'foto' => $foto));
})->conditions(array('id' => '\d+'));