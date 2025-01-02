<?php

namespace App\Tests\Builder;

use App\Builder\ConcreteBuilder1;
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

        dump("Standard basic product:\n");
        $director->buildMinimalViableProduct();
        $builder->getProduct()->listParts();
    }
}
