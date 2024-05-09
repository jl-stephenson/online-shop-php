<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Shop</title>
</head>
<body>


<?php

// Create a class for PhysicalProduct
class PhysicalProduct
{
    private string $name;
    private float $price;
    private float $weight;
    private string $description;
    // Define a __construct function to pass in properties for:
    // name (string), price (float), weight (float), description (string)
    public function __construct(string $name, float $price, float $weight, string $description)
    {
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
        $this->description = $description;
    }

// Define getDisplay function to display bullet-pointed:
//name, price and description;
    function getDisplay()
    {
        return [$this->name, '£' . number_format($this->price, 2), $this->description];
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

$physItem1 = new PhysicalProduct("Camera", 299.99, 400, "A great all-rounder");
$physItem2 = new PhysicalProduct("Clothes-Horse", 25, 12, "Really sturdy.");
$arrayItem1 = $physItem1->getDisplay();
$shippingPrice = $physItem1->getShippingPrice();
printItem($arrayItem1, $shippingPrice);
$arrayItem2 = $physItem2->getDisplay();
$shippingPrice = $physItem2->getShippingPrice();
printItem($arrayItem2, $shippingPrice);


function printItem($array, $shippingPrice)
{
    echo "<ul>";
    foreach ($array as $element) {
        echo "<li>$element</li>";
    }
    echo '<li>Shipping price: £' . number_format($shippingPrice, 2) . '</li>';
    echo "</ul>";
}


// Create a class for Virtual Product
class VirtualProduct
{
    private string $name;
    private float $price;
    private float $fileSize;
    private string $fileType;
    private string $description;
// Construct properties for:
// name (string), price (float), fileSize (float), fileType (string), description (string);

    public function __construct(string $name, float $price, float $fileSize, string $fileType, string $description)
    {
        $this->name = $name;
        $this->price = $price;
        $this->fileSize = $fileSize;
        $this->fileType = $fileType;
        $this->description = $description;
    }
// Define getDisplay function to display bullet-pointed:
// name, price, file type & description

    public function getDisplay()
    {
        return [$this->name, '£' . number_format($this->price, 2), $this->fileType, $this->description];
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
// If fileSize > 1000 { shippingPrice = 0.5 }
// Else { shippingPrice = 0 }
}

$virtItem1 = new VirtualProduct("Short Stories", 5, 128, "ePub", "A cracking read.");
$arrayVirt1 = $virtItem1->getDisplay();
$vshippingPrice = $virtItem1->getShippingPrice();
printItem($arrayVirt1, $vshippingPrice);
?>
</body>
</html>