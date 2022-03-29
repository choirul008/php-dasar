<?php


// kode membuat array

$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["Choirul", "anam", "super"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Budi";
var_dump($names);


unset($names[0]);
var_dump($names);

$names[] = "Paijo";
var_dump($names);

var_dump(count($names));


$anam = array(
    "id" => "Choirul",
    "name" => "Choirul Anam",
    "age" => 30,
    "adress" => array(
        "city" =>"Cirebon",
        "country" => "Indonesia"
    )
);

var_dump($anam);

var_dump($anam["name"]);
var_dump($anam["adress"]["city"]);




$Paijo = [
    "id" => "Paijo",
    "name" => "Paijo Paijan",
    "age" => 35,
    "adress" => [
        "city" =>"Cirebon",
        "country" => "Indonesia"
    ]
];






