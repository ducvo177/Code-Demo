<?php
interface Vehicle {// định nghĩa interface chứa nhiều abstract methods
    public function startEngine();
    public function stopEngine();
  }
  
  class MyCar implements Vehicle {//implements interface Vehicle và triển khai các abstract methods
    public function startEngine() {
      echo "Engine started." . PHP_EOL;
    }
  
    public function stopEngine() {
      echo "Engine stopped." . PHP_EOL;
    }
  }
  
  $myCar = new MyCar();
  $myCar->startEngine();
  $myCar->stopEngine();