<?php

abstract class Product
{
    public string $name;
    public float $price;
    public string $description;

    public function __construct(string $name, float $price, string $description)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    public abstract function getDisplay();

}