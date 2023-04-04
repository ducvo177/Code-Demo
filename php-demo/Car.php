<?php
class Car{
    public $name; // Ví dụ property name được định nghĩa để đại diện cho trạng thái tên của class 
    public $color;

    public function __construct($name, $color){
        $this->name= $name;
        $this->color= $color;
    }

    public function introduce() { //Ví dụ method introduce được định nghĩa để đại diện cho một hành động mà class có thể thực hiện 
    echo "This " . $this->name . " car has " . $this->color . " color.";
  }
}
$mercedes = new Car("Mercedes","green");
$mercedes->introduce(); 