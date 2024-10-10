<?php

class Product
{

    //instance variables
    public $type;
    public $name;
    public $price;
    public $image;

    //constructor
    public function __construct(string $_type, string $_name, int $_price, string $_image)
    {
        $this->type = $_type;
        $this->type = $_name;
        $this->type = $_price;
        $this->type = $_image;
    }
}
