<?php

namespace App\Decorator;

use App\Decorator\ComponentInterface;


class ClientCode
{
    public function __construct(private ComponentInterface $component) {}

    public function doStuff()
    {
        dump(sprintf("RESULT: %s", $this->component->operation()));
    }
}
