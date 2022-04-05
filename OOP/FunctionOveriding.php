<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Choirul";
$manager->sayHello("Paijo");

$vp = new VicePresident();
$vp->name = "Vice President Anam";
$vp->sayHello("Paijo");