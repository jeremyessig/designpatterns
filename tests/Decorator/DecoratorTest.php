<?php

use App\Decorator\ClientCode;
use App\Decorator\ConcreteComponent;
use App\Decorator\ConcreteDecoratorA;
use App\Decorator\ConcreteDecoratorB;
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class DecoratorTest extends TestCase
{

    public function testClient(): void
    {
        $component = new ConcreteComponent();
        $clientCode = new ClientCode($component);
        $clientCode->doStuff();

        $decorator1 = new ConcreteDecoratorA($component);
        $decorator2 = new ConcreteDecoratorB($decorator1);

        $clientCode1 = new ClientCode($decorator1);
        $clientCode1->doStuff();

        $clientCode2 = new ClientCode($decorator2);
        $clientCode2->doStuff();


        //dump($clientCode->doStuff());
    }
}
