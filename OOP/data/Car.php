<?php

namespace Data;

interface HasBrand
{
    function getBrand(): string;
}

interface IsMaintenance
{
    function IsMaintenance(): bool;
}

interface Car extends HasBrand 
{
    function drive(): void;

    function getTire(): int;
}

// extend cuma satu, tapi implement boleh lebih daru satry

class Avansa implements Car , IsMaintenance
{
    public function drive(): void
    {
        echo "Drive Avansa" . PHP_EOL;
    }

    public function getTire(): int
    {
        return  4;
    }
    public function getBrand(): string
    {
        return  "Toyota";
    }

    public function IsMaintenance(): bool
    {
        return  false;
    }
}