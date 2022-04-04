<?php

require_once __DIR__ ."/data/Person.php";

$person = new Person("Choirul", "Cirebon");
$person->name = "Choirul";
$person->adress = "Cirebon";
// $person->country = "Indonesia";

echo "Nama  : $person->name" . PHP_EOL;
echo "Adress  : $person->adress" . PHP_EOL;
echo "Country  : $person->country" . PHP_EOL;


$person2 = new Person("Anam", null);
$person2->name = "Anam";
$person2->adress = null;


echo "Nama  : $person2->name" . PHP_EOL;
echo "Adress  : $person2->adress" . PHP_EOL;
echo "Country  : $person2->country" . PHP_EOL;
