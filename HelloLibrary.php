<?php

use ProgrammerZamanNow\Belajar\Customer;

require_once __DIR__ . "/vendor/autoload.php";

$customer = new Customer("Eko");
echo $customer->sayHello("Budi");
