<?php

function sayHello(string $first, string $middle = "", string $last): void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}

sayHello("Choirul", "Anam", "Keren");

sayHello(last: "Keren", first: "Choirul", middle: "Anam");
sayHello(first: "Choirul", last: "Keren");


