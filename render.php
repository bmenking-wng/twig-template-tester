<?php

require('vendor/autoload.php');

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$template = $_GET['template'];

if( !file_exists('./templates/' . $template . '.twig') || !file_exists('./params/' . $template . '.php') ) {
    echo "Sorry, the template provided is missing or does not exist.";
    http_response_code(404);
    exit;
}

$loader = new FilesystemLoader('./templates');
$twig = new Environment($loader);

$vars = require('./params/' . $template . '.php');

$vars['system'] = [
    'request'=>[
        'get'=>$_GET,
        'post'=>$_POST
    ]
];

echo $twig->render($template . '.twig', $vars);
