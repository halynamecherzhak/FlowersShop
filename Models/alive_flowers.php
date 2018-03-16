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
    private $dateOfProduction;
    private $dayOfLife;
    public function __construct($name, $color, $price, $height, $amount)
    {
        parent::__construct($name, $color, $price, $height, $amount);
    }
    public function CheckTerm()
    {
        return ($this->dateOfProduction+$this->dayOfLife)< date("Y-m-d");
    }
}
