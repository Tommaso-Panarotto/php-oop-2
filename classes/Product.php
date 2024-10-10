<?php

class Product
{

    //instance variables
    public $type;
    public $category;
    public $name;
    public $price;
    public $imageUrl;

    //constructor
    public function __construct(string $_type, object $_category, string $_name, int $_price, string $_imageUrl)
    {
        $this->type = $_type;
        $this->category = $_category;
        $this->name = $_name;
        $this->price = $_price;
        $this->imageUrl = $_imageUrl;
    }

    public function getPrice()
    {
        return "prezzo: $this->price $";
    }

    public function getType()
    {
        return $this->type;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getImageUrl()
    {
        return $this->imageUrl;
    }
}
