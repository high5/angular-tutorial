<?php
/**
 * Date: 15/02/02
 * Time: 12:17
*/
$list = array(
    array(
        "age" => 13,
        "id"      => "motorola-defy-with-motoblur",
        "name"    => "Motorola DEFY テスト1",
        "snippet" => "Are you ready for everything life throws your way?",
    ),
    array(
        "age" => 13,
        "id"      => "motorola-defy-with-motoblur",
        "name"    => "Motorola DEFY テスト2",
        "snippet" => "Are you ready for everything life throws your way?",
    ),
    array(
        "age" => 13,
        "id"      => "motorola-defy-with-motoblur",
        "name"    => "Motorola DEFY テスト3",
        "snippet" => "Are you ready for everything life throws your way?",
    ),
    array(
        "age" => 13,
        "id"      => "motorola-defy-with-motoblur",
        "name"    => "Motorola DEFY テスト4",
        "snippet" => "Are you ready for everything life throws your way?",
    ),
);

header("Content-Type: application/json; charset=utf-8");

echo json_encode($list);

exit;
