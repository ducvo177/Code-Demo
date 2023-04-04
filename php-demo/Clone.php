<?php
class Car{
    public $name; 
    public $color;

    public function __construct($name, $color){
        $this->name= $name; 
        $this->color= $color;
    }

    public function getName(){
        echo "Name of the car is " . $this->name;
    }
}
$mercedes = new Car("Mercedes","green");
$mercedes2 = clone $mercedes; //Clone lại object $mercedes bao gồm các property và method của nó
$mercedes2->getName();