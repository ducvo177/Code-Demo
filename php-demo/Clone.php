<?php
class Car{
    public $name; 
    public $color;

    public function __construct($name, $color){
        $this->name= $name; 
        $this->color= $color;
    }

    public function getName(){
        echo "Name of the car is " . $this->name.PHP_EOL;
    }
}

class Vehicle{
    private $car;
    public function __construct(Car $car) { //  inject đối tượng Car vào khi khởi tạo Vehicle giúp tăng tính linh hoạt, dễ bảo trì hơn
        $this->car = $car;
    }

    public function logName() {
        $this->car->getName();// Tái sử dụng các hàm bên trong của class Car
    }
}
$mercedes = new Car("Mercedes","green");
$vehicle = new Vehicle($mercedes);// Dễ dàng thay đổi một Car khác cần inject vào Vehicle
$vehicle->logName();

$mercedes2 = clone $mercedes; //Clone lại object $mercedes bao gồm các property và method của nó
$mercedes2->getName();