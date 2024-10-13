<?php

trait Available
{

    public $purchase;

    public function IsAvailable()
    {
        if ($this->purchase == "yes") {
            return "buy";
        } else {
            return "not available";
        }
    }
}
