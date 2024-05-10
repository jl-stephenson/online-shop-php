<?php

require_once 'Product.php';

class VirtualProduct extends Product
{


    private float $fileSize;
    private string $fileType;

// Construct properties for:
// name (string), price (float), fileSize (float), fileType (string), description (string);

    public function __construct($name, $price, float $fileSize, string $fileType, $description)
    {
        parent::__construct($name, $price, $description);
        $this->fileSize = $fileSize;
        $this->fileType = $fileType;
    }
// Define getDisplay function to display bullet-pointed:
// name, price, file type & description

    public function getDisplay()
    {
        return '<ul class="card">
<li>' . $this->name . '</li>
<li>£' . number_format($this->price, 2) . '</li>
<li>' . $this->fileType . '</li>
<li>' . $this->description . '</li>
</ul>';

//        return [$this->name, '£' . number_format($this->price, 2), $this->fileType, $this->description];
    }

// Define getShippingPrice to calculate shipping:

    public function getShippingPrice()
    {
        if ($this->fileSize > 1000) {
            return 0.5;
        } else {
            return 0;
        }
    }
}
