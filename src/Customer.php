<?php

namespace PhpLibrary;

class Customer{
    public function __construct(private string $name)
    {

    }

    public function SayHello(String $name = "Guest"): String
    {
        return "Hello $name, My Name Is $this->name";
    }

}