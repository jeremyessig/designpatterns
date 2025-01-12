<?php

namespace App\Observer;

class ConcreteObserverB implements \SplObserver
{
    public function update(\SplSubject $subject): void
    {
        dump("ConcreteObserverB: Reacted to the event.");
        // if ($subject->state < 3) {
        // }
    }
}
