<?php
require_once __DIR__ . "/Product.php";

class Foods extends Product
{

    //instance variables
    public $consistence; //solid or liquid
    public $expiration; //expiration date

    //constructor
    public function __construct($_category, string $_name, int $_price, string $_imageUrl, string $_consistence, string $_expiration)
    {
        //call constructor of the parent
        parent::__construct("Food", $_category, $_name, $_price, $_imageUrl);
        $this->consistence = $_consistence;
        $this->expiration = $_expiration;
    }

    public function getExpiration()
    {
        return $this->expiration;
    }

    public function getConsistence()
    {
        return $this->consistence;
    }
}
