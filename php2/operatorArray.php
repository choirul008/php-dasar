<?php



$first = [
    "first_name" => "Choirul"
];

$last = [
    "last_name" => "Anam"
];

$full = $first + $last ;
var_dump($full);


$a = [
    "fist_name" => "Choirul",
    "last_name" => "Anam"
];

$b = [
    "last_name" => "Anam",
    "fist_name" => "Choirul"
];

var_dump($a == $b);
var_dump($a === $b);