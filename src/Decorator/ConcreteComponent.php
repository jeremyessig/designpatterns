<?php

namespace App\Decorator;

use App\Decorator\Component;

class ConcreteComponent implements Component
{
    public function operation(): string
    {
        return "ConcreteComponent";
    }
}
