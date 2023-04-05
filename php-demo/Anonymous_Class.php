<?php 
$person = new class { //anonymous class là class không tên, khai báo và khởi tạo trực tiếp 
    private $name = 'John';

    public function greet() {
        echo 'Hello, my name is ' . $this->name;
    }
};

$person->greet();