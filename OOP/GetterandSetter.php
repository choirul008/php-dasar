<?php

require_once "data/Category.php";

$category = new Category();
$category->setName("Handphone");
$category->setExpensive(true);

$category->setName("");
echo "Item : {$category->getName()}" . PHP_EOL;
echo "Expensive : {$category->isExpensive()}" . PHP_EOL;