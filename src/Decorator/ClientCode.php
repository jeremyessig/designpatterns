<?php

namespace App\Decorator;

use App\Decorator\Component;

class ClientCode
{
    public function __construct(private Component $component) {}

    public function doStuff()
    {
        dump(sprintf("RESULT: %s", $this->component->operation()));
    }
}
