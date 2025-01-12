<?php

namespace App\Tests\Builder;

use App\Builder\ConcreteBuilder1;
use App\Builder\ConcreteBuilder2;
use App\Builder\Director;
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class BuilderTest extends TestCase
{

    public function testClient(): void
    {
        $director = new Director;
        $builder = new ConcreteBuilder1();
        $director->setBuilder($builder);

        dump("Standard basic product:");
        $director->buildMinimalViableProduct();
        $builder->getProduct()->listParts();

        dump("Standard full featured product:");
        $director->buildFullFeaturedProduct();
        $builder->getProduct()->listParts();

        dump("Custom product (A1 + C1):");
        $builder->producePartA();
        $builder->producePartC();
        $builder->getProduct()->listParts();


        $builder = new ConcreteBuilder2();

        dump("Custom product (A2 + C2):");
        $builder->producePartA();
        $builder->producePartC();
        $builder->getProduct()->listParts();
    }
}
