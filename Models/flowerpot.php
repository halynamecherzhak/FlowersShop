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
    public function __construct($name, $color, $price, $height)
    {
        parent::__construct($name, $color, $price, $height);
    }

    protected function totalPrice()
    {
        return $this->getPrice();
    }

    public function describe()
    {
        return "Hello";// TODO: Implement describe() method.
    }
}
