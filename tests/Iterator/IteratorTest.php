<?php

namespace App\Tests\Iterator;

use App\Iterator\WordsCollection;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase
{

    public function testWordsCollection(): void
    {
        $collection = new WordsCollection();
        $collection->addItem("First");
        $collection->addItem("Second");
        $collection->addItem("Third");

        foreach ($collection->getIterator() as $key => $item) {
            dump($key);
            dump(sprintf('*** %s ***', $item));
            dump('------------');
        }

        // foreach ($collection->getReverseIterator() as $item) {
        //     dump($item);
        // }
    }

    public function testFilterPerDate(): void
    {
        $jean = new PersonModel('jean', new DateTimeImmutable());
    }
}
