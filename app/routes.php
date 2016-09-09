<?php 

$blogPosts = array(
    1 => array(
        'date'      => '2011-03-29',
        'author'    => 'igorw',
        'title'     => 'Using Silex',
        'body'      => '...',
    ),
    2 => [
        'date'      => '2011-04-20',
        'author'    => 'timothy',
        'title'     => 'Using Silex is Awesome yo',
        'body'      => 'Silex-17 is an app for 2017 using Symfony Silex.',
    ]
);

$app->get('/', function (Silex\Application $app) use ($blogPosts) {
    $output = '';
    foreach ($blogPosts as $post) {
        $output .= '<p>'. $post['title'] . '</p>';
    }


    return $app['twig']->render('index.html.twig', [
    	'title'	=>	$output
    	]);
     // return $output;
});


?>