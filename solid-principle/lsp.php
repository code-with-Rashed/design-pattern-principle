<?php

// LISKOV SUBSTITUTION PRINCIPLE

abstract class Animal
{
    protected $legs;
    abstract public function legs($legs);
    public function getLegs()
    {
        return $this->legs;
    }
}
class PrintOut
{
    private $animals;
    public function __construct(Animal ...$animals)
    {
        $this->animals = $animals;
    }
    public function output()
    {
        foreach ($this->animals as $animal) {
            echo "The " . get_class($animal) . " has " . $animal->getLegs() . " legs\n";
        }
    }
}

class Human extends Animal
{
    public function legs($legs)
    {
        $this->legs = $legs;
    }
}
class Bird extends Animal
{
    public function legs($legs)
    {
        $this->legs = $legs;
    }
}

class Dog extends Animal
{
    public function legs($legs)
    {
        $this->legs = $legs;
    }
}



$human = new Human();
$human->legs(2);

$bird = new Bird();
$bird->legs(2);

$dog = new Dog();
$dog->legs(4);

$print = new PrintOut($human,$bird,$dog);
$print->output();
