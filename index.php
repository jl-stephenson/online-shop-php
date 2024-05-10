<?php

// Create a super class for products
abstract class Product
{
    protected string $name;
    protected float $price;
    protected string $description;

    public function __construct(string $name, float $price, string $description)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    public abstract function getDisplay();

}

// Create a class for PhysicalProduct
class PhysicalProduct extends Product
{
    private float $weight;

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

class Customer
{
    // Variables: name(string), email(string), address(string

    private string $name;
    private string $email;
    private string $address;

    // Define a constructor function to assign values to variables
    public function __construct(string $name, string $email, string $address)
    {
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
    }

    // Define a getDisplay to return a bullet pointed list:
    // name, email and address
    public function getDisplay()
    {
        return "<ul class='card2'>
<li>Name: $this->name</li>
<li>Email: $this->email</li>
<li>Address: $this->address</li>
</ul>";
    }
}


$physItem1 = new PhysicalProduct("Camera", 299.99, 400, "A great all-rounder");
$physItem2 = new PhysicalProduct("Clothes-Horse", 25, 12, "Really sturdy.");
$virtItem1 = new VirtualProduct("Short Stories", 5, 128, "ePub", "A cracking read.");
$virtItem2 = new VirtualProduct("Great Song", 0.99, 1218, "wav", "Not bad.");
$user1 = new Customer("Bob", "bob@bob.com", "Nowhere, No Town, NNN 000");
$user2 = new Customer("Geri", "geri@geri.com", "Somewhere, Some Town, SSS 111");


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Shop</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>

<div class="flex-container">

    <?php
    echo $physItem1->getDisplay();
    echo $physItem2->getDisplay();
    echo $virtItem1->getDisplay();
    echo $virtItem2->getDisplay();
    echo $user1->getDisplay();
    echo $user2->getDisplay();
    ?>


</div>
</body>
</html>