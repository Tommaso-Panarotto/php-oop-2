<?php

class Product
{

    //instance variables
    public $type;
    public $name;
    public $price;
    public $imageUrl;

    //constructor
    public function __construct(string $_type, string $_name, int $_price, string $_imageUrl)
    {
        $this->type = $_type;
        $this->name = $_name;
        $this->price = $_price;
        $this->imageUrl = $_imageUrl;
    }
}
