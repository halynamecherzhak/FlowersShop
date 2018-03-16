<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/16/2018
 * Time: 1:33 AM
 */
require_once ("plant.php");

class Flowers extends Plant
{
    private $amount;


    public function __construct($name, $color, $price, $height, $amount)
    {
        parent::__construct($name, $color, $price, $height);
        $this->amount = $amount;

    }

    function getAmount()
    {
        return $this->amount;
    }

    public function __set($amount, $value = 1)
    {

        if ($amount < 1) {
            throw new Exception("Invalid number of flowers");
        }
        $this->amount = $value;
    }

    var $total;

    public function totalPrice()
    {
        $total = $this->amount * $this->getPrice();
        return $total;
    }

    public function describe()
    {
        return "It is flower " . $this->getName() . " with " . $this->getColor()
            . " color, price " . $this->getPrice() . "UAH and height " . $this->getHeight() .
            " number is " . $this->amount;
    }

    public function isBouquet()
    {
        if ($this->amount >= 2) {
            return "It is bouquet of flowers named as " . $this->getName() . "with" . $this->getColor() . "color,price" . $this->getPrice() . "UAH and height" . $this->getHeight() .
                "number is" . $this->amount . "flowers in the bouquet";
        } else {
            return $this->describe();
        }
    }
}





