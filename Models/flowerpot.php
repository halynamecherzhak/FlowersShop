<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/16/2018
 * Time: 1:39 AM
 */
require_once ("plant.php");
class FlowerPot extends Plant
{
    private $number;
    public function __construct($name, $color, $price, $height,$number)
    {
        parent::__construct($name, $color, $price, $height);
        $this->number=$number;
    }

    public function totalPrice()
    {
        return "The total price of flowerpot is".$this->getPrice()."<br>";
    }

    public function describe()
    {
        return "It is flowerpot " . $this->getName() . " with " . $this->getColor()
            . " color, price " . $this->getPrice() . "UAH and height " . $this->getHeight() .
            " number is " . $this->number."<br>";
    }
}
