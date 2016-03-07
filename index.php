<?php

ini_set('display_errors', getenv('app.debug'));
error_reporting(E_ALL);

define("DS", DIRECTORY_SEPARATOR);
define ('ROOT', __DIR__);
define ('ROOT_APP', ROOT . '/app');
define("ROUTERS_DIR", ROOT_APP . "/routers" . DS);

require_once(ROOT . '/vendor/autoload.php');

\Slim\Slim::registerAutoloader();

// Instantiate the app
$app = new \Slim\Slim(array(
    'templates.path' => 'views'
));

// Environment based configuration
if (file_exists(ROOT . DS . '.env')) {
Dotenv::load(__DIR__);} 
else {die("<pre>File .env missing!</pre>");}

// Create monolog logger and store logger in container as singleton 
// (Singleton resources retrieve the same log resource definition each time)
$app->container->singleton('log', function () {
    $log = new \Monolog\Logger('slim-skeleton');
    $log->pushHandler(new \Monolog\Handler\StreamHandler('logs/app.log', \Monolog\Logger::DEBUG));
    return $log;
});

// Prepare view
$app->view(new \Slim\Views\Twig());
$app->view->setTemplatesDirectory('app/views');
$app->view->parserOptions = array(
    'charset' => 'utf-8',
    'cache' => realpath('app/views/cache'),
    'auto_reload' => true,
    'strict_variables' => false,
    'autoescape' => true
);
$app->view->parserExtensions = array(new \Slim\Views\TwigExtension());


/**
 * Include all files located in routes directory
 * require '../app/routers/*.php'; 
 */
foreach(glob(ROUTERS_DIR . '*.php') as $router) {
    require_once $router;
}

foreach(glob(ROUTERS_DIR . 'admin/*.php') as $router) {
    require_once $router;
}

require_once(ROOT_APP . '/config.php');

use Illuminate\Database\Eloquent\Model as Model;

//namespace models\Core;
// use models\Core\Config as Config;
// require 'app/config/config.php';
 
// Define models
class Users extends Model {}
  
$app->get('/trial', function () use ($app) {
	$name = "username";
//	echo( Users::all() );
//	echo( Config::trial() );
});

$app->run();