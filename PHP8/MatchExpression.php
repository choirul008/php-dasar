<?php

$value = "A";
$result = "";

switch ($value){
    case "A":
    case "B":
    case "C":
        $result = "Anda Lulus";
        break;
    case "D":
        $result = "Anda tidak Lulus";
        break;
    case "E":
        $result = "Anda salah Jurusan";
        break;
    default:
        $result = "Nilai apa itu";
}

echo $result . PHP_EOL;
// dengan menggunakan match expression
$result = match ($value){

    "A", "B", "C" => "Anda Lulus",
    "D" => "Anda Tidak Lulus",
    "E" => "Mungkin Anda salah Jurusan",
    default => "Nilai apa itu?"
};

echo $result . PHP_EOL;

$value = 80;
$result = match (true){
    $value >= 80 => "A",
    $value >= 70 => "B",
    $value >= 60 => "C",
    $value >= 50 => "D",
    default => "E"
};

echo $result . PHP_EOL;

$name = "Mr. Choirul";

$result = match (true){
    str_contains($name, "Mr.") => "Hello Pak",
    str_contains($name, "Mrs.") => "Hello Bu",
    default => "Hello"
};

echo $result . PHP_EOL;