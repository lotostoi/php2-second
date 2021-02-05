<?php
include "../engine/Autoload.php";

use app\config\Config;
use app\engine\TwigRender;

spl_autoload_register([new Autoload(), 'loadClass']);

$url_array = explode('/', $_SERVER['REQUEST_URI']);

$controllerName =  $url_array[1] !== '' ? $url_array[1] : 'index';

if (strstr($controllerName, '?')) {
    $controllerName =  explode('?', $controllerName)[0];
}

$controllerClass = (new Config)->namespaces['controllers'] . ucfirst($controllerName) . "Controller";

if (class_exists($controllerClass)) {
    $controller = new $controllerClass(new TwigRender());
    $controller->runAction($actionName);  
} else {
    echo "$controllerClass isn't";
}


