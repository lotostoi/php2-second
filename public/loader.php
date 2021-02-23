<?php

use app\engine\App;

$sosial_network = "vk";
$id_in_sosial_network = 14406547;

$nameImg =  $sosial_network . $id_in_sosial_network . ".jpg";

$img_big = 'https://sun1-19.userapi.com/impg/Da73J3wv9Yg8sJ00jpZGBiG2-pnSDAJkJe5z1g/xRvAFOEMknk.jpg?size=400x0&quality=96&crop=855,1,1705,1705&sign=e0020863aa68642c2017c3fb67b93592&c_uniq_tag=pLo1oabR6MWhafOzBKpKmBu5CqZR8_at_qMSWWpLtuA&ava=1';
$img_small = 'https://sun1-19.userapi.com/impg/Da73J3wv9Yg8sJ00jpZGBiG2-pnSDAJkJe5z1g/xRvAFOEMknk.jpg?size=100x0&quality=96&crop=855,1,1705,1705&sign=791d59af31e6ee366dc028f30dfcc48d&c_uniq_tag=bKr8maDtlwQJzQ9GiuLDISVw7x1KCE7CJUDIouWKV40&ava=1';

$linkForBigImg = __DIR__ . "./src/img/users/big/" . $nameImg;
$linkForSmallImg = __DIR__ . "./src/img/users/small/" . $nameImg;

file_put_contents($linkForBigImg, file_get_contents($img_big));
file_put_contents($linkForSmallImg, file_get_contents($img_small));

echo "img_big" . "  " . '/' . $linkForBigImg;
echo "img_small" . "  " . '/' . $linkForSmallImg;

