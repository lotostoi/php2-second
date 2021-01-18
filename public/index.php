<?php
include "../engine/Autoload.php";

use app\model\work\{Work};
use app\engine\{Db};

spl_autoload_register([new Autoload(), 'loadClass']);


$product = new Work(new Db());
