<?php

function validate(string $values){
    if(trim($values) == "") {
        throw new Exception("Invallid string");
    }
}

try{
    validate("     ");
}catch (Exception) {
    echo "Invalid" . PHP_EOL;
}