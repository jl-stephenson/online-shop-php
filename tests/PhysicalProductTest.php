<?php

require_once '../src/PhysicalProduct.php';

use PHPUnit\Framework\TestCase;

class PhysicalProductTest extends TestCase
{
    public function testPhysicalProductConstruct()
    {
        $physicalProduct = new PhysicalProduct('Book', 5.99, 2, 'Not bad');
        $this->assertInstanceOf(PhysicalProduct::class, $physicalProduct);
        $this->assertSame('Book', $physicalProduct->name);
        $this->assertSame(5.99, $physicalProduct->price);
        $this->assertSame(2.0, $physicalProduct->weight);
        $this->assertSame('Not bad', $physicalProduct->description);
    }

    public function testPhysicalProductConstruct_malformedName()
    {
        $this->expectException(TypeError::class);
        new PhysicalProduct(([]), 5.99, 2, 'Not bad');
    }

    public function testPhysicalProductConstruct_malformedPrice()
    {
        $this->expectException(TypeError::class);
        new PhysicalProduct('Bob', 'hello', 2, 'Not bad');
    }

    public function testPhysicalProductConstruct_malformedWeight()
    {
        $this->expectException(TypeError::class);
        new PhysicalProduct('Bob', 5.99, 'Big', 'Not bad');
    }

    public function testPhysicalProductConstruct_malformedDescription()
    {
        $this->expectException(TypeError::class);
        new PhysicalProduct('Bob', 5.99, 2, ([]));
    }
}