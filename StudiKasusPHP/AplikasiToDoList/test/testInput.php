<?php

require_once "helper/input.php";

$name = input("Nama");
echo "Hello $name" . PHP_EOL;

$channel = input("Channel");
echo $channel . PHP_EOL;