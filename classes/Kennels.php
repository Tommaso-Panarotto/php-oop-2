<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/../traits/Available.php";
class Kennels extends Product
{

    //instance variables
    public $material;
    public $color;
    use Available;

    //constructor
    public function __construct(object $_category, string $_name, int $_price, string $_imageUrl, string $_material, string $_color)
    {
        //call constructor of the parent
        parent::__construct("Kennel", $_category, $_name, $_price, $_imageUrl);
        $this->material = $_material;
        $this->color = $_color;
    }

    public function getMaterial()
    {
        return $this->material;
    }

    public function getColor()
    {
        return $this->color;
    }
}
