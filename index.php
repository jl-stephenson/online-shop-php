<?php

require_once 'src/Product.php';
require_once 'src/PhysicalProduct.php';
require_once 'src/VirtualProduct.php';
require_once 'src/Customer.php';


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