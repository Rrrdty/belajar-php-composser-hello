<?php

namespace ProgrammerZamanNow\Belajar;

class Customer
{
    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name = "GUEST"): string
    {
        return "Hello $name, My name is $this->name";
    }
}
