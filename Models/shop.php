<?php

class Shop
{
    private $name;
    private $flowersList;

    public function __construct($name, $flowersList)
    {
        $this->name=$name;
        $this->flowersList=$flowersList;
    }

    public function Flowers()
    {
        return $this->flowersList;
    }

    public function GetName()
    {
        return $this->name;
    }
}