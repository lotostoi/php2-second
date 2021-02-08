<?php
require_once '../vendor/autoload.php';
//include "../engine/Autoload.php";

use app\config\Config;
use app\engine\{TwigRender, Request};


//spl_autoload_register([new Autoload(), 'loadClass']);

try {
    $request = new Request();
    $controllerName =  $request->getControllerName() ?: 'index';
    $actionName = $request->getActionName();
    $controllerClass = (new Config)->namespaces['controllers'] . ucfirst($controllerName) . "Controller";

    if (class_exists($controllerClass)) {
        $controller = new $controllerClass(new TwigRender());
        $controller->runAction($actionName);
    } else {
        $controllerClass = (new Config)->namespaces['controllers'] . 'P404' . "Controller";
        $controller = new $controllerClass(new TwigRender());
        $controller->runAction('Main');
    }
} catch (\Exception  $e) {
    var_dump($e);
}
