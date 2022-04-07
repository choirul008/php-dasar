<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Choirul";
$student1->value = 100;

var_dump($student1);

// clone object
$student2 = clone $student1;
var_dump($student2);