<?php

// OPEN COLOSED PRINCIPLE

interface ShapeInterface
{
    public function getArea(): float;
}

class Circle implements ShapeInterface
{
    private $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function getArea(): float
    {
        return pi() * pow($this->radius, 2);
    }
}

class Square implements ShapeInterface
{
    private $length;
    public function __construct($length)
    {
        $this->length = $length;
    }
    public function getArea(): float
    {
        return pow($this->length, 2);
    }
}

class AreaCalculator
{
    private $shapes;
    public function __construct(ShapeInterface ...$shapes)
    {
        $this->shapes = $shapes;
    }
    public function output()
    {
        foreach ($this->shapes as $shape) {
            echo $shape->getArea() . "\n";
        }
    }
}

class SumCalculator
{
    private $shapes;
    public function __construct(ShapeInterface ...$shapes)
    {
        $this->shapes = $shapes;
    }
    public function sum()
    {
        $sum = [];
        foreach ($this->shapes as $shape) {
            $sum[] = $shape->getArea();
        }
        return array_sum($sum);
    }
}

$circle = new Circle(10);
$square = new Square(10);

$areaCalculator = new AreaCalculator($circle, $square);
$areaCalculator->output();

$sumCalculator = new SumCalculator($circle, $square);
echo $sumCalculator->sum();
