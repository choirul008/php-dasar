<?php



function sayHello(?string $name){

    if($name == null){
        throw new Exception("Tidak boleh null");
    }

    echo "Hello $name" . PHP_EOL;
}

$name = "choirul";

function sayHelloExpression(?string $name)
{
    $result = $name != null ? "Hello $name" : throw new Exception("tidak boleh null") ;

    echo "Hello $name" . PHP_EOL;
}

sayHelloExpression(null);
sayHelloExpression("choirul");