<?php
class Tee{
    public $name = "MLB";//có thể truy cập từ bất kì đâu trong chương trình
    protected $color = "green" ;//chỉ có thể truy cập từ bên trong hoặc lớp kế thừa
    private $size = "L";// chỉ có thể truy cập từ bên trong class hiện được định nghĩa

    const VERSION = 1;//  chỉ có thể được gán giá trị một lần và không thể thay đổi giá trị

    public function check(){
        echo self::VERSION.PHP_EOL;//dùng để tham chiếu đến class hiện tại (Tee)
    }
    
    public static function sendMessage(){
        echo "Hello World".PHP_EOL;
    }
}
class TeeChild extends Tee{
    public function echoProperty(){
        echo $this->color .PHP_EOL;
        // echo $this->size; Không thể truy cập
    }
}
Tee::sendMessage();//Phương thức static không cần phải khởi tạo object mà vẫn gọi được
$newTee = new Tee();
$newTee2 = new TeeChild();
echo $newTee->check();
echo $newTee2->echoProperty();
