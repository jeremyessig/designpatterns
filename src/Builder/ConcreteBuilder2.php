<?php

namespace App\Builder;

class ConcreteBuilder2 implements BuilderInterface
{
    private $product;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->product = new Product2;
    }

    public function producePartA(): void
    {
        $this->product->parts[] = "PartA2";
    }

    public function producePartB(): void
    {
        $this->product->parts[] = "PartB2";
    }

    public function producePartC(): void
    {
        $this->product->parts[] = "PartC2";
    }

    public function getProduct(): Product2
    {
        $result = $this->product;
        $this->reset();

        return $result;
    }
}
