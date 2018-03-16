<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/16/2018
 * Time: 1:42 AM
 */
require_once ("flowers.php");
class Alive_Flowers extends Flowers
{
    public function __construct($name, $color, $price, $height, $amount)
    {
        parent::__construct($name, $color, $price, $height, $amount);
    }

}
