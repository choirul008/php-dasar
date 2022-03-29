<?php

$name = "Anam";
$name = null;
$age =20;
$age = null ;


echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";



echo "Is Name Null? : ";
echo is_null($name);
echo "\n";




$contoh = "anam";
unset($contoh);

var_dump(isset($contoh));