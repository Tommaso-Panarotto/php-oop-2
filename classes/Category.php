<?php

class Category
{

    //instance variables
    public $category;

    //constructor
    public function __construct(string $_category)
    {
        $this->category = $_category;
    }

    public function getCategory()
    {
        return $this->category;
    }
}
