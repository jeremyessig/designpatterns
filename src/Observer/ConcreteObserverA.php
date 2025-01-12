<?php

namespace App\Observer;

class ConcreteObserverA implements \SplObserver
{
    public function update(\SplSubject $subject): void
    {
        dump("ConcreteObserverA: Reacted to the event.");
        // if ($subject->state < 3) {
        // }
    }
}
