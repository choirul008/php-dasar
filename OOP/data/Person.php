<?php

class Person
{   
    const AUTHOR = "Choirul Anam";

    var string  $name;
    var ?string  $adress = null;
    var string $country = "Indonesia";

    function __construct(string $name, ?string $adress){
        $this->name = $name;
        $this->adress = $adress;
    }

    function sayHello(?string $name)
    {
        if(is_null($name)){
            echo "Hai, my name is $this->name" . PHP_EOL;
        }else{
            echo "Hai $name, ny name is $this->name" . PHP_EOL;
        }    
    }

    function info()
    {
        echo "Author : " . self::AUTHOR . PHP_EOL;
    }

    function __destruct()
    {
        echo "Object person $this->name is destroyed" . PHP_EOL;
    }
}