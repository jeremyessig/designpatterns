<?php

namespace App\Tests\Iterator;

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

    public function rewind()
    {
        $this->position = $this->reverse ? count($this->collection->getItems()) - 1 : 0;
    }
}
