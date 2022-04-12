<?php

// boleh string,integer,boolean,array di property
class Example {
    public string|int|bool|array $data;
}

$example = new Example();
$example->data = "Choirul";
$example->data = 100;
$example->data = true;
$example->data = [];

// union type di parameter /argument
function sampleFunction(string|array $data): void
{
    if (is_array($data)){
        echo "Array" . PHP_EOL;
    } else if (is_string($data)) {
        echo "String" . PHP_EOL;
    }
}

sampleFunction("Choirul");
sampleFunction([]);

// union type di return value
function sampleFunction1(string|array $data): string|array
{
    if (is_array($data)){
        return ["Array"];
    } else if (is_string($data)) {
        return "String";
    }
}

var_dump(sampleFunction1("Anam"));
var_dump(sampleFunction1([]));