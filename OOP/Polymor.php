<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Choirul");

$company->programmer = new BackendProgrammer("Choirul");

$company->programmer = new FrontEndProgrammer("Choirul");

sayHelloProgrammer(new Programmer("Choirul"));
sayHelloProgrammer(new BackendProgrammer("Choirul"));
sayHelloProgrammer(new FrontEndProgrammer("Choirul"));