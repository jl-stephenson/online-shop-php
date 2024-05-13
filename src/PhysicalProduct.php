<?php

require_once 'Product.php';

class PhysicalProduct extends Product
{
    public float $weight;

    // Define a __construct function to pass in properties for:
    // name (string), price (float), weight (float), description (string)
    public function __construct($name, $price, float $weight, $description)
    {
        parent::__construct($name, $price, $description);
        $this->weight = $weight;
    }

// Define getDisplay function to display bullet-pointed:
//name, price and description;
    function getDisplay()
    {

        return '<ul class="card">
<li>' . $this->name . '</li>
<li>£' . number_format($this->price, 2) . '</li>
<li>' . $this->description . '</li>
</ul>';
        // return [$this->name, '£' . number_format($this->price, 2), $this->description];
    }

// Define getShippingPrice function to calculate shipping:
    function getShippingPrice()
    {
        if ($this->price > 100) {
            return 0;
        } else if ($this->weight < 10) {
            return 5.99;
        } else {
            return 10.99;
        }
    }
}