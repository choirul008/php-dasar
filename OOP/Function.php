<?php


require_once __DIR__ ."/data/Person.php";

$anam = new Person("Choirul");
$anam->name = "Anam"; 
$anam->sayHello("Choirul");

$co = new Person("Paijo");
$co->name = "Paijo"; 
$co->sayHello(null);

$anam->info();
$co->info();