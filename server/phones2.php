<?php
/**
 * Date: 15/02/02
 * Time: 12:17
*/
$list = array(
    array(
        "age" => 14,
        "id"      => "motorola-defy-with-motoblur",
        "name"    => "Sony",
        "snippet" => "OK!",
    ),
    array(
        "age" => 15,
        "id"      => "motorola-defy-with-motoblur",
        "name"    => "Xperia",
        "snippet" => "Sure!",
    ),
    array(
        "age" => 14,
        "id"      => "motorola-defy-with-motoblur",
        "name"    => "Honda",
        "snippet" => "OK!",
    ),
    array(
        "age" => 15,
        "id"      => "motorola-defy-with-motoblur",
        "name"    => "Toyota",
        "snippet" => "Sure!",
    ),
);

header("Content-Type: application/json; charset=utf-8");

echo json_encode($list);

exit;
