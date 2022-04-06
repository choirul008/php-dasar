<?php

require_once "data/SayGoodbye.php";

use Data\Traits\{Person, SayHello, SayGoodbye};

$person = new Person();
$person->goodBye("Choirul");
$person->hello("Anam");

$person->name= ("Paijo");
var_dump($person);

$person->run();