<?php
class Car{
    public $name;
    public $color;

    public function __construct($name, $color){
        $this->name= $name;
        $this->color= $color;
    }

    public function introduce() {
    echo "This " . $this->name . " car has " . $this->color . " color.";
  }
}
$mercedes = new Car("Mercedes","green");
$mercedes->introduce(); 