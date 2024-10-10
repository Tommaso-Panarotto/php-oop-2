<?php
require_once __DIR__ . "/Product.php";

class FKennels extends Product
{

    //instance variables
    public $material;
    public $color;

    //constructor
    public function __construct(string $_name, int $_price, string $_imageUrl, string $_material, string $_color)
    {
        //call constructor of the parent
        parent::__construct("Kennel", $_name, $_price, $_imageUrl);
        $this->material = $_material;
        $this->color = $_color;
    }
}
