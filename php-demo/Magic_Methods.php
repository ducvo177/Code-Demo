<?php
class Arrays {
    private $array = [];
  
    public function __construct() {
        echo "A new Arrays has been created".PHP_EOL;
    }

    public function __destruct() {
        echo "An Arrays has been destroyed.".PHP_EOL;
    }

    public function __get($property) {
      if (isset($this->array[$property])) {
        return $this->array[$property].PHP_EOL;
      } else {
        return null;
      }
    }
  
    public function __set($property, $value) {
      $this->array[$property] = $value;
    }
  }
  
  $obj = new Arrays;//Gọi phương thức __construct() khi có một object mới được tạo
  $obj->number = 1; // Gọi phương thức __set()
  echo $obj->number; // Gọi phương thức __get()
  unset($obj); // Gọi phương thức __destruct() vì có một object được hủy 
