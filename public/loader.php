<?php

use app\engine\App;

$sosial_network = "fb";
$id_in_sosial_network = 3435303603361672;

$nameImg =  $sosial_network . $id_in_sosial_network . ".jpg";

$img_big = 'https://graph.facebook.com/3435303603361672/picture?width=300';
$img_small = 'https://graph.facebook.com/3435303603361672/picture?width=100';

$linkForBigImg = __DIR__ . "./src/img/users/big/" . $nameImg;
$linkForSmallImg = __DIR__ . "./src/img/users/small/" . $nameImg;

file_put_contents($linkForBigImg, file_get_contents($img_big));
file_put_contents($linkForSmallImg, file_get_contents($img_small));

echo "img_big" . "  " . '/' . $linkForBigImg;
echo "img_small" . "  " . '/' . $linkForSmallImg;
