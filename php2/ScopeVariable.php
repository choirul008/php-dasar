<?php

$name = "Choirul" ; //Global Scope

function heyName()
{
    global $name; //global keyword
    echo $name . PHP_EOL;

    echo $GLOBALS["name"] . PHP_EOL;

}

heyName();


// function createName(){
//     $name ="Choirul"; //local scope
// }

// createName();
// echo $name . PHP_EOL;//error

