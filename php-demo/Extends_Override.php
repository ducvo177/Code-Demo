<?php
class Pet {
    public function makeSound() {
        echo "Sound of the pet\n";
    }
}

class Cat extends Pet {//class Cat extends lại class Pet 
    public function makeSound() { // Override lại hàm được định nghĩa sẵn ở trong class Pet 
        echo "Meow!";
    }
}

$pet = new Pet();
$pet->makeSound(); //Kết quả trả về giống ở hàm trong class Pet

$cat = new Cat();
$cat->makeSound(); //Kết quả trả về Meow! sau khi được ghi đè