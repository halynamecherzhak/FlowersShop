<?php

abstract class Plant
{
    private $name;
    private $color;
    private $price;
    private $height;

    abstract protected function totalPrice();

    abstract protected function describe();

    public function __construct($name, $color, $price, $height)
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->height = $height;
    }

    public function setName($name)
    {
        $this->name = $name;

    }

    public function getName()
    {
        return $this->name;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price): void
    {
        $this->price = $price;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height): void
    {
        $this->height = $height;
    }
}