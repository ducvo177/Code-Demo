<?php
class Car{
    public $name; // Ví dụ property name được định nghĩa để đại diện cho trạng thái tên của class 
    public $color;

    public function __construct($name, $color){
        $this->name= $name; 
        $this->color= $color;
    }

    public function introduce() { //Ví dụ method introduce được định nghĩa để đại diện cho một hành động mà class có thể thực hiện 
    echo "This " . $this->name . " car has " . $this->color . " color.\n";
    }

    public function getName(){
        echo "Name of the car is " . $this->name;// $this là một biến đặc biệt được sử dụng để truy cập vào property và method của class hiện tại(Car)
    }
}
$mercedes = new Car("Mercedes","green");
$mercedes->introduce(); 
$mercedes->getName();