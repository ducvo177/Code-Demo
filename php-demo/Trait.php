<?php 
trait Run { //trait cho phép tái sử dụng code giữa các class không liên quan nhau hoặc không có quan hệ kế thừa
    public function run($name) {
        echo  $name. " is running";
    }
}

class Human{
    use Run; //sử dụng use để sử dụng lại các method hay property được định nghĩa trong trait

    public function doing() {
        $this->run('John');
    }
}

$user = new Human();
$user->doing(); 