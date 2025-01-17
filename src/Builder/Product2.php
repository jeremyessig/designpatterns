<?php

namespace App\Builder;



/**
 * It makes sense to use the Builder pattern only when your products are quite
 * complex and require extensive configuration.
 *
 * Unlike in other creational patterns, different concrete builders can produce
 * unrelated products. In other words, results of various builders may not
 * always follow the same interface.
 */
class Product2
{
    public $parts = [];

    public function listParts(): void
    {
        //echo "Product parts: " . implode(', ', $this->parts) . "\n\n";
        dump("Product parts: " . implode(', ', $this->parts));
    }
}
