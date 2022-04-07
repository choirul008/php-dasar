<?php

$array = [
    "firstName" => "Choirul",
    "midName" => "Anam",
    "lastName" => "keren"
];

$object = (object) $array ;
var_dump($object);

echo "First Name $object->firstName" . PHP_EOL;
echo "Mid Name $object->midName" . PHP_EOL;
echo "Last Name $object->lastName" . PHP_EOL;


$arraylagi = (array) $object;
var_dump($arraylagi);

require_once "data/Person.php";

$person = new Person("Choirul", "Cirebon");
var_dump($person);

$arrayPerson = (array) $person;
var_dump($person);