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
    'mode' => getenv('app.dev'),
    'templates.path' => 'views',
    'cookies.lifetime' => '20 minutes'
));

$app->error(function (\Exception $e) use ($app) {
 $app->halt(500, "error");
});

// Only invoked if mode is "production"
$app->configureMode('production', function () use ($app) {
    $app->config(array(
        'log.enable' => false,
        'debug' => false
    ));
});

// Only invoked if mode is "development"
$app->configureMode('development', function () use ($app) {
    $app->config(array(
        'log.enable' => false,
        'debug' => true
    ));
});


$app->add(new \Slim\Middleware\SessionCookie(array()));

// Environment based configuration
if (file_exists(ROOT . DS . '.env')) {
Dotenv::load(__DIR__);} 
else {die("<pre>File .env missing!</pre>");}

// Create monolog logger and store logger in container as singleton 
// (Singleton resources retrieve the same log resource definition each time)
$app->container->singleton('log', function () {
    $log = new \Monolog\Logger('slim-app');
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


$isNoLogged = function($app) {
    return function() use ($app) {
        if (!isset($_SESSION['user'])) {
            $app->flash('error', 'Login required');
            $app->redirect('/admin/login');
        }
    };
};


$isLogged = function($app) {
    return function() use ($app) {
        if (isset($_SESSION['user'])) {
            $app->redirect('/admin');
        }
    };
};


/**
 * Markdown support
 */
$app->container->singleton('markdown', function () {
    return Parsedown::instance();
});


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

foreach(glob(ROUTERS_DIR . '*/*/*.php') as $router) {
    require_once $router;
}

require_once(ROOT_APP . '/config.php');

use Models\Core\Jokes as Jokes;
use PHPImageWorkshop\ImageWorkshop;
  
$app->get('/trial', function () use ($app) {


$layer = ImageWorkshop::initFromPath(__DIR__.'/public/images/2016-02-02_10-23-35_56fba9af45236.png');

$iw = $layer->getWidth(); 
$ih = $layer->getHeight();


$w_width = 1024;
$w_height = 544;
$x1 = 242;
$y1 = 69; 
$x2 = 850; 
$y2 = 525;

$x1p = ($x1*100)/$w_width;
$y1p = ($y1*100)/$w_height;

$w = $x2 - $x1;
$h = $y2 - $y1;

$wp = ($w*100)/$w_width;
$hp = ($h*100)/$w_height;

$layer->cropInPercent($wp, $hp, $x1p, $y1p, 'LT');


$dirPath = __DIR__."/public/images";
$filename = "cub.png";
$createFolders = false;
$backgroundColor = null; // transparent, only for PNG (otherwise it will be white if set null)
$imageQuality = 95; // useless for GIF, usefull for PNG and JPEG (0 to 100%)
 
$layer->save($dirPath, $filename, $createFolders, $backgroundColor, $imageQuality);

kd("Hi");


});


$app->post('/trial', function () use ($app) {




});


$app->run();          	
