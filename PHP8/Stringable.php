<?php

function sayHello(Stringable $stringable): void
{
    echo "Hello {$stringable->__toString()}" . PHP_EOL;
}

// override string

class Person {

    public function __toString(): string
    {
        return "Person";
    }
}

sayHello(new Person);