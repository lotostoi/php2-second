<?php
include "../engine/Autoload.php";

use app\model\work\{Work, Tags};
use app\model\reviews\Reviews;


spl_autoload_register([new Autoload(), 'loadClass']);

var_dump(Work::getOne(9));
var_dump(Reviews::getOne(41));

$tag = new Tags('tets');
$review = new Reviews('Иван', 'https://some-link', 'good', 'imglink', '0');
var_dump($tag);
var_dump($review);

$tag->insert();
$review->insert();

var_dump($tag);
var_dump($review);
