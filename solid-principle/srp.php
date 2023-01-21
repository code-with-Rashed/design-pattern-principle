<?php

//SINGLE RESPONSIBILITY PRINCIPLE

class Circle
{
    private $radius;
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
    public function area()
    {
        echo "Area of Circle : " . pi() * pow($this->radius, 2) . "\n";
    }
}

class Square
{
    private $length;
    public function setLength($length)
    {
        $this->length = $length;
    }
    public function area()
    {
        echo "Area of Square : " . pow($this->length, 2) . "\n";
    }
}

class AreaCalculator
{
    private $shapes;
    public function __construct(...$shapes)
    {
        $this->shapes = $shapes;
    }
    public function output()
    {
        foreach ($this->shapes as $shape) {
            $shape->area();
        }
    }
}

$circle = new Circle();
$circle->setRadius(10);

$square = new Square();
$square->setLength(10);

$AreaCalculator = new AreaCalculator($circle, $square);
$AreaCalculator->output();
