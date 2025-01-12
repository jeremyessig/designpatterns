<?php

namespace App\Tests\Observer;

use App\Observer\ConcreteObserverA;
use App\Observer\ConcreteObserverB;
use App\Observer\Subject;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase
{
    public function testObserver(): void
    {
        $subject = new Subject();
        $o1 = new ConcreteObserverA();
        $subject->attach($o1);

        $o2 = new ConcreteObserverB();
        $subject->attach($o2);

        $subject->someBusinessLogic();
    }
}
