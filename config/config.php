<?php

namespace app\config;

use app\traits\GetterAndSetter;

define("PUBLIC_FOLDER", $_SERVER['CONTEXT_DOCUMENT_ROOT']);
define("TEMPLATES", PUBLIC_FOLDER . "/../views/");
define("CONFIG", PUBLIC_FOLDER . "/../config/");
define("MODELS", PUBLIC_FOLDER . "/../models/");
define("CONTROLLERS", PUBLIC_FOLDER . "/../controllers/");
define("CORE", PUBLIC_FOLDER . "/../core/");
define("API", PUBLIC_FOLDER . "/../api/");
define("BIG", "src/bigimages/");
define("SMALL", "src/smallimages/");

class Config
{   
    protected $db = [
        'driver' => 'mysql',
        'host' => 'localhost:3306',
        'user' => 'lotos',
        'password' => 'XrTA2B2Igm3AzBPR',
        'dbname' => 'my_portfolio'
    ];

    protected $namespaces= [
        'controllers' => "app\\controllers\\",
    ];

    protected $pathes = [
        'templates' => TEMPLATES,
    ];

    use GetterAndSetter;
}
