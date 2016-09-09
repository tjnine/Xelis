<?php 
#Application Variables and Info

//Create our new Silex\Application instance for use domain wide
$app = new Silex\Application;

//Include out routes
require_once __DIR__.'/routes.php';

//Turn on Silex Errors
$app['debug'] = true;

//doctrine DBAL database connection
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver' => 'pdo_mysql',
        'host' => '127.0.0.1',
        'dbname' => 'Silex-17',
        'user' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
    ),
));

// Twig provider config
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../resources/views',
));

?>