<?php


require_once __DIR__ ."/data/Person.php";

$anam = new Person();
$anam->name = "Anam"; 
$anam->sayHello("Choirul");

$co = new Person();
$co->name = "Paijo"; 
$co->sayHello(null);

$anam->info();
$co->info();