<?php
include "../engine/Autoload.php";


use app\config\Config;


spl_autoload_register([new Autoload(), 'loadClass']);

$controllerName = $_GET['c'] ? $_GET['c'] : 'index';
$actionName = $_GET['a'];


$controllerClass = (new Config)->namespaces['controllers'] . ucfirst($controllerName) . "Controller";

if (class_exists($controllerClass)) {
    $controller = new $controllerClass();
    $controller->runAction($actionName);
} else {
    echo "$controllerClass isn't";
}


