<?php
require_once __DIR__ . "/Product.php";

class Toys extends Product
{

    //instance variables
    public $material;
    public $use; //playing or teaching

    //constructor
    public function __construct(object $_category, string $_name, int $_price, string $_imageUrl, string $_material, string $_use)
    {
        //call constructor of the parent
        parent::__construct("Toy", $_category, $_name, $_price, $_imageUrl);
        $this->material = $_material;
        $this->use = $_use;
    }

    public function getMaterial()
    {
        return $this->material;
    }

    public function getUse()
    {
        return $this->use;
    }
}
