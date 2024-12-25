<?php

use App\Decorator\ClientCode;
use App\Decorator\ConcreteComponent;
use App\Decorator\ConcreteDecoratorA;
use App\Decorator\ConcreteDecoratorB;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class DecoratorTest extends KernelTestCase
{

    public function testClient(): void
    {
        self::bootKernel();
        $container = self::getContainer();
        $component = new ConcreteComponent();
        $clientCode = new ClientCode($component);
        $clientCode->doStuff();

        $decorator1 = new ConcreteDecoratorA($component);
        $decorator2 = new ConcreteDecoratorB($decorator1);

        $clientCode2 = new ClientCode($decorator2);
        $clientCode2->doStuff();


        //dump($clientCode->doStuff());
    }
}
