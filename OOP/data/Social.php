<?php

class SocialMedia
{
    public string $name;
}

class Facebook extends SocialMedia
{
    final public function login(string $username, string $password): bool
    {
        return true;
    }
}

// error, tidak bisa diturunkan class nya
class FakeFacebook extends Facebook
{
    //erorr, tidak bisa di override function nya
    public function login(string $username, string $password): bool
    {
        return false;
    }
}