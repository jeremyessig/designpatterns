<?php

namespace App\Decorator;

use App\Decorator\ComponentInterface;

class Decorator implements ComponentInterface
{
    protected $component;

    public function __construct(ComponentInterface $component)
    {
        $this->component = $component;
    }

    /**
     * The Decorator delegates all work to the wrapped component.
     */
    public function operation(): string
    {
        return $this->component->operation();
    }
}
