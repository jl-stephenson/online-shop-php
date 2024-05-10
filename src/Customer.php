<?php

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