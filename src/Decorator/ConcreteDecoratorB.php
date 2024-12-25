<?php

namespace App\Decorator;

use App\Decorator\Decorator;


class ConcreteDecoratorB extends Decorator
{
    public function operation(): string
    {
        return "ConcreteDecoratorB(" . parent::operation() . ")";
    }
}
