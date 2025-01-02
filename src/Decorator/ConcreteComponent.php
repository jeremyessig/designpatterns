<?php

namespace App\Decorator;

use App\Decorator\ComponentInterface;


class ConcreteComponent implements ComponentInterface
{
    public function operation(): string
    {
        return "ConcreteComponent";
    }
}
