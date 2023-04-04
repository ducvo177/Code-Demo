<?php
abstract class Pet {
    protected $name;
    protected $color;
  
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
  
    abstract public function makeSound();//abstract methods chỉ có phần khai báo
  }
  
  class Cat extends Pet {
    public function makeSound() {// ở các class con kế thừa cần phải bổ sung cho abstract methods trong class cha, nếu không sẽ báo lỗi
      echo "Meow!" . PHP_EOL;
    }
  }
  
  class Dog extends Pet {
    public function makeSound() {
      echo "Woof!" . PHP_EOL;
    }
  }
  
  $cat = new Cat("Tom", "blue");
  $dog = new Dog("Buck", "brown");
  
  echo $cat->makeSound();
  echo $dog->makeSound(); 