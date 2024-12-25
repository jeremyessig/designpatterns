<?php

namespace App\Iterator;

use Iterator;

class AlphabeticalOrderIterator implements Iterator
{

    private $collection;
    private $position;

    private $reverse = false;

    public function __construct($collection, $reverse = false)
    {
        $this->collection = $collection;
        $this->reverse = $reverse;
    }

    public function rewind(): void
    {
        dump('rewind');
        $this->position = $this->reverse ? count($this->collection->getItems()) - 1 : 0;
    }

    public function current(): mixed
    {
        dump('current');
        return $this->collection->getItems()[$this->position];
    }

    public function key(): mixed
    {
        dump('key');
        return $this->position;
    }

    public function next(): void
    {
        dump('next');
        $this->position = $this->position + ($this->reverse ? -1 : 1);
    }

    public function valid(): bool
    {
        return isset($this->collection->getItems()[$this->position]);
    }
}
