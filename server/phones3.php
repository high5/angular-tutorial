<?php
/**
 * Date: 15/02/02
 * Time: 12:17
*/
$list = array(
    array(
        "age" => 21,
        "id"      => "motorola-defy-with-motoblur0",
        "imageUrl" => "/angular-tutorial/img/motorola-xoom.0.jpg",
        "name"    => "Phone3-1",
        "snippet" => "OK!",
    ),
    array(
        "age" => 22,
        "id"      => "motorola-defy-with-motoblur1",
        "imageUrl" => "/angular-tutorial/img/motorola-xoom.1.jpg",
        "name"    => "Phone3-2",
        "snippet" => "Sure!",
    ),
    array(
        "age" => 23,
        "id"      => "motorola-defy-with-motoblur2",
        "imageUrl" => "/angular-tutorial/img/motorola-xoom.2.jpg",
        "name"    => "Phone3-3",
        "snippet" => "OK!",
    ),
);

header("Content-Type: application/json; charset=utf-8");

echo json_encode($list);

exit;
