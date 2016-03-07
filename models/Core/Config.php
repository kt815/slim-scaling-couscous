<?php

namespace models\Core;
// use models\Core\Config as Config;
// require 'app/config/config.php';

class Config
{

	private static $env;

	public static function get($path = null){

		$settings = [];	
		$settings['app'] = [ 'app_mode' => getenv('app.mode'), 'app_debug' => getenv('app.debug')  ];
		// self::set();

		if($path)
		{
			$settings = "trial";
			return $settings;
		}
		return false;
	}

	private static function set() {

		$settings = [];	
		$settings['app'] = [ 'app_mode' => getenv('app.mode')  ];
		self::$env = $settings;

	}

	public static function trial(){
		return "trial";
	}

}