<?php

require_once __DIR__ ."/data/Manager.php";

$manager = new Manager();
$manager->name = "Choirul";
$manager->sayHello("Anam");

$vp = new VicePresident();
$vp->name = "Wakil President";
$vp->sayHello("Anam");